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
        return $this->render('::profile.html.twig');
    }

    /**
     * @Route("/cal", name="calendar")
     */

    public function calAction()
    {
        return $this->render('::calendar.html.twig');
    }

}
