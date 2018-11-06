<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Entity\Joueur;

class ClassementController extends AbstractController
{
    /**
     * @Route("/classement", name="classement")
     */
    public function index()
    {
        return $this->render('page/classement.html.twig');
    }
   
    
}