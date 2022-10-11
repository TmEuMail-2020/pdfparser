<?php
 
// Include Composer autoloader if not already done.
include 'vendor/autoload.php';
 
// Parse pdf file and build necessary objects.
$parser = new \Smalot\PdfParser\Parser();
// $pdf    = $parser->parseFile('samples/SimpleInvoiceFilledExample1.pdf');
$filename = 'b.pdf';
$pdf    = $parser->parseFile($filename);
$text= $pdf->getPages()[0]->getTextXY(null, 718.47);
 
// $text = $pdf->getText();
// $text = $pdf->getPages()[0]->getDataTm();
print_r($text);
// . '\n';
// exec('pdfimages -all ' . $filename . ' output-') ;
// exec('ls output*', $yoyo);
// print_r($yoyo);
?>