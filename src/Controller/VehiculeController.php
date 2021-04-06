<?php

namespace App\Controller;

use App\Entity\Vehicule;
use App\Form\VehiculeType;
use App\Repository\VehiculeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VehiculeController extends AbstractController
{
    /**
     * @Route("/admin/vehicules", name="admin_vehicules")
     */
    public function index(VehiculeRepository $vehiculeRepository): Response
    {   
        $vehicules = $vehiculeRepository->findAll();
        return $this->render('admin/vehicules.html.twig', [
            'vehicules' => $vehicules,
        ]);
    }

    /**
     * @Route("/admin/vehicules/create", name="admin_vehicules_create")
     */
    public function createVehicule(Request $request)
    {
        $vehicule = new Vehicule(); // création d'une nouvelle vehicule
        $form = $this->createForm(VehiculeType::class, $vehicule); // création du formulaire avec en paramètre la nouvelle vehicule
        $form->handleRequest($request); // gestionnaire de requêtes HTTP
        if ($form->isSubmitted()) { // vérifie si le formulaire à été envoyé
            if ($form->isValid()) { // vérifie si le formulaire est valide
                $infoImg1 = $form['img1']->getData(); // récupère les informations de l'image 1
                $extensionImg1 = $infoImg1->guessExtension(); // récupère l'extension de l'image 1
                $nomImg1 = time() . '-1.' . $extensionImg1; // crée un nom unique pour l'image 1
                $infoImg1->move($this->getParameter('dossier_photos_vehicules'), $nomImg1); // déplace l'image dans le dossier adéquat
                $vehicule->setImg1($nomImg1); // définit le nom de l'image à mettre en bdd
                $infoImg2 = $form['img2']->getData(); // récupère les informations de l'image 2
                if ($infoImg2 !== null) {
                    $extensionImg2 = $infoImg2->guessExtension(); // récupère l'extension de l'image 2
                    $nomImg2 = time() . '-2.' . $extensionImg2; // crée un nom unique pour l'image 2
                    $infoImg2->move($this->getParameter('dossier_photos_vehicules'), $nomImg2); // déplace l'image dans le dossier adéquat
                    $vehicule->setImg2($nomImg2); // définit le nom de l'image à mettre en bdd
                } else {
                    $vehicule->setImg2(null); // définit le nom de l'image à mettre en bdd si pas d'image 2
                }
                $manager = $this->getDoctrine()->getManager(); // récupère le manager de Doctrine
                $manager->persist($vehicule); // dit à Doctrine qu'on va vouloir sauvegarder en bdd
                $manager->flush(); // exécute la requête
                $this->addFlash('success', 'Le véhicule a bien été ajouté');
                return $this->redirectToRoute('admin_vehicules');
            } else {
                $this->addFlash('danger', 'Une erreur est survenue lors de l\'ajout du véhicule');
            }
        }
        return $this->render('admin/vehiculeForm.html.twig', [
            'vehiculeForm' => $form->createView() // création de la vue du formulaire et envoi à la vue (fichier)
        ]);
    }
}

