<?php
include_once 'components/functions.php';
session_start();
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <title><?php getValueFromJson('title'); ?></title>
    <?php include 'components/head.php'; ?>
</head>

<body>
    <header>
        <?php include ('components/header.php'); ?>
    </header>
    <main>
        <?php
        try {
            include_once 'connectDB.php';
            $conn = connectToDB();
            $query = "SELECT * FROM jobs";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                $title = $row['title'];
                $description = $row['description'];
                $linkedin = $row['linkedin'];
                $email = $row['email'];
                include 'components/job.php';
            }
            mysqli_close($conn);
        } catch (Exception $e) {
            echo "An error occurred: " . $e->getMessage();
        }
        ?>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>