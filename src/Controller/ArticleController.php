<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article")
     */
    public function index()
    {

    	 $articles = $this->getDoctrine()
        ->getRepository(Article::class)
        ->findall();
        


    return $this->render('article/index.html.twig', [
            'articles' => $articles,
        ]);
  
    }
}
