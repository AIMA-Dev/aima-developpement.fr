<?php
include_once 'scripts/lang.php';
$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$deviceLang = substr($language, 0, 2);

session_start();
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : $deviceLang;

if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header('Location: adminLogin.php');
    exit;
}

include ('scripts/getSetting.php');
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta name="robots" content="noindex, nofollow">
    <title><?php echo getValueFromJson('title'); ?></title>
    <?php include 'components/head.php'; ?>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/responsive/admin.css">
    <script src="js/admin.js" defer></script>
    <script src="js/job.js" defer></script>
</head>

<body>
    <header>
        <?php include ('components/header.php'); ?>
    </header>
    <main>
        <h1><?php getValueFromJson('description'); ?></h1>
        <!-- Maintenance -->
        <section>
            <h2><?php getValueFromJson('maintenance.title'); ?></h2>
            <div>
                <a><?php getValueFromJson('maintenance.status'); ?></a>
                <a><b><?php echo getSettingInDB('maintenance'); ?></b></a>
            </div>
            <div>
                <a><?php getValueFromJson('maintenance.toggle'); ?></a>
                <label class="switch">
                    <input id="toggleMaintenance" type="checkbox" <?php echo (getSettingInDB('maintenance') == 'true' ? 'checked' : ''); ?>>
                    <span class="slider round"></span>
                </label>
            </div>
        </section>
        <!-- PHPMailer -->
        <section>
            <h2><?php getValueFromJson('phpmailer.title'); ?></h2>
            <div>
                <a><?php getValueFromJson('phpmailer.email'); ?></a>
                <a><b><?php echo getSettingInDB('phpmailerEmail'); ?></b></a>
            </div>
            <div>
                <a><?php getValueFromJson('phpmailer.changeEmail'); ?></a>
                <form action="scripts/setSetting.php" method="POST">
                    <input type="email" name="value"
                        placeholder="<?php getValueFromJson('phpmailer.changeEmailPlaceholder'); ?>">
                    <input type="submit" value="<?php getValueFromJson('phpmailer.submit'); ?>">
                    <input type="hidden" name="setting" value="phpmailerEmail">
                </form>
            </div>
            <div>
                <a><?php getValueFromJson('phpmailer.changePassword'); ?></a>
                <form action="scripts/setSetting.php" method="POST">
                    <input type="password" name="value"
                        placeholder="<?php getValueFromJson('phpmailer.changePasswordPlaceholder'); ?>">
                    <input type="submit" value="<?php getValueFromJson('phpmailer.submit'); ?>">
                    <input type="hidden" name="setting" value="phpmailerPassword">
                </form>
            </div>
            <div>
                <a><?php getValueFromJson('phpmailer.host'); ?></a>
                <a><b><?php echo getSettingInDB('phpmailerHost'); ?></b></a>
            </div>
            <div>
                <a><?php getValueFromJson('phpmailer.changeHost'); ?></a>
                <form action="scripts/setSetting.php" method="POST">
                    <input type="text" name="value"
                        placeholder="<?php getValueFromJson('phpmailer.changeHostPlaceholder'); ?>">
                    <input type="submit" value="<?php getValueFromJson('phpmailer.submit'); ?>">
                    <input type="hidden" name="setting" value="phpmailerHost">
                </form>
            </div>
            <div>
                <a><?php getValueFromJson('phpmailer.port'); ?></a>
                <a><b><?php echo getSettingInDB('phpmailerPort'); ?></b></a>
            </div>
            <div>
                <a><?php getValueFromJson('phpmailer.changePort'); ?></a>
                <form action="scripts/setSetting.php" method="POST">
                    <input type="number" name="value"
                        placeholder="<?php getValueFromJson('phpmailer.changePortPlaceholder'); ?>">
                    <input type="submit" value="<?php getValueFromJson('phpmailer.submit'); ?>">
                    <input type="hidden" name="setting" value="phpmailerPort">
                </form>
            </div>
        </section>
        <!-- Jobs -->
        <section id="jobs">
            <h2><?php getValueFromJson('jobs.title'); ?></h2>
            <div>
                <a><?php getValueFromJson('jobs.jobList') ?></a>
                <div id="jobsWrap">
                    <?php
                    try {
                        include_once 'scripts/connectDB.php';
                        $conn = connectToDB();
                        $query = "SELECT * FROM jobs";
                        $result = mysqli_query($conn, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $name = $row['name'];
                                $description = $row['description'];
                                $linkedinUrl = $row['linkedin'];
                                if (empty($linkedinUrl)) {
                                    $linkedinUrl = 'https://www.linkedin.com/company/aima-developpement/jobs/';
                                }
                                $linkedin = getValueFromJson('jobs.linkedin', false);
                                $email = getValueFromJson('jobs.email', false);
                                $canDelete = true;
                                include 'components/job.php';
                            }
                        } else {
                            echo '<div class="alert"><a>' . getValueFromJson("jobs.noJobs", false) . '</a></div>';
                        }
                        mysqli_close($conn);
                    } catch (Exception $e) {
                        echo "An error occurred: " . $e->getMessage();
                    }
                    ?>
                </div>
            </div>
            <div>
                <a><?php getValueFromJson('jobs.addJob') ?></a>
                <form action="scripts/adminJobs.php" method="POST">
                    <input type="text" name="name" placeholder="<?php getValueFromJson('jobs.form.title') ?>">
                    <textarea name="description"
                        placeholder="<?php getValueFromJson('jobs.form.description') ?>"></textarea>
                    <input name="linkedinUrl" type="text"
                        placeholder="<?php getValueFromJson('jobs.form.linkedinUrl') ?>">
                    <input type="submit" value="<?php getValueFromJson('jobs.form.submit') ?>">
                </form>
            </div>
        </section>
        <!-- LogOut -->
        <section>
            <h2><?php getValueFromJson('session.title'); ?></h2>
            <form action="scripts/adminLogOut.php" method="POST">
                <input type="submit" name="end_session" value="<?php getValueFromJson('session.logout') ?>">
            </form>
        </section>
    </main>
    <footer>
        <?php include ('components/footer.php'); ?>
    </footer>
</body>

</html>


// Développé avec ❤️ par : www.noasecond.com.

<!-- Développé avec ❤️ par : www.noasecond.com. -->