<?php

namespace App\Repository;

use App\Entity\TbProducts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbProducts|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbProducts|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbProducts[]    findAll()
 * @method TbProducts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbProductsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbProducts::class);
    }

    // /**
    //  * @return TbProducts[] Returns an array of TbProducts objects
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
    public function findOneBySomeField($value): ?TbProducts
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
