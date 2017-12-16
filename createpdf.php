<?php

include 'connection/db_connect.php';

$myfile = fopen("pdf.html","w") or die("Could not create file!");

$tag = '<!DOCTYPE html> <html> <head> <link rel="stylesheet" type="text/css" href="vendors/css/bootstrap.min.css"> <link rel="stylesheet" type="text/css" href="resources/css/style.css"> <script src="vendors/js/jquery.min.js"></script> <script src="vendors/js/bootstrap.min.js"></script> </head> <body> <div id="result-section" class="container">';
fwrite($myfile,$tag);

$tag = '<div class="top-section"></div>';
fwrite($myfile,$tag);

include 'php_to_html_files/class-test.php';
include 'php_to_html_files/data-entry.php';
include 'php_to_html_files/grade-sheet-verify.php';
include 'php_to_html_files/moderation-board.php';
include 'php_to_html_files/paper-script.php';
include 'php_to_html_files/project-thesis-8th.php';
include 'php_to_html_files/scrutinizers.php';
include 'php_to_html_files/seminer-8th.php';
include 'php_to_html_files/sessional-class.php';
include 'php_to_html_files/type-print-draw.php';
include 'php_to_html_files/viva-board.php';


$tag = '<div class="footer result-footer" style="display:block"></div> </div> </body> </html>';
fwrite($myfile,$tag);



// PDF conversion part start

// include autoloader
require_once 'dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$html = file_get_contents("pdf.html");
$dompdf->loadHtml($html);
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');
// Render the HTML as PDF
$dompdf->render();
// Output the generated PDF (1 = download and 0 = preview)
$dompdf->stream("result_page",array("Attachment"=>0));

// PDF conversion part end
?>