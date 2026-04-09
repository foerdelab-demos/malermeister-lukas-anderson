<?php
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/../includes/config.php';
}
?>
<footer class="site-footer">
    <div class="footer-main">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col footer-col--brand">
                    <a href="./" class="footer-logo" aria-label="<?= SITE_NAME ?> – Startseite">
                        <img src="assets/img/Malermeister Lukas Anderson Logo.png" alt="<?= SITE_NAME ?> Logo" class="footer-logo__img" width="1536" height="1024">
                    </a>
                    <p class="footer-tagline">
                        Ihr Malerbetrieb in Dinslaken und Umgebung. Persönlich, zuverlässig und mit Leidenschaft für jede Oberfläche.
                    </p>
                </div>

                <div class="footer-col">
                    <h3 class="footer-heading">Leistungen</h3>
                    <ul class="footer-nav" role="list">
                        <li><a href="innenmalerei.php">Innenmalerei</a></li>
                        <li><a href="aussenmalerei.php">Außenmalerei</a></li>
                        <li><a href="tapezierarbeiten.php">Tapezierarbeiten</a></li>
                        <li><a href="kreative-wandgestaltung.php">Kreative Wandgestaltung</a></li>
                        <li><a href="betonoptik.php">Betonoptik</a></li>
                        <li><a href="fassadengestaltung.php">Fassadengestaltung</a></li>
                        <li><a href="bodenverlegearbeiten.php">Bodenverlegearbeiten</a></li>
                        <li><a href="urlaubsservice.php">Urlaubsservice</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3 class="footer-heading">Navigation</h3>
                    <ul class="footer-nav" role="list">
                        <li><a href="./">Startseite</a></li>
                        <li><a href="leistungen.php">Alle Leistungen</a></li>
                        <li><a href="referenzen.php">Referenzen</a></li>
                        <li><a href="ueber-den-meister.php">Über den Meister</a></li>
                        <li><a href="kostenvoranschlag.php">Kostenvoranschlag</a></li>
                        <li><a href="kontakt.php">Kontakt</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3 class="footer-heading">Kontakt</h3>
                    <address class="footer-address">
                        <p>
                            <strong><?= SITE_OWNER ?></strong><br>
                            Malermeister
                        </p>
                        <p>
                            <?= SITE_ADDRESS_STREET ?><br>
                            <?= SITE_ADDRESS_ZIP ?> <?= SITE_ADDRESS_CITY ?>
                        </p>
                        <p>
                            <a href="tel:<?= SITE_PHONE_RAW ?>" class="footer-link--phone"><?= SITE_PHONE ?></a>
                        </p>
                        <p>
                            <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a>
                        </p>
                    </address>

                    <div class="footer-hours">
                        <strong>Erreichbarkeit:</strong>
                        <ul role="list">
                            <li>Mo – Fr: 07:00 – 18:00 Uhr</li>
                            <li>Sa: 08:00 – 13:00 Uhr</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p class="footer-copy">
                &copy; <?= date('Y') ?> <?= SITE_NAME ?>. Alle Rechte vorbehalten.
            </p>
            <ul class="footer-legal" role="list">
                <li><a href="impressum.php">Impressum</a></li>
                <li><a href="datenschutz.php">Datenschutz</a></li>
            </ul>
        </div>
    </div>
</footer>

<script src="assets/js/main.js"></script>
<?php require_once __DIR__ . '/demo.php'; ?>
</body>
</html>
