<?php

namespace arsigor\I18nDoctrineBundle\Doctrine\Interfaces;

/**
 *
 * @author David ALLIX
 */
interface OneLocaleInterface
{
    public function getLocale();

    public function setLocale($locale);
}