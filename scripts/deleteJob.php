<?php
include './connectDB.php';

$name = $_GET['name'];

$conn = connectToDB();
$query = "DELETE FROM jobs WHERE name = '$name'";
mysqli_close($conn);
?>