<?php
/**
 * Connects to the database and initializes tables.
 *
 * @return mysqli|false The database connection object or false if the connection fails.
 */
function connectToDB() {
    // $dbHost = $_ENV['DB_HOST'];
    // $dbUser = $_ENV['DB_USER'];
    // $dbPass = $_ENV['DB_PASS'];
    // $dbName = $_ENV['DB_NAME'];
    $dbHost = '91.216.107.185';
    $dbUser = 'blueb1885118';
    $dbName = 'blueb1885118';
    $dbPass = 'poaexeyfbb';

    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    try {
        $sql = file_get_contents('initDB.sql');
        if (mysqli_multi_query($conn, $sql)) {
            echo "Tables created successfully\n";
            mysqli_close($conn);
            $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
            return $conn;
        } else {
            echo "Error creating tables: " . mysqli_error($conn) . "\n";
            mysqli_close($conn);
            return false;
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
        mysqli_close($conn);
        return false;
    }
}
?>