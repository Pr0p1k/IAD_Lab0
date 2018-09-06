<?php
@session_start();
include 'functions.php';
$start = microtime(true);
$currentTime = date("H:i:s", strtotime('-1 hour'));
$X = $_REQUEST['X'];
$Y = $_REQUEST['Y'];
$R = $_REQUEST['R'];
if (!validate($X, $Y, $R)) {
    header('HTTP/1.1 422 Unprocessable Entity');
    exit;
}
$belongsToArea = checkBelonging($X, $Y, $R);
$end = number_format(microtime(true) - $start,10,".","");
echo "$currentTime\n$end\n";
$belongsToArea = $belongsToArea ? 'true' : 'false';
echo $belongsToArea;
$data = array($X, $Y, $R, $currentTime, $end, $belongsToArea);
if (!isset($_SESSION['history'])) {
    $_SESSION['history'] = array();
}
array_push($_SESSION['history'], $data);