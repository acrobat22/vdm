<?php

namespace Vdm\VdmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VdmVdmBundle:Default:index.html.twig');
    }

    public function likeAction(Message $message, Utilisateur $utilisateur)
    {

        $likeMessage->setMessage($message);
        $likeMessage->addUtilisateur($utilisateur);

        $em = $this->getDoctrine()->getManager();
        $em->persist();
        $em->flush();


//        return $this->render('likemessage/show.html.twig', array(
//            'likeMessage' => $likeMessage,
//        ));

        return $this->redirectToRoute('message_index');
    }
}
