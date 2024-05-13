<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === 'admin' && $password === 'admin_password') {
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