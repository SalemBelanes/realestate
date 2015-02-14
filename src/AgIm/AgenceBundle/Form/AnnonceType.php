<?php

namespace AgIm\AgenceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use AgIm\AgenceBundle\Form\MediasType;

class AnnonceType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titre')
                ->add('description')
                ->add('date_creation')
                ->add('date_echeance')
                ->add('ville')
                ->add('rue')
                ->add('etat')
                ->add('code_postal')
                ->add('prix')
                ->add('telephone')
                ->add('type')
                ->add('nombre_piece')
                ->add('nombre_like')
                ->add('nombre_dislike')
                ->add('files', 'file', array(
                    "attr" => array(
                        "accept" => "image/*",
                        "multiple" => "multiple",
                    )
                ))


        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AgIm\AgenceBundle\Entity\Annonce'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'Form';
    }

}
