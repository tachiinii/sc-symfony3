<?php
/**
 * Created by PhpStorm.
 * User: wilsonc
 * Date: 1/21/19
 * Time: 12:11 AM
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
  public function homepageAction() {

    return $this->render('main/homepage.html.twig');

  }
}