<?php

require_once 'Input/InputOperations.php';

class OutputOperations
{
    function outputValues($result) {
        echo "<table border='1'><tr><th>id</th><th>fio</th><th>special</th><th>work</th><th>age</th><th>family_status</th><th>experience</th><th>delete</th></tr>";
        foreach ($result as $Author) {
            echo "<td>" . $Author["id"] . "</td>";
            echo "<td>" . $Author["fio"] . "</td>";
            echo "<td>" . $Author["special"] . "</td>";
            echo "<td>" . $Author["work"] . "</td>";
            echo "<td>" . $Author["age"] . "</td>";
            echo "<td>" . $Author["family_status"] . "</td>";
            echo "<td>" . $Author["experience"] . "</td>";
            echo "<td><form action='delete.php' method='post'>
                        <input type='hidden' name='id' value='" . $Author["id"] . "'/>
                        <input type='submit' value='Удалить'>
                    </form></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}