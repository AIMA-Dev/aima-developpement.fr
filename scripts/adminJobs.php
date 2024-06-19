<?php
include_once 'connectDB.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $linkedinUrl = $_POST['linkedinUrl'];
    addJobInDB($name, $description, $linkedinUrl);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $name = $_GET['name'];
    deleteJobInDB($name);
}

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
        header('Location: ../admin.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

/**
 * Deletes a job from the database based on its name.
 *
 * @param string $name The name of the job to be deleted.
 * @return void
 */
function deleteJobInDB($name)
{
    $conn = connectToDB();
    $query = "DELETE FROM jobs WHERE `name` = '$name'";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header('Location: ../admin.php');
}
?>
<!-- © AIMA DEVELOPPEMENT 2024 -->