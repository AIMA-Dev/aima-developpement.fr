<?php include_once 'components/functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php includeWithVariables('components/head.php', array('title' => 'AIMA Developpement')); ?>
</head>
<body>
    <header>
        <?php include ('components/header.php'); ?>
    </header>
    <main>
        <?php getValueFromJson('text') ?>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>    
</body>
</html>