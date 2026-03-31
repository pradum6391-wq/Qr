<?php
require "vendor/autoload.php";

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

$qr=new QrCode('https://ayushdevops.netlify.app/');
$writer=new PngWriter();
$result=$writer->write($qr);

header("content-type: ".$result->getMimeType());
echo $result->getString();
?>