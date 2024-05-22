<?php
include_once 'connectDB.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['setting'];
    $val = $_POST['value'];

    changeSettingInDB($name, $val);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $name = $_GET['setting'];
    $val = $_GET['value'];

    changeSettingInDB($name, $val);
}

/**
 * Changes the value of a setting in the database.
 *
 * @param string $name The name of the setting.
 * @param string $val The new value for the setting.
 * @return void
 */
function changeSettingInDB($name, $val)
{
    $conn = connectToDB();
    $sql = "SELECT * FROM settings WHERE `name` = '$name'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $sql = "UPDATE settings SET `val` = '$val' WHERE `name` = '$name'";
    } else {
        $sql = "INSERT INTO settings (`name`, `val`) VALUES ('$name', '$val')";
    }
    if ($conn->query($sql) === TRUE) {
        header('Location: ../admin.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}