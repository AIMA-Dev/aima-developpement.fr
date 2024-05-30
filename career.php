<?php
include_once 'scripts/lang.php';
$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$deviceLang = substr($language, 0, 2);

session_start();
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : $deviceLang;
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <title><?php getValueFromJson('title'); ?></title>
    <?php include 'components/head.php'; ?>
    <link rel="stylesheet" href="css/career.css">
    <link rel="stylesheet" href="css/responsive/career.css">
    <script src="js/career.js" defer></script>
    <script src="js/job.js" defer></script>
</head>

<body>
    <header>
        <?php include ('components/header.php'); ?>
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
                        $name = $row['name'];
                        $description = $row['description'];
                        $linkedinUrl = $row['linkedin'];
                        if (empty($linkedinUrl)) {
                            $linkedinUrl = 'https://www.linkedin.com/company/aima-developpement/jobs/';
                        }
                        $linkedin = getValueFromJson('jobs.linkedin', false);
                        $email = getValueFromJson('jobs.email', false);
                        include 'components/job.php';
                    }
                } else {
                    echo '<div class="alert"><a>' . getValueFromJson("jobs.noJobs", false) . '</a></div>';
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


<!-- Développé avec ❤️ par : www.noasecond.com. -->