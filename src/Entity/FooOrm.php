<?php

namespace App\Entity;

use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Mapping\Builder\ClassMetadataBuilder;

/**
 * Class FooOrm
 * @package App\Entity
 */
class FooOrm
{
    private $id;
    private $bar;

    /*public static function loadMetadata(ClassMetadata $metadata)
    {
        $builder = new ClassMetadataBuilder($metadata);
        $builder->createField('id', 'integer')->makePrimaryKey()->generatedValue()->build();
        $builder->addField('bar', 'string');
    }*/
}
