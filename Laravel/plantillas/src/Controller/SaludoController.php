<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SaludoController extends AbstractController
{
    #[Route('/saludo', name: 'app_saludo')]
    public function index(Request $request): Response
    {
        $form = $this->createFormBuilder()
            ->add('nombre', TextType::class)
            ->add('apellidos', TextType::class)
            ->add('edad', TextType::class)
            ->add('pais', ChoiceType::class, array(
                'choices' => array(
                    'España' => 'España',
                    'Francia' => 'Francia',
                    'Italia' => 'Italia',
                    'Alemania' => 'Alemania',
                    'Portugal' => 'Portugal',
                    'Reino Unido' => 'Reino Unido',
                    'Otro' => 'Otro'
                ),
                "expanded" => false,
                "multiple" => false
            ))
            ->add('profesion', ChoiceType::class, array(
                'choices' => array(
                    'Estudiante' => 'Estudiante',
                    'Desempleado' => 'Desempleado',
                    'Trabajador' => 'Trabajador',
                    'Otro' => 'Otro'
                ),
                "expanded" => true,
                "multiple" => false
            ))
            ->add('aficiones', ChoiceType::class, array(
                'choices' => array(
                    'Deporte' => 'Deporte',
                    'Cine' => 'Cine',
                    'Música' => 'Música',
                    'Literatura' => 'Literatura',
                    'Viajes' => 'Viajes',
                    'Otro' => 'Otro'
                ),
                "expanded" => true,
                "multiple" => true
            ))
            ->add('enviar', SubmitType::class, array('label' => 'Enviar datos'))
            ->add('enviar_correo', SubmitType::class, array('label' => 'Enviar correo'))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() && $form->get('enviar')->isClicked()) {
            $data = $form->getData();
            return $this->render('saludo/saludo.html.twig',[
                'datos' => $data,
            ]);
        }
        if($form->isSubmitted() && $form->isValid() && $form->get('enviar_correo')->isClicked()){
            $data = $form->getData();
            enviarCorreo($data);
        }
        return $this->render('saludo/index.html.twig', [
            'form' => $form
        ]);
    }
}
