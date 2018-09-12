<?php

namespace AppBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Persistence\ManagerRegistry;
use fadosProduccions\fullCalendarBundle\Model\CalendarManagerEntity as baseCalendarManager;
use fadosProduccions\fullCalendarBundle\Controller\CalendarController as baseController ;

class CalendarController extends baseController
{
    private $manager;

    function loadAction(Request $request) {

        //Get start date
        $createdAt = $request->get('start');
        $endAt = $request->get('end');
        $dataFrom = new \DateTime($createdAt);
        $dataTo = new \DateTime($endAt);
        $user = $this->getUser();

        //Get entityManager
        $manager = $this->get('fados.calendar.service');
        $events = $manager->getEvents($dataFrom,$dataTo,$user);

        $status = empty($events) ? Response::HTTP_NO_CONTENT : Response::HTTP_OK;
        $jsonContent = $manager->serialize($events);

        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($jsonContent);
        $response->setStatusCode($status);
        return $response;
    }

    function changeAction(Request $request) {

        $id = $request->get('id');
        $newStartData = $request->get('newStartData');
        $newEndData = $request->get('newEndData');
        $this->get('fados.calendar.service')->changeDate($newStartData,$newEndData,$id);

        return new Response($id, 201);

    }

    /*
     * Change end date event
     *
     */
    function resizeAction(Request $request) {

        $id = $request->get('id');
        $newDate = $request->get('newDate');
        $this->get('fados.calendar.service')->resizeEvent($newDate,$id);

        return new Response($id, 201);

    }

}