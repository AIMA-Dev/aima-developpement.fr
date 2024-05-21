<div class="job">
    <div class="jobheader">
        <a><?php echo $name; ?></a>
        <?php if ($canDelete) {
            echo '<div>';
        } ?>
        <img class="develop" src="assets/img/icons/develop.svg" alt="Develop">
        <?php if ($canDelete) {
            echo '<img src="assets/img/icons/delete.svg" alt="Delete job" class="deleteJob" onclick="deleteJob()">';
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

<script>
    function deleteJob() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
            }
        };
        xhttp.open("GET", "../scripts/deleteJob.php?name=<?php echo $name; ?>", true);
        xhttp.send();
    }
</script>