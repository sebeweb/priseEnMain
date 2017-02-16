<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render("base.html.twig");
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function adminAction(Request $request) {
        return new Response('<html><body>Admin page!</body></html>');
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout() {
        return new Response('<html><body>logout page!</body></html>');
    }

    /**
     * @Route("/login_check", name="logincheck")
     */
    public function loginCheck() {
        return new Response('<html><body>logincheck page!</body></html>');
    }

    /**
     * @Route("/login", name="login")
     */
    public function login() {
//        return $this->render("default/login/login.html.twig");
    }

}
