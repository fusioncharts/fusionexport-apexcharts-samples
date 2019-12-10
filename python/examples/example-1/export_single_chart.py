# Import FusionExport SDK client for Python
from fusionexport import ExportManager, ExportConfig
import os

# Instantiate ExportConfig and ExportManager
export_config = ExportConfig()
export_manager = ExportManager()

# Fetch the curr directory of the template
curr_dir = os.path.dirname(os.path.abspath(__file__))
template_path = os.path.join(curr_dir, 'template.html')

# Set all the configurations
export_config['templateFilePath'] = template_path
export_config['type'] = 'pdf'
export_config['templateFormat'] = 'A4'
export_config['asyncCapture'] = True

# Export your first PDF
export_manager.export(export_config, unzip = True)
