<?php

require_once __DIR__ . '/autoload.php';

$unoconv = Unoconv\Unoconv::create(array(
	'timeout'          => 60,
	'unoconv.binaries' => '/usr/bin/unoconv',
));

$unoconv->transcode('files/sample.docx', 'pdf', 'files/sample1.pdf');
$unoconv->transcode('files/sample.doc', 'pdf', 'files/sample2.pdf');
$unoconv->transcode('files/sample_data.csv', 'pdf', 'files/sample_data.pdf');


// sudo apt-get install unoconv
// sudo apt-get install libreoffice
// ***************** if that doesn't work *******************
// sudo apt-get remove --purge unoconv
// git clone https://github.com/dagwieers/unoconv
// cd unoconv/
// sudo make install
// whereis unoconv
