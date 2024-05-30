<?php
include_once ('./scripts/getSetting.php');
session_start();

//Language
$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$deviceLang = substr($language, 0, 2);
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = $deviceLang;
}
$lang = $_SESSION['lang'];

//Maintenance
$pagesAffectedByMaintenance = array('/index.php', '/projects.php', '/team.php', '/career.php', '/contact.php');
if(in_array($_SERVER['PHP_SELF'], $pagesAffectedByMaintenance)) {
    if(getSettingInDB('maintenance') == 'true') {
        header('Location: maintenance.php');
        exit;
    }
}
?>

<!--Développé avec ❤️ par : www.noasecond.com-->
<!-- Global Meta Tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#5E031F" />
<meta name="theme-color" media="(prefers-color-scheme: light)" content="#5E031F" />
<meta name="theme-color" media="(prefers-color-scheme: dark)" content="#5E031F" />
<meta name="description" content="Accelerator for Industrial and Medical Applications" />
<!-- OpenGraph / Facebook -->
<meta property="og:title" content="AIMA Developpement" />
<meta property="og:description" content="Accelerator for Industrial and Medical Applications" />
<meta property="og:image" content="http://www.aima-developpement.fr/assets/img/logo_3200x2400 - White - Glyphe.png" />
<meta property="og:image:alt" content="AIMA Developpement Logo" />
<!-- Twitter -->
<meta name="twitter:title" content="AIMA Developpement" />
<meta name="twitter:description" content="Accelerator for Industrial and Medical Applications" />
<meta name="twitter:url" content="https://www.aima-developpement.fr/" />
<meta name="twitter:image:src" content="http://www.aima-developpement.fr/assets/img/logo_3200x2400 - White - Glyphe.png" />
<meta name="twitter:image:alt" content="AIMA Developpement Logo" />
<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png">
<!-- CSS -->
<link rel="stylesheet" href="css/stylesheet.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/responsive/stylesheet.css">
<link rel="stylesheet" href="css/responsive/header.css">
<link rel="stylesheet" href="css/responsive/footer.css">
<!-- JavaScript -->
<script src="js/lang.js" defer></script>
<script src="js/dynamicTitle.js" defer></script>
<script src="js/header.js" defer></script>
<script src="js/footer.js" defer></script>
<script src="js/noRightClick.js" defer></script>
<!-- Ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
