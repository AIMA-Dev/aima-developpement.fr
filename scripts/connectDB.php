<?php
include_once './initEnv.php';
initEnvironmentVars();

/**
 * Connects to the database and initializes tables.
 *
 * @return mysqli|false The database connection object or false if the connection fails.
 */
function connectToDB()
{
    $dbHost = getenv('DB_HOST');
    $dbUser = getenv('DB_USER');
    $dbPass = getenv('DB_PASS');
    $dbName = getenv('DB_NAME');

    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    try {
        if (substr_compare(getcwd(), 'scripts', -strlen('scripts')) === 0) {
            $sql = file_get_contents('initDB.sql');
        } else {
            $sql = file_get_contents('scripts/initDB.sql');
        }
        if (mysqli_multi_query($conn, $sql)) {
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