<?php

namespace App\Controller;

use App\Form\ContactFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;



class InscriptionController extends AbstractController
{

    #[Route('/inscription', name: 'inscription')]

    public function showForm(Request $request): Response
    {
        $form = $this->createForm(ContactFormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $contactFormData = $form->getData();
            return $this->redirectToRoute('principale');
        }

        return $this->render('inscription/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}