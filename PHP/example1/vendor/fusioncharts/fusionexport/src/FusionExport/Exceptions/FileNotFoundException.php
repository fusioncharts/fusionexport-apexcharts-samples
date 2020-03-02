<?php

namespace FusionExport\Exceptions;

class FileNotFoundException extends \Exception
{
    public function __construct($path)
    {
        $this->message = "The file '" . $path . "' which you have provided does not exist. Please provide a valid file.";
    }
}
