<?php

namespace arsigor\I18nDoctrineBundle\Doctrine\Interfaces;

/**
 *
 * @author Igor Arsenych
 */
interface OneLocaleInterface
{
    public function getLocale();

    public function setLocale($locale);
}