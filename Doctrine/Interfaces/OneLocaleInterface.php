<?php

namespace ArsIgor\I18nDoctrineBundle\Doctrine\Interfaces;

/**
 *
 * @author Igor Arsenych
 */
interface OneLocaleInterface
{
    public function getLocale();

    public function setLocale($locale);
}