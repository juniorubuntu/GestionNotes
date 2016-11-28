<?php

namespace School\StudentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class InscriptionType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
              /*  ->add('student', 'entity', array(
                'class' => 'SchoolStudentBundle:Student',))*/
                ->add('classe')
                ->add('avance')
               /* ->add('dateDerniereAvance', 'date', [
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',
                    'attr' => [
                        'class' => 'form-control input-inline datepicker',
                        'data-provide' => 'datepicker',
                        'data-date-format' => 'dd-mm-yyyy'
                    ]
                ])*/
         //       ->add('annee')
                ->add('status')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'School\StudentBundle\Entity\Inscription'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'school_studentbundle_inscription';
    }

}
