<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/article', name: 'app_article')]
    public function index(): Response
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => ' Mes Articles',
        ]);
    }

    #[Route('/det_article', name:'afficher_article')]
    public function afficher():Response
    {
        return $this -> render('article/detail_article.html.twig', [
            'controller_name' => ' je suis détail article', 
            'votez'=> 'Utilisations de JavaScript pour les votes'
        ]);
    }

    #[Route('/det_article/{id}/{direction}', name:'vote')]
    public function commentVote($id, $direction)
  {
      if ($direction === 'up') {
          $currentVoteCount = rand(7, 100);
      } else {
          $currentVoteCount = rand(0, 5);
      }

      return $this->json(['votes' => $currentVoteCount]);
  }

}

