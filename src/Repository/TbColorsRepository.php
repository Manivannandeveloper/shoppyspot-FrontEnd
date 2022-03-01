<?php

namespace App\Repository;

use App\Entity\TbColors;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbColors|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbColors|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbColors[]    findAll()
 * @method TbColors[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbColorsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbColors::class);
    }

    // /**
    //  * @return TbColors[] Returns an array of TbColors objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TbColors
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
