<?php
include_once 'components/functions.php';
session_start();
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';

if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header('Location: adminLogin.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <title><?php echo getValueFromJson('title'); ?></title>
    <?php include 'components/head.php'; ?>
</head>

<body>
    <header>
        <?php include ('components/header.php'); ?>
    </header>
    <main>
        <h1><?php getValueFromJson('description'); ?></h1>
        <section>
            <h2><?php getValueFromJson('maintenance.title'); ?></h2>
            <a><?php getValueFromJson('maintenance.status'); ?></a>
            <a><?php getValueFromJson('maintenance.toggle'); ?></a>
        </section>
        <section>
            <h2><?php getValueFromJson('phpmailer.title'); ?></h2>
            <a><?php getValueFromJson('phpmailer.email'); ?></a>
            <div>
                <a><?php getValueFromJson('phpmailer.changePassword'); ?></a>
                <input type="password" placeholder="<?php getValueFromJson('phpmailer.changePasswordPlaceholder'); ?>">
                <input type="submit" value="<?php getValueFromJson('phpmailer.submit'); ?>">
            </div>
            <div>
                <a><?php getValueFromJson('phpmailer.changeEmail'); ?></a>
                <input type="email" placeholder="<?php getValueFromJson('phpmailer.changeEmailPlaceholder'); ?>">
                <input type="submit" value="<?php getValueFromJson('phpmailer.submit'); ?>">
            </div>
        </section>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>