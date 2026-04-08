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
                        <div class="gallery-placeholder" aria-label="Projektfoto: Wohnzimmer-Renovierung">
                            <span>Wohnzimmer<br>Innenmalerei<br>Dinslaken</span>
                        </div>
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
                        <div class="gallery-placeholder" aria-label="Projektfoto: Wohnungsrenovierung Dinslaken-Hiesfeld">
                            <span>Wohnungsrenovierung<br>4 Zimmer<br>Hiesfeld</span>
                        </div>
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
                        <div class="gallery-placeholder" aria-label="Projektfoto: Holzfenster und Haustür Dinslaken">
                            <span>Holzschutz<br>Fenster + Haustür<br>Dinslaken</span>
                        </div>
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
                        <div class="gallery-placeholder" aria-label="Projektfoto: Außentür und Geländer Wesel">
                            <span>Metallschutz<br>Tür + Geländer<br>Wesel</span>
                        </div>
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
                        <div class="gallery-placeholder" aria-label="Projektfoto: Betonoptik Küche Dinslaken">
                            <span>Betonoptik<br>Küche<br>Dinslaken</span>
                        </div>
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
                        <div class="gallery-placeholder" aria-label="Projektfoto: Betonoptik Büro Oberhausen">
                            <span>Betonoptik<br>Empfang<br>Oberhausen</span>
                        </div>
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
                        <div class="gallery-placeholder" aria-label="Projektfoto: Fassadenrenovierung Dinslaken">
                            <span>Fassade<br>Einfamilienhaus<br>Dinslaken</span>
                        </div>
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
                        <div class="gallery-placeholder" aria-label="Projektfoto: Fassadenanstrich Mehrfamilienhaus Voerde">
                            <span>Fassade<br>Mehrfamilienhaus<br>Voerde</span>
                        </div>
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
                        <div class="gallery-placeholder" aria-label="Projektfoto: Vinylboden Büro Dinslaken">
                            <span>LVT Klick<br>120 qm Büro<br>Dinslaken</span>
                        </div>
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
                        <div class="gallery-placeholder" aria-label="Projektfoto: Laminatboden Dinslaken-Eppinghoven">
                            <span>Laminat<br>3 Zimmer<br>Eppinghoven</span>
                        </div>
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
                        <div class="gallery-placeholder" aria-label="Projektfoto: Treppenhaus Renovierung Dinslaken">
                            <span>Treppenhaus<br>4 Stockwerke<br>Dinslaken</span>
                        </div>
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
                        <div class="gallery-placeholder" aria-label="Projektfoto: Betonoptik Badezimmer Duisburg">
                            <span>Betonoptik Bad<br>wasserbeständig<br>Duisburg</span>
                        </div>
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
                    <div class="grid-2" style="gap: var(--space-4); margin-top: var(--space-4);">
                        <div>
                            <p class="section-label" style="margin-bottom: var(--space-2);">Vorher</p>
                            <div class="gallery-placeholder" style="min-height: 160px;" aria-label="Vorher: Wohnzimmer mit verwitterten Wänden">
                                <span>Vorher:<br>Verwitterte Wände,<br>abgeblätterte Farbe</span>
                            </div>
                        </div>
                        <div>
                            <p class="section-label" style="margin-bottom: var(--space-2);">Nachher</p>
                            <div class="gallery-placeholder" style="min-height: 160px;" aria-label="Nachher: Wohnzimmer frisch gestrichen">
                                <span>Nachher:<br>Frisch gestrichen,<br>gleichmäßige Fläche</span>
                            </div>
                        </div>
                    </div>
                    <p style="margin-top: var(--space-4);">
                        Wände und Decke neu gespachtelt, grundiert und in einem hellen Warmweißton gestrichen.
                        Heizkörpernischen und Fensterleibungen sauber eingearbeitet.
                    </p>
                </div>

                <div class="info-card">
                    <h3>Fassade Einfamilienhaus, Voerde</h3>
                    <div class="grid-2" style="gap: var(--space-4); margin-top: var(--space-4);">
                        <div>
                            <p class="section-label" style="margin-bottom: var(--space-2);">Vorher</p>
                            <div class="gallery-placeholder" style="min-height: 160px;" aria-label="Vorher: Fassade mit Rissen und Ausblühungen">
                                <span>Vorher:<br>Risse, Ausblühungen,<br>verblasste Farbe</span>
                            </div>
                        </div>
                        <div>
                            <p class="section-label" style="margin-bottom: var(--space-2);">Nachher</p>
                            <div class="gallery-placeholder" style="min-height: 160px;" aria-label="Nachher: Fassade vollständig renoviert">
                                <span>Nachher:<br>Renoviert, abgedichtet,<br>neuer Farbton</span>
                            </div>
                        </div>
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
