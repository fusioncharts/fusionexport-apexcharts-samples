<?php

namespace FusionExport\Converters;

use FusionExport\Exceptions\EnumParseException;

class EnumConverter
{
    public static function convert($value, $dataset)
    {
        $lowerCasedDataset = array_map(function ($d) {
            return strtolower($d);
        }, $dataset);

        $lowerCasedValue = strtolower($value);

        if (!in_array($lowerCasedValue, $lowerCasedDataset)) {
            throw new EnumParseException($value, $dataset);
        }

        return $lowerCasedValue;
    }
}
