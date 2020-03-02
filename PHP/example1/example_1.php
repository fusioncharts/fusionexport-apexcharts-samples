<?php
  // Import dependencies
  require DIR__ . '/../vendor/autoload.php';
  use FusionExport\ExportManager;
  use FusionExport\ExportConfig;

// Instantiate the ExportConfig class and add the required configurations
$exportConfig = new ExportConfig();
  // Provide path of the chart configuration which we have defined above.  // You can also pass the same object as serialized JSON.
  $exportConfig->set('templateFilePath', realpath('resources/template.html'));

// ++++++ ATTENTION - MODIFY THE EXPORT TYPE ++++++
// OPTIONS ARE: 'png' (default) | 'jpeg' | 'pdf' | 'svg' | 'html' | 'csv' | 'xls' | 'xlsx'
$exportConfig->set('type', 'pdf');
$exportConfig->set('templateFormat', 'A4');
$exportConfig->set('asyncCapture', true);

// Instantiate the ExportManager class
$exportManager = new ExportManager();

// Call the export() method with the exportConfig and the respective callbacks
$exportManager->export($exportConfig, $outputDir = '.', $unzip = true);
?>