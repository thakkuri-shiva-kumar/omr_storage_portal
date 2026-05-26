<?php 
$s = $_POST["base_folder"];   
$h = $_POST["program"];       



$a = $s . "/" . $h;

?>

<?php
// function to get subfolders
function getFolders($directoryPath) {
    $folders = [];
    if (is_dir($directoryPath)) {
        foreach (scandir($directoryPath) as $item) {
            if ($item != "." && $item != ".." && is_dir($directoryPath . "/" . $item)) {
                $folders[] = $item;
            }
        }
    }
    return $folders;
}

// function program()
function program($a) {
    $baseDir = $a;
    $folders = getFolders($baseDir);

    //echo "<p>$baseDir</p>";
    echo '<form method="post" action="year.php">';
?>
    
    
    <input type="hidden" name="base_folder" value="<?php echo $baseDir; ?>"><br>

<?php
    echo '<label>year of study:</label>';
    echo '<select name="program">';
    echo '<option value="">-- Select --</option>';

    foreach ($folders as $f) {
        echo "<option value='$f'>$f</option>";
    }

    echo '</select>';
    echo '<br><br>';
    echo '<input type="submit" value="Submit">';
    echo '</form>';
}

// call function
program($a);
?>