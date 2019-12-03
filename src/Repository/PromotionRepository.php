<?php

namespace App\Repository;

use App\Entity\Promotion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Promotion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Promotion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Promotion[]    findAll()
 * @method Promotion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PromotionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Promotion::class);
    }

    public function getAllOrderByDegreeAndYear()
    {
        $qb = $this->createQueryBuilder('p')
                    ->innerJoin('p.degree', 'd')
                    ->innerJoin('p.year', 'y')
                    ->addOrderBy('d.name', 'ASC')
                    ->addOrderBy('y.title', 'ASC')
        ;

        return $qb->getQuery()->getResult();
    }
}