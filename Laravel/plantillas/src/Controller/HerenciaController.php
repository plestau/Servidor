<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HerenciaController extends AbstractController
{
    #[Route('/', name: 'app_herencia')]
    public function index(): Response
    {
        return $this->render('herencia/index.html.twig', [
            'controller_name' => 'HerenciaController',
        ]);
    }

    #[Route('/herencia/blog', name: 'app_blog')]
    public function blog(): Response
    {
        return $this->render('herencia/blog.html.twig', [
            'controller_name' => 'HerenciaController',
        ]);
    }

    #[Route('/herencia/quienes', name: 'app_quienes_somos')]
    public function quienes(): Response
    {
        return $this->render('herencia/quienes.html.twig', [
            'controller_name' => 'HerenciaController',
        ]);
    }
}
