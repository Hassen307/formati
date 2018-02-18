<?php

namespace shopBundle\Repository;

/**
 * produitsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class produitsRepository extends \Doctrine\ORM\EntityRepository
{

	public function byCategorie($categorie)
    {
         $qb = $this->createQueryBuilder('u')
                    ->select('u')
                    ->where('u.categorie = :categorie')
                    ->orderBy('u.id')
                    ->setParameter('categorie', $categorie);
        return $qb->getQuery()->getResult();
    }

}