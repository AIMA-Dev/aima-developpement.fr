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
    <link rel="stylesheet" href="css/responsive/minicyc.css">
    <link rel="stylesheet" href="css/components/projectHeader.css">
    <link rel="stylesheet" href="css/responsive/components/projectHeader.css">
    <link rel="stylesheet" href="css/components/slideshow.css">
    <link rel="stylesheet" href="css/components/3dModelViewer.css">
    <script src="js/slideshow.js" defer></script>
    <script src="js/components/3dModelViewer.js" defer></script>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.5.0/model-viewer.min.js"></script>
</head>

<body>
    <?php include ('components/scrollToTop.php'); ?>
    <header>
        <?php
        $title = getValueFromJson('header.title', false);
        $description = getValueFromJson('header.description', false);
        include ('components/header.php');
        ?>
    </header>
    <main>
        <?php
        $thumbnail = "assets/img/projects/minicyc/thumbnail.webp";
        include ('components/projectHeader.php');
        ?>
        <?php
        $model = "assets/3D/minicyc.glb";
        include ('components/3dModelViewer.php');
        ?>
        <a><?php getValueFromJson('intro'); ?></a>
        <!-- <div id="details">
            <img id="desktop" src="assets/img/projects/minicyc/details.svg" alt="Details">
            <img id="mobile" src="assets/img/projects/minicyc/details_mobile.svg" alt="Details">
        </div> -->
        <a><?php getValueFromJson('elements.text'); ?></a>
        <div id="elements">
            <div>
                <img src="assets/img/tableofelements/Fluorine.svg" alt="Fluorine">
                <a><?php getValueFromJson('elements.fluorine'); ?></a>
            </div>
            <div>
                <img src="assets/img/tableofelements/Gallium.svg" alt="Gallium">
                <a><?php getValueFromJson('elements.gallium'); ?></a>
            </div>
            <div>
                <img src="assets/img/tableofelements/Carbon.svg" alt="Carbon">
                <a><?php getValueFromJson('elements.carbon'); ?></a>
            </div>
            <div>
                <img src="assets/img/tableofelements/Nitrogen.svg" alt="Nitrogen">
                <a><?php getValueFromJson('elements.nitrogen'); ?></a>
            </div>
            <div>
                <img src="assets/img/tableofelements/Oxygen.svg" alt="Oxygen">
                <a><?php getValueFromJson('elements.oxygen'); ?></a>
            </div>
            <!-- <div>
                <img src="assets/img/tableofelements/Copper.svg" alt="Copper">
                <a><?php getValueFromJson('elements.copper'); ?></a>
            </div> -->
        </div>
        <?php
        $images = [
            "assets/img/projects/minicyc/slideshow1.webp",
            "assets/img/projects/minicyc/slideshow2.webp"
        ];
        $titles = [
            getValueFromJson('slideshow.1', false),
            getValueFromJson('slideshow.2', false)
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