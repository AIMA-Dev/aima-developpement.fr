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
    <link rel="stylesheet" href="css/team.css">
    <link rel="stylesheet" href="css/responsive/team.css">
</head>

<body>
    <header>
        <?php include ('components/header.php'); ?>
    </header>
    <main>
        <h1><?php getValueFromJson('description'); ?></h1>
        <h2><?php getValueFromJson('ourteam'); ?></h2>
        <div class="classWrap">
            <?php
            $title = getValueFromJson('pierremandrillion.name', false);
            $job = getValueFromJson('pierremandrillion.job', false);
            $imgUrl = getValueFromJson('pierremandrillion.image', false);
            $link = getValueFromJson('pierremandrillion.url', false);
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('matthieuconjat.name', false);
            $job = getValueFromJson('matthieuconjat.job', false);
            $imgUrl = getValueFromJson('matthieuconjat.image', false);
            $link = getValueFromJson('matthieuconjat.url', false);
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('raphaëldevianne.name', false);
            $job = getValueFromJson('raphaëldevianne.job', false);
            $imgUrl = getValueFromJson('raphaëldevianne.image', false);
            $link = getValueFromJson('raphaëldevianne.url', false);
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('antoinezoude.name', false);
            $job = getValueFromJson('antoinezoude.job', false);
            $imgUrl = getValueFromJson('antoinezoude.image', false);
            $link = getValueFromJson('antoinezoude.url', false);
            include 'components/card.php';
            ?>
        </div>
        <h2><?php getValueFromJson('ouradvisors'); ?></h2>
        <h3><?php getValueFromJson('scientificadvisory'); ?></h3>
        <div class="classWrap">
            <?php
            $title = getValueFromJson('georgescharpak.name', false);
            $job = getValueFromJson('georgescharpak.job', false);
            $imgUrl = getValueFromJson('georgescharpak.image', false);
            $link = getValueFromJson('georgescharpak.url', false);
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('francoisdemard.name', false);
            $job = getValueFromJson('francoisdemard.job', false);
            $imgUrl = getValueFromJson('francoisdemard.image', false);
            $link = getValueFromJson('francoisdemard.url', false);
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('renaudguignard.name', false);
            $job = getValueFromJson('renaudguignard.job', false);
            $imgUrl = getValueFromJson('renaudguignard.image', false);
            $link = getValueFromJson('renaudguignard.url', false);
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('gillesviot.name', false);
            $job = getValueFromJson('gillesviot.job', false);
            $imgUrl = getValueFromJson('gillesviot.image', false);
            $link = getValueFromJson('gillesviot.url', false);
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('joelherault.name', false);
            $job = getValueFromJson('joelherault.job', false);
            $imgUrl = getValueFromJson('joelherault.image', false);
            $link = getValueFromJson('joelherault.url', false);
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('alessandralombardi.name', false);
            $job = getValueFromJson('alessandralombardi.job', false);
            $imgUrl = getValueFromJson('alessandralombardi.image', false);
            $link = getValueFromJson('alessandralombardi.url', false);
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('jeromedoyen.name', false);
            $job = getValueFromJson('jeromedoyen.job', false);
            $imgUrl = getValueFromJson('jeromedoyen.image', false);
            $link = getValueFromJson('jeromedoyen.url', false);
            include 'components/card.php';
            ?>
        </div>
        <h3><?php getValueFromJson('technicalboard'); ?></h3>
        <div class="classWrap">
            <?php
            $title = getValueFromJson('jeanclaudegrini.name', false);
            $job = getValueFromJson('jeanclaudegrini.job', false);
            $imgUrl = getValueFromJson('jeanclaudegrini.image', false);
            $link = getValueFromJson('jeanclaudegrini.url', false);
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('guillaumemagrin.name', false);
            $job = getValueFromJson('guillaumemagrin.job', false);
            $imgUrl = getValueFromJson('guillaumemagrin.image', false);
            $link = getValueFromJson('guillaumemagrin.url', false);
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('henribraquet.name', false);
            $job = getValueFromJson('henribraquet.job', false);
            $imgUrl = getValueFromJson('henribraquet.image', false);
            $link = getValueFromJson('henribraquet.url', false);
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('alexandregiusto.name', false);
            $job = getValueFromJson('alexandregiusto.job', false);
            $imgUrl = getValueFromJson('alexandregiusto.image', false);
            $link = getValueFromJson('alexandregiusto.url', false);
            include 'components/card.php';
            ?>
        </div>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>
<!-- © AIMA DEVELOPPEMENT 2024 -->