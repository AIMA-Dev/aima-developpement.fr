<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Check credentials in DB
        include_once 'connectDB.php';
        $conn = connectToDB();
        $query = "SELECT * FROM parameters WHERE key='$username'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $DBpassword = $row['value'];
        } else {
            echo "Error executing query: " . mysqli_error($conn);
        }

        // Check if password is correct
        if ($password === $DBpassword) {
            session_start();
            $_SESSION['admin'] = true;

            header("Location: ../admin.php");
            exit;
        } else {
            echo "Incorrect username or password.";
        }
    } else {
        echo "Please fill in all fields.";
    }
} else {
    echo "Unauthorized access.";
}
?>