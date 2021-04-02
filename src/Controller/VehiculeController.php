<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VehiculeController extends AbstractController
{
    /**
     * @Route("/vehicule", name="vehicule")
     */
    public function index(): Response
    {
        return $this->render('vehicule/vehicule.html.twig', [
            'controller_name' => 'VehiculeController',
        ]);
    }
}
