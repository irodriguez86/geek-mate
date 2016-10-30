<?php

namespace GM\APIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GMAPIBundle:Default:index.html.twig');
    }
}
