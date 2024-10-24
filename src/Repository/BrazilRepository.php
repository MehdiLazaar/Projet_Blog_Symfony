<?php

namespace App\Repository;

use App\Entity\Brazil;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Brazil>
 *
 * @method Brazil|null find($id, $lockMode = null, $lockVersion = null)
 * @method Brazil|null findOneBy(array $criteria, array $orderBy = null)
 * @method Brazil[]    findAll()
 * @method Brazil[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BrazilRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Brazil::class);
    }

//    /**
//     * @return Brazil[] Returns an array of Brazil objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Brazil
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
