<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Timesheet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Timesheet controller.
 *
 * @Route("timesheet")
 */
class TimesheetController extends Controller
{
    /**
     * Lists all timesheet entities.
     *
     * @Route("/", name="timesheet_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $timesheets = $em->getRepository('AppBundle:Timesheet')->findAll();

        return $this->render('timesheet/index.html.twig', array(
            'timesheets' => $timesheets,
        ));
    }

    /**
     * Creates a new timesheet entity.
     *
     * @Route("/new", name="timesheet_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {

        $timeSheet = new Timesheet();
        $user = $this->getUser(); // user connecté
        $form = $this->createForm('AppBundle\Form\TimesheetType', $timeSheet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $projetform = $form['sheeets']->getData()->getNom();
            // on récupére le projet qu'on a saisie
            $repository = $this->getDoctrine()->getRepository('AppBundle:Projet');
            $query = $repository->createQueryBuilder('p')
                ->where('p.nom = :data')
                ->setParameter('data', $projetform)
                ->getQuery();
            $projet = $query->getSingleResult();
            $type = $form['type']->getData();
            if ($type == 'congé') {
                $timeSheet->setBgColor('blue');
            }
            if ($type == 'Maladie') {
                $timeSheet->setBgColor('green');
            }
            if ($type == 'Férié') {
                $timeSheet->setBgColor('yellow');
            }
            $timeSheet->setSheets($user);
            $timeSheet->setSheeets($projet);
            $em->persist($timeSheet);
            $em->flush();
            return $this->redirectToRoute('calendar');
        }

        return $this->render('timesheet/new.html.twig', array(
            'timesheet' => $timeSheet,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a timesheet entity.
     *
     * @Route("/{id}", name="timesheet_show")
     * @Method("GET")
     */
    public function showAction(Timesheet $timesheet)
    {
        $deleteForm = $this->createDeleteForm($timesheet);

        return $this->render('timesheet/show.html.twig', array(
            'timesheet' => $timesheet,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing timesheet entity.
     *
     * @Route("/{id}/edit", name="timesheet_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Timesheet $timesheet)
    {
        $deleteForm = $this->createDeleteForm($timesheet);
        $editForm = $this->createForm('AppBundle\Form\TimesheetType', $timesheet);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('timesheet_edit', array('id' => $timesheet->getId()));
        }

        return $this->render('timesheet/edit.html.twig', array(
            'timesheet' => $timesheet,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a timesheet entity.
     *
     * @Route("/{id}", name="timesheet_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Timesheet $timesheet)
    {
        $form = $this->createDeleteForm($timesheet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($timesheet);
            $em->flush();
        }

        return $this->redirectToRoute('timesheet_index');
    }

    /**
     * Creates a form to delete a timesheet entity.
     *
     * @param Timesheet $timesheet The timesheet entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Timesheet $timesheet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('timesheet_delete', array('id' => $timesheet->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
