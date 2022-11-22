<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    #[Route('/comment/{id}/vote/{direction}', name: 'app_comment')]
    public function commentVote($id, $direction)
    {
        if($direction === 'up'){
            $currentVoteCount = rand(7,100);
        }else{
            $currentVoteCount = rand(0,5);
        }
        return $this->json(['votes'=>$currentVoteCount]); 
        
    }
}
