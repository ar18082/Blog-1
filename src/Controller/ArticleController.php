<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use DateTime;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends AbstractController
{
    #[Route('/article', name: 'app_article')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $repository = $entityManager->getRepository(Article::class);
        $articles = $repository->findAll();
        
        return $this->render('article/index.html.twig', [
            'tabArticles' => $articles,
        ]);
    }

     #[Route('/article/{id}', name: 'afficher_article')]
    public function afficher($id, EntityManagerInterface $entityManager)
    {
        $repository = $entityManager->getRepository(Article::class);

        $article = $repository->find($id);

        dd($article);
        return new Response(sprintf('Votre future page d\'affichage de l\'article "%s"!', $id
        ));
    }
    

     

    #[Route('/article/new/1', name:"newArticle")]
    public function new(EntityManagerInterface $entityManager):Response
    {
       $article = new Article();
        
        $article -> setTitre('Mon article');
        $article -> setDescription('
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magique
            Quisque leo purus, imperdiet at urna non, feugiat tempus lorem. 
            Phasellus tincidunt eget enim nec ornare. Maecenas euismod arcu nisl. Duis lacus nisi, fringilla id semper non, fermentum at nulla. 

        ');

        $article ->setDate(new DateTime());


        
        $entityManager ->persist($article);
        $entityManager-> flush();

        return $this->render('article/new.html.twig', [
            'article' => $article,
        ]);

    }

    #[Route('/article/new/2', name:"newArticle2")]
    public function new2(EntityManagerInterface $entityManager):Response
    {
        $article1 = new Article();
        $article2 = new Article();

        $article1 -> setTitre('Mon article 2015');
        $article1 -> setDescription('
            Lorem Magique ipsum dolor sit amet, consectetur adipiscing elit. 
            Quisque leo purus, imperdiet at urna non, feugiat tempus lorem. 
            Phasellus tincidunt eget enim nec ornare. Maecenas euismod arcu nisl. Duis lacus nisi, fringilla id semper non, fermentum at nulla. 

        ');

        $article1 ->setDate(new DateTime("2015-01-01 00:00"));
        $entityManager ->persist($article1);

        $article2 -> setTitre('Mon article 2018');
        $article2 -> setDescription('
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Quisque leo purus, imperdiet at urna non, feugiat tempus lorem. 
            Phasellus tincidunt eget enim nec ornare. Maecenas euismod arcu nisl. Duis lacus nisi, fringilla id semper non, fermentum at nulla. 

        ');

        $article2 ->setDate(new DateTime("2018-01-01 00:00"));
        $entityManager ->persist($article2);
       
        
        $entityManager-> flush();

        return $this->render('article/new.html.twig', [
            'article' => $article1,
        ]);

    }

    #[Route("/article/afficher/{id}", name:"afficherById")]
    public function afficherById(Article $article):Response 
    {
        return $this->render('article/detail_article.html.twig', [
            'article' => $article,
        ]);

    }
    
}



