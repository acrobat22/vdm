<?php

namespace Vdm\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VdmUserBundle:Default:index.html.twig');
    }
}
