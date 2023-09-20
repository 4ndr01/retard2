<?php

namespace App\Controller;

use App\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(LoginType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $contactFormData = $form->getData();
            return $this->redirectToRoute('principale');
        }



        return $this->render('login/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
