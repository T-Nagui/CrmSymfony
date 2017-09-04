<?php
/**
 * Created by PhpStorm.
 * User: nagui
 * Date: 28/08/17
 * Time: 12:47
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProspectFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
           ->add('name')
           ->add('lastName')
           ->add('address')
           ->add('speciality')
           ->add('phone');
    }
    public function configureOptions(OptionsResolver $resolver)
    {
$resolver->setDefaults([
    'data_class'=>'AppBundle\Entity\Pros\Prospect'
]);
    }
}