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
        <?php
            for ($i = 0; $i < 5; $i++) {
                echo '<div>';
                echo '<a>' . getValueFromJson('tools.' . ($i + 1) . '.title') .'</a>';
                echo '<a>' . getValueFromJson('tools.' . ($i + 1) . '.description') .'</a>';
                echo '</div>';
            }
        ?>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>
<!-- © AIMA DEVELOPPEMENT 2024 -->