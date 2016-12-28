<?php

namespace School\MatiereBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EstDispenseType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('matiere')
            ->add('enseignant')
            ->add('coefficient')
            ->add('annee')
            ->add('nombreHeuresAnnuel')
//            ->add('classe')
            ->add('classe','entity', array('class'=>'School\StudentBundle\Entity\Classe', 'property'=>'nom',
                'query_builder' => function (\Doctrine\ORM\EntityRepository $repository)
                {return $repository->createQueryBuilder('c')->where('c.classePere is NOT NULL');}))
            ->add('titulaire')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'School\MatiereBundle\Entity\EstDispense'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'school_matierebundle_estdispense';
    }
}
