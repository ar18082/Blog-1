<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TableauController extends AbstractController
{
    #[Route('/tableau', name: 'app_tableau')]
    public function index(): Response
    {
        $nbrTab =[];
        $stringTab = ['a','b','c','d'];

        for($i = 0; $i < 10; $i++){
            $nbrTab[$i]= rand(1,100); 
            /*$stringTab[$i]= IntlChar::chr($nbrTab[$i]);*/          
        };


        

        
        
        
        

        return $this->render('tableau/index.html.twig', [
            'controller_name' => 'TableauController',
            'nbrTab' => $nbrTab,
            'stringTab' => $stringTab

            
        ]);

    }
}
