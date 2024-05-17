<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $linkedinUrl = $_POST['linkedinUrl'];
}

include_once 'connectDB.php';
$conn = connectToDB();
$sql = "INSERT INTO jobs (`name`, `description`, `linkedin`) VALUES ('$title', '$description', '$linkedinUrl')";
if ($conn->query($sql) === TRUE) {
    echo "New job added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();