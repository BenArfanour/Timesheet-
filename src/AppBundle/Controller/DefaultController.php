<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */

    public function indexAction()
    {


        $securityContext = $this->container->get('security.authorization_checker');
        if ($securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->render('::profile.html.twig');
        }
             return $this->redirectToRoute('fos_user_security_login');
    }

    /**
     * @Route("/cal", name="calendar")
     */

    public function calAction()
    {
        return $this->render('::calendar.html.twig');
    }

}
