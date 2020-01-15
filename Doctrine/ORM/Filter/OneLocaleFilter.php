<?php

namespace ArsIgor\I18nDoctrineBundle\Doctrine\ORM\Filter;

use Doctrine\ORM\Mapping\ClassMetaData,
    Doctrine\ORM\Query\Filter\SQLFilter;

/**
 *
 * @author Igor Arsenych
 */
class OneLocaleFilter extends SQLFilter
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
        if (!$targetEntity->reflClass->implementsInterface('\ArsIgor\I18nDoctrineBundle\Doctrine\Interfaces\OneLocaleInterface')) {
            return "";
        }

        return $targetTableAlias .'.locale = '. $this->getParameter('locale');
    }

}