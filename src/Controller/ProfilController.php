<?php

namespace App\Controller;

use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil-{id}", name="profile")
     */
    public function index(UserRepository $userRepository, $id): Response
    {
        $user = $userRepository->find($id);
        return $this->render('home/profil.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/profil/update-{id}", name="profil_update")
     */
    public function updateUser(UserRepository $userRepository, $id, Request $request)
    {
        $user = $userRepository->find($id);
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($user);
            $manager->flush();
            $this->addFlash('success', 'Votre profil a bien été modifié');
            return $this->redirectToRoute('home');
        }
        return $this->render('home/profileForm.html.twig', [
            'profileForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/profil/delete-{id}", name="profil_delete")
     */
    public function deleteUser(UserRepository $userRepository, $id)
    {
        $user = $userRepository->find($id);
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($user);
        $manager->flush();
        $this->addFlash('success', 'Votre compte a bien été supprimé');
        return $this->redirectToRoute('home');
    }
}
