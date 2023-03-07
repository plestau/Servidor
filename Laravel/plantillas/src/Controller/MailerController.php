<?php
// src/Controller/MailerController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;


class MailerController extends AbstractController
{
    #[Route('/mailer', name: 'app_mailer')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createFormBuilder()
            ->add('from', TextType::class)
            ->add('to', TextType::class)
            ->add('subject', TextType::class)
            ->add('text', TextType::class)
            ->add('enviar', SubmitType::class, array('label' => 'Enviar correo'))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $transport = Transport::fromDsn($_ENV['MAILER_DSN']);
            $mailer = new Mailer($transport);
            $email = (new Email())
                ->from($data['from'])
                ->to($data['to'])
                ->subject($data['subject'])
                ->text($data['text']);
            $mailer->send($email);
    
            return new Response(
                '<html><body>Correo enviado</body></html>'
            );  
        }
        return $this->render('saludo/index.html.twig', [
            'form' => $form
        ]);
    }
}