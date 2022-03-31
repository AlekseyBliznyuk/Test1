<?php

class InputOperations
{
    public function connectDatabase()
    {
        $db = mysqli_connect("localhost","root","","a1qa");
        if($db== false) {
            print("Error: " . mysqli_connect_error());
        }
        return $db;
    }
    public function getInfoFromTable(mysqli $db)
    {
        $sql = "SELECT * FROM employee";
        $result = $db->query($sql);
        return $result->fetch_all(MYSQLI_BOTH);
    }
}