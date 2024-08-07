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
    <?php include ('components/scrollToTop.php'); ?>
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
            $link = "https://www.linkedin.com/in/pierre-mandrillon-9676a8174";
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('matthieuconjat.name', false);
            $job = getValueFromJson('matthieuconjat.job', false);
            $imgUrl = getValueFromJson('matthieuconjat.image', false);
            $link = "https://www.linkedin.com/in/matthieu-conjat-ba1431128";
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('raphaeldevianne.name', false);
            $job = getValueFromJson('raphaeldevianne.job', false);
            $imgUrl = getValueFromJson('raphaeldevianne.image', false);
            $link = "https://www.linkedin.com/in/rapha%C3%ABl-devianne-3a3453170";
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('antoinezoude.name', false);
            $job = getValueFromJson('antoinezoude.job', false);
            $imgUrl = getValueFromJson('antoinezoude.image', false);
            $link = "https://www.linkedin.com/in/antoine-zoude-8b5608176";
            include 'components/card.php';
            ?>
        </div>
        <h2><?php getValueFromJson('ouradvisors'); ?></h2>
        <h3><?php getValueFromJson('steeringcommittee'); ?></h3>
        <div class="classWrap">
            <?php
            $title = getValueFromJson('francoisdemard.name', false);
            $job = getValueFromJson('francoisdemard.job', false);
            $imgUrl = getValueFromJson('francoisdemard.image', false);
            $link = "https://www.linkedin.com/in/fran%C3%A7ois-demard";
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('mauriceguerrin.name', false);
            $job = getValueFromJson('mauriceguerrin.job', false);
            $imgUrl = getValueFromJson('mauriceguerrin.image', false);
            $link = "";
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('fabienmandrillon.name', false);
            $job = getValueFromJson('fabienmandrillon.job', false);
            $imgUrl = getValueFromJson('fabienmandrillon.image', false);
            $link = "https://ch.linkedin.com/in/fabienmandrillon";
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('olivierlizontati.name', false);
            $job = getValueFromJson('olivierlizontati.job', false);
            $imgUrl = getValueFromJson('olivierlizontati.image', false);
            $link = "https://fr.linkedin.com/in/olivier-lizon-tati-0686332";
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('renaudguignard.name', false);
            $job = getValueFromJson('renaudguignard.job', false);
            $imgUrl = getValueFromJson('renaudguignard.image', false);
            $link = "https://www.linkedin.com/in/renaud-guignard-56389311";
            include 'components/card.php';
            ?>
        </div>
        <h3><?php getValueFromJson('scientificadvisory'); ?></h3>
        <div class="classWrap">
            <?php
            $title = getValueFromJson('georgescharpak.name', false);
            $job = getValueFromJson('georgescharpak.job', false);
            $imgUrl = getValueFromJson('georgescharpak.image', false);
            $link = "https://fr.wikipedia.org/wiki/Georges_Charpak";
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('renaudguignard.name', false);
            $job = getValueFromJson('renaudguignard.job', false);
            $imgUrl = getValueFromJson('renaudguignard.image', false);
            $link = "https://www.linkedin.com/in/renaud-guignard-56389311";
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('gillesviot.name', false);
            $job = getValueFromJson('gillesviot.job', false);
            $imgUrl = getValueFromJson('gillesviot.image', false);
            $link = "https://www.linkedin.com/in/gilles-viot-9a2b061a";
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('joelherault.name', false);
            $job = getValueFromJson('joelherault.job', false);
            $imgUrl = getValueFromJson('joelherault.image', false);
            $link = "https://www.linkedin.com/in/joel-herault-816a202b2";
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('alessandralombardi.name', false);
            $job = getValueFromJson('alessandralombardi.job', false);
            $imgUrl = getValueFromJson('alessandralombardi.image', false);
            $link = "https://www.researchgate.net/profile/Alessandra-Lombardi-6";
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('jeromedoyen.name', false);
            $job = getValueFromJson('jeromedoyen.job', false);
            $imgUrl = getValueFromJson('jeromedoyen.image', false);
            $link = "https://www.linkedin.com/in/j%C3%A9r%C3%B4me-doyen-40a91536";
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('jmhanounlevi.name', false);
            $job = getValueFromJson('jmhanounlevi.job', false);
            $imgUrl = getValueFromJson('jmhanounlevi.image', false);
            $link = "";
            include 'components/card.php';
            ?>
        </div>
        <h3><?php getValueFromJson('technicalboard'); ?></h3>
        <div class="classWrap">
            <?php
            $title = getValueFromJson('jeanclaudegrini.name', false);
            $job = getValueFromJson('jeanclaudegrini.job', false);
            $imgUrl = getValueFromJson('jeanclaudegrini.image', false);
            $link = "https://ieeexplore.ieee.org/author/37089608097";
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('guillaumemagrin.name', false);
            $job = getValueFromJson('guillaumemagrin.job', false);
            $imgUrl = getValueFromJson('guillaumemagrin.image', false);
            $link = "https://www.linkedin.com/in/guillaume-magrin-421917a3";
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('henribraquet.name', false);
            $job = getValueFromJson('henribraquet.job', false);
            $imgUrl = getValueFromJson('henribraquet.image', false);
            $link = "https://www.linkedin.com/in/henry-braquet-12289a13";
            include 'components/card.php';
            ?>
            <?php
            $title = getValueFromJson('alexandregiusto.name', false);
            $job = getValueFromJson('alexandregiusto.job', false);
            $imgUrl = getValueFromJson('alexandregiusto.image', false);
            $link = "";
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
