<?php
include_once 'encryption.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        //Set session variable to false by default
        session_start();
        $_SESSION['admin'] = false;

        // Check credentials in DB
        include_once 'connectDB.php';
        $conn = connectToDB();
        $query = "SELECT * FROM accounts WHERE `username`='$username'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $targetPassword = decrypt($row["password"]);
            if ($targetPassword == $password) {
                $_SESSION['admin'] = true;
                mysqli_close($conn);
                header("Location: ../admin.php");
                exit;
            } else {
                echo "Mot de passe incorrect.";                
                $_SESSION['admin'] = false;
                mysqli_close($conn);
                header("Refresh:10; url=../admin.php");
                exit();
            }
        } else {
            echo "Username inconnu.";
            $_SESSION['admin'] = false;
            mysqli_close($conn);
            header("Refresh:0; url=../admin.php");
            exit();
        }
    }
}
?>