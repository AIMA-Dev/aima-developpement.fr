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
    <link rel="stylesheet" href="css/projectCard.css">
</head>

<body>
    <header>
        <?php include ('components/header.php'); ?>
    </header>
    <main>
        <h1><?php getValueFromJson('cyclotrons.title'); ?></h1>
        <section id="cyclotronsWrap">
            <?php
                $image = "https://placehold.co/600x400/orange/white";
                $title = getValueFromJson('cyclotrons.1.title', false);
                $description = getValueFromJson('cyclotrons.1.description', false);
                $stat = getValueFromJson('cyclotrons.1.stat', false);
                $more = getValueFromJson('more', false);
                include ('components/projectCard.php');
            ?>
            <?php
                $image = "https://placehold.co/600x400/orange/white";
                $title = getValueFromJson('cyclotrons.2.title', false);
                $description = getValueFromJson('cyclotrons.2.description', false);
                $stat = getValueFromJson('cyclotrons.2.stat', false);
                $more = getValueFromJson('more', false);
                include ('components/projectCard.php');
            ?>
            <?php
                $image = "https://placehold.co/600x400/orange/white";
                $title = getValueFromJson('cyclotrons.3.title', false);
                $description = getValueFromJson('cyclotrons.3.description', false);
                $stat = getValueFromJson('cyclotrons.3.stat', false);
                $more = getValueFromJson('more', false);
                include ('components/projectCard.php');
            ?>
        </section>
        <h1><?php getValueFromJson('nuclear.title'); ?></h1>
        <?php
            $image = "https://placehold.co/600x400/orange/white";
            $title = getValueFromJson('nuclear.1.title', false);
            $description = getValueFromJson('nuclear.1.description', false);
            $stat = getValueFromJson('nuclear.1.stat', false);
            $more = getValueFromJson('more', false);
            include ('components/projectCard.php');
        ?>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>
<!-- © AIMA DEVELOPPEMENT 2024 -->