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
    <link rel="stylesheet" href="css/team.css">
    <link rel="stylesheet" href="css/responsive/team.css">
</head>

<body>
    <header>
        <?php include ('components/header.php'); ?>
    </header>
    <main>
        <h1><?php getValueFromJson('description'); ?></h1>
        <div id="classWrap">
            <?php
            $title = getValueFromJson('pierremandrillion.name', false);
            $job = getValueFromJson('pierremandrillion.job', false);
            $imgUrl = getValueFromJson('pierremandrillion.image', false);
            $link = getValueFromJson('pierremandrillion.linkedin', false);
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('matthieuconjat.name', false);
            $job = getValueFromJson('matthieuconjat.job', false);
            $imgUrl = getValueFromJson('matthieuconjat.image', false);
            $link = getValueFromJson('matthieuconjat.linkedin', false);
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('raphaëldevianne.name', false);
            $job = getValueFromJson('raphaëldevianne.job', false);
            $imgUrl = getValueFromJson('raphaëldevianne.image', false);
            $link = getValueFromJson('raphaëldevianne.linkedin', false);
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('antoinezoude.name', false);
            $job = getValueFromJson('antoinezoude.job', false);
            $imgUrl = getValueFromJson('antoinezoude.image', false);
            $link = getValueFromJson('antoinezoude.linkedin', false);
            include 'components/card.php';
            ?>
        </div>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>