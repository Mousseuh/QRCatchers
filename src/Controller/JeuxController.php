<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Entity\Joueur;

class JeuxController extends AbstractController
{
    /**
     * @Route("/jeux", name="jeux")
     */
    public function index()
    {
        return $this->render('page/jeux.html.twig');
    }
   
    
}