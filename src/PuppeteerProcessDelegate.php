<?php

namespace Nesk\Puphpeteer;

use Nesk\Rialto\Traits\UsesBasicResourceAsDefault;
use Nesk\Rialto\Interfaces\ShouldHandleProcessDelegation;

class PuppeteerProcessDelegate implements ShouldHandleProcessDelegation
{
    use UsesBasicResourceAsDefault;

    /**
     * {@inheritDoc}
     */
    public function resourceFromOriginalClassName(string $className): ?string
    {
        $class = "Nesk\\Puphpeteer\\Resources\\$className";


        if (class_exists($class))
            return $class;

        $classWithoutCDP = "Nesk\\Puphpeteer\\Resources\\" . preg_replace("/^CDP/", "", $className);

         if (class_exists($classWithoutCDP))
            return $classWithoutCDP;

        return null;
    }
}
