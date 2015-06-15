<?php

require_once __DIR__ . '/autoload.php';

use Knp\Snappy\Image;

$snappy = new Image('/usr/local/bin/wkhtmltoimage');
$htmlContent = file_get_contents('pngTesting.html');
$snappy->generateFromHtml($htmlContent, 'files/pngTested.jpg', array(), true);