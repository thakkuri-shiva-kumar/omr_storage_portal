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
function program() {
    $baseDir = "Programs";
    $folders = getFolders($baseDir);

    echo '<form method="post" action="course.php">';
?>
    
    <input type="hidden" name="base_folder" value="programs"><br>
<?php 

    // dropdown
    echo '<label>Select Course:</label>';
    echo '<select style="width:100 height:10" name="program">';
    echo '<option value="">-- Select --</option>';

    foreach ($folders as $f) {
        echo "<option value='$f'>$f</option>";
    }

    echo '</select>';
    echo '<br><br>';
    echo '<input type="submit" value="Submit">';
    echo '</form>';

    // display submitted data

}

// call function
program();
?>
