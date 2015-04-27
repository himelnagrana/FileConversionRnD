<?php

require_once __DIR__ . '/autoload.php';

use NeuroSys\FileMerger\Merger;
use NeuroSys\FileMerger\Driver\PdfTkDriver;
use Knp\Snappy\Pdf;
use NeuroSys\FileMerger\Transformer\ImageTransformer;

$driver = new PdfTkDriver("/usr/bin/pdftk");
$merger = new Merger($driver);

$snappy = new Pdf('/usr/bin/wkhtmltopdf');
/*$snappy->setOption('ignore-load-errors', true);*/
$merger->addTransformer(new ImageTransformer($snappy));

$merger->addFile('files/IMG.jpg');
$merger->addFile('files/IMG_0001.jpg');
$merger->addFile('files/scan_pic_of_Monir.jpg');
$merger->merge('files/monir_img_img_0001.pdf');

// sudo apt-get install pdftk
// sudo apt-get install wkhtmltopdf

// sudo apt-get remove wkhtmltopdf
// sudo apt-get -f install
// sudo apt-get install xfonts-base xfonts-75dpi
// wget http://sourceforge.net/projects/wkhtmltopdf/files/0.12.2.1/wkhtmltox-0.12.2.1_linux-wheezy-amd64.deb
// sudo dpkg -i wkhtmltox-0.12.2.1_linux-wheezy-amd64.deb