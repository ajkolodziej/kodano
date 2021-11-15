<?php

namespace App\Controller;

use Exception;
use App\Entity\Product;
use App\Entity\Category;
use App\Service\SaveProduct;
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
    public function show(int $id, SaveProduct $saveProduct, Request $request): Response
    {
        $product = $this->manager->getRepository(Product::class)
                ->find($id);
        $product->getCategory();
        
        return $this->render("product/show.html.twig",[
            'product'=> $product
        ]);
    }

    /**
     * @Route("/api/products", name="products_create", methods="POST")
     *
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception 
     */
    public function create(Request $request, SaveProduct $saveProduct): JsonResponse
    {
        $object = $saveProduct->save($request);
        // $resp = json_decode($object->getContent(), true);
        return new JsonResponse($object['msg'], $object['code']);
    }
}
