<?php

namespace School\ConfigBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConstanteType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('paysFrancais')
            ->add('paysAnglais')
            ->add('ministereFrancais')
            ->add('ministereAnglais')
            ->add('deviseFrancais')
            ->add('deviseAnglais')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'School\ConfigBundle\Entity\Constante'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'school_configbundle_constante';
    }
}
