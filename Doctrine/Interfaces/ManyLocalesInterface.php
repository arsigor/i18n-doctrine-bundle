<?php

namespace arsigor\I18nDoctrineBundle\Doctrine\Interfaces;

/**
 *
 * @author Igor Arsenych
 */
interface ManyLocalesInterface
{
    public function getLocales();

    public function setLocales($locales);
}