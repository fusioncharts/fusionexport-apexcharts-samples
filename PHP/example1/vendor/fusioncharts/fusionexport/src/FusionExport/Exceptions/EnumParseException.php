<?php

namespace FusionExport\Exceptions;

use FusionExport\Helpers;

class EnumParseException extends \Exception
{
    public function __construct($value, $dataset)
    {
        $this->message = $value . ' is not in supported set. Supported values are ' . Helpers::humanizeArray($dataset);
    }
}
