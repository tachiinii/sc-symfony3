<?php
/**
 * Created by PhpStorm.
 * User: wilsonc
 * Date: 1/21/19
 * Time: 11:33 PM
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class GenusRepository extends EntityRepository
{
  public function findAllPublishedOrderedBySize() {

    /**
     * @return Genus[]
     */
    return $this->createQueryBuilder('genus')
      ->andWhere('genus.isPublished = :isPublished')
      ->setParameter('isPublished', true)
      ->orderBy('genus.speciesCount', 'DESC')
      ->getQuery()
      ->execute();

  }
}