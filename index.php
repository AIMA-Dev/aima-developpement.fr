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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/responsive/index.css">
    <link rel="stylesheet" href="css/components/workCard.css">
    <link rel="stylesheet" href="css/responsive/components/workCard.css">
    <link rel="stylesheet" href="css/components/3dModelViewer.css">
    <script src="js/components/3dModelViewer.js" defer></script>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.5.0/model-viewer.min.js"></script>
</head>

<body>
    <?php include 'components/scrollToTop.php'; ?>
    <header>
        <?php include 'components/header.php'; ?>
    </header>
    <main>
        <!-- <h1><?php //getValueFromJson('work.title'); ?></h1> -->
        <section id="work">
            <?php
                $title = getValueFromJson('work.expertise', false);
                $more = getValueFromJson('work.more', false);
                $img = "assets/img/work/expertise.webp";
                $url = "expertise.php";
                include 'components/workCard.php';
            ?>
            <?php
                $title = getValueFromJson('work.projects', false);
                $more = getValueFromJson('work.more', false);
                $img = "assets/img/work/projects.webp";
                $url = "projects.php";
                include 'components/workCard.php';
            ?>
            <?php
                $title = getValueFromJson('work.testbench', false);
                $more = getValueFromJson('work.more', false);
                $img = "assets/img/work/testbench.webp";
                $url = "testBench.php";
                include 'components/workCard.php';
            ?>
            <?php
                $title = getValueFromJson('work.numerictools', false);
                $more = getValueFromJson('work.more', false);
                $img = "assets/img/work/numerictools.webp";
                $url = "numericTools.php";
                include 'components/workCard.php';
            ?>
        </section>
        <?php
            // $model = "assets/3D/index.glb";
            // include 'components/3dModelViewer.php';
        ?>
        <h1><?php getValueFromJson('story'); ?></h1>
        <a><?php getValueFromJson('text'); ?></a>
        <section id="timeline">
            <ul>
                <li style="--accent-color:#17C9E6">
                    <div class="date"><?php getValueFromJson('timeline.1.date'); ?></div>
                    <div class="title"></div>
                    <div class="descr"><?php getValueFromJson('timeline.1.text'); ?></div>
                </li>
                <li style="--accent-color:#383D40">
                    <div class="date"><?php getValueFromJson('timeline.2.date'); ?></div>
                    <div class="title"></div>
                    <div class="descr"><?php getValueFromJson('timeline.2.text'); ?></div>
                </li>
                <li style="--accent-color:#5E031F">
                    <div class="date"><?php getValueFromJson('timeline.3.date'); ?></div>
                    <div class="title"></div>
                    <div class="descr"><?php getValueFromJson('timeline.3.text'); ?></div>
                </li>
                <li style="--accent-color:#17C9E6">
                    <div class="date"><?php getValueFromJson('timeline.4.date'); ?></div>
                    <div class="title"></div>
                    <div class="descr"><?php getValueFromJson('timeline.4.text'); ?></div>
                </li>
                <li style="--accent-color:#383D40">
                    <div class="date"><?php getValueFromJson('timeline.5.date'); ?></div>
                    <div class="title"></div>
                    <div class="descr"><?php getValueFromJson('timeline.5.text'); ?></div>
                </li>
                <li style="--accent-color:#5E031F">
                    <div class="date"><?php getValueFromJson('timeline.6.date'); ?></div>
                    <div class="title"></div>
                    <div class="descr"><?php getValueFromJson('timeline.6.text'); ?></div>
                </li>
                <li style="--accent-color:#17C9E6">
                    <div class="date"><?php getValueFromJson('timeline.7.date'); ?></div>
                    <div class="title"></div>
                    <div class="descr"><?php getValueFromJson('timeline.7.text'); ?></div>
                </li>
            </ul>
        </section>
    </main>
    <footer>
        <?php include 'components/footer.php'; ?>
    </footer>
</body>

</html>
<!-- © AIMA DEVELOPPEMENT 2024 -->