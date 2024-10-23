<?php

namespace App\Repository;

use App\Entity\Germany;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Germany>
 *
 * @method Germany|null find($id, $lockMode = null, $lockVersion = null)
 * @method Germany|null findOneBy(array $criteria, array $orderBy = null)
 * @method Germany[]    findAll()
 * @method Germany[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GermanyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Germany::class);
    }

//    /**
//     * @return Germany[] Returns an array of Germany objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Germany
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
