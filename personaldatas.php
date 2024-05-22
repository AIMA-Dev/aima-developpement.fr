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
    <link rel="stylesheet" href="css/personaldatas.css">
</head>

<body>
    <header>
        <?php include ('components/header.php'); ?>
    </header>
    <main>
        <h1><?php getValueFromJson('description'); ?></h1>
        <p><?php getValueFromJson('p1'); ?></p>
        <p><?php getValueFromJson('p2'); ?></p>
        <p><?php getValueFromJson('p3'); ?></p>
        <p><?php getValueFromJson('p4'); ?></p>
        <p><?php getValueFromJson('p5'); ?></p>
        <p><?php getValueFromJson('p6'); ?></p>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>