<?php
namespace App\Service;

use App\Entity\Product;
use App\Entity\Category;
use Psr\Log\LoggerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class SaveProduct
{
    private $addProductLogger;
    private $manager;

    public function __construct(EntityManagerInterface $manager,
     LoggerInterface $addProductLogger)
    {
        $this->manager = $manager;
        $this->addProductLogger = $addProductLogger;
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function save(Request $request)
    {
        $msg='';
        $data=json_decode($request->getContent(),true);
        
        if(is_array($data['category']) && count($data['category']) == 2){
            if(!$product = $this->manager
                ->getRepository(Product::class)
                ->findOneBy([ 'name'=> $data['name'], 'price' => $data['price'] ])
                ){
                    $product = new Product();
                    $product->setName($data['name']);
                    $product->setPrice($data['price']);
                    for($i = 0; $i < 2; $i++){
                        if($category = $this->manager
                        ->getRepository(Category::class)
                        ->findOneBy(['code'=>$data['category'][$i]])){
                            $product->addCategory($category);
                            
                        } else {
                            $msg = "category: " . $data['category'][$i] 
                            . " doesn't exists";
                            return [ 'msg' => $msg, 'code'=>400];
                        }
                    }
                    $this->manager->persist($product);
                    $this->manager->flush();
                    $msg = "add product: " . $product->getName();
                    $this->addProductLogger->info($msg);
                    return ['msg' => $msg, 'code'=>201];
                } else {
                    $msg = "Product ". $data['name']." already exists";
                    return ['msg' => $msg, 'code' => 400];
                }
        } else {
            $msg = "to many/few categories"; 
            return ['msg' => $msg, 'code' => 400];
        }
        
    }
}