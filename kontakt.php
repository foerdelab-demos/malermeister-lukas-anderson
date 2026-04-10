<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$page_title       = 'Kontakt | Malermeister Anderson Dinslaken';
$meta_description = 'Kontakt zu Malermeister Anderson in Dinslaken. Adresse, Telefon, E-Mail, Öffnungszeiten und Anfahrt. Jetzt Kontakt aufnehmen.';
$page_class       = 'page-kontakt';
$current_page     = 'kontakt';

require_once __DIR__ . '/partials/header.php';
require_once __DIR__ . '/partials/nav.php';
?>

<main id="main-content">

    <!-- ============================================================
         Page Hero
    ============================================================ -->
    <div class="page-hero">
        <div class="container page-hero__inner">
            <nav class="breadcrumb" aria-label="Brotkrümelnavigation">
                <a href="./">Startseite</a>
                <span class="breadcrumb__sep" aria-hidden="true">/</span>
                <span aria-current="page">Kontakt</span>
            </nav>
            <h1 class="page-hero__title">Kontakt aufnehmen</h1>
            <p class="page-hero__sub">Schreiben Sie uns, rufen Sie an oder kommen Sie vorbei – wir freuen uns auf Ihre Nachricht.</p>
        </div>
    </div>

    <!-- ============================================================
         Kontaktdaten-Grid (3 Spalten)
    ============================================================ -->
    <section class="section" aria-labelledby="kontaktdaten-title">
        <div class="container">

            <div class="section-header">
                <span class="section-label">So erreichen Sie uns</span>
                <h2 id="kontaktdaten-title">Kontaktinformationen</h2>
            </div>

            <div class="contact-info-grid" style="grid-template-columns: repeat(3, 1fr);">

                <div class="contact-item info-card">
                    <span class="contact-item__label">Adresse</span>
                    <address class="contact-item__value" style="font-style: normal; line-height: 1.7;">
                        <strong><?= SITE_OWNER ?></strong><br>
                        Malermeister<br>
                        <?= SITE_ADDRESS_STREET ?><br>
                        <?= SITE_ADDRESS_ZIP ?> <?= SITE_ADDRESS_CITY ?>
                    </address>
                </div>

                <div class="contact-item info-card">
                    <span class="contact-item__label">Telefon</span>
                    <a href="tel:<?= SITE_PHONE_RAW ?>" class="contact-item__value" style="font-size: var(--text-xl); font-weight: 600;">
                        <?= SITE_PHONE ?>
                    </a>
                    <p style="margin-top: var(--space-3); color: var(--color-text-muted);">
                        Mo – Fr: 07:00 – 18:00 Uhr<br>
                        Sa: 08:00 – 13:00 Uhr
                    </p>
                </div>

                <div class="contact-item info-card">
                    <span class="contact-item__label">E-Mail</span>
                    <a href="mailto:<?= SITE_EMAIL ?>" class="contact-item__value" style="font-size: var(--text-lg); word-break: break-all;">
                        <?= SITE_EMAIL ?>
                    </a>
                    <p style="margin-top: var(--space-3); color: var(--color-text-muted);">
                        Antwort in der Regel innerhalb eines Werktages.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- ============================================================
         Formular + Karte / Öffnungszeiten
    ============================================================ -->
    <section class="section section--alt" aria-labelledby="kontakt-form-title">
        <div class="container">
            <div class="grid-2" style="align-items: start; gap: var(--space-12);">

                <!-- ===== Linke Spalte: Kontaktformular ===== -->
                <div>
                    <span class="section-label">Nachricht</span>
                    <h2 id="kontakt-form-title">Schreiben Sie uns</h2>
                    <p style="margin-bottom: var(--space-6);">
                        Nutzen Sie das Formular für allgemeine Anfragen. Für einen Kostenvoranschlag empfehlen
                        wir unser <a href="kontakt.php">Anfrage-Formular</a> mit mehr Details.
                        Alle Pflichtfelder sind mit * gekennzeichnet.
                    </p>

                    <form
                        class="contact-form"
                        method="post"
                        action=""
                        id="kontakt-form"
                        novalidate
                        aria-label="Kontaktformular"
                    >
                        <div class="form-group">
                            <label class="form-label" for="k-name">Name *</label>
                            <input
                                class="form-input"
                                type="text"
                                id="k-name"
                                name="name"
                                required
                                autocomplete="name"
                                placeholder="Vor- und Nachname"
                                minlength="2"
                                maxlength="120"
                            >
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label" for="k-email">E-Mail-Adresse *</label>
                                <input
                                    class="form-input"
                                    type="email"
                                    id="k-email"
                                    name="email"
                                    required
                                    autocomplete="email"
                                    placeholder="ihre@email.de"
                                    maxlength="160"
                                >
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="k-telefon">Telefon</label>
                                <input
                                    class="form-input"
                                    type="tel"
                                    id="k-telefon"
                                    name="telefon"
                                    autocomplete="tel"
                                    placeholder="0201 123456"
                                    maxlength="30"
                                >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="k-nachricht">Nachricht *</label>
                            <textarea
                                class="form-textarea"
                                id="k-nachricht"
                                name="nachricht"
                                required
                                rows="6"
                                minlength="10"
                                maxlength="2000"
                                placeholder="Ihr Anliegen …"
                            ></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label" style="display: flex; gap: var(--space-3); align-items: flex-start; cursor: pointer;">
                                <input
                                    type="checkbox"
                                    name="datenschutz"
                                    id="k-datenschutz"
                                    required
                                    style="margin-top: 3px; flex-shrink: 0;"
                                >
                                <span>
                                    Ich habe die <a href="datenschutz.php">Datenschutzerklärung</a> gelesen
                                    und stimme der Verarbeitung meiner Daten zu. *
                                </span>
                            </label>
                        </div>

                        <button type="submit" class="btn btn--primary btn--lg" style="width: 100%;">
                            Nachricht senden
                        </button>

                        <div class="form-success" role="alert" aria-live="polite" hidden>
                            Vielen Dank für Ihre Nachricht! Wir melden uns so schnell wie möglich bei Ihnen.
                        </div>

                    </form>
                </div>

                <!-- ===== Rechte Spalte: Karte + Öffnungszeiten ===== -->
                <div>

                    <span class="section-label">Anfahrt</span>
                    <h2>So finden Sie uns</h2>
                    <p style="margin-bottom: var(--space-6);">
                        Unser Betrieb befindet sich in <?= SITE_ADDRESS_CITY ?>. Besuche nach vorheriger
                        Terminvereinbarung jederzeit möglich.
                    </p>

                    <div class="map-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39851.44487797684!2d6.7!3d51.567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8a90f7bfb3657%3A0x4236659b80b9f40!2sDinslaken!5e0!3m2!1sde!2sde!4v1"
                            width="100%" height="350" style="border:0; border-radius: var(--radius-lg);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            title="Standort Malermeister Anderson in Dinslaken">
                        </iframe>
                    </div>

                    <div class="info-card" style="margin-top: var(--space-6);">
                        <h3>Öffnungszeiten</h3>
                        <table class="hours-table" aria-label="Öffnungszeiten">
                            <tbody>
                                <?php foreach ($company_info['hours'] as $tag => $zeit): ?>
                                <tr>
                                    <td><?= htmlspecialchars($tag) ?></td>
                                    <td><?= htmlspecialchars($zeit) ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <p style="margin-top: var(--space-4); font-size: var(--text-sm); color: var(--color-text-muted);">
                            Termine außerhalb der Öffnungszeiten sind nach Absprache möglich.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- ============================================================
         CTA
    ============================================================ -->
    <section class="section" aria-label="Kostenvoranschlag">
        <div class="container">
            <div class="cta-section">
                <div class="cta-section__inner">
                    <span class="cta-section__label">Kostenloses Angebot</span>
                    <h2 class="cta-section__title">Kostenvoranschlag anfordern</h2>
                    <p class="cta-section__text">
                        Beschreiben Sie Ihr Projekt und erhalten Sie innerhalb von 24 Stunden eine Rückmeldung.
                        Persönliche Besichtigung und detailliertes Angebot – kostenlos und unverbindlich.
                    </p>
                    <div class="cta-section__actions">
                        <a href="kontakt.php" class="btn btn--accent btn--lg">Zum Anfrage-Formular</a>
                        <a href="tel:<?= SITE_PHONE_RAW ?>" class="btn btn--outline-light btn--lg">
                            <?= SITE_PHONE ?> anrufen
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
