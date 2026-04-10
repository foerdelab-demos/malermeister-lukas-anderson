<?php
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/../includes/config.php';
    require_once __DIR__ . '/../includes/data.php';
}
$current_page = $current_page ?? '';
?>
<header class="site-header" id="site-header">
    <div class="container">
        <nav class="site-nav" aria-label="Hauptnavigation">
            <a href="./" class="nav-logo" aria-label="<?= SITE_NAME ?> – Startseite">
                <img src="assets/img/Malermeister Lukas Anderson Logo.png" alt="<?= SITE_NAME ?> Logo" class="nav-logo__img" width="1536" height="1024">
            </a>

            <button class="nav-toggle" id="nav-toggle" aria-expanded="false" aria-controls="nav-menu" aria-label="Navigation öffnen">
                <span class="nav-toggle__bar"></span>
                <span class="nav-toggle__bar"></span>
                <span class="nav-toggle__bar"></span>
            </button>

            <div class="nav-menu" id="nav-menu" role="navigation">
                <ul class="nav-list" role="list">
                    <li class="nav-item<?= $current_page === 'index' ? ' nav-item--active' : '' ?>">
                        <a href="./" class="nav-link">Startseite</a>
                    </li>
                    <li class="nav-item nav-item--dropdown<?= $current_page === 'leistungen' ? ' nav-item--active' : '' ?>">
                        <a href="leistungen.php" class="nav-link nav-link--dropdown" aria-haspopup="true" aria-expanded="false">
                            Leistungen
                        </a>
                        <ul class="nav-dropdown" role="list" aria-label="Leistungen">
                            <li><a href="innenmalerei.php" class="nav-dropdown__link">Innenmalerei</a></li>
                            <li><a href="aussenmalerei.php" class="nav-dropdown__link">Außenmalerei</a></li>
                            <li><a href="tapezierarbeiten.php" class="nav-dropdown__link">Tapezierarbeiten</a></li>
                            <li><a href="kreative-wandgestaltung.php" class="nav-dropdown__link">Kreative Wandgestaltung</a></li>
                            <li><a href="betonoptik.php" class="nav-dropdown__link">Betonoptik</a></li>
                            <li><a href="fassadengestaltung.php" class="nav-dropdown__link">Fassadengestaltung</a></li>
                            <li><a href="bodenverlegearbeiten.php" class="nav-dropdown__link">Bodenverlegearbeiten</a></li>
                            <li><a href="urlaubsservice.php" class="nav-dropdown__link">Urlaubsservice</a></li>
                        </ul>
                    </li>
                    <li class="nav-item<?= $current_page === 'referenzen' ? ' nav-item--active' : '' ?>">
                        <a href="referenzen.php" class="nav-link">Referenzen</a>
                    </li>
                    <li class="nav-item<?= $current_page === 'ueber' ? ' nav-item--active' : '' ?>">
                        <a href="ueber-den-meister.php" class="nav-link">Über den Meister</a>
                    </li>
                    <li class="nav-item<?= $current_page === 'kontakt' ? ' nav-item--active' : '' ?>">
                        <a href="kontakt.php" class="nav-link">Kontakt</a>
                    </li>
                    <li class="nav-item nav-item--cta">
                        <a href="kontakt.php" class="btn btn--primary btn--sm">Kontakt</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
