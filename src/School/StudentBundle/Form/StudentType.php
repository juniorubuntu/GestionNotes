<?php

namespace School\StudentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StudentType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('matricule', 'text')
                ->add('nom', 'text')
                ->add('sexe', 'entity', array(
                    'class' => 'SchoolStudentBundle:Sexe',
                    'property' => 'nom',
                    'expanded' => false))
                ->add('dateNaissance', 'date', [
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',
                    'attr' => [
                        'class' => 'form-control input-inline datepicker',
                        'data-provide' => 'datepicker',
                        'data-date-format' => 'dd-mm-yyyy'
                    ]
                ])
                ->add('lieuNaissance', 'text')
                ->add('nomPere', 'text', array('required' => false))
                ->add('nomMere', 'text', array('required' => false))
                ->add('adressePere', 'text', array('required' => false))
                ->add('adresseMere', 'text', array('required' => false))
                ->add('personneAcontacter', 'text', array('required' => false))
                ->add('dernierEtablissementFreq', 'text', array('required' => false))
//                ->add('classe')
                ->add('classe','entity', array('class'=>'School\StudentBundle\Entity\Classe', 'property'=>'nom',
                'query_builder' => function (\Doctrine\ORM\EntityRepository $repository)
                {return $repository->createQueryBuilder('c')->where('c.classePere is NOT NULL');}, 'required'=>true))
                ->add('photo', new ImageType(), array('required' => false))
                ->add('save', 'submit');


        $builder->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event) {
            $student = $event->getData();

            if ($student === null) {
                return;
            }
        });
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'School\StudentBundle\Entity\Student'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'school_studentbundle_student';
    }

}
