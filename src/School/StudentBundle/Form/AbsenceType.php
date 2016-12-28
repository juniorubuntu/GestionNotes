<?php

namespace School\StudentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AbsenceType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nbreAbsence')
                ->add('student')
                ->add('sequence')
                ->add('anneeScolaire')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'School\StudentBundle\Entity\Absence'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'school_studentbundle_absence';
    }

}
