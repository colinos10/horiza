<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, \Swift_Mailer $mailer): Response
    {
        $form = $this->createForm(ContactType::class); // crée un formulaire de contact
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) { // si le formulaire a été soumis et est valide
            $contact = $form->getData(); // récupère les informations du formulaire
            if ($contact['fichier'] !== null) { // vérifie s'il y a un fichier dans le formulaire
                $extensionFichier = $contact['fichier']->guessExtension(); // récupère l'extension du fichier (format)
                $pieceJointe = (\Swift_Attachment::fromPath($contact['fichier']->getPathName())) // prépare la pièce-jointe (à partir d'un chemin)
                    ->setFileName('fichier.' . $extensionFichier) // définit le nom du fichier
                ;
            }
            $mail = (new \Swift_Message('Horiza - demande de contact - ' . $contact['objet'])) // prépare le mail (avec son titre)
                ->setFrom([$contact['email'] => $contact['email']]) // définit l'expéditeur
                ->setTo('amandine.bensekhri@gmail.com') // définit le destinaire
                ->setBody( // définit le corps du message
                    $this->renderView('contact/emailContact.html.twig', [ // passe les informations du formulaire au template de mail
                        'nom' => $contact['nom'],
                        'prenom' => $contact['prenom'],
                        'email' => $contact['email'],
                        'objet' => $contact['objet'],
                        'message' => $contact['message']
                    ]),
                    'text/html' // définit le format du message
                )
            ;
            if ($contact['fichier'] !== null) {
                $mail->attach($pieceJointe); // attache la pièce-jointe au corps du mail
            }
            $mailer->send($mail); // envoit le mail
            $this->addFlash('success', 'Votre message a bien été envoyé'); // message de succès
            return $this->redirectToRoute('contact'); // redirection
        }
        return $this->render('contact/contact.html.twig', [
            'contactForm' => $form->createView(),
        ]);
    }
}
