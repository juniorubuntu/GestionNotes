<?php

namespace School\StudentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClasseType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('abreviation')
            ->add('classePere')
            ->add('cycle',   'entity', array(
                'class' =>     'SchoolStudentBundle:Cycle',
                'property' => 'nom',
                'expanded' => false));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'School\StudentBundle\Entity\Classe'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'school_studentbundle_classe';
    }
}
