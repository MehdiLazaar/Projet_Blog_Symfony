<?php

namespace App\Repository;

use App\Entity\Usa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Usa>
 *
 * @method Usa|null find($id, $lockMode = null, $lockVersion = null)
 * @method Usa|null findOneBy(array $criteria, array $orderBy = null)
 * @method Usa[]    findAll()
 * @method Usa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Usa::class);
    }

//    /**
//     * @return Usa[] Returns an array of Usa objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Usa
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
