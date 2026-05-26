<?php
$s = $_POST["base_folder"];
$h = $_POST["program"];
$a = $s . "/" . $h;

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

function program($a) {
    $folders = getFolders($a);

    echo '<form method="post" action="admission_year.php">';
    echo '<input type="hidden" name="base_folder" value="'.$a.'">';
    echo '<label>Select year of admission:</label><br>';
    echo '<select name="program">';

    foreach ($folders as $f) {
        echo "<option value='$f'>$f</option>";
    }

    echo '</select><br><br>';
    echo '<input type="submit" value="Submit">';
    echo '</form>';
}

program($a);
?>
