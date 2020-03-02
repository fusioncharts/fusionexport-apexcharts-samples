<?php

namespace FusionExport\Converters;

class ChartConfigConverter
{
    public static function convert($value)
    {
        if (gettype($value) !== 'object' && gettype($value) !== 'array') {
            return $value;
        }

        if (gettype($value) === 'object') {
            if (key($value) === 0) {
                $value = (array)$value;
            } else {
                $value = array($value);
            }
        }

        return json_encode($value);
    }
}
