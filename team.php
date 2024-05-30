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
        <h2><?php getValueFromJson('ouradvisors'); ?></h2>
        <h3><?php getValueFromJson('scientificadvisory'); ?></h3>
        <div class="classWrap">
            <?php
            $title = "Prof. Georfes Charpak (1924 - 2010)";
            $job = "Prix Nobel de Physique 1992";
            $imgUrl = "";
            $link = "";
            include 'components/card.php';
            ?>
            <?php
            $title = "Prof. François Demard";
            $job = "Directeur honoraire centre Antoine Lacassagne";
            $imgUrl = "";
            $link = "";
            include 'components/card.php';
            ?>
            <?php
            $title = "Dr. Renaud Guignard";
            $job = "Médecin nucléariste";
            $imgUrl = "";
            $link = "";
            include 'components/card.php';
            ?>
            <?php
            $title = "Gilles Viot";
            $job = "Expert radiochimiste";
            $imgUrl = "";
            $link = "";
            include 'components/card.php';
            ?>
            <?php
            $title = "Dr. Joel Hérault";
            $job = "Expert en physique médicale";
            $imgUrl = "";
            $link = "";
            include 'components/card.php';
            ?>
            <?php
            $title = "Prof. Jérome Doyen";
            $job = "Oncologue radiothérapeute";
            $imgUrl = "";
            $link = "";
            include 'components/card.php';
            ?>
        </div>
        <h3><?php getValueFromJson('technicalboard'); ?></h3>
        <div class="classWrap">
            <?php
            $title = "Jean-Claude Grini";
            $job = "Expert électronicien";
            $imgUrl = "";
            $link = "";
            include 'components/card.php';
            ?>
            <?php
            $title = "Guillaume Magrin";
            $job = "Expert accel. médicaux";
            $imgUrl = "";
            $link = "";
            include 'components/card.php';
            ?>
            <?php
            $title = "Henri Braquet";
            $job = "Expert comptabilité";
            $imgUrl = "";
            $link = "";
            include 'components/card.php';
            ?>
            <?php
            $title = "Alexandre Giusto";
            $job = "Ex chef BE Medicyc";
            $imgUrl = "";
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


// Développé avec ❤️ par : www.noasecond.com.

<!-- Développé avec ❤️ par : www.noasecond.com. -->