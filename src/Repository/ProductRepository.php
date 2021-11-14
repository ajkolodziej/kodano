<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function findByWithCategory()
    {
        $em = $this->getEntityManager();
        $em->createQueryBuilder()
        ->select('product.id, product.name, product.price, category.code')
        ->from('product','p')
        ->join('category', 'category.id = product_category.category_id')
        ->getQuery()
        ->getResult();
        dump($em);die();
        // $query = $entityManager->createQuery(
        //     'SELECT  product.id, product.name, product.price, category.code
        //     FROM App\Entity\Product
        //     LEFT JOIN product_category ON product.id=product_category.product_id
        //     LEFT JOIN category ON category.id=product_category.category_id' 
        // );
            // $query = $em->getResu();
        // return $em->getResult();
        // $query = $this->createQueryBuilder('pc')
        // // ->select('*')
        // // ->from('product_category')
        // // ->leftJoin('category', 'id')
        // ->getQuery()
        // ->getResult();
        // // ->leftJoin('category', 'id');
        // // ->join()
        // return $query;
        // dump($this);die();

        

    }

    // /**
    //  * @return Product[] Returns an array of Product objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Product
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
