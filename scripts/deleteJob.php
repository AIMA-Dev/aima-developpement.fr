<?php
include './connectDB.php';

$name = $_GET['name'];

echo "name : " . $name . "<br>";

$conn = connectToDB();
$query = "DELETE FROM jobs WHERE `name` = '$name'";
mysqli_query($conn, $query);
mysqli_close($conn);

echo 'Job deleted';

header('Refresh: 0; URL=../admin.php');