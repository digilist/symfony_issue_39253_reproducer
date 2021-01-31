<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;

final class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('addresses', CollectionType::class, [
            'entry_type' => AddressType::class,
            'prototype_data' => Address::forCompany(),
            'allow_add' => true,
        ]);
    }
}
