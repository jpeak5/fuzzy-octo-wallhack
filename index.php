<?php
header('Content-type: application/json');

$o = new stdClass();
$o->name = 'entergy';
$o->date = '04/10/2013';
$o->amt  = 98.24;

$cb = isset($_GET['callback']) ? isset($_GET['callback']) : false;


echo $cb ?  $cb."(".json_encode($o).")" : json_encode($o);


?>