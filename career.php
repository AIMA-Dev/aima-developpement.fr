<?php
include_once 'scripts/lang.php';
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
        <link rel="stylesheet" href="css/career.css">
        <script src="js/career.js" defer></script>
        <script src="js/job.js" defer></script>
    </header>
    <main>
        <div id="searchWrap">
            <input type="text" placeholder="<?php getValueFromJson('search') ?>" id="search">
            <img src="assets/img/icons/search.svg" alt="Search">
        </div>
        <div id="jobsWrap">
            <?php
            try {
                include_once 'scripts/connectDB.php';
                $conn = connectToDB();
                $query = "SELECT * FROM jobs";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $title = $row['title'];
                        $description = $row['description'];
                        $linkedin = $row['linkedin'];
                        $email = $row['email'];
                        include 'components/job.php';
                    }
                } else {
                    echo '<div class="alert"><a>' . getValueFromJson("noJobs", false) . '</a></div>';
                }
                mysqli_close($conn);
            } catch (Exception $e) {
                echo "An error occurred: " . $e->getMessage();
            }
            ?>
        </div>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>