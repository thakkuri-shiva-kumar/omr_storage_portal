<?php
// Folder path (WEB path for displaying)
$webFolder = "Programs/BTech/2023/2/semester-2/datascience/dm/";

// Folder path (SERVER path for reading files)
$serverFolder = __DIR__ . "/Programs/BTech/2023/2/semester-2/datascience/dm/";

// Read image files (multiple formats)
$images = array_merge(
    glob($serverFolder . "*.jpg"),
    glob($serverFolder . "*.jpeg"),
    glob($serverFolder . "*.png"),
    glob($serverFolder . "*.webp")
);

// Sort images
sort($images);

// Total images
$total = count($images);

// If no images found
if ($total === 0) {
    die("No images found in the folder.");
}

// Get index
$index = isset($_GET['i']) ? (int)$_GET['i'] : 0;
$index = max(0, min($index, $total - 1));

// Current image
$currentImage = $webFolder . basename($images[$index]);
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Image Viewer</title>
    <style>
        body {
            text-align: center;
            font-family: Arial;
        }
        .container {
            width: 600px;
            margin: auto;
            position: relative;
        }
        img {
            max-width: 100%;
            height: auto;
            border: 1px solid #ccc;
        }
        .nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 30px;
            text-decoration: none;
            padding: 10px;
            background: rgba(0,0,0,0.5);
            color: white;
        }
        .prev { left: 0; }
        .next { right: 0; }
    </style>
</head>

<body>

<h2>Image Viewer</h2>

<div class="container">
    <?php if ($index > 0): ?>
        <a class="nav prev" href="?i=<?php echo $index - 1; ?>">&#10094;</a>
    <?php endif; ?>

    <img src="<?php echo htmlspecialchars($currentImage); ?>" alt="Image">

    <?php if ($index < $total - 1): ?>
        <a class="nav next" href="?i=<?php echo $index + 1; ?>">&#10095;</a>
    <?php endif; ?>
</div>

<p><?php echo ($index + 1) . " / " . $total; ?></p>

</body>
</html>
