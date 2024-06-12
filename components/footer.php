<div id="footerTop">
    <div id="left">
        <div id="footerLogo">
            <img src="/assets/img/brand/logo_3200x2400 - White - Glyphe.webp" alt="Logo">
            <p>
                <b>A</b>ccelerator for<br>
                <b>I</b>ndustrial and<br>
                <b>M</b>edical<br>
                <b>A</b>pplications
            </p>
        </div>
        <hr>
        <div id="footerContact">
            <a>Contact</a>
            <a href="www.linkedin.com/company/aima-developpement">
                <img src="/assets/img/icons/linkedin.svg" alt="linkedin">
                @aima-developpement
            </a>
            <a href="mailto:contact@aima.fr">
                <img src="/assets/img/icons/mail.svg" alt="mail">
                contact@aima.fr
            </a>
            <a href="tel:+33493835841">
                <img src="/assets/img/icons/phone.svg" alt="phone">
                +33 (0)4 93 83 58 41
            </a>
        </div>
    </div>
    <div id="right">
        <p>
            Laboratoire du Cyclotron<br>
            227, avenue de la Lanterne<br>
            06200 Nice<br>
            France
        </p>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d767.9851542637776!2d7.211413170460676!3d43.68714503905906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cdd1afe47c98a5%3A0x1d84bef1768de680!2sAima%20Developpement!5e0!3m2!1sfr!2sfr!4v1715074041810!5m2!1sfr!2sfr"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<div id="footerBottom">
    <a href="https://annuaire-entreprises.data.gouv.fr/entreprise/aima-developpement-480635630">© AIMA DEVELOPPEMENT 2024</a>
    <div>
        <a href="personaldatas.php"><?php getValueFromJson('personaldatas'); ?></a>
        <a>&nbsp;|&nbsp;</a>
        <a href="legalnotice.php"><?php getValueFromJson('legalnotice'); ?></a>
        <a>&nbsp;|&nbsp;</a>
        <a href="sitemap.xml"><?php getValueFromJson('sitemap'); ?></a>
    </div>
    <div>
        <a id="themeSwitch"><img src="/assets/img/icons/settings_brightness.svg" alt="Toggle Dark/Light Theme"></a>
        <select name="lang" id="lang">
            <option value="en" <?php if ($_SESSION['lang'] == 'en') echo 'selected'; ?>>en 🇬🇧</option>
            <option value="fr" <?php if ($_SESSION['lang'] == 'fr') echo 'selected'; ?>>fr 🇫🇷</option>
            <option value="de" <?php if ($_SESSION['lang'] == 'de') echo 'selected'; ?>>de 🇩🇪</option>
            <option value="es" <?php if ($_SESSION['lang'] == 'es') echo 'selected'; ?>>es 🇪🇸</option>
            <option value="it" <?php if ($_SESSION['lang'] == 'it') echo 'selected'; ?>>it 🇮🇹</option>
        </select>
    </div>
</div>
<!-- Développé avec ❤️ par : www.noasecond.com. -->