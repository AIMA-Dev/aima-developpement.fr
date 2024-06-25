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
    <link rel="stylesheet" href="css/components/projectHeader.css">
    <link rel="stylesheet" href="css/components/slideshow.css">
    <link rel="stylesheet" href="css/components/3dModelViewer.css">
    <script src="js/slideshow.js" defer></script>
    <script src="js/components/3dModelViewer.js" defer></script>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.5.0/model-viewer.min.js"></script>
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
        <?php
            $thumbnail = "assets/img/projects/aima-pn/thumbnail.webp";
            include ('components/projectHeader.php');
        ?>
        <?php
            $model = "assets/3D/aima-pn.glb";
            include ('components/3dModelViewer.php');
        ?>
        <a><?php getValueFromJson('intro'); ?></a>
        <?php
        $images = [
            "assets/img/projects/aima-pn/slideshow1.webp",
            "assets/img/projects/aima-pn/slideshow2.webp",
            "assets/img/projects/aima-pn/slideshow4.webp",
            "assets/img/projects/aima-pn/slideshow3.webp"
        ];
        $titles = [
            getValueFromJson('slideshow.1', false),
            getValueFromJson('slideshow.2', false),
            getValueFromJson('slideshow.3', false),
            getValueFromJson('slideshow.4', false)
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