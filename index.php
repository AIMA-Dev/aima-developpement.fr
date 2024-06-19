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
        <h1>Our story</h1>
        <a>AIMA Développement is designing, building and testing new cost-effective cyclotrons and dedicated beam lines
            for various medical and industrial applications since 2005. The expertise stems from the cyclotron
            laboratory of the Centre Antoine Lacassagne (CAL), that designed and built MEDICYC, the first hospital-based
            cyclotron facility in France for protontherapy. At this time, the MEDICYC project was led by Pierre
            Mandrillon. Before retiring from the CAL and the MEDICYC project, he founded AIMA, and is still its CEO.</a>
        <div>
            <?php
                $side = 'right';
                $title = getValueFromJson('expertise.1.title', false);
                $text = getValueFromJson('expertise.1.text', false);
                $images = [
                    'https://placehold.co/1x1',
                    'https://placehold.co/2x2',
                    'https://placehold.co/3x3'
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
<!-- Développé par Noa Second -->