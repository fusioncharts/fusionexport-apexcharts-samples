<?php

namespace FusionExport\Exceptions;

class InvalidConfigurationException extends \Exception
{
    public function __construct($configName)
    {
        $this->message = $configName . ' is not allowed';
    }
}
