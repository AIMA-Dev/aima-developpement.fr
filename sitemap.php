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
</head>

<body>
    <header>
        <?php include ('components/header.php'); ?>
    </header>
    <main>
        <h1><?php getValueFromJson('description') ?></h1>
        <?php
        $sitemap = simplexml_load_file('sitemap.xml');
        foreach ($sitemap->url as $url) {
            echo '<h3>';
            echo '<a style="color: black;" href="'. explode('/', $url->loc)[1] .'">';
            $locParts = explode('/', $url->loc);
            $lastPart = end($locParts);
            $lastPart = pathinfo($lastPart, PATHINFO_FILENAME);
            echo $lastPart;
            echo '</a>';
            echo '</h3>';
        }
        ?>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>
<!-- © AIMA DEVELOPPEMENT 2024 -->