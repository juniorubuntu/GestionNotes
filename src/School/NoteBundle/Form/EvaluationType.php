<?php

namespace School\NoteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvaluationType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('note')
                ->add('annee')
                ->add('student')
                ->add('matiere')
                ->add('sequence')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'School\NoteBundle\Entity\Evaluation'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'school_notebundle_evaluation';
    }

}
