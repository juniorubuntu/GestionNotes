<?php

namespace School\ConfigBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EcoleType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('ville')
                ->add('nomFrancais')
                ->add('nomAnglais')
                ->add('deviseFrancais')
                ->add('deviseAnglais')
                ->add('boitePostal')
                ->add('logo', new LogoType(), array('required' => false))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'School\ConfigBundle\Entity\Ecole'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'school_configbundle_ecole';
    }

}
