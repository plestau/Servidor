<?php

namespace App\Form;

use App\Entity\Cita;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CitaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fecha')
            ->add('hora')
            ->add('doctor_id', null, array(
                'class' => 'App\Entity\Doctor',
                'choice_label' => 'nombre',
                'multiple' => false,
                'expanded' => false,
                'required' => true,
                'placeholder' => 'Selecciona un doctor'
            ))
            ->add('paciente_id', null, array(
                'class' => 'App\Entity\Paciente',
                'choice_label' => 'nombre',
                'multiple' => false,
                'expanded' => false,
                'required' => true,
                'placeholder' => 'Selecciona un paciente'
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cita::class,
        ]);
    }
}
