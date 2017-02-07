<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Ce controller s'occupe de retouner les vues f=de l'application
 *
 * @author sebastien-javary
 */
class ViewController extends Controller {

    /**
     * la route correspont a l'URI passée dans la requete HTTP
     * ici l'URI = yellow
     * @Route("/yellow", name="y")
     * @return Response correspon a la couleur passé dans l'URI
     */
    public function getYellow(Request $r) {
        if ($r->getMethod() == "GET") {
            return $this->render("default/couleur/yellow.html.twig");
        } else {
            return new Response("Yellow");
        }
    }

    /**
     * la methode prend en parametre $r qui est de type Request
     * @Route("/red", name="r")
     * @return Response correspon a la couleur passé dans l'URI
     */
    public function getRed(Request $r) {
        //getMethode() retourne le type de la requete
        //si $r est de type GET
        if ($r->getMethod() == "GET") {
            //on retourne une page Web
            return $this->render("default/couleur/red.html.twig");
        } else {
            $response = new Response("Red");
            return $response;
        }
    }

    /**
     * @Route("/blue", name="b")
     * ()
     */
    public function getBlue(Request $r) {
        if ($r->getMethod() == "GET") {
            return $this->render("default/couleur/blue.html.twig");
        } else {
            return new Response("Blue");
        }
    }

    /**
     * @Route("/green", name="g")
     * 
     */
    public function getGreen(Request $r) {
        if ($r->getMethod() == "GET") {
            return $this->render("default/couleur/green.html.twig");
        } else {
            return new Response("Green");
        }
    }

}
