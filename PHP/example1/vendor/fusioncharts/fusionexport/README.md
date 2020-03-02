# FusionExport PHP Client

PHP SDK for FusionExport. Enables exporting from PHP using FusionExport.

## Installation

To install this package, simply use composer:

```bash
composer require fusioncharts/fusionexport
```

## Usage

To use the SDK in your project:

```php
use FusionExport\ExportManager;
use FusionExport\ExportConfig;
```

## Getting Started

Start with a simple chart export. For exporting a single chart just pass the chart configuration as you would have passed it to the FusionCharts constructor.

```php
<?php

require __DIR__ . '/../vendor/autoload.php';

// Use the FusionExport components
use FusionExport\ExportManager;
use FusionExport\ExportConfig;

// Instantiate ExportManager
$exportManager = new ExportManager();

// Instantiate ExportConfig
$exportConfig = new ExportConfig();

$config = (object)[
    "type" => "column2d",
    "renderAt" => "chart-container",
    "width" => "550",
    "height" => "350",
    "id" => "myChartId",
    "dataFormat" => "json",
    "dataSource" => (object)[
        "chart" => (object)[
            "caption" => "Number of visitors last week",
            "theme" => "ocean",
            "subCaption" => "Bakersfield Central vs Los Angeles Topanga"
        ],
        "data" => [
            (object)[
                "label" => "Mon",
                "value" => "15123"
            ],
            (object)[
                "label" => "Tue",
                "value" => "14233"
            ],
            (object)[
                "label" => "Wed",
                "value" => "25507"
            ]
        ]
    ]
];

$exportConfig->set('chartConfig', $config);

// Export the chart by providing the exportConfig to the exportManager
$files = $exportManager->export($exportConfig, '.', true);

foreach ($files as $file) {
    echo $file . "\n";
}
```

## API Reference

You can find the full reference [here](https://www.fusioncharts.com/dev/exporting-charts/using-fusionexport/sdk-api-reference/php.html).