<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MentionsController extends AbstractController
{   
    /** 
    * @Route("/mentions", name="mentions")
    */
    public function index(): Response
    {
        return $this->render('home/mentions.html.twig', [
            'controller_name' => 'MentionsController',
        ]);
    }
}
