<?php

namespace App\Repository;

use App\Entity\Rappels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Rappels|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rappels|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rappels[]    findAll()
 * @method Rappels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RappelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rappels::class);
    }

    // /**
    //  * @return Rappels[] Returns an array of Rappels objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Rappels
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
