<?php
namespace App\Form;

use App\Entity\Pokemon;
use App\Form\DataTransformer\FileToBase64Transformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ShinyType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pokemon', EntityType::class, [
                'class' => 'App:Pokemon',
                'required' => true,
            ])
            ->add('catchDate', DateType::class, [
                'format' => 'yyyy-MM-dd',
                'widget' => 'single_text',
            ])
            ->add('description')
            ->add('youtube')
            ->add('tries')
            ->add('image', TextType::class);
        
        $builder->get('image')->addModelTransformer(new FileToBase64Transformer());
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['csrf_protection' => false]);
    }
}
