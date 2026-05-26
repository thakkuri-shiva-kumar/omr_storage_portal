<?php
session_start();

/* STEP 1: Store POST values in SESSION (first request) */
if (isset($_POST["base_folder"]) && isset($_POST["program"])) {
    $_SESSION["base_folder"] = $_POST["base_folder"];
    $_SESSION["program"] = $_POST["program"];
}

/* STEP 2: Read from SESSION (all requests) */
if (!isset($_SESSION["base_folder"]) || !isset($_SESSION["program"])) {
    die("Folder information missing.");
}
$s = $_SESSION["base_folder"];
$h = $_SESSION["program"];
$a = $s . "/" . $h . "/";
/* Folder containing images */
$folder = $a;

/* Read all JPG files */
$images = glob($folder . "*.jpg");

/* Total number of images */
$total = count($images);

if ($total == 0) {
    die("No images found in the folder.");
}

/* Image index */
$index = isset($_GET['i']) ? (int)$_GET['i'] : 0;
if ($index < 0) $index = 0;
if ($index >= $total) $index = $total - 1;

$currentImage = $images[$index];
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Image Viewer</title>
    <style>
        body { text-align:center; font-family:Arial; }
        .container { width:600px; margin:auto; position:relative; }
        img { 
        
        width:1075px;
        height:500px;
        pointer-events:none;
    }
        .nav {
            position:absolute;
            top:50%;
            transform:translateY(-50%);
            font-size:30px;
            padding:10px;
            background:rgba(0,0,0,0.5);
            color:white;
            text-decoration:none;
        }
      
        .prev { left:40; }
        .next { right:40; }
    </style>
</head>
<body>

<h2>Image Viewer</h2>

<div class="container">
    <?php if ($index > 0): ?>
        <a class="nav prev" href="?i=<?php echo $index - 1; ?>">&#10094;</a>
    <?php endif; ?>

    <img src="<?php echo $currentImage; ?>">

    <?php if ($index < $total - 1): ?>
        <a class="nav next" href="?i=<?php echo $index + 1; ?>">&#10095;</a>
    <?php endif; ?>
</div>

<p><?php echo ($index + 1) . " / " . $total; ?></p>

</body>
</html>
