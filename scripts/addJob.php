<?php
include_once 'connectDB.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $linkedinUrl = $_POST['linkedinUrl'];
}

addJobInDB($name, $description, $linkedinUrl);

/**
 * Adds a job to the database.
 *
 * @param string $name The name of the job.
 * @param string $description The description of the job.
 * @param string $linkedinUrl The LinkedIn URL for the job.
 * @return void
 */
function addJobInDB($name, $description, $linkedinUrl)
{
    $conn = connectToDB();
    $sql = "INSERT INTO jobs (`name`, `description`, `linkedin`) VALUES ('$name', '$description', '$linkedinUrl')";
    if ($conn->query($sql) === TRUE) {
        echo "New job added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}