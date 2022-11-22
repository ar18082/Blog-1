<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'Bienvenue dans Mon Blog',
        ]);
    }

    #[Route('/{id}/vote/{direction}', name: 'app_comment')]
    public function commentVote($id, $direction)
    {

        if($direction === 'up'){
            $currentVoteCount = rand(7,100);
        }else{
            $currentVoteCount = rand(0,5);
        }
        return $this->json(['votes'=>$currentVoteCount]); 
        
    }

    #[Route('/det_article', name:'detail_article')]
    public function detail_article():Response
    {
        
        return $this -> render('article/detail_article.html.twig', [
            'controller_name' => ' je suis détail article', 
            'votez'=> 'Utilisations de JavaScript pour les votes',
            
        ]);
    }
}
