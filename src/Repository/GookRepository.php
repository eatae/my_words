<?php

namespace App\Repository;

use App\Entity\Gook;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Gook|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gook|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gook[]    findAll()
 * @method Gook[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gook::class);
    }

    // /**
    //  * @return Gook[] Returns an array of Gook objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Gook
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
