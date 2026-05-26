<?php
session_start();

// Destroy access if not logged in
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

// 🔥 VERY IMPORTANT — Stops history access
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");
?>
