<?php
    $con = new mysqli('localhost', 'root', '', 'crudoperation');

    if ($con) {
        echo "Connection Successfully :";
    } else {
        die(mysqli_error($con));
    }
?>
