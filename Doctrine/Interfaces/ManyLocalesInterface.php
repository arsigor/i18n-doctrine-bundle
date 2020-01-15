<?php

namespace arsigor\I18nDoctrineBundle\Doctrine\Interfaces;

/**
 *
 * @author David ALLIX
 */
interface ManyLocalesInterface
{
    public function getLocales();

    public function setLocales($locales);
}