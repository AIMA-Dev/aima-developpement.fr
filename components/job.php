<div class="job">
    <div class="jobheader">
        <a><?php echo $name; ?></a>
        <?php if ($canDelete) {
            echo '<div>';
        } ?>
        <img class="develop" src="assets/img/icons/develop.svg" alt="Develop">
        <?php if ($canDelete) {
            echo '<img src="assets/img/icons/delete.svg" alt="Delete job" class="deleteJob" onclick="window.location.href = \'/scripts/deleteJob.php?name=' . $name . '\';">';
            echo '</div>';
        } ?>
    </div>
    <div class="hiddenContent">
        <a><?php echo $description; ?></a>
        <div class="contact">
            <a class="applyLinkedin" href="<?php echo $linkedinUrl ?>" target="_blank"><img
                    src="assets/img/icons/linkedin_black.svg" alt="LinkedIn"><?php echo $linkedin; ?></a>
            <a class="sendEmail" href="mailto:stephanie.bernardini@aima.fr"><img src="assets/img/icons/mail.svg"
                    alt="Email"><?php echo $email ?></a>
        </div>
    </div>
</div>