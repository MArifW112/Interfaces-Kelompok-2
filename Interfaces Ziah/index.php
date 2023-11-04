<?php

include_once "Handphone.php";
include_once "Iphone.php";

$handphone1 = new Iphone();

$handphone1 -> powerOn();
echo "<br>";
$handphone1 -> powerOff();
echo "<br>";
$handphone1 -> volumeUp();
echo "<br>";
$handphone1 -> volumeDown();
echo "<br>";

?>