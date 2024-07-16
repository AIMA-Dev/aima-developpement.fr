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
    <link rel="stylesheet" href="css/projects.css">
    <link rel="stylesheet" href="css/components/slideshow.css">
    <link rel="stylesheet" href="css/components/3dModelViewer.css">
    <script src="js/slideshow.js" defer></script>
    <script src="js/components/3dModelViewer.js" defer></script>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.5.0/model-viewer.min.js"></script>
</head>

<body>
    <?php include ('components/scrollToTop.php'); ?>
    <header>
        <?php include ('components/header.php'); ?>
    </header>
    <main>
        <h1><?php getValueFromJson('description'); ?></h1>
        <a><?php getValueFromJson('text'); ?></a>
        <?php
            $model = "assets/3D/testBench.glb";
            include 'components/3dModelViewer.php';
        ?>
        <?php
            $images = [
                "assets/img/testBench/testBench1.webp",
                "assets/img/testBench/testBench2.webp",
                "assets/img/testBench/testBench3.webp"
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