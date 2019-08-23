<?php
namespace App\Form;

use App\Entity\Category;
use App\Entity\Job;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\Email;


class JobType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', ChoiceType::class, [
                'choices' => array_combine(Job::TYPES, Job::TYPES),
                'expanded' => true,
                'constraints'=>[
                    new NotBlank()
                ]
            ])
            ->add('company', TextType::class, [
                'constraints'=>[
                    new NotBlank(),
                    new Length(['max'=>255])
                ]
            ])
            ->add('logo', TextType::class, [
                'data_class' => null,
                'required' => false,
                'constraints' => [
                    new Image()
                ]
            ])
            ->add('url', UrlType::class,[
                'required'=>false,
                'constraints'=>[
                    new Length(['max'=>255])
                ]
            ])
            ->add('position', TextType::class,[
                'required'=>false,
                'constraints'=>[
                    new Length(['max'=>255])
                ]
            ])
            ->add('location', TextType::class, [
                'required'=>false,
                'constraints'=>[
                    new Length(['max'=>255])
                ]
            ])
            ->add('description', TextareaType::class, [
                'required'=>false,
                'constraints'=>[
                    new NotBlank()
                ]
            ])
            ->add('howToApply', TextType::class, [
                'label' => 'How to apply?',
            ])
            ->add('public', ChoiceType::class, [
                'choices'  => [
                    'Yes' => true,
                    'No' => false,
                ],
                'label' => 'Public?',
            ])
            ->add('activated', ChoiceType::class, [
                'choices'  => [
                    'Yes' => true,
                    'No' => false,
                ],
                'constraints'=>[
                    new NotNull()
                ]
            ])
            ->add('email', EmailType::class,[
                'constraints'=>[
                    new NotBlank(),
                    new Email()
                ]
            ])
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name',
                'constraints'=>[
                    new NotBlank(),
                ]
            ]);
            /**->add('token', TextType::class, [
                'constraints'=>[
                    new NotBlank(),
                    new Length(['max'=>255])
                ]
            ]);
            */
    }
        public function configureOptions(OptionsResolver $resolver){
            $resolver->setDefaults([
                'data_class'=>Job::class
            ]);
        }

}