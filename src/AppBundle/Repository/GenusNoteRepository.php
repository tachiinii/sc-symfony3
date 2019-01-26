<?php
/**
 * Created by PhpStorm.
 * User: wilsonc
 * Date: 1/21/19
 * Time: 11:33 PM
 */

namespace AppBundle\Repository;


use AppBundle\Entity\Genus;
use AppBundle\Entity\GenusNote;
use Doctrine\ORM\EntityRepository;

class GenusNoteRepository extends EntityRepository
{
  public function findAllRecentNotesForGenus(Genus $genus) {

    /**
     * @return GenusNote[]
     */
    return $this->createQueryBuilder('genus_note')
      ->andWhere('genus_note.genus = :genus')
      ->setParameter('genus', $genus)
      ->andWhere('genus_note.createdAt > :recentDate')
      ->setParameter('recentDate', new \DateTime('-3 months'))
      ->getQuery()
      ->execute();

  }
}