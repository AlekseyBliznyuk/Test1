<?php
echo "<form action='show.php' method='post'>
<p>FIO <input type='text' name='fio'></p>
<p>Special <input type='text' name='special'></p>
<p>Work <input type='text' name='work'></p>
<p>Age <input type='text' name='age'></p>
<p>Family Status <input type='text' name='family_status'></p>
<p>Experience(years) <input type='text' name='experience'></p>
<input type='submit' value='Add'></form>";

if(isset($_POST["fio"]) && isset($_POST["special"]) && isset($_POST["work"]) && isset($_POST["age"]) && isset($_POST["family_status"])
    && isset($_POST["experience"])) {
    $InfoClass = new InputOperations();
    $db = $InfoClass->connectDatabase();
    if($db->connect_error) {
        print("Error: " . $db->connect_error);
    }
    $fio = $db->real_escape_string($_POST["fio"]);
    $special = $db->real_escape_string($_POST["special"]);
    $work = $db->real_escape_string($_POST["work"]);
    $age = $db->real_escape_string($_POST["age"]);
    $family = $db->real_escape_string($_POST["family_status"]);
    $experience = $db->real_escape_string($_POST["experience"]);

    $sql="INSERT INTO employee(`id`, `FIO`, `Special`, `Work`, `Age`, `Family Status`, `Experience(years)`) 
VALUES (NULL, '$fio', '$special', '$work', '$age', '$family', '$experience')";

    if($db->query($sql)) {
        header("Location: index.php");
    }
    else{
        echo "Error: " . $db->error;
    }
}