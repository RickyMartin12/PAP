<?php

session_start();
create_image();

function create_image()
{
	$rand = md5(rand(0,9999999));
	$value = substr($rand, 10, 8);
	$width = 150;
	$height = 30;

	$image = imagecreate($width, $height);

	$black = imagecolorallocate($image, 0, 0, 0);
	$white = imagecolorallocate($image, 255, 255, 255);
	$green = imagecolorallocate($image, 0, 255, 0);
	$blue = imagecolorallocate($image, 0, 0, 255);
	
	imagefill($image, 0, 0, $green);

	imageline($image, 0, $height/2, $width, $height/2, $blue);
	imageline($image, $width/2, 0, $width/2, $height, $blue);	
	imageline($image, 0, 0, $width, $height, $blue);
	imageline($image, 0, $height, $width, 0, $blue);

	imagestring($image, 5, 35, 7, $value, $black);

	imagepng($image);

	imagedestroy($image);

	$_SESSION['captcha_key'] = $value;


}

?>