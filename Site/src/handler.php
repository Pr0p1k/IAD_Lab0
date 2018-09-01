<?php
@session_start();
$start = microtime(true);
$X = $_REQUEST['X'];
$Y = $_REQUEST['Y'];
$R = $_REQUEST['R'];
$belongsToArea = false;
$currentTime = date("H:i:s", strtotime('+3 hour'));
if ($X > 0 & $Y > 0 & $Y < -$X + $R) $belongsToArea = true;
elseif ($X <= 0 & $Y >= 0 & $X != $Y & $X * $X + $Y * $Y < $R * $R / 4) $belongsToArea = true;
elseif ($X < 0 & $Y < 0 & $X > -$R & $Y > -$R / 2) $belongsToArea = true;
$end = microtime(true) - $start;
echo "$currentTime\n$end\n";
echo $belongsToArea ? 'true' : 'false';