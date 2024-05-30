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
    <link rel="stylesheet" href="css/legalnotice.css">
</head>

<body>
    <header>
        <?php include ('components/header.php'); ?>
    </header>
    <main>
        <h1><?php getValueFromJson('title') ?></h1>
        <section>
            <h2><?php getValueFromJson('identity.title') ?></h2>
            <a href="https://annuaire-entreprises.data.gouv.fr/entreprise/aima-developpement-480635630" target="_blank"><b><?php getValueFromJson('identity.name') ?></b>AIMA DEVELOPPEMENT</a>
            <a href="https://annuaire-entreprises.data.gouv.fr/entreprise/aima-developpement-480635630" target="_blank"><b><?php getValueFromJson('identity.juridicalForm') ?></b>SA à conseil d'administration (s.a.i.)</a>
            <a href="https://annuaire-entreprises.data.gouv.fr/donnees-financieres/480635630" target="_blank"><b><?php getValueFromJson('identity.capital') ?></b>363 704€</a>
        </section>
        <section>
            <h2><?php getValueFromJson('coordonates.title') ?></h2>
            <a href="https://maps.app.goo.gl/b7SXyMAVKhYCKDrt5"><b><?php getValueFromJson('coordonates.address') ?></b>
                AIMA DEVELOPPEMENT,<br>
                227 avenue de la Lanterne,<br>
                Au Centre Antoine Lacassagne,<br>
                06200 Nice</a>
            <a href="mailto:contact@aima.fr"><b><?php getValueFromJson('coordonates.email') ?></b>contact@aima.fr</a>
            <a href="tel:+33493835841"><b><?php getValueFromJson('coordonates.phone') ?></b>+33 04 93 83 58 41</a>
        </section>
        <section>
            <h2><?php getValueFromJson('websitehosting.title') ?></h2>
            <a><b><?php getValueFromJson('websitehosting.name') ?></b></a>
            <a><b><?php getValueFromJson('websitehosting.socialReason') ?></b></a>
            <a><b><?php getValueFromJson('websitehosting.address') ?></b></a>
            <a><b><?php getValueFromJson('websitehosting.phone') ?></b></a>
        </section>
        <section>
            <h2><?php getValueFromJson('commercialActivity.title') ?></h2>
            <a href="https://annuaire-entreprises.data.gouv.fr/entreprise/aima-developpement-480635630" target="_blank"><b><?php getValueFromJson('commercialActivity.RCS') ?></b>480 635 630</a>
            <a href="https://annuaire-entreprises.data.gouv.fr/entreprise/aima-developpement-480635630" target="_blank"><b><?php getValueFromJson('commercialActivity.TVA') ?></b>FR59 480635630</a>
        </section>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>










<!-- Développé avec ❤️ par : www.noasecond.com. -->