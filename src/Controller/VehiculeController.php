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
     * @Route("/vehicule-{id}", name="vehicule")
     */
    public function vehicule(VehiculeRepository $vehiculeRepository, $id)
    {
        $vehicule = $vehiculeRepository->find($id);
        // $commentaires = $vehicule->getCommentaires();
        return $this->render('home/vehicule.html.twig', [
            'vehicule' => $vehicule,
            // 'commentaires' => $commentaires
        ]);
    }

    /**
    * @Route("/vehicules", name="vehicules")
    */
   public function vehicules(VehiculeRepository $vehiculeRepository)
   {
       $vehicules = $vehiculeRepository->findAll();
       return $this->render('home/vehicules.html.twig', [
           'vehicules' => $vehicules,
       ]);
   }

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

     /**
     * @Route("/admin/vehicules/update-{id}", name="admin_vehicules_update")
     */
    public function updateVehicule(VehiculeRepository $vehiculeRepository, $id, Request $request)
    {
        $vehicule = $vehiculeRepository->find($id); // récupère le vehicule grâce à l'id
        $form = $this->createForm(VehiculeType::class, $vehicule); // crée le formualire prérempli avec le vehicule récupéré jsute avant
        $form->handleRequest($request); // gestionnaire de requêtes HTTP
        if ($form->isSubmitted() && $form->isValid()) { // vérifie si le formulaire a été soumis et s'il est valide
            $infoImg1 = $form['img1']->getData();
            $nomOldImg1 = $vehicule->getImg1(); // récupère le nom de l'ancienne image 1
            if ($infoImg1 !== null) {
                $cheminOldImg1 = $this->getParameter('dossier_photos_vehicules') . '/' . $nomOldImg1; // reconstitue le chemin de l'ancienne image 1
                if (file_exists($cheminOldImg1)) { // vérifie si le fichier de l'image 1 existe
                    unlink($cheminOldImg1); // supprimer le fichier image 1
                }
                $extensionImg1 = $infoImg1->guessExtension(); // récupère l'extension de l'image 1
                $nomImg1 = time() . '-1.' . $extensionImg1; // crée un nom unique pour l'image 1
                $infoImg1->move($this->getParameter('dossier_photos_vehicules'), $nomImg1); // déplace l'image dans le dossier adéquat
                $vehicule->setImg1($nomImg1); // définit le nom de l'image à mettre en bdd
            } else {
                $vehicule->setImg1($nomOldImg1); // re-définit le nom de l'image à mettre en bdd
            }
            $infoImg2 = $form['img2']->getData();
            $nomOldImg2 = $vehicule->getImg2();
            if ($infoImg2 !== null) { // si on met une img2 dans le formulaire
                if ($nomOldImg2 !== null) { // si on a déjà une img2 en bdd
                    $cheminOldImg2 = $this->getParameter('dossier_photos_vehicules') . '/' . $nomOldImg2;
                    if (file_exists($cheminOldImg2)) {
                        unlink($cheminOldImg2);
                    }
                }
                $extensionImg2 = $infoImg2->guessExtension();
                $nomImg2 = time() . '-2.' . $extensionImg2;
                $infoImg2->move($this->getParameter('dossier_photos_vehicules'), $nomImg2);
                $vehicule->setImg2($nomImg2);
            } else { // si on ne met pas une img2 dans le formulaire, on garde l'ancien nom d'img2
                $vehicule->setImg2($nomOldImg2);
            }
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($vehicule);
            $manager->flush();
            $this->addFlash('success', 'Le vehicule a bien été modifié');
            return $this->redirectToRoute('admin_vehicules');
        }
        return $this->render('admin/vehiculeForm.html.twig', [
            'vehiculeForm' => $form->createView()
        ]);
    }

     /**
     * @Route("/admin/vehicules/delete-{id}", name="admin_vehicules_delete")
     */
    public function deleteVehicule(VehiculeRepository $vehiculeRepository, $id)
    {
        $vehicule = $vehiculeRepository->find($id); // récupère le vehicule grâce à l'id
        $nomImg1 = $vehicule->getImg1(); // récupère le nom de l'image 1
        if ($nomImg1 !== null) { // vérifie qu'il y a bien un nom d'image
            $cheminImg1 = $this->getParameter('dossier_photos_vehicules') . '/' . $nomImg1; // reconstitue le chemin de l'image 1
            if (file_exists($cheminImg1)) { // vérifie si le fichier existe
                unlink($cheminImg1); // supprime le fichier
            }
        }
        $nomImg2 = $vehicule->getImg2(); // récupère le nom de l'image 2
        if ($nomImg2 !== null) { // vérifie qu'il y a bien un nom d'image
            $cheminImg2 = $this->getParameter('dossier_photos_vehicules') . '/' . $nomImg2; // reconstitue le chemin de l'image 2
            if (file_exists($cheminImg2)) { // vérifie si le fichier existe
                unlink($cheminImg2); // supprime le fichier
            }
        }
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($vehicule); // précise qu'on va vouloir supprimer le vehicule
        $manager->flush(); // exécute la suppression
        $this->addFlash('success', 'Le vehicule a bien été supprimé');
        return $this->redirectToRoute('admin_vehicules');
    }

    /**
     * @Route("/vehicules/create", name="admin_vehicules_create")
     */
    public function creerVehicule(Request $request)
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

