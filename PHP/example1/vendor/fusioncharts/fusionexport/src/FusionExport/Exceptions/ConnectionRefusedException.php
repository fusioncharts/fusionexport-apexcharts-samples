<?php

namespace FusionExport\Exceptions;

class ConnectionRefusedException extends \Exception
{
    public function __construct($serverHost, $serverPort)
    {
        $this->message = 'Unable to connect to FusionExport server. Make sure that your server is running on ' . $serverHost . ':' . $serverPort;
    }
}
