<?php
session_start();
$s = $_POST["base_folder"];   
$h = $_POST["program"];       
echo $s . "<br>";
echo $h . "<br>";
$a = $s . "/" . $h."/";
echo $a;
$_SESSION["path"]=$a;
header("Location: images.php");
?>