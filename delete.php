<?php

if(isset($_POST["id"])) {
    $db = mysqli_connect("localhost","root","","a1qa");
    if(!$db) {
        echo "Error: " . mysqli_connect_error();
    }
    $id = mysqli_real_escape_string($db, $_POST["id"]);

    $sql = "DELETE FROM employee WHERE id='$id'";
    if(mysqli_query($db, $sql)) {
        header("Location: index.php");
    } else {
        mysqli_error($db);
    }
}
