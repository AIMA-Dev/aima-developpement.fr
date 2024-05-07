<?php
include_once 'components/functions.php';
session_start();
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <title><?php echo getValueFromJson('title'); ?></title>
    <?php include 'components/head.php'; ?>
</head>

<body>
    <header>
        <?php include ('components/header.php'); ?>
    </header>
    <main></main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>