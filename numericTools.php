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
    <link rel="stylesheet" href="css/numericTools.css">
    <link rel="stylesheet" href="css/components/slideshow.css">
    <script src="js/slideshow.js" defer></script>
    <script src="js/numericTools.js" defer></script>
</head>

<body>
    <?php include ('components/scrollToTop.php'); ?>
    <header>
        <?php include ('components/header.php'); ?>
    </header>
    <main>
        <h1><?php getValueFromJson('description'); ?></h1>
        <a><?php getValueFromJson('intro'); ?></a>
        <?php
            echo '<section>';
            echo '<h2>' . getValueFromJson('tools.1.title', false) .'</h2>';
            echo '<a>' . getValueFromJson('tools.1.description', false) .'</a>';
            $images = [
                "assets/img/numericTools/agora6D/slideshow2.webp",
                "assets/img/numericTools/agora6D/slideshow1.gif",
                "assets/img/numericTools/agora6D/slideshow3.webp",
                "assets/img/numericTools/agora6D/slideshow4.webp"
            ];
            $titles = [
                getValueFromJson('tools.1.slideshow.2', false),
                getValueFromJson('tools.1.slideshow.1', false),
                getValueFromJson('tools.1.slideshow.3', false),
                getValueFromJson('tools.1.slideshow.4', false)
            ];
            include ('components/slideshow.php');
            echo '</section>';
        ?>
        <?php
            echo '<section>';
            echo '<h2>' . getValueFromJson('tools.2.title', false) .'</h2>';
            echo '<a>' . getValueFromJson('tools.2.description', false) .'</a>';
            $images = [
                "assets/img/numericTools/cst/slideshow1.webp",
                "assets/img/numericTools/cst/slideshow2.webp",
                "assets/img/numericTools/cst/slideshow3.webp",
                "assets/img/numericTools/cst/slideshow4.webp"
            ];
            $titles = [
                getValueFromJson('tools.2.slideshow.1', false),
                getValueFromJson('tools.2.slideshow.2', false),
                getValueFromJson('tools.2.slideshow.3', false),
                getValueFromJson('tools.2.slideshow.4', false)
            ];
            include ('components/slideshow.php');
            echo '</section>';
        ?>
        <?php
            echo '<section>';
            echo '<h2>' . getValueFromJson('tools.3.title', false) .'</h2>';
            echo '<a>' . getValueFromJson('tools.3.description', false) .'</a>';
            $images = [
                "assets/img/numericTools/solidworks/slideshow1.webp",
                "assets/img/numericTools/solidworks/slideshow2.webp"
            ];
            $titles = [
                getValueFromJson('tools.3.slideshow.1', false),
                getValueFromJson('tools.3.slideshow.2', false)
            ];
            include ('components/slideshow.php');
            echo '</section>';
        ?>
        <?php
            echo '<section>';
            echo '<h2>' . getValueFromJson('tools.4.title', false) .'</h2>';
            echo '<a>' . getValueFromJson('tools.4.description', false) .'</a>';
            $images = [
                "assets/img/numericTools/codeaster/slideshow1.webp",
                "assets/img/numericTools/codeaster/slideshow2.webp",
                "assets/img/numericTools/codeaster/slideshow3.webp"
            ];
            $titles = [
                getValueFromJson('tools.4.slideshow.1', false),
                getValueFromJson('tools.4.slideshow.2', false),
                getValueFromJson('tools.4.slideshow.3', false)
            ];
            include ('components/slideshow.php');
            echo '</section>';
        ?>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>
<!-- © AIMA DEVELOPPEMENT 2024 -->