<?php

namespace PH\ClientsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PHClientsBundle:Default:index.html.twig');
    }

    public function ajouter_clientAction()
    {
        return $this->render('PHClientsBundle:Default:ajouter_client.html.twig');
    }
}
