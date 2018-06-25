<?php
/**
 * Created by PhpStorm.
 * User: hamza
 * Date: 22/06/18
 * Time: 14:51
 */

namespace AppBundle\Admin;



use AppBundle\Entity\Client;
use Doctrine\ORM\Mapping\Entity;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class AdminProjet extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Nouveau Projet', ['class' => 'col-md-5'])
            ->add('nom', TextType::class)
            ->add('startDate', 'sonata_type_date_picker', array(
                'label' => 'Date de début',
                'dp_language' => 'fr',
                'format' => 'dd/MM/yyyy'
            ))
            ->add('endDate', 'sonata_type_date_picker', array(
                'label' => 'Date de fin',
                'dp_language' => 'fr',
                'format' => 'dd/MM/yyyy'
            ))
            ->end()
            ->with('Client', ['class' => 'col-md-6'])
            ->add('Client', 'entity', array(
                'class' => 'AppBundle\Entity\Client',
                'property' => 'nom',
                'expanded' => false,
                'multiple' => false,
                'label' => 'Client',
            ))
            ->end();
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nom', TextType::class)
            ->add('startDate', 'date', array(
                'pattern' => 'dd MMM y G',
                'locale' => 'fr',
                'label' => 'Date de début',
                'timezone' => 'Europe/Paris',
            ))
            ->add('endDate', 'date', array(
                'pattern' => 'dd MMM y G',
                'locale' => 'fr',
                'label' => 'Date de Fin',
                'timezone' => 'Europe/Paris',
            ))
            ->add('Client', EntityType::class, [
                'class' => Client::class,
                'choice_label' => 'Client',
            ]);
    }
}