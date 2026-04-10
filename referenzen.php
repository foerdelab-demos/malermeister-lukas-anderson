<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$page_title       = 'Referenzen | Malermeister Anderson Dinslaken';
$meta_description = 'Referenzen und Projekte von Malermeister Anderson in Dinslaken. Innenmalerei, Außenmalerei, Betonoptik und mehr – Einblicke in unsere Arbeit.';
$page_class       = 'page-referenzen';
$current_page     = 'referenzen';

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
                <span aria-current="page">Referenzen</span>
            </nav>
            <h1 class="page-hero__title">Referenzen und abgeschlossene Projekte</h1>
            <p class="page-hero__sub">Einblicke in ausgewählte Arbeiten aus dem Bereich Innenmalerei, Außenmalerei, Betonoptik, Fassadengestaltung und Bodenverlegearbeiten.</p>
        </div>
    </div>

    <!-- ============================================================
         Galerie-Filter + Referenz-Cards
    ============================================================ -->
    <section class="section" aria-labelledby="referenzen-title">
        <div class="container">

            <div class="section-header">
                <span class="section-label">Projekte</span>
                <h2 id="referenzen-title">Ausgewählte Arbeiten</h2>
                <p>Alle Projekte wurden von <?= SITE_OWNER ?> persönlich betreut und ausgeführt.</p>
            </div>

            <div class="gallery-filter" role="group" aria-label="Projekte filtern">
                <button class="gallery-filter__btn gallery-filter__btn--active" data-filter="all" type="button">Alle</button>
                <button class="gallery-filter__btn" data-filter="innenmalerei" type="button">Innenmalerei</button>
                <button class="gallery-filter__btn" data-filter="aussenmalerei" type="button">Außenmalerei</button>
                <button class="gallery-filter__btn" data-filter="betonoptik" type="button">Betonoptik</button>
                <button class="gallery-filter__btn" data-filter="fassade" type="button">Fassade</button>
                <button class="gallery-filter__btn" data-filter="bodenverlegung" type="button">Bodenverlegung</button>
            </div>

            <div class="grid-3" id="referenzen-grid" aria-live="polite">

                <!-- 1 -->
                <article class="ref-card" data-category="innenmalerei">
                    <div class="ref-card__image">
                        <img src="assets/images/wohnzimmer.jpg" alt="Wohnzimmer-Renovierung Innenmalerei Dinslaken" loading="lazy" width="800" height="533">
                        <div class="gallery-item__overlay" aria-hidden="true"></div>
                    </div>
                    <div class="ref-card__body">
                        <span class="ref-card__category badge">Innenmalerei</span>
                        <h3 class="ref-card__title">Wohnzimmer-Renovierung, Dinslaken</h3>
                        <p class="ref-card__text">
                            Komplette Neugestaltung von Decke und Wänden in einem Wohnzimmer mit 3 m Raumhöhe.
                            Zwei Räume, Untergrundvorbereitung und zweifacher Schlussanstrich.
                        </p>
                    </div>
                </article>

                <!-- 2 -->
                <article class="ref-card" data-category="innenmalerei">
                    <div class="ref-card__image">
                        <img src="assets/images/schlafzimmer.jpg" alt="Wohnungsrenovierung 4 Zimmer Dinslaken-Hiesfeld" loading="lazy" width="800" height="542">
                        <div class="gallery-item__overlay" aria-hidden="true"></div>
                    </div>
                    <div class="ref-card__body">
                        <span class="ref-card__category badge">Innenmalerei</span>
                        <h3 class="ref-card__title">Komplette Wohnungsrenovierung, Dinslaken-Hiesfeld</h3>
                        <p class="ref-card__text">
                            Vollständige Innenrenovierung einer 4-Zimmer-Wohnung. Alle Wände und Decken
                            neu gestrichen, Untergrund vorbereitet, Anschlüsse sauber abgeklebt.
                        </p>
                    </div>
                </article>

                <!-- 3 -->
                <article class="ref-card" data-category="aussenmalerei">
                    <div class="ref-card__image">
                        <img src="assets/images/holzfenster.jpg" alt="Holzfenster und Haustür Holzschutzanstrich Dinslaken" loading="lazy" width="800" height="533">
                        <div class="gallery-item__overlay" aria-hidden="true"></div>
                    </div>
                    <div class="ref-card__body">
                        <span class="ref-card__category badge">Außenmalerei</span>
                        <h3 class="ref-card__title">Holzfenster und Haustür, Dinslaken</h3>
                        <p class="ref-card__text">
                            Holzschutzanstrich an mehreren Holzfenstern und der Haustür. Alten Anstrich
                            abgeschliffen, Holz grundiert und zweifach mit Holzschutzlasur behandelt.
                        </p>
                    </div>
                </article>

                <!-- 4 -->
                <article class="ref-card" data-category="aussenmalerei">
                    <div class="ref-card__image">
                        <img src="assets/images/haustuer.jpg" alt="Außentür und Treppengeländer Metallschutzanstrich Wesel" loading="lazy" width="800" height="533">
                        <div class="gallery-item__overlay" aria-hidden="true"></div>
                    </div>
                    <div class="ref-card__body">
                        <span class="ref-card__category badge">Außenmalerei</span>
                        <h3 class="ref-card__title">Außentür und Geländer, Wesel</h3>
                        <p class="ref-card__text">
                            Metallschutzanstrich an Außentür und Treppengeländer. Rost entfernt,
                            Zinkstaubgrundierung aufgetragen, zweifacher Schlusslack in RAL-Farbton.
                        </p>
                    </div>
                </article>

                <!-- 5 -->
                <article class="ref-card" data-category="betonoptik">
                    <div class="ref-card__image">
                        <img src="assets/images/kueche.jpg" alt="Betonoptik Küche Dinslaken" loading="lazy" width="800" height="533">
                        <div class="gallery-item__overlay" aria-hidden="true"></div>
                    </div>
                    <div class="ref-card__body">
                        <span class="ref-card__category badge">Betonoptik</span>
                        <h3 class="ref-card__title">Betonoptik Küche, Dinslaken</h3>
                        <p class="ref-card__text">
                            Betonoptik-Beschichtung in der Küche: Arbeitsnische und angrenzende Wandflächen.
                            Lebensmittelechte Versiegelung, abriebfest und pflegeleicht.
                        </p>
                    </div>
                </article>

                <!-- 6 -->
                <article class="ref-card" data-category="betonoptik">
                    <div class="ref-card__image">
                        <img src="assets/images/buero-lounge.jpg" alt="Betonoptik Büro Empfangsbereich Oberhausen" loading="lazy" width="800" height="533">
                        <div class="gallery-item__overlay" aria-hidden="true"></div>
                    </div>
                    <div class="ref-card__body">
                        <span class="ref-card__category badge">Betonoptik</span>
                        <h3 class="ref-card__title">Betonoptik Büro, Oberhausen</h3>
                        <p class="ref-card__text">
                            Gestaltung des Empfangsbereichs eines Büros in industrieller Betonoptik.
                            Mineralische Beschichtung, mattversiegelt für ein ruhiges, hochwertiges Erscheinungsbild.
                        </p>
                    </div>
                </article>

                <!-- 7 -->
                <article class="ref-card" data-category="fassade">
                    <div class="ref-card__image">
                        <img src="assets/images/haus-fassade.jpg" alt="Fassadenrenovierung Einfamilienhaus Dinslaken" loading="lazy" width="800" height="531">
                        <div class="gallery-item__overlay" aria-hidden="true"></div>
                    </div>
                    <div class="ref-card__body">
                        <span class="ref-card__category badge">Fassade</span>
                        <h3 class="ref-card__title">Fassadenrenovierung Einfamilienhaus, Dinslaken</h3>
                        <p class="ref-card__text">
                            Vollrenovierung der Außenfassade: Untergrundvorbereitung, Risse schließen,
                            Grundierung und zweifacher Fassadenanstrich mit wasserabweisender Silikonharzfarbe.
                        </p>
                    </div>
                </article>

                <!-- 8 -->
                <article class="ref-card" data-category="fassade">
                    <div class="ref-card__image">
                        <img src="assets/images/haus-modern.jpg" alt="Fassadenanstrich Mehrfamilienhaus Voerde" loading="lazy" width="800" height="533">
                        <div class="gallery-item__overlay" aria-hidden="true"></div>
                    </div>
                    <div class="ref-card__body">
                        <span class="ref-card__category badge">Fassade</span>
                        <h3 class="ref-card__title">Fassadenanstrich Mehrfamilienhaus, Voerde</h3>
                        <p class="ref-card__text">
                            Außenanstrich eines dreigeschossigen Mehrfamilienhauses. Gerüstarbeiten koordiniert,
                            Fassade gereinigt, grundiert und einheitlich neu gestrichen.
                        </p>
                    </div>
                </article>

                <!-- 9 -->
                <article class="ref-card" data-category="bodenverlegung">
                    <div class="ref-card__image">
                        <img src="assets/images/vinylboden.jpg" alt="Vinylboden LVT Klick Büro Dinslaken" loading="lazy" width="800" height="533">
                        <div class="gallery-item__overlay" aria-hidden="true"></div>
                    </div>
                    <div class="ref-card__body">
                        <span class="ref-card__category badge">Bodenverlegung</span>
                        <h3 class="ref-card__title">Vinylboden Büro, Dinslaken</h3>
                        <p class="ref-card__text">
                            Verlegung von 120 m² LVT Klick-Vinyl in einem Großraumbüro. Untergrund egalisiert,
                            Trittschalldämmung verlegt, saubere Randabschlüsse mit Sockelleisten.
                        </p>
                    </div>
                </article>

                <!-- 10 -->
                <article class="ref-card" data-category="bodenverlegung">
                    <div class="ref-card__image">
                        <img src="assets/images/holzboden.jpg" alt="Laminatboden 3 Zimmer Dinslaken-Eppinghoven" loading="lazy" width="800" height="1200">
                        <div class="gallery-item__overlay" aria-hidden="true"></div>
                    </div>
                    <div class="ref-card__body">
                        <span class="ref-card__category badge">Bodenverlegung</span>
                        <h3 class="ref-card__title">Laminatboden Wohnung, Dinslaken-Eppinghoven</h3>
                        <p class="ref-card__text">
                            Laminatverlegung in drei Zimmern einer Bestandswohnung. Alten Teppich entfernt,
                            Untergrund vorbereitet, Laminat mit Dämmunterlage fachgerecht verlegt.
                        </p>
                    </div>
                </article>

                <!-- 11 -->
                <article class="ref-card" data-category="innenmalerei">
                    <div class="ref-card__image">
                        <img src="assets/images/treppenhaus.jpg" alt="Treppenhaus Renovierung 4 Stockwerke Dinslaken" loading="lazy" width="800" height="533">
                        <div class="gallery-item__overlay" aria-hidden="true"></div>
                    </div>
                    <div class="ref-card__body">
                        <span class="ref-card__category badge">Innenmalerei</span>
                        <h3 class="ref-card__title">Treppenhaus Renovierung, Dinslaken</h3>
                        <p class="ref-card__text">
                            Vollständige Renovierung eines Treppenhauses über vier Stockwerke. Etappenweise
                            Ausführung, damit der Fluchtweg durchgehend begehbar blieb.
                        </p>
                    </div>
                </article>

                <!-- 12 -->
                <article class="ref-card" data-category="betonoptik">
                    <div class="ref-card__image">
                        <img src="assets/images/betonoptik.jpg" alt="Betonoptik Badezimmer wasserbeständig Duisburg" loading="lazy" width="800" height="1200">
                        <div class="gallery-item__overlay" aria-hidden="true"></div>
                    </div>
                    <div class="ref-card__body">
                        <span class="ref-card__category badge">Betonoptik</span>
                        <h3 class="ref-card__title">Betonoptik Badezimmer, Duisburg</h3>
                        <p class="ref-card__text">
                            Betonoptik im Badezimmer mit wasserbeständiger Spezialversiegelung.
                            Fugenlose Oberfläche, pflegeleicht und dauerhaft feuchtigkeitsresistent.
                        </p>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- ============================================================
         Vorher / Nachher Showcase
    ============================================================ -->
    <section class="section section--alt" aria-labelledby="vorher-nachher-title">
        <div class="container">

            <div class="section-header">
                <span class="section-label">Transformation</span>
                <h2 id="vorher-nachher-title">Vorher und Nachher</h2>
                <p>Zwei Beispielprojekte, die zeigen, was ein durchdachter Anstrich bewirken kann.</p>
            </div>

            <div class="grid-2">

                <div class="info-card">
                    <h3>Wohnzimmer in Dinslaken</h3>
                    <div class="ba-slider" style="margin-top: var(--space-4);">
                        <img src="assets/images/wohnzimmer.jpg" alt="Nachher: Wohnzimmer frisch gestrichen" class="ba-slider__after" draggable="false">
                        <div class="ba-slider__before">
                            <img src="assets/images/vorher-wand.jpg" alt="Vorher: Wohnzimmer mit verwitterten Wänden" draggable="false">
                        </div>
                        <div class="ba-slider__handle" aria-label="Vergleichsregler ziehen" role="slider" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" tabindex="0">
                            <span class="ba-slider__handle-line"></span>
                            <span class="ba-slider__handle-knob">
                                <svg class="ba-brush-icon" width="32" height="32" viewBox="0 0 32 32" fill="none" aria-hidden="true">
                                    <rect x="4" y="20" width="8" height="10" rx="1.5" fill="#C4A35A" stroke="currentColor" stroke-width="1.5"/>
                                    <rect x="5.5" y="26" width="5" height="4" rx="1" fill="#8A8880" opacity=".5"/>
                                    <rect x="6" y="2" width="4" height="18" rx="1" fill="currentColor"/>
                                    <line x1="6" y1="6" x2="10" y2="6" stroke="#C4A35A" stroke-width="1"/>
                                </svg>
                            </span>
                        </div>
                        <span class="ba-slider__label ba-slider__label--before">Vorher</span>
                        <span class="ba-slider__label ba-slider__label--after">Nachher</span>
                    </div>
                    <p style="margin-top: var(--space-4);">
                        Wände und Decke neu gespachtelt, grundiert und in einem hellen Warmweißton gestrichen.
                        Heizkörpernischen und Fensterleibungen sauber eingearbeitet.
                    </p>
                </div>

                <div class="info-card">
                    <h3>Fassade Einfamilienhaus, Voerde</h3>
                    <div class="ba-slider" style="margin-top: var(--space-4);">
                        <img src="assets/images/haus-fassade.jpg" alt="Nachher: Fassade vollständig renoviert" class="ba-slider__after" draggable="false">
                        <div class="ba-slider__before">
                            <img src="assets/images/vorher-fassade.jpg" alt="Vorher: Fassade mit Rissen und Ausblühungen" draggable="false">
                        </div>
                        <div class="ba-slider__handle" aria-label="Vergleichsregler ziehen" role="slider" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" tabindex="0">
                            <span class="ba-slider__handle-line"></span>
                            <span class="ba-slider__handle-knob">
                                <svg class="ba-brush-icon" width="32" height="32" viewBox="0 0 32 32" fill="none" aria-hidden="true">
                                    <rect x="4" y="20" width="8" height="10" rx="1.5" fill="#C4A35A" stroke="currentColor" stroke-width="1.5"/>
                                    <rect x="5.5" y="26" width="5" height="4" rx="1" fill="#8A8880" opacity=".5"/>
                                    <rect x="6" y="2" width="4" height="18" rx="1" fill="currentColor"/>
                                    <line x1="6" y1="6" x2="10" y2="6" stroke="#C4A35A" stroke-width="1"/>
                                </svg>
                            </span>
                        </div>
                        <span class="ba-slider__label ba-slider__label--before">Vorher</span>
                        <span class="ba-slider__label ba-slider__label--after">Nachher</span>
                    </div>
                    <p style="margin-top: var(--space-4);">
                        Alle Risse geöffnet, gereinigt und fachgerecht verschlossen. Fassade mit
                        Tiefengrundierung vorbehandelt, danach zweifacher Silikonharzanstrich aufgetragen.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================================
         CTA
    ============================================================ -->
    <section class="section" aria-label="Kontaktaufforderung">
        <div class="container">
            <div class="cta-section">
                <div class="cta-section__inner">
                    <span class="cta-section__label">Ihr Projekt</span>
                    <h2 class="cta-section__title">Auch Ihr Projekt könnte hier stehen</h2>
                    <p class="cta-section__text">
                        Ich komme gerne vorbei, schaue mir Ihr Vorhaben an und erstelle Ihnen ein
                        unverbindliches Angebot. Kein Risiko, keine versteckten Kosten.
                    </p>
                    <div class="cta-section__actions">
                        <a href="kostenvoranschlag.php" class="btn btn--accent btn--lg">Kostenvoranschlag anfordern</a>
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
