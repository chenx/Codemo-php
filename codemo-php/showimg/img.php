<?php
/**
 * Displays image from url.
 * Used in showimg.php. Or you can directly visit img.php?url=[url]
 * 
 * @by Xin Chen
 * @Created on: 4/24/2013
 * @Last modified: 4/24/2013
 */

$remoteImage = $_REQUEST['url']; 
$imginfo = getimagesize($remoteImage);
//print_r( $imginfo );
//print "$imginfo[mime]";

header("Content-type: $imginfo[mime]");
//header("Content-type: image/jpeg");

// 1) First method. Directly send image to client.
readfile($remoteImage);

// 2) Second method. Not as good as first method, because this caches image in server memory first.
//$a = file_get_contents($remoteImage);
//echo $a;
?>
