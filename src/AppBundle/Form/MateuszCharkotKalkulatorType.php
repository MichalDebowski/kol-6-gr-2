<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MateuszCharkotKalkulatorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('a')
            ->add('b')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
  public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MateuszCharkot\Tools\Kalkulator'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_MateuszCharkot_kalkulator';
    }
}