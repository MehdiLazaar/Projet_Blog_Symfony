<?php

namespace App\Repository;

use App\Entity\Spain;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Spain>
 *
 * @method Spain|null find($id, $lockMode = null, $lockVersion = null)
 * @method Spain|null findOneBy(array $criteria, array $orderBy = null)
 * @method Spain[]    findAll()
 * @method Spain[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpainRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Spain::class);
    }

//    /**
//     * @return Spain[] Returns an array of Spain objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Spain
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
