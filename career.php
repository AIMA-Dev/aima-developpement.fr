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
            // for ($i = 0; $i <= 10; $i++) {
            //     $title = 'Job title';
            //     $description = 'The person must be capable of independently conducting projects of prototypical character. The ideal candidate will already have experience in the design and construction of RF accelerator structures and will be well acquainted with the software tools used in research environment.
            //     The successful candidate will be accustomed to striving for quality, scheduling and cost optimization. The person will possess good communications skills, towards customers, suppliers and within the company. We are looking for an individual with a high sense of responsibility, flexibility and team capability. English and French language skills are required.
            //     We offer you comprehensive familiarization with the job and on-going training, as well as the scope to develop within a future-oriented company.';
            //     $linkedin = 'Apply on LinkedIn';
            //     $email = 'Send an email';
            //     include 'components/job.php';
            // }
            ?>
            <?php
            // try {
            //     include_once 'connectDB.php';
            //     $conn = connectToDB();
            //     $query = "SELECT * FROM jobs";
            //     $result = mysqli_query($conn, $query);
            //     while ($row = mysqli_fetch_assoc($result)) {
            //         $title = $row['title'];
            //         $description = $row['description'];
            //         $linkedin = $row['linkedin'];
            //         $email = $row['email'];
            //         include 'components/job.php';
            //     }
            //     mysqli_close($conn);
            // } catch (Exception $e) {
            //     echo "An error occurred: " . $e->getMessage();
            // }
            ?>
        </div>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>