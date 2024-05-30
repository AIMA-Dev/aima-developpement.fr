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
    <meta name="robots" content="noindex, nofollow">
    <title><?php getValueFromJson('title'); ?></title>
    <?php include 'components/head.php'; ?>
    <link rel="stylesheet" href="css/adminLogin.css">
    <link rel="stylesheet" href="css/responsive/adminLogin.css">
</head>

<body>
    <header>
        <?php include ('components/header.php'); ?>
    </header>
    <main>
        <form action="scripts/adminAuth.php" method="POST">
            <label for="username"><?php getValueFromJson('form.username'); ?></label>
            <input type="text" id="username" name="username" placeholder="<?php getValueFromJson('form.username'); ?>">
            <label for="password"><?php getValueFromJson('form.password'); ?></label>
            <input type="password" id="password" name="password" placeholder="<?php getValueFromJson('form.password'); ?>">
            <button type="submit"><?php getValueFromJson('form.submit'); ?></button>
        </form>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>








<!-- Développé avec ❤️ par : www.noasecond.com. -->