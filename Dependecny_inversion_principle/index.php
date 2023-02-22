<?php 

require_once 'ExportCsv.php';
require_once 'ExportFile.php';
require_once 'ExportPdf.php';
require_once 'ExportFileInterface.php';

$file = new ExportFile(new ExportCsv());

$file->export("file path");

