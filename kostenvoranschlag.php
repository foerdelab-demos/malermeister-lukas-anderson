<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$page_title       = 'Kostenvoranschlag anfragen | Malermeister Anderson Dinslaken';
$meta_description = 'Kostenlosen Kostenvoranschlag anfordern bei Malermeister Anderson in Dinslaken. Persönliche Besichtigung, transparentes Angebot, schnelle Antwort.';
$page_class       = 'page-kva';
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
                <span aria-current="page">Kostenvoranschlag anfragen</span>
            </nav>
            <h1 class="page-hero__title">Kostenlosen Kostenvoranschlag anfordern</h1>
            <p class="page-hero__sub">Beschreiben Sie Ihr Vorhaben kurz – ich melde mich innerhalb von 24 Stunden und vereinbare einen kostenlosen Besichtigungstermin.</p>
        </div>
    </div>

    <!-- ============================================================
         Formular + Prozess-Erläuterung
    ============================================================ -->
    <section class="section" aria-labelledby="kva-form-title">
        <div class="container">
            <div class="grid-2" style="align-items: start; gap: var(--space-12);">

                <!-- ===== Linke Spalte: Formular ===== -->
                <div>
                    <span class="section-label">Anfrage</span>
                    <h2 id="kva-form-title">Ihre Anfrage</h2>
                    <p style="margin-bottom: var(--space-6);">
                        Füllen Sie das Formular aus – je mehr Details Sie angeben, desto präziser kann ich
                        Ihr erstes Angebot vorbereiten. Alle Pflichtfelder sind mit * gekennzeichnet.
                    </p>

                    <form
                        class="contact-form"
                        method="post"
                        action=""
                        id="kva-form"
                        novalidate
                        aria-label="Kostenvoranschlag anfordern"
                    >
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label" for="kva-nachname">Nachname *</label>
                                <input
                                    class="form-input"
                                    type="text"
                                    id="kva-nachname"
                                    name="nachname"
                                    required
                                    autocomplete="family-name"
                                    placeholder="Mustermann"
                                    minlength="2"
                                    maxlength="80"
                                >
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="kva-vorname">Vorname *</label>
                                <input
                                    class="form-input"
                                    type="text"
                                    id="kva-vorname"
                                    name="vorname"
                                    required
                                    autocomplete="given-name"
                                    placeholder="Max"
                                    minlength="2"
                                    maxlength="80"
                                >
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label" for="kva-email">E-Mail-Adresse *</label>
                                <input
                                    class="form-input"
                                    type="email"
                                    id="kva-email"
                                    name="email"
                                    required
                                    autocomplete="email"
                                    placeholder="max@beispiel.de"
                                    maxlength="160"
                                >
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="kva-telefon">Telefon</label>
                                <input
                                    class="form-input"
                                    type="tel"
                                    id="kva-telefon"
                                    name="telefon"
                                    autocomplete="tel"
                                    placeholder="0201 123456"
                                    maxlength="30"
                                >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="kva-leistung">Gewünschte Leistung *</label>
                            <select
                                class="form-select"
                                id="kva-leistung"
                                name="leistung"
                                required
                            >
                                <option value="" disabled selected>Bitte wählen …</option>
                                <option value="innenmalerei">Innenmalerei</option>
                                <option value="aussenmalerei">Außenmalerei</option>
                                <option value="tapezierarbeiten">Tapezierarbeiten</option>
                                <option value="kreative-wandgestaltung">Kreative Wandgestaltung</option>
                                <option value="betonoptik">Betonoptik</option>
                                <option value="fassadengestaltung">Fassadengestaltung</option>
                                <option value="bodenverlegearbeiten">Bodenverlegearbeiten</option>
                                <option value="urlaubsservice">Urlaubsservice</option>
                                <option value="sonstiges">Sonstiges</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="kva-adresse">Objekt / Adresse</label>
                            <input
                                class="form-input"
                                type="text"
                                id="kva-adresse"
                                name="adresse"
                                autocomplete="street-address"
                                placeholder="z. B. Musterstraße 5, 46537 Dinslaken"
                                maxlength="200"
                            >
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="kva-flaeche">
                                Ungefähre Fläche in m²
                                <span class="form-notice">(optional)</span>
                            </label>
                            <input
                                class="form-input"
                                type="text"
                                id="kva-flaeche"
                                name="flaeche"
                                placeholder="z. B. 60 m²"
                                maxlength="30"
                            >
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="kva-zeitraum">Gewünschter Zeitraum</label>
                            <input
                                class="form-input"
                                type="text"
                                id="kva-zeitraum"
                                name="zeitraum"
                                placeholder="z. B. Oktober 2025 oder so bald wie möglich"
                                maxlength="100"
                            >
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="kva-beschreibung">Projektbeschreibung *</label>
                            <textarea
                                class="form-textarea"
                                id="kva-beschreibung"
                                name="beschreibung"
                                required
                                rows="6"
                                minlength="10"
                                maxlength="2000"
                                placeholder="Beschreiben Sie Ihr Vorhaben: Was soll gemacht werden? In welchem Zustand sind die Flächen? Gibt es besondere Anforderungen?"
                            ></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label" style="display: flex; gap: var(--space-3); align-items: flex-start; cursor: pointer;">
                                <input
                                    type="checkbox"
                                    name="datenschutz"
                                    id="kva-datenschutz"
                                    required
                                    style="margin-top: 3px; flex-shrink: 0;"
                                >
                                <span>
                                    Ich habe die <a href="datenschutz.php">Datenschutzerklärung</a> gelesen
                                    und stimme der Verarbeitung meiner Daten zur Bearbeitung meiner Anfrage zu. *
                                </span>
                            </label>
                        </div>

                        <button type="submit" class="btn btn--primary btn--lg" style="width: 100%;">
                            Kostenvoranschlag anfordern
                        </button>

                        <div class="form-success" role="alert" aria-live="polite" hidden>
                            Vielen Dank für Ihre Anfrage! Wir melden uns innerhalb von 24 Stunden bei Ihnen.
                        </div>

                    </form>
                </div>

                <!-- ===== Rechte Spalte: Prozess + Kontakt ===== -->
                <div>
                    <span class="section-label">So läuft es ab</span>
                    <h2>Vom Formular zum fertigen Angebot</h2>
                    <p style="margin-bottom: var(--space-8);">
                        Vier einfache Schritte von Ihrer ersten Kontaktaufnahme bis zum Beginn der Arbeiten –
                        transparent und ohne Überraschungen.
                    </p>

                    <ol class="process-steps" aria-label="Ablauf der Auftragsabwicklung">

                        <li class="process-step">
                            <span class="process-step__number" aria-hidden="true">1</span>
                            <div>
                                <h3 class="process-step__title">Anfrage senden</h3>
                                <p class="process-step__text">
                                    Füllen Sie das Formular aus oder rufen Sie direkt an. Je mehr Details Sie
                                    angeben, desto gezielter kann ich mich auf Ihren Besichtigungstermin vorbereiten.
                                </p>
                            </div>
                        </li>

                        <li class="process-step">
                            <span class="process-step__number" aria-hidden="true">2</span>
                            <div>
                                <h3 class="process-step__title">Persönliche Besichtigung</h3>
                                <p class="process-step__text">
                                    Ich komme persönlich zu Ihnen und schaue mir die Situation vor Ort an.
                                    Dabei besprechen wir gemeinsam den Umfang, Materialwünsche und Ihren Wunschtermin.
                                    Die Besichtigung ist für Sie kostenlos und unverbindlich.
                                </p>
                            </div>
                        </li>

                        <li class="process-step">
                            <span class="process-step__number" aria-hidden="true">3</span>
                            <div>
                                <h3 class="process-step__title">Angebot erhalten</h3>
                                <p class="process-step__text">
                                    Sie erhalten ein detailliertes, schriftliches Angebot mit allen Leistungs­positionen
                                    offen aufgelistet. Kein Kleingedrucktes, keine pauschalen Sammelpositionen.
                                    Sie sehen genau, wofür Sie bezahlen.
                                </p>
                            </div>
                        </li>

                        <li class="process-step">
                            <span class="process-step__number" aria-hidden="true">4</span>
                            <div>
                                <h3 class="process-step__title">Beauftragung und Terminvereinbarung</h3>
                                <p class="process-step__text">
                                    Wenn das Angebot Ihren Vorstellungen entspricht, legen wir gemeinsam
                                    einen Starttermin fest. Ab da übernehme ich die komplette Koordination –
                                    Sie müssen sich um nichts kümmern.
                                </p>
                            </div>
                        </li>

                    </ol>

                    <div class="info-card" style="margin-top: var(--space-8);">
                        <h3>Direkter Kontakt</h3>
                        <p style="margin-bottom: var(--space-4);">
                            Sie erreichen mich auch direkt – per Telefon oder E-Mail. Ich antworte in der Regel
                            innerhalb eines Werktages.
                        </p>
                        <div class="contact-info-grid">
                            <div class="contact-item">
                                <span class="contact-item__label">Telefon</span>
                                <a href="tel:<?= SITE_PHONE_RAW ?>" class="contact-item__value">
                                    <?= SITE_PHONE ?>
                                </a>
                            </div>
                            <div class="contact-item">
                                <span class="contact-item__label">E-Mail</span>
                                <a href="mailto:<?= SITE_EMAIL ?>" class="contact-item__value">
                                    <?= SITE_EMAIL ?>
                                </a>
                            </div>
                            <div class="contact-item">
                                <span class="contact-item__label">Erreichbarkeit</span>
                                <span class="contact-item__value">Mo – Fr, 07:00 – 18:00 Uhr</span>
                            </div>
                            <div class="contact-item">
                                <span class="contact-item__label">Samstag</span>
                                <span class="contact-item__value">08:00 – 13:00 Uhr</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
