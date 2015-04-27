<?php

require_once __DIR__ . '/autoload.php';

use RunMyBusiness\Initialcon\Initialcon;
use Intervention\Image\ImageManagerStatic as Image;

$initialcon = new Initialcon();
$colorList = array(
	'AS' => '4a591d',
	'SD' => '4a591d',
	'DF' => '578700',
	'FG' => '80A540',
	'GH' => '6E9940',
	'HJ' => '9D5E8A',
	'JK' => '117188',
	'KL' => '141414',
	'ZX' => '453E43',
	'QW' => '6a223E'
);

//echo "using RunMyBusiness:" . "<br>";
$size = 64;
foreach($colorList as $ini => $cl) {
	$image = Image::canvas($size, $size, $cl);
	$textSize = (strlen($ini) == 2) ? round($size / 1.5) : $size;

	$reflector = new ReflectionClass(get_class($initialcon));
	$fontFilePath = dirname($reflector->getFileName()). '/OpenSans-Regular.ttf';

	$image->text($ini, ($size / 2), ($size / 2), function($font) use ($textSize, $fontFilePath){
		$font->size($textSize);
		$font->color('#ffffff');
		$font->align('center');
		$font->valign('middle');
		$font->file($fontFilePath);
	});


	$src = sprintf('data:image/png;base64,%s', base64_encode($image->encode('png')));

	echo '<img src="' . $src . '" alt="avatar" /><br/<br/>';
}