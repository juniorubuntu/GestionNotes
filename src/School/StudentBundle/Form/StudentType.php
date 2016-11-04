<?php

namespace School\StudentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StudentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('matricule',       'text')
            ->add('nom',      'text')
            ->add('dateNaissance',     'date', [
                        'widget' => 'single_text',
                        'format' => 'dd-MM-yyyy',
                        'attr' => [
                            'class' => 'form-control input-inline datepicker',
                            'data-provide' => 'datepicker',
                            'data-date-format' => 'dd-mm-yyyy'
                        ]
                    ])
            ->add('lieuNaissance',    'text')
            ->add('nomPere',    'text')
            ->add('nomMere',    'text')
            ->add('adressePere',    'text')
            ->add('adresseMere',    'text')
            ->add('personneAcontacter',    'text')
            ->add('dernierEtablissementFreq',    'text')
            ->add('photo',    new ImageType())
            ->add('status',  'checkbox', array('required' => false))
            ->add('save',       'submit', array('label' => 'Enregistrer','attr' => array('class' => 'btn btn-primary col-md-offset-5 col-sm-offset-5 col-xs-offset-5 col-md-2 col-sm-5 col-xs-5')));


        $builder->addEventListener(FormEvents::PRE_SET_DATA,
            function(FormEvent $event){
                $student = $event->getData();

                if ($student === null) {
                    return;
                }
            });
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'School\StudentBundle\Entity\Student'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'school_studentbundle_student';
    }
}
