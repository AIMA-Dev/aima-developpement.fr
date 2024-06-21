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
    <link rel="stylesheet" href="css/minicyc.css">
    <link rel="stylesheet" href="css/components/slideshow.css">
    <link rel="stylesheet" href="css/components/projectHeader.css">
</head>

<body>
    <header>
        <?php
            $title = getValueFromJson('header.title', false);
            $description = getValueFromJson('header.description', false);
            include ('components/header.php');
        ?>
    </header>
    <main>
        <?php include ('components/projectHeader.php'); ?>
        <a><?php getValueFromJson('intro'); ?></a>
        <a><?php getValueFromJson('elements.text'); ?></a>
        <div id="elements">
            <div>
                <img src="assets/img/tableofelements/Florine.svg" alt="Florin">
                <?php getValueFromJson('elements.fluorine'); ?>
            </div>
            <div>
                <img src="assets/img/tableofelements/Gallium.svg" alt="Gallium">
                <?php getValueFromJson('elements.gallium'); ?>
            </div>
            <div>
                <img src="assets/img/tableofelements/Nitrogen.svg" alt="Nitrogen">
                <?php getValueFromJson('elements.nitrogen'); ?>
            </div>
            <div>
                <img src="assets/img/tableofelements/Oxygen.svg" alt="Oxygen">
                <?php getValueFromJson('elements.oxygen'); ?>
            </div>
            <div>
                <img src="assets/img/tableofelements/Copper.svg" alt="Copper">
                <?php getValueFromJson('elements.copper'); ?>
            </div>
        </div>
        <?php
            $images = [
                "https://placehold.co/600x400/orange/white",
                "https://placehold.co/600x400/orange/white",
                "https://placehold.co/600x400/orange/white"
            ];
            $titles = [
                getValueFromJson('slideshow.1',false),
                getValueFromJson('slideshow.2',false),
                getValueFromJson('slideshow.3',false)
            ];
            include ('components/slideshow.php');
        ?>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>
<!-- © AIMA DEVELOPPEMENT 2024 -->