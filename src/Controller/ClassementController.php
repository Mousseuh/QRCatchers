<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Utilisateur;

class ClassementController extends AbstractController
{
    /**
     * @Route("/classement", name="classement")
     */
    public function index()
    {
        return $this->render('page/classement.html.twig');
    }
        /**
     * @Route("/classement", name="classement")
     */
    public function classementJoueur()
    {
        $repository = $this->getDoctrine()->getRepository(Utilisateur::class);
        $ListeUtilisateur = $repository->ListeUtilisateur();
        return $this->render('page/classement.html.twig' ,['ListeUtilisateur' => $ListeUtilisateur]);
    }  
}