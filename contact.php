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
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/responsive/contact.css">
</head>

<body>
    <?php include ('components/scrollToTop.php'); ?>
    <header>
        <?php include ('components/header.php'); ?>
    </header>
    <main>
        <h1><?php getValueFromJson('description'); ?></h1>
        <form action="components/mail.php" method="post">
            <div id="formRight">
                <div>
                    <input autocomplete="on" type="text" id="firstname" name="firstname" placeholder="<?php getValueFromJson('form.firstname'); ?>" required>
                    <input autocomplete="on" type="text" id="lastname" name="lastname" placeholder="<?php getValueFromJson('form.lastname'); ?>" required>
                </div>
                <input autocomplete="on" type="email" id="email" name="email" placeholder="<?php getValueFromJson('form.email'); ?>" required>
                <input autocomplete="on" type="submit" value="<?php getValueFromJson('form.submit'); ?>">
            </div>
            <div id="formLeft">
                <input autocomplete="on" type="text" id="subject" name="subject" placeholder="<?php getValueFromJson('form.subject'); ?>" required>
                <textarea autocomplete="on" id="message" name="message" placeholder="<?php getValueFromJson('form.message'); ?>" required></textarea>
            </div>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>
<!-- © AIMA DEVELOPPEMENT 2024 -->