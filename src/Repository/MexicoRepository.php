<?php

namespace App\Repository;

use App\Entity\Mexico;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Mexico>
 *
 * @method Mexico|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mexico|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mexico[]    findAll()
 * @method Mexico[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MexicoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mexico::class);
    }

//    /**
//     * @return Mexico[] Returns an array of Mexico objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Mexico
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
