<h4>Direcotry index:</h4>
<?php

if ($handle = opendir('.')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            echo "<a href='$entry'>$entry</a> <br>";
        }
    }

    closedir($handle);
}