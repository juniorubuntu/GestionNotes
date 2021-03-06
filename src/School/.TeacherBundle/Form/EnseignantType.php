<?php

namespace School\TeacherBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EnseignantType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('anciennete')
            ->add('matricule')
            ->add('grade')
            ->add('diplomes')
            ->add('telephone')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'School\TeacherBundle\Entity\Enseignant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'school_teacherbundle_enseignant';
    }
}
