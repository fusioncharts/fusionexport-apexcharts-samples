// Import FusionExport SDK client for Node.js
const {
    ExportManager,
    ExportConfig
} = require('fusionexport-node-client');

// Instantiate ExportConfig and ExportManager
const exportConfig = new ExportConfig();
const exportManager = new ExportManager();
let template;

// Create a simple HTML to export
template = '<h1>Hello world</h2>';

// Set all the configurations
exportConfig.set('template', template);
exportConfig.set('type', 'pdf');
exportConfig.set('templateFormat', 'a4');
exportConfig.set('asyncCapture', true);

// Let's export!
exportManager.export(exportConfig, outputDir = '.', unzip = true).then((exportedFiles) => {
    exportedFiles.forEach(file => console.log(file));
}).catch((err) => {
    console.log(err);
});
