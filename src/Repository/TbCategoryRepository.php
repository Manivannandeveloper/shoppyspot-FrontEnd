<?php

namespace App\Repository;

use App\Entity\TbCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbCategory[]    findAll()
 * @method TbCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbCategory::class);
    }

    // /**
    //  * @return TbCategory[] Returns an array of TbCategory objects
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
    public function findOneBySomeField($value): ?TbCategory
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
