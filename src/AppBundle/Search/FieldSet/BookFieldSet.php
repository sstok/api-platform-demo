<?php

declare(strict_types=1);

namespace AppBundle\Search\FieldSet;

use Rollerworks\Component\Search\Extension\Core\Type\IntegerType;
use Rollerworks\Component\Search\Extension\Core\Type\TextType;
use Rollerworks\Component\Search\FieldSetBuilder;
use Rollerworks\Component\Search\FieldSetConfigurator;

final class BookFieldSet implements FieldSetConfigurator
{
    public function buildFieldSet(FieldSetBuilder $builder)
    {
        $builder->add('id', IntegerType::class);
        $builder->add('title', TextType::class);
    }
}
