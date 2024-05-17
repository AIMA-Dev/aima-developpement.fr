<?php
include_once 'scripts/lang.php';
session_start();
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <title><?php getValueFromJson('title'); ?></title>
    <?php include ('components/head.php') ?>
    <link rel="stylesheet" href="css/error.css">
</head>

<body>
    <header>
        <?php include ('components/header.php'); ?>
    </header>
    <main>
        <h1><?php getValueFromJson('error'); ?>
        <?php getValueFromJson('message'); ?></h1>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>