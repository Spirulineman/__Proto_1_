<?php

namespace App\Repository;

use App\Entity\ListeStagiaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ListeStagiaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method ListeStagiaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method ListeStagiaire[]    findAll()
 * @method ListeStagiaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListeStagiaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ListeStagiaire::class);
    }

    // /**
    //  * @return ListeStagiaire[] Returns an array of ListeStagiaire objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ListeStagiaire
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
