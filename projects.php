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
    <link rel="stylesheet" href="css/projects.css">
</head>

<body>
    <header>
        <?php include ('components/header.php'); ?>
    </header>
    <main>
        <h1><?php getValueFromJson('description'); ?></h1>
        <section>
            <h2><?php getValueFromJson('ionsources.title'); ?></h2>
            <h3><?php getValueFromJson('ionsources.positive.title') ?></h3>
            <h3><?php getValueFromJson('ionsources.pig.title') ?></h3>
        </section>
        <section>
            <h2><?php getValueFromJson('cyclotrons.title'); ?></h2>
        </section>
        <section>
            <h2><?php getValueFromJson('beamlines.title'); ?></h2>
        </section>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>