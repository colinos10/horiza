<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CGUCGVController extends AbstractController
{
    /**
     * @Route("/c/g/u/c/g/v", name="c_g_u_c_g_v")
     */
    public function index(): Response
    {
        return $this->render('cgucgv/index.html.twig', [
            'controller_name' => 'CGUCGVController',
        ]);
    }
}
