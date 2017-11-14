<?php
/**
 * Created by PhpStorm.
 * User: nagui
 * Date: 28/08/17
 * Time: 12:47
 */

namespace ProspectBundle\Form;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class ProspectFormType extends AbstractType
{
    protected $em;

    function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
           ->add('name')
           ->add('lastName')
           ->add('address')
           ->add('speciality')
           ->add('governorate')
           ->add('phone');
        // Add listeners
        $builder->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'onPreSubmit'));
    }
    function onPreSubmit(FormEvent $event) {
        $form = $event->getForm();
        $data = $event->getData();
        // Note that the data is not yet hydrated into the entity.
        $form->add('delegation');
//        $form->remove('save');

    }






    public function configureOptions(OptionsResolver $resolver)
    {
$resolver->setDefaults([
    'data_class'=>'ProspectBundle\Entity\Prospect'
]);
    }
}