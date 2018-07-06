<?php

namespace AppBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType ;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Sonata\CoreBundle\Form\Type\DateTimePickerType;



class TimesheetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type','choice', array(
                'choices'=> array ('Congé'=>'Congé' , 'Maladie'=>'Maladie' ,'Férié'=>'Férié'),
                'expanded' => true,
                'multiple' =>  false,
                'label' => 'Type :'
            ))
            ->add('sheeets', 'entity', array(
                'class' => 'AppBundle\Entity\Projet',
                'property' => 'nom',
                'expanded' => false,
                'multiple' => false,
                'label'    => 'Porjet :',
            ))
            ->add('startDatetime',DateTimePickerType::class, array (
                'format'=> 'dd/MM/yyyy ',
                'dp_side_by_side'       => true,
                'dp_use_current'        => true,
                'dp_use_seconds'        => false,
               // 'show_filter' => true,
                'widget'=>'single_text',
                'label' => 'Date de début :',
                'html5' => false,
            ))
          ->add('endDatetime',DateTimePickerType::class, array (
                        'format'=> 'dd/MM/yyyy ',
                        'dp_side_by_side'       => true,
                        'dp_use_current'        => true,
                        'dp_use_seconds'        => false,
                       // 'show_filter' => true,
                        'widget'=>'single_text',
                        'label' => 'Date de début :',
                        'html5' => false,
                    ));


    }/**
 * {@inheritdoc}
 */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\TimeSheet'
        ));
    }
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_timesheet';
    }

}
