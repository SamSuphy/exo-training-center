<?php

namespace F2000FR\TrainingCenterBundle\Form\Type;

use Symfony\Component\Form\Extension\Core\Type as FormType;
use Symfony\Component\Form\FormBuilderInterface;

class UserCreateType extends AbstractAdminUserType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        $builder
                ->add('password', FormType\PasswordType::class, array(
                    'attr' => array('placeholder' => 'Mot de passe'),
                    'label' => false,
                ))
        ;
    }

}
