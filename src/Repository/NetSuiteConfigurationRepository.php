<?php

namespace App\Repository;

use App\Entity\NetSuiteConfiguration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method NetSuiteConfiguration|null find($id, $lockMode = null, $lockVersion = null)
 * @method NetSuiteConfiguration|null findOneBy(array $criteria, array $orderBy = null)
 * @method NetSuiteConfiguration[]    findAll()
 * @method NetSuiteConfiguration[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NetSuiteConfigurationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, NetSuiteConfiguration::class);
    }

    // /**
    //  * @return NetSuiteConfiguration[] Returns an array of NetSuiteConfiguration objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NetSuiteConfiguration
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
