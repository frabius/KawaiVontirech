<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {

    return $this->render('base.html.twig');
  
    }
}