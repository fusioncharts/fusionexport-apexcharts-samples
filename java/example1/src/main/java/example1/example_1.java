package example1;

import com.fusioncharts.fusionexport.client.*; // import sdk

public class example_1 {
public static void main(String[] args) throws Exception {
	String configPath = System.getProperty("user.dir") + "/resources/template.html";

        // Instantiate the ExportConfig class and add the required configurations
        ExportConfig config = new ExportConfig();
        // Provide path of the chart configuration which we have defined above.
        // You can also pass the same object as serialized JSON.
        config.set("templateFilePath", configPath);

        // ++++++ ATTENTION - MODIFY THE EXPORT TYPE ++++++
        // OPTIONS ARE: 'png' (default) | 'jpeg' | 'pdf' | 'svg' | 'html' | 'csv' | 'xls' | 'xlsx'
        config.set("type", "pdf");
        config.set("templateFormat", "A4");
       
        config.set("asyncCapture", true);

        // Instantiate the ExportManager class
        ExportManager manager = new ExportManager();
        // Call the export() method with the export config and the respective callbacks
        manager.export(config, ".",  true);

}
}