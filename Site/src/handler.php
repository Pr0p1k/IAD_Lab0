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
