// Import FusionExport SDK client for Node.js
const {
    ExportManager,
    ExportConfig
} = require('fusionexport-node-client');
const path = require('path');

// Instantiate ExportConfig and ExportManager
const exportConfig = new ExportConfig();
const exportManager = new ExportManager();
let templatePath;

// Create a simple HTML to export
templatePath = path.join(__dirname, 'template.html');

// Set all the configurations
exportConfig.set('templateFilePath', templatePath);
exportConfig.set('type', 'pdf');
exportConfig.set('templateFormat', 'a4');
exportConfig.set('asyncCapture', true);
exportConfig.set('maxWaitForCaptureExit', 2000);

// Let's export!
exportManager.export(exportConfig, outputDir = '.', unzip = true).then((exportedFiles) => {
    exportedFiles.forEach(file => console.log(file));
}).catch((err) => {
    console.log(err);
});
