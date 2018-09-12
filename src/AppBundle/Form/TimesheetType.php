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


        $date = new \DateTime('yyyy-MM-dd HH:mm');
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



          /*  ->add('startDatetime',DateTimePickerType::class, array (
                'format'=> 'Y-m-d',
                'dp_side_by_side'       => true,
                'dp_use_current'        => true,
                'dp_use_seconds'        => false,
               // 'show_filter' => true,
                'widget'=>'single_text',
                'label' => 'Date de début :',
                'html5' => false,
            ))*/

                ->add('startDatetime', 'sonata_type_datetime_picker', [
                     'format' => 'yyyy-MM-dd HH:mm',
                     'dp_side_by_side'       => true,
                     'dp_use_current'        => true,
                      'dp_use_seconds'        => false
                      'dp_min_date'   =>  $date,
                   ])




            ->add('endDatetime', 'sonata_type_datetime_picker', [
                'format' => 'yyyy-MM-dd HH:mm',
                'dp_side_by_side'       => true,
                'dp_use_current'        => true,
                'dp_use_seconds'        => false,
            ]);




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
