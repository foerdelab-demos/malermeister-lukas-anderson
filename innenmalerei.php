<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$page_title       = 'Innenmalerei Dinslaken | Malermeister Anderson';
$meta_description = 'Professionelle Innenmalerei in Dinslaken vom Meisterbetrieb. Wandanstriche, Deckenarbeiten, Untergrundvorbereitung – sauber, pünktlich, hochwertig.';
$page_class       = 'page-innenmalerei';
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
                <a href="leistungen.php">Leistungen</a>
                <span class="breadcrumb__sep" aria-hidden="true">/</span>
                <span aria-current="page">Innenmalerei</span>
            </nav>
            <h1 class="page-hero__title">Innenmalerei in Dinslaken – sauber ausgeführt, mit Blick fürs Detail</h1>
            <p class="page-hero__sub">Wandanstriche, Deckenanstriche und Untergrundvorbereitung für Wohn- und Gewerberäume.</p>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="service-page-layout">
                <article class="prose">

                    <p>Innenmalerei umfasst weit mehr als das Auftragen von Farbe. Zum Leistungsumfang gehören die Beurteilung und Vorbereitung des Untergrunds, das Schließen von Rissen, das Aufbringen von Grundierungen sowie der eigentliche Anstrich – oft in zwei oder mehr Lagen. Als Meisterbetrieb in Dinslaken legen wir den Schwerpunkt bewusst auf die Untergrundvorbereitung, weil sie die Basis für ein dauerhaftes Ergebnis legt.</p>

                    <h2>Was gehört zur Innenmalerei?</h2>

                    <p>Neben den klassischen Wand- und Deckenanstrichen zählen dazu auch Arbeiten an Heizkörpern, Fensterrahmen und Türzargen. Treppenhäuser, Büros und gewerbliche Flächen gehören ebenso zu unserem Arbeitsfeld.</p>

                    <ul class="checklist">
                        <li>Wandanstriche in allen Räumen (Wohnräume, Küchen, Bäder, Büros)</li>
                        <li>Deckenanstriche und Deckenerneuerung</li>
                        <li>Untergrundvorbereitung: Spachteln, Schleifen, Grundieren</li>
                        <li>Anstriche an Heizkörpern und Fensterrahmen</li>
                        <li>Treppenhäuser und Flure</li>
                        <li>Gewerbliche Räumlichkeiten und Büroflächen</li>
                    </ul>

                    <h2>Unser Vorgehen – Schritt für Schritt</h2>

                    <ol class="process-steps">
                        <li class="process-step">
                            <strong>Besichtigung und Aufmaß:</strong> Wir besichtigen die Räume, beurteilen den Untergrund, notieren Schäden und nehmen das Aufmaß auf. Auf dieser Grundlage erstellen wir ein genaues Angebot ohne versteckte Nachträge.
                        </li>
                        <li class="process-step">
                            <strong>Untergrundvorbereitung:</strong> Risse werden gespachtelt, lose Farbe abgeschliffen. Saugfähige Untergründe erhalten eine Tiefengrundierung. Dieser Schritt bestimmt maßgeblich die Qualität des Endresultats.
                        </li>
                        <li class="process-step">
                            <strong>Anstricharbeiten:</strong> Angrenzende Flächen und Böden werden sorgfältig abgedeckt. Dann folgen Voranstrich und Schlussanstrich in der gewählten Farbe – bei Bedarf in zwei Lagen für vollständige Deckung.
                        </li>
                        <li class="process-step">
                            <strong>Abschluss und Übergabe:</strong> Abdeckmaterial wird entfernt, Arbeitsflächen gereinigt. Erst wenn Sie zufrieden sind, ist die Arbeit für uns erledigt.
                        </li>
                    </ol>

                    <h2>Farben und Materialien</h2>

                    <p>Wir verwenden bevorzugt Dispersionsfarben hochwertiger Hersteller wie Caparol, Alpina oder DAW. In Feuchträumen kommen Farben mit fungiziden Zusätzen oder diffusionsoffene Silikatfarben zum Einsatz. Für Haushalte mit Kleinkindern oder Allergikern führen wir emissionsarme Farben mit niedrigem VOC-Gehalt. Die Materialberatung gehört für uns zum Service.</p>

                    <h2>Häufige Fragen</h2>

                    <div class="faq-list">
                        <details class="faq-item">
                            <summary>Wie lange dauert das Streichen eines Zimmers?</summary>
                            <div class="faq-item__body">
                                <p>Ein gut vorbereitetes Zimmer mit rund 20 m² Wandfläche lässt sich in ein bis zwei Tagen fertigstellen. Bei umfangreichen Spachtelarbeiten verlängert sich die Zeit. Wir nennen Ihnen vor Beginn eine realistische Einschätzung.</p>
                            </div>
                        </details>
                        <details class="faq-item">
                            <summary>Muss ich die Möbel ausräumen?</summary>
                            <div class="faq-item__body">
                                <p>Wir schützen vorhandene Möbel mit Abdeckvlies und Folie. Zerbrechliche Gegenstände und Wertgegenstände sollten vorab beiseite geräumt werden. Schwere Möbel rücken wir vorsichtig von der Wand.</p>
                            </div>
                        </details>
                        <details class="faq-item">
                            <summary>Wie viele Anstriche sind nötig?</summary>
                            <div class="faq-item__body">
                                <p>In der Regel zwei: ein Voranstrich und ein Schlussanstrich. Bei einem Farbwechsel von dunkel zu hell kann ein dritter Auftrag nötig sein. Die genaue Anzahl klären wir bei der Besichtigung.</p>
                            </div>
                        </details>
                    </div>

                </article>

                <aside class="sidebar">
                    <div class="sidebar-card sidebar-card--accent">
                        <h3>Kostenloser Kostenvoranschlag</h3>
                        <p>Rufen Sie uns an oder nutzen Sie unser Formular.</p>
                        <a href="kontakt.php" class="btn btn--accent" style="width:100%;justify-content:center;margin-bottom:var(--space-3)">Anfrage senden</a>
                        <a href="tel:+491723047213" class="btn btn--outline-light" style="width:100%;justify-content:center">0172 3047213</a>
                    </div>
                    <div class="sidebar-card">
                        <h3>Alle Leistungen</h3>
                        <nav class="service-nav" aria-label="Leistungsnavigation">
                            <a href="innenmalerei.php" class="active">Innenmalerei</a>
                            <a href="aussenmalerei.php">Außenmalerei</a>
                            <a href="tapezierarbeiten.php">Tapezierarbeiten</a>
                            <a href="kreative-wandgestaltung.php">Kreative Wandgestaltung</a>
                            <a href="betonoptik.php">Betonoptik</a>
                            <a href="fassadengestaltung.php">Fassadengestaltung</a>
                            <a href="bodenverlegearbeiten.php">Bodenverlegearbeiten</a>
                            <a href="urlaubsservice.php">Urlaubsservice</a>
                        </nav>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="cta-section" aria-labelledby="innenmalerei-cta">
        <div class="container cta-section__inner">
            <span class="cta-section__label">Kostenlos &amp; unverbindlich</span>
            <h2 class="cta-section__title" id="innenmalerei-cta">Bereit für frische Wände?</h2>
            <p class="cta-section__text">Wir besichtigen Ihre Räume, bereiten ein genaues Angebot vor und stehen für alle Fragen zur Verfügung – ohne Verpflichtung.</p>
            <div class="cta-section__actions">
                <a href="kontakt.php" class="btn btn--accent btn--lg">Kostenvoranschlag anfordern</a>
                <a href="tel:+491723047213" class="btn btn--outline-light">Jetzt anrufen: 0172 3047213</a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
