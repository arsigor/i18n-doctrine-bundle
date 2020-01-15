<?php

namespace ArsIgor\I18nDoctrineBundle\Doctrine\ORM\Filter;

use Doctrine\ORM\Mapping\ClassMetaData,
    Doctrine\ORM\Query\Filter\SQLFilter;

/**
 *
 * @author Igor Arsenych
 */
class ManyLocalesFilter extends SQLFilter
{
    /**
     *
     * @param \Doctrine\ORM\Mapping\ClassMetaData $targetEntity
     * @param type $targetTableAlias
     * @return string
     */
    public function addFilterConstraint(ClassMetaData $targetEntity, $targetTableAlias)
    {
        // Check if the entity implements the right interface
        if (!$targetEntity->reflClass->implementsInterface('\ArsIgor\I18nDoctrineBundle\Doctrine\Interfaces\ManyLocalesInterface')) {
            return "";
        }

        return $targetTableAlias .'.locales LIKE %'. $this->getParameter('locale') .'%';
    }

}