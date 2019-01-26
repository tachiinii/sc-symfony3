<?php
/**
 * Created by PhpStorm.
 * User: wilsonc
 * Date: 1/22/19
 * Time: 10:26 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GenusNoteRepository")
 * @ORM\Table(name="genus_note")
 */
class GenusNote
{
  /**
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   * @ORM\Column(type="integer")
   */
  private $id;

  /**
   * @ORM\Column(type="string")
   */
  private $username;

  /**
   * @ORM\Column(type="string")
   */
  private $userAvatarFile;

  /**
   * @ORM\Column(type="text")
   */
  private $note;

  /**
   * @ORM\Column(type="datetime")
   */
  private $createdAt;

  /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Genus", inversedBy="notes")
   * @ORM\JoinColumn(nullable=false)
   */
  private $genus;

  /**
   * @return mixed
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @return mixed
   */
  public function getUsername()
  {
    return $this->username;
  }

  /**
   * @param mixed $username
   */
  public function setUsername($username)
  {
    $this->username = $username;
  }

  /**
   * @return mixed
   */
  public function getUserAvatarFile()
  {
    return $this->userAvatarFile;
  }

  /**
   * @param mixed $userAvatarFile
   */
  public function setUserAvatarFile($userAvatarFile)
  {
    $this->userAvatarFile = $userAvatarFile;
  }

  /**
   * @return mixed
   */
  public function getNote()
  {
    return $this->note;
  }

  /**
   * @param mixed $note
   */
  public function setNote($note)
  {
    $this->note = $note;
  }

  /**
   * @return mixed
   */
  public function getCreatedAt()
  {
    return $this->createdAt;
  }

  /**
   * @param mixed $createdAt
   */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }

  /**
   * @return mixed
   */
  public function getGenus()
  {
    return $this->genus;
  }

  /**
   * @param mixed $genus
   */
  public function setGenus(Genus $genus)
  {
    $this->genus = $genus;
  }


}