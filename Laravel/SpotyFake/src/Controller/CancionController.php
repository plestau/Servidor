<?php

namespace App\Controller;

use App\Entity\Cancion;
use App\Form\Cancion1Type;
use App\Repository\CancionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/cancion')]
class CancionController extends AbstractController
{
    #[Route('/', name: 'app_cancion_index', methods: ['GET'])]
    public function index(CancionRepository $cancionRepository): Response
    {
        return $this->render('cancion/index.html.twig', [
            'cancions' => $cancionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_cancion_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CancionRepository $cancionRepository): Response
    {
        $cancion = new Cancion();
        $form = $this->createForm(Cancion1Type::class, $cancion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cancionRepository->save($cancion, true);

            return $this->redirectToRoute('app_cancion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cancion/new.html.twig', [
            'cancion' => $cancion,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_cancion_show', methods: ['GET'])]
    public function show(Cancion $cancion): Response
    {
        return $this->render('cancion/show.html.twig', [
            'cancion' => $cancion,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_cancion_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Cancion $cancion, CancionRepository $cancionRepository): Response
    {
        $form = $this->createForm(Cancion1Type::class, $cancion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cancionRepository->save($cancion, true);

            return $this->redirectToRoute('app_cancion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cancion/edit.html.twig', [
            'cancion' => $cancion,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_cancion_delete', methods: ['POST'])]
    public function delete(Request $request, Cancion $cancion, CancionRepository $cancionRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cancion->getId(), $request->request->get('_token'))) {
            $cancionRepository->remove($cancion, true);
        }

        return $this->redirectToRoute('app_cancion_index', [], Response::HTTP_SEE_OTHER);
    }
}
