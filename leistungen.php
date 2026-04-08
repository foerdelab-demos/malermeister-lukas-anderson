<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$page_title       = 'Leistungen | Malermeister Anderson Dinslaken';
$meta_description = 'Alle Malerleistungen von Malermeister Lukas Anderson in Dinslaken: Innenmalerei, Außenmalerei, Betonoptik, Tapezierarbeiten, Fassadengestaltung und mehr.';
$page_class       = 'page-leistungen';
$current_page     = 'leistungen';

require_once __DIR__ . '/partials/header.php';
require_once __DIR__ . '/partials/nav.php';
?>

<main id="main-content">

    <div class="page-hero">
        <div class="container page-hero__inner">
            <nav class="breadcrumb" aria-label="Brotkrümelnavigation">
                <a href="./">Startseite</a>
                <span class="breadcrumb__sep" aria-hidden="true">/</span>
                <span aria-current="page">Leistungen</span>
            </nav>
            <h1 class="page-hero__title">Unsere Leistungen</h1>
            <p class="page-hero__sub">Kompetenz aus einer Hand – vom ersten Beratungsgespräch bis zur sauberen Übergabe.</p>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Was wir bieten</span>
                <h2>Das komplette Malerhandwerk</h2>
                <p>Als Meisterbetrieb in Dinslaken decken wir das gesamte Spektrum der Maler- und Lackiererarbeiten ab. Jede Leistung wird mit dem gleichen Qualitätsanspruch ausgeführt – vom einzelnen Zimmer bis zur Gesamtimmobilie.</p>
            </div>

            <div class="services-list">
                <?php foreach ($services as $s): ?>
                <article class="service-item">
                    <span class="badge badge--primary"><?= htmlspecialchars(ucfirst($s['category'])) ?></span>
                    <h2 class="service-item__title"><a href="<?= $s['href'] ?>"><?= htmlspecialchars($s['title']) ?></a></h2>
                    <p class="service-item__text"><?= htmlspecialchars($s['description']) ?></p>
                    <a href="<?= $s['href'] ?>" class="btn btn--outline btn--sm">Mehr erfahren</a>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="cta-section" aria-labelledby="leistungen-cta">
        <div class="container cta-section__inner">
            <span class="cta-section__label">Kostenlos &amp; unverbindlich</span>
            <h2 class="cta-section__title" id="leistungen-cta">Interesse an unseren Leistungen?</h2>
            <p class="cta-section__text">Kontaktieren Sie uns für ein kostenloses Beratungsgespräch. Wir besichtigen Ihr Objekt und erstellen Ihnen ein transparentes Angebot.</p>
            <div class="cta-section__actions">
                <a href="kostenvoranschlag.php" class="btn btn--accent btn--lg">Kostenvoranschlag anfordern</a>
                <a href="tel:<?= SITE_PHONE_RAW ?>" class="btn btn--outline-light">Jetzt anrufen: <?= SITE_PHONE ?></a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
