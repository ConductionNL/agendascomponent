<?php

namespace App\Repository;

use App\Entity\Alarm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Alarm|null find($id, $lockMode = null, $lockVersion = null)
 * @method Alarm|null findOneBy(array $criteria, array $orderBy = null)
 * @method Alarm[]    findAll()
 * @method Alarm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AlarmRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Alarm::class);
    }

    // /**
    //  * @return Alarm[] Returns an array of Alarm objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Alarm
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}