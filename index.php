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
    <script src="js/expertise.js" defer></script>
</head>

<body>
    <header>
        <?php include ('components/header.php'); ?>
    </header>
    <main>
        <h1><?php getValueFromJson('description'); ?></h1>
        <a><?php getValueFromJson('text'); ?></a>
        <div>
            <?php
                $side = 'right';
                $title = getValueFromJson('expertise.1.title', false);
                $text = getValueFromJson('expertise.1.text', false);
                $images = [
                    'https://placehold.co/100x100',
                    'https://placehold.co/200x200',
                    'https://placehold.co/300x300'
                ];
                include ('components/expertiseCard.php');
            ?>
            <?php
                $side = 'left';
                $title = getValueFromJson('expertise.2.title', false);
                $text = getValueFromJson('expertise.2.text', false);
                $images = [
                    'https://placehold.co/1x1'
                ];
                include ('components/expertiseCard.php');
            ?>
            <?php
                $side = 'right';
                $title = getValueFromJson('expertise.3.title', false);
                $text = getValueFromJson('expertise.3.text', false);
                $images = [
                    'https://placehold.co/1x1',
                    'https://placehold.co/2x2'
                ];
                include ('components/expertiseCard.php');
            ?>
        </div>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>
<!-- © AIMA DEVELOPPEMENT 2024 -->