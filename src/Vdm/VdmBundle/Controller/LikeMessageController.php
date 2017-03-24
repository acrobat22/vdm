<?php

namespace Vdm\VdmBundle\Controller;

use Vdm\VdmBundle\Entity\LikeMessage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Likemessage controller.
 *
 */
class LikeMessageController extends Controller
{
    /**
     * Lists all likeMessage entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $likeMessages = $em->getRepository('VdmVdmBundle:LikeMessage')->findAll();

        return $this->render('likemessage/index.html.twig', array(
            'likeMessages' => $likeMessages,
        ));
    }

    /**
     * Finds and displays a likeMessage entity.
     *
     */
    public function showAction(LikeMessage $likeMessage)
    {

        return $this->render('likemessage/show.html.twig', array(
            'likeMessage' => $likeMessage,
        ));
    }
}
