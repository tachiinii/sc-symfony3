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
  public function findAllPublishedOrderedByRecentlyActive() {

    /**
     * @return Genus[]
     */
    return $this->createQueryBuilder('genus')
      ->andWhere('genus.isPublished = :isPublished')
      ->setParameter('isPublished', true)
      ->leftJoin('genus.notes', 'genus_note')
      ->orderBy('genus_note.createdAt', 'DESC')
      ->getQuery()
      ->execute();

  }
}