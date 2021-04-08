<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PolitiqueController extends AbstractController
{
    /**
     * @Route("/politique", name="politique")
     */
    public function index(): Response
    {
        return $this->render('politique/index.html.twig', [
            'controller_name' => 'PolitiqueController',
        ]);
    }
}
