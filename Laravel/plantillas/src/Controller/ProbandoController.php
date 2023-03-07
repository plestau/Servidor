<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProbandoController extends AbstractController
{
    #[Route('/probando', name: 'app_probando')]
    public function index(): Response
    {
        return $this->render('probando/index.html.twig');
    }

    #[Route('/logout', name: 'app_logout')]
    public function logOut(): Response
    {
        return $this->render('probando/logout.html.twig');
    }

    #[Route('/carrito', name: 'app_carrito')]
    public function carrito(): Response
    {
        return $this->render('probando/carrito.html.twig');
    }

    #[Route('/detalles', name: 'app_detalles')]
    public function detalles(): Response
    {
        return $this->render('probando/detalles.html.twig');
    }
}
