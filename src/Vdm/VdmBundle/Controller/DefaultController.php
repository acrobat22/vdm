<?php

namespace Vdm\VdmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VdmVdmBundle:Default:index.html.twig');
    }
}
