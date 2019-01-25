<?php
/**
 * Created by PhpStorm.
 * User: wilsonc
 * Date: 1/21/19
 * Time: 10:29 PM
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Genus;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;

class LoadFixtures extends Fixture
{
  public function load(ObjectManager $manager)
  {
    Fixtures::load(
      __DIR__.'/Fixtures.yml',
      $manager,
      [
        'providers' => [$this],
      ]);
  }

  public function genus()
  {
    $genera = [
      'Octopus',
      'Balaena',
      'Orcinus',
      'Hippocampus',
      'Asterias',
      'Amphiprion',
      'Carcharodon',
      'Aurelia',
      'Cucumaria',
      'Balistoides',
      'Paralithodes',
      'Chelonia',
      'Trichechus',
      'Eumetopias'
    ];

    $key = array_rand($genera);

    return $genera[$key];
  }
}