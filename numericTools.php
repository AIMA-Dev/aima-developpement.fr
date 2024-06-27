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
    <link rel="stylesheet" href="css/components/smallSlideshow.css">
    <script src="js/components/smallSlideshow.js" defer></script>
    <?php include 'components/head.php'; ?>
</head>

<body>
    <header>
        <?php include ('components/header.php'); ?>
    </header>
    <main>
        <?php
            for ($i = 0; $i < 4; $i++) {
                echo '<section>';
                echo '<a>' . getValueFromJson('tools.' . ($i + 1) . '.title', false) .'</a>';
                echo '<a>' . getValueFromJson('tools.' . ($i + 1) . '.description', false) .'</a>';
                $images = [
                    "assets/img/projects/minicyc/slideshow1.webp",
                    "assets/img/projects/minicyc/slideshow2.webp",
                    "assets/img/projects/minicyc/slideshow2.webp"
                ];
                $titles = [
                    "11111111",
                    "11111111",
                    "11111111"
                ];
                include 'components/smallSlideshow.php';
                echo '</section>';
            }
        ?>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>
<!-- © AIMA DEVELOPPEMENT 2024 -->