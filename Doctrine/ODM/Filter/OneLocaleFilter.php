<?php

namespace arsigor\I18nDoctrineBundle\Doctrine\ODM\Filter;

use Doctrine\ODM\MongoDB\Mapping\ClassMetadata,
    Doctrine\ODM\MongoDB\Query\Filter\BsonFilter;

class OneLocaleFilter extends BsonFilter
{
    public function addFilterCriteria(ClassMetadata $targetMetadata)
    {

    }

}