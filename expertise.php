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
    <link rel="stylesheet" href="css/expertise.css">
    <link rel="stylesheet" href="css/responsive/expertise.css">
    <link rel="stylesheet" href="css/components/expertiseCard.css">
    <link rel="stylesheet" href="css/responsive/components/expertiseCard.css">
    <script src="js/expertise.js" defer></script>
</head>

<body>
    <?php include ('components/scrollToTop.php'); ?>
    <header>
        <?php include ('components/header.php'); ?>
    </header>
    <main>
        <h1><?php getValueFromJson('expertise.title'); ?></h1>
        <section id="expertise">
            <div>
                <?php
                $side = '';
                $title = getValueFromJson('expertise.1.title', false);
                $text = getValueFromJson('expertise.1.text', false);
                $images = [
                    'assets/img/expertise/ionSource1.webp',
                    'assets/img/expertise/ionSource2.webp'
                ];
                include ('components/expertiseCard.php');
                ?>
                <?php
                $side = 'reversed';
                $title = getValueFromJson('expertise.2.title', false);
                $text = getValueFromJson('expertise.2.text', false);
                $images = [
                    'assets/img/expertise/cyclotron1.webp',
                    'assets/img/expertise/cyclotron2.webp'
                ];
                include ('components/expertiseCard.php');
                ?>
                <?php
                $side = '';
                $title = getValueFromJson('expertise.3.title', false);
                $text = getValueFromJson('expertise.3.text', false);
                $images = [
                    'assets/img/expertise/beamline1.webp',
                    'assets/img/expertise/beamline2.webp'
                ];
                include ('components/expertiseCard.php');
                ?>
            </div>
        </section>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>
<!-- © AIMA DEVELOPPEMENT 2024 -->