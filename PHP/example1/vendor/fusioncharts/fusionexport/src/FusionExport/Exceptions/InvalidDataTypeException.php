<?php

namespace FusionExport\Exceptions;

use FusionExport\Helpers;

class InvalidDataTypeException extends \Exception
{
    public function __construct($name, $value, $supportedTypes)
    {
        $this->message = $name . ' of type ' . gettype($value) . ' is unsupported. Supported data types are ' . Helpers::humanizeArray($supportedTypes);
    }
}
