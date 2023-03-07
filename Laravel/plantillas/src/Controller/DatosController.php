<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DatosController extends AbstractController
{
    private $datos=array("lola" => array("apellido" => "Flores",
                                         "telefono" => "999999999"),
                         "pepillo" => array("apellido" => "Palotes",
                                         "telefono" => "666666666"));

    #[Route('/datos', name: 'app_datos')]
    public function index(): Response
    {
        return $this->render('datos/index.html.twig', [
            'datos' => $this->datos,
        ]);
    }

    #[Route('/datos/{dato}', name: 'datos_show')]
    public function show($dato): Response
    {
        return $this->render('datos/detalle.html.twig', [
            'dato' => $this->datos[$dato],
        ]);
    }
}