<?php

namespace Conjecto\Bundle\DemoBundle\Form;

use Conjecto\Nemrod\Form\Extension\Core\Type\ResourceFormType;
use Conjecto\Nemrod\ResourceManager\Repository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AlumniProfileType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('skos:prefLabel', 'text', array(
            'label' => 'Given name'
        ));


        $builder->add('hbsko:degree', 'text', array(
            'label' => 'HBS Degree'
        ));

    }

    public function getName()
    {
        // TODO: Implement getName() method.
        return "alumni_profile";
    }
    public function getParent()
    {
        return 'resource_form';
    }
}