<?php

namespace App\Repository;

use App\Entity\FooOrm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FooOrm|null find($id, $lockMode = null, $lockVersion = null)
 * @method FooOrm|null findOneBy(array $criteria, array $orderBy = null)
 * @method FooOrm[]    findAll()
 * @method FooOrm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FooOrmRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FooOrm::class);
    }

    // /**
    //  * @return FooOrm[] Returns an array of FooOrm objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FooOrm
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
