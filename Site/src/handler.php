<?php
$R_PX = 120;    //R value in pixels
$X_PX = 166;    //X coordinate of center
$Y_PX = 166;    //Y coordinate of center
$X = $_REQUEST['X'];
$Y = 2; //$_REQUEST['Y0'];
$R = $_REQUEST['R'];
$belongsToArea = false;
if ($X > 0 & $Y > 0 & $X <= $R & $Y <= $R) $belongsToArea = true;
elseif ($X > 0 & $Y < 0 & $X * $X + $Y * $Y < $R * $R) $belongsToArea = true;
elseif ($X < 0 & $Y < 0 & $Y > -2 * $X - $R) $belongsToArea = true;
$img = imagecreatefrompng("img/area_final.png");
imagefilledellipse($img, $X / $R * $R_PX + $X_PX, $Y / $R * $R_PX + $Y_PX, 3,
    3, $belongsToArea ? 255 * 256 : 255 * 65536);
header('Content-type: image/png');
ImagePng($img);