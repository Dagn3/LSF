<?php

namespace App\Form;

use App\Data\SearchData;
use App\Entity\Lait;
use App\Entity\Pate;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('q', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'Rechercher',
                    'class' => 'bg-gray-50 border border-stone-800 text-white font-bold rounded-r-lg focus:ring-stone-500 focus:border-stone-500 block w-full p-2.5 dark:bg-stone-700 dark:border-stone-600 dark:placeholder-stone-400 dark:text-white dark:focus:ring-stone-500 dark:focus:border-stone-500'
                ]
            ])
            ->add('pates', EntityType::class,[
                'label' => 'Pates',
                'required' => false,
                'class' => Pate::class,
                'expanded' => true,
                'multiple' => true,

            ])
            ->add('laits', EntityType::class,[
                'label' => 'Laits',
                'required' => false,
                'class' => Lait::class,
                'expanded' => true,
                'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
       $resolver->setDefaults([
           'data_class' => SearchData::class,
           'method' => 'GET',
           'csrf_protection' => false
       ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }

}