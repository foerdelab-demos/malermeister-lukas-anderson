<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$page_title       = 'Malermeister in Dinslaken – Qualität, die bleibt | Malermeister Anderson';
$meta_description = 'Malermeister Lukas Anderson in Dinslaken – Ihr regionaler Fachbetrieb für Innenmalerei, Außenmalerei, Betonoptik und Tapezierarbeiten. Kostenloser Kostenvoranschlag.';
$page_class       = 'page-home';
$current_page     = 'index';

require_once __DIR__ . '/partials/header.php';
require_once __DIR__ . '/partials/nav.php';
?>

<main id="main-content">

    <!-- ============================================================
         Hero
    ============================================================ -->
    <section class="hero" aria-labelledby="hero-title">
        <div class="hero__bg-pattern" aria-hidden="true"></div>
        <div class="container hero__inner">
            <div class="hero__content">
                <span class="hero__label">Meisterbetrieb in Dinslaken</span>
                <h1 class="hero__title" id="hero-title">
                    Malermeister in Dinslaken –<br>
                    <em>Qualität, die bleibt.</em>
                </h1>
                <p class="hero__subtitle">
                    Persönliche Handwerkskunst, hochwertige Materialien und über ein Jahrzehnt Erfahrung –
                    direkt aus Dinslaken für die Region.
                </p>
                <div class="hero__actions">
                    <a href="tel:<?= SITE_PHONE_RAW ?>" class="btn btn--accent btn--lg">
                        Jetzt anrufen: <?= SITE_PHONE ?>
                    </a>
                    <a href="kontakt.php" class="btn btn--outline-light btn--lg">
                        Kostenvoranschlag anfordern
                    </a>
                </div>
            </div>
            <div class="hero__portrait" aria-hidden="true">
                <img src="assets/img/Objekt%204.png" alt="" width="580" height="720" draggable="false">
            </div>
        </div>
    </section>

    <!-- ============================================================
         Trust Signals Bar
    ============================================================ -->
    <div class="trust-bar" aria-label="Vertrauenssignale">
        <div class="container">
            <ul class="trust-bar__list" role="list">
                <?php foreach ($trust_signals as $signal): ?>
                <li class="trust-bar__item">
                    <span class="trust-bar__label"><?= htmlspecialchars($signal['label']) ?></span>
                    <span class="trust-bar__detail"><?= htmlspecialchars($signal['detail']) ?></span>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <!-- ============================================================
         Services Overview
    ============================================================ -->
    <section class="section" aria-labelledby="services-title">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Leistungen</span>
                <h2 id="services-title">Was wir für Sie tun</h2>
                <p>Von der klassischen Innenmalerei bis zur modernen Betonoptik – wir bieten das komplette Spektrum der Malerarbeiten, ausgeführt vom Meister.</p>
            </div>
            <div class="services-grid">
                <?php foreach ($services as $service): ?>
                <article class="service-card">
                    <div class="service-card__icon" aria-hidden="true">
                        <?= getServiceIcon($service['icon']) ?>
                    </div>
                    <h3 class="service-card__title"><?= htmlspecialchars($service['title']) ?></h3>
                    <p class="service-card__text"><?= htmlspecialchars($service['short']) ?></p>
                    <a href="<?= $service['href'] ?>" class="service-card__link">
                        Mehr erfahren
                        <svg viewBox="0 0 16 16" aria-hidden="true"><path d="M3 8h10m-4-4l4 4-4 4"/></svg>
                    </a>
                </article>
                <?php endforeach; ?>
            </div>
            <div class="text-center mt-8">
                <a href="leistungen.php" class="btn btn--outline">Alle Leistungen im Überblick</a>
            </div>
        </div>
    </section>

    <!-- ============================================================
         Kreative Techniken (Betonoptik Focus)
    ============================================================ -->
    <section class="section section--alt" aria-labelledby="kreativ-title">
        <div class="container">
            <div class="about-block">
                <div class="about-image">
                    <img src="assets/images/betonoptik.jpg" alt="Betonoptik Dinslaken – moderner Industrial-Look für Wohnräume und Büros" loading="lazy" width="800" height="1200">
                </div>
                <div class="about-content">
                    <span class="section-label">Besondere Oberflächen</span>
                    <h2 id="kreativ-title">Betonoptik &amp; kreative Wandgestaltung</h2>
                    <p class="lead">Oberflächen, die Charakter haben und Geschichten erzählen.</p>
                    <p>
                        Die Betonoptik ist eine der faszinierendsten Techniken moderner Wandgestaltung. Mit speziellen Spachtelmassen und Versiegelungen erzeugen wir eine authentisch wirkende Betonoberfläche – ohne den Nachteil echter Rohbetonwände.
                    </p>
                    <p>
                        Darüber hinaus bieten wir ein breites Spektrum kreativer Wandgestaltung: Venezianischer Putz, Farbverläufe, Akzentwände und individuelle Strukturoberflächen. Jede Technik wird in Handarbeit umgesetzt und exakt auf Ihre Räumlichkeiten abgestimmt.
                    </p>
                    <ul class="checklist">
                        <li>Betonoptik für Wand und Boden</li>
                        <li>Venezianischer Stucco lustro</li>
                        <li>Strukturputze und Kalkfarben</li>
                        <li>Individuelle Farbkonzepte</li>
                        <li>Kostenlose Beratung und Mustervorlagen</li>
                    </ul>
                    <div class="btn-group mt-6">
                        <a href="betonoptik.php" class="btn btn--primary">Betonoptik entdecken</a>
                        <a href="kreative-wandgestaltung.php" class="btn btn--outline">Kreative Gestaltung</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         Gallery Preview
    ============================================================ -->
    <section class="section" aria-labelledby="gallery-title">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Referenzen</span>
                <h2 id="gallery-title">Einblicke in unsere Arbeit</h2>
                <p>Ausgewählte Projekte aus Dinslaken und Umgebung.</p>
            </div>
            <div class="gallery-grid">
                <?php
                $gallery_previews = [
                    ['alt' => 'Innenmalerei Dinslaken – helle Wohnküche nach Renovierung', 'cat' => 'Innenmalerei', 'label' => 'Innenmalerei', 'img' => 'wohnzimmer.jpg'],
                    ['alt' => 'Betonoptik Dinslaken – moderne Akzentwand im Wohnzimmer',  'cat' => 'Betonoptik',   'label' => 'Betonoptik',   'img' => 'betonoptik.jpg'],
                    ['alt' => 'Fassadengestaltung Dinslaken – renovierte Hausfassade',     'cat' => 'Fassade',     'label' => 'Fassade',      'img' => 'haus-fassade.jpg'],
                    ['alt' => 'Tapezierarbeiten Dinslaken – Designtapete im Schlafzimmer', 'cat' => 'Tapezieren',  'label' => 'Tapezieren',   'img' => 'tapete-design.jpg'],
                    ['alt' => 'Außenmalerei Dinslaken – frisch gestrichenes Holzwerk',     'cat' => 'Außenmalerei','label' => 'Außenmalerei',  'img' => 'haus-modern.jpg'],
                    ['alt' => 'Bodenverlegung Dinslaken – Vinylboden im Büro',             'cat' => 'Boden',       'label' => 'Bodenverlegung','img' => 'holzboden.jpg'],
                    ['alt' => 'Kreative Wandgestaltung – Venezianischer Putz',              'cat' => 'Kreativ',     'label' => 'Wandgestaltung','img' => 'wandgestaltung.jpg'],
                    ['alt' => 'Innenmalerei Dinslaken – frisch gemalter Flurbereich',      'cat' => 'Innenmalerei','label' => 'Innenmalerei',  'img' => 'flur.jpg'],
                ];
                foreach ($gallery_previews as $gitem):
                ?>
                <div class="gallery-item" data-lightbox="#" data-alt="<?= htmlspecialchars($gitem['alt']) ?>" data-caption="<?= htmlspecialchars($gitem['cat']) ?>" tabindex="0" role="button" aria-label="Bild vergrößern: <?= htmlspecialchars($gitem['cat']) ?>">
                    <img src="assets/images/<?= htmlspecialchars($gitem['img']) ?>" alt="<?= htmlspecialchars($gitem['alt']) ?>" loading="lazy" width="800" height="533">
                    <div class="gallery-item__overlay">
                        <span class="gallery-item__caption"><?= htmlspecialchars($gitem['label']) ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="text-center mt-8">
                <a href="referenzen.php" class="btn btn--outline">Alle Referenzen ansehen</a>
            </div>
        </div>
    </section>

    <!-- ============================================================
         About Section
    ============================================================ -->
    <section class="section section--alt" aria-labelledby="about-title">
        <div class="container">
            <div class="about-block about-block--reverse">
                <div class="about-content">
                    <span class="section-label">Über den Meister</span>
                    <h2 id="about-title">Lukas Anderson – Ihr Malermeister aus Dinslaken</h2>
                    <p class="lead">Handwerk, das von Herzen kommt.</p>
                    <p>
                        Als geprüfter Malermeister stehe ich persönlich für jedes Projekt. Von der ersten Beratung bis zur Abnahme bin ich Ihr direkter Ansprechpartner – kein Vertrieb, kein Subunternehmer, sondern echter Handwerkerstolz aus Dinslaken.
                    </p>
                    <p>
                        Mein Betrieb steht für sorgfältige Vorbereitung, pünktliche Ausführung und Materialien, bei denen ich keine Abstriche mache. Ich verwende ausschließlich Produkte namhafter Hersteller, die ich selbst getestet und geprüft habe.
                    </p>
                    <blockquote class="quote-block">
                        <p class="quote-block__text">"<?= SITE_MOTTO ?>"</p>
                        <cite class="quote-block__cite">– <?= SITE_OWNER ?>, Malermeister</cite>
                    </blockquote>
                    <a href="ueber-den-meister.php" class="btn btn--primary mt-4">Mehr über mich erfahren</a>
                </div>
                <div class="about-image">
                    <img src="assets/img/Firmen-Image-Profil-1-1605x2048.jpg" alt="Lukas Anderson – Malermeister aus Dinslaken, vor seinem Firmenfahrzeug" loading="lazy" width="1605" height="2048">
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         CTA Section
    ============================================================ -->
    <section class="cta-section" aria-labelledby="cta-title">
        <div class="container cta-section__inner">
            <span class="cta-section__label">Kostenfrei anfragen</span>
            <h2 class="cta-section__title" id="cta-title">Bereit für Ihren neuen Anstrich?</h2>
            <p class="cta-section__text">
                Fordern Sie jetzt Ihren kostenlosen Kostenvoranschlag an. Ich besichtige Ihr Objekt persönlich und erstelle Ihnen ein transparentes Angebot – ohne versteckte Kosten.
            </p>
            <div class="cta-section__actions">
                <a href="kontakt.php" class="btn btn--accent btn--lg">Kostenlosen Kostenvoranschlag anfordern</a>
                <a href="tel:<?= SITE_PHONE_RAW ?>" class="btn btn--outline-light">Direkt anrufen: <?= SITE_PHONE ?></a>
            </div>
        </div>
    </section>

    <!-- ============================================================
         Contact / Location Section
    ============================================================ -->
    <section class="section" aria-labelledby="contact-title">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Kontakt &amp; Anfahrt</span>
                <h2 id="contact-title">Finden Sie uns in Dinslaken</h2>
            </div>
            <div class="grid-2" style="align-items:start">
                <div>
                    <div class="contact-info-grid" style="grid-template-columns:1fr">
                        <div class="contact-item" style="margin-bottom:var(--space-5)">
                            <span class="contact-item__label">Adresse</span>
                            <span class="contact-item__value"><?= SITE_ADDRESS_FULL ?></span>
                        </div>
                        <div class="contact-item" style="margin-bottom:var(--space-5)">
                            <span class="contact-item__label">Telefon</span>
                            <span class="contact-item__value">
                                <a href="tel:<?= SITE_PHONE_RAW ?>"><?= SITE_PHONE ?></a>
                            </span>
                        </div>
                        <div class="contact-item" style="margin-bottom:var(--space-5)">
                            <span class="contact-item__label">E-Mail</span>
                            <span class="contact-item__value">
                                <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a>
                            </span>
                        </div>
                        <div class="contact-item">
                            <span class="contact-item__label">Erreichbarkeit</span>
                            <table class="hours-table" style="margin-top:var(--space-2)">
                                <?php foreach ($company_info['hours'] as $day => $hours): ?>
                                <tr>
                                    <td><?= htmlspecialchars($day) ?></td>
                                    <td><?= htmlspecialchars($hours) ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                    <div class="btn-group mt-8">
                        <a href="kontakt.php" class="btn btn--primary">Kontaktformular öffnen</a>
                        <a href="tel:<?= SITE_PHONE_RAW ?>" class="btn btn--outline">Jetzt anrufen</a>
                    </div>
                </div>
                <div class="map-wrapper">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39851.44487797684!2d6.7!3d51.567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8a90f7bfb3657%3A0x4236659b80b9f40!2sDinslaken!5e0!3m2!1sde!2sde!4v1"
                        width="100%" height="350" style="border:0; border-radius: var(--radius-lg);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        title="Standort Malermeister Anderson in Dinslaken">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>

<?php
function getServiceIcon(string $name): string {
    $icons = [
        'paint-roller' => '<svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2" y="4" width="14" height="8" rx="2"/><path d="M16 8h2a2 2 0 012 2v1a2 2 0 01-2 2h-2"/><path d="M9 14v6"/><path d="M7 20h4"/></svg>',
        'house'        => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 12L12 4l9 8"/><path d="M5 10v9a1 1 0 001 1h4v-4h4v4h4a1 1 0 001-1v-9"/></svg>',
        'layers'       => '<svg viewBox="0 0 24 24" aria-hidden="true"><polygon points="12 2 22 8.5 12 15 2 8.5"/><polyline points="2 15 12 21.5 22 15"/><polyline points="2 11.5 12 18 22 11.5"/></svg>',
        'sparkles'     => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3v3m0 12v3M3 12h3m12 0h3m-3.2-6.8l-2.1 2.1M8.3 15.7l-2.1 2.1m0-11.4l2.1 2.1m7.4 7.4l2.1 2.1"/><circle cx="12" cy="12" r="4"/></svg>',
        'cube'         => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>',
        'building'     => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 21h18"/><rect x="4" y="3" width="16" height="18"/><path d="M9 21V9h6v12"/><path d="M9 3v6"/><path d="M15 3v6"/></svg>',
        'grid'         => '<svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>',
        'calendar'     => '<svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>',
        'check'        => '<svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>',
        'phone'        => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.68 2 2 0 012-2.18H5.5a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.91 6.5a16 16 0 006.6 6.6l.38-1.15a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>',
    ];
    return $icons[$name] ?? $icons['check'];
}
?>
