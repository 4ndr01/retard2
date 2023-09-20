<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;



class InscriptionController extends AbstractController
{

    #[Route('/inscription', name: 'inscription')]

    public function showForm(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {

        $user = new User();
        $user->setNom('nom');
        $user->setPrenom('prenom');
        $user->setEmail('email');
        $user->setNaissance(new \DateTime());
        $user->setSignature('signature');
        $user->setVille('ville');
   



        $form = $this->createForm(ContactFormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setMdp(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );




            $entityManager->persist($user);
            $entityManager->flush();
            $contactFormData = $form->getData();
            return $this->redirectToRoute('principale');
        }

        return $this->render('inscription/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}