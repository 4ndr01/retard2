<?php

namespace App\Controller;

use App\Form\PrinciapleType;
use App\Form\PrincipaleFormType;
use App\PDF;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrincipaleController extends AbstractController
{
    #[Route('/principal', name: 'principale')]
    public function showForm(Request $request, PDF $PDF): Response
    {
        $form = $this->createForm(PrinciapleType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            $pdf = $PDF->generatePDF($formData);


            return new Response(
                $pdf->Output(),
                200,
                [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => 'inline; filename="file.pdf"',
                ]
            );


        }

        return $this->render('principale/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}