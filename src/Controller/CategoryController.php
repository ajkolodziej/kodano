<?php

namespace App\Controller;

use App\Entity\Category;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    private $manager;
    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @Route("/categories", name="category_index", methods="GET")
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
            'categories' => $this->manager
            ->getRepository(Category::class)
            ->findAll()
        ]);
    }

    /**
     * @Route("/categories/{id}", name="categories_show", methods="GET")
     *
     * @param integer $id
     * @return Response
     */
    public function show(int $id): Response
    {
        
        return $this->render('category/show.html.twig', [
            'controller_name' => 'CategoryController',
            'category' => $this->manager
            ->getRepository(Category::class)
            ->find($id)
        ]);
    }
}
