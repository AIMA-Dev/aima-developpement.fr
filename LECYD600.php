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
    <link rel="stylesheet" href="css/responsive/components/projectHeader.css">
    <link rel="stylesheet" href="css/components/slideshow.css">
    <script src="js/slideshow.js" defer></script>
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
            $thumbnail = "assets/img/projects/lecyd600/thumbnail.webp";
            include ('components/projectHeader.php');
        ?>
        <a><?php getValueFromJson('text1'); ?></a>
        <br><br>
        <a><?php getValueFromJson('text2'); ?></a>
        <?php
        $images = [
            "assets/img/projects/lecyd600/slideshow1.webp",
            "assets/img/projects/lecyd600/slideshow2.webp"
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