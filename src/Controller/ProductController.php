<?php

namespace App\Controller;

use Exception;
use App\Entity\Product;
use App\Entity\Category;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Notifier\Recipient\EmailRecipientTrait;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    private $logger;
    private $notifier;
    private $manager;

    public function __construct(EntityManagerInterface $manager, LoggerInterface $addProductLogger, NotifierInterface $notifier)
    {
        $this->logger = $addProductLogger;
        $this->notifier = $notifier;
        $this->manager = $manager;
    }
    
    /**
     * @Route("/products", name="products_index", methods="GET")
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render("product/index.html.twig", [
            'controller_name' => 'ProductController',
            'products' => $this->manager
            ->getRepository(Product::class)
            ->findAll()
        ]);
    }

    /**
     * @Route("/products/{id}", name="products_show", methods="GET")
     *
     * @param integer $id
     * @return Response
     * 
     * @throws \Exception
     */
    public function show(int $id): Response
    {
        $product = $this->manager->getRepository(Product::class)
                ->find($id);
        $product->getCategory();
        return $this->render("product/show.html.twig",[
            'product'=> $product
        ]);
        // return new Response($product);
    }

    /**
     * @Route("/products", name="products_create", methods="POST")
     *
     * @param Request $request
     * @return Response
     * @throws \Exception 
     */
    public function create(Request $request): Response
    {
        $categories = $request->get('categories');
        $message = '';
        $categoryMsg = ' to the categories: ';
        
        if(is_array($categories)){
            $entityManager = $this->getDoctrine()->getManager();
            if(!$product = $entityManager
                ->getRepository(Product::class)
                ->findOneBy([
                    'name'=> $request->get('name'),
                    'price' => $request->get('price')
                    ])
                ){
                    $product = new Product();
                    $product->setName($request->get('name'));
                    $product->setPrice($request->get('price'));
                }
            
            for($i = 0; $i < 2; $i++){
                if(!$category = $entityManager->getRepository(Category::class)->findOneBy(['code'=>$categories[$i]])){
                    $category = new Category();
                    $category->setCode($categories[$i]);
                    $entityManager->persist($category);
                } 
                $product->addCategory($category);
                $categoryMsg .= "<br>".$category->getCode();
            }
            $entityManager->persist($product);
            try{
                if($entityManager->flush()){
                    // dump("test");
                }
                $message .= "Saved new product:<br>";
                $message .= "name: ".$product->getName()."<br>";
                $message .= "price: ".$product->getPrice()."<br>";
                $message .= "<br>";
                $message .= $categoryMsg;
                $notification = (new Notification('New Invoice', ['email']))
                    ->content('You got a new invoice for 15 EUR.');
                $this->notifier->send($notification);
                dump($notification);
            } 
            catch(Exception $e){
                $message = $e->getMessage();
            }
            $this->logger->info($message);
            // dump($logger);
        }
        return new Response(
            "<h1>".$message."</h1>"
        );
    }
}
