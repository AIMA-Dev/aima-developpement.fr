<?php
function connectToDB() {
    $dbHost = "91.216.107.185";
    $dbUser = "blueb1885118";
    $dbPass = "poaexeyfbb";
    $dbName = "blueb1885118";

    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = file_get_contents('initDB.sql');

    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully\n";
    } else {
        echo "Error creating table: " . $conn->error . "\n";
    }
    
    return $conn;
}