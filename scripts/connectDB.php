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

    if (mysqli_multi_query($conn, $sql)) {
        echo "Tables created successfully\n";
        mysqli_close($conn);
        $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
        return $conn;
    } else {
        echo "Error creating tables: " . mysqli_error($conn) . "\n";
        mysqli_close($conn);
    }
}