<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$page_title       = 'Tapezierarbeiten Dinslaken | Malermeister Anderson';
$meta_description = 'Professionelle Tapezierarbeiten in Dinslaken: Raufaser, Vliestapeten, Strukturtapeten, Mustertapeten. Meisterbetrieb Anderson – präzise und sauber.';
$page_class       = 'page-tapezierarbeiten';
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
                <span aria-current="page">Tapezierarbeiten</span>
            </nav>
            <h1 class="page-hero__title">Tapezierarbeiten in Dinslaken – von klassisch bis modern</h1>
            <p class="page-hero__sub">Raufaser, Vliestapeten, Strukturtapeten und Mustertapeten – fachgerecht verarbeitet.</p>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="service-page-layout">
                <article class="prose">

                    <p>Tapezieren verlangt Präzision: Den Untergrund richtig vorbereiten, die Tapete korrekt einweichen oder einleimen, Stöße sauber auf Anschlag legen und Musterrapporte exakt treffen. Der Unterschied zur professionellen Ausführung fällt sofort ins Auge. Als Malermeisterbetrieb in Dinslaken führen wir Tapezierarbeiten mit demselben Anspruch aus wie alle anderen Arbeiten – sauber, genau und dauerhaft.</p>

                    <h2>Welche Tapeten verarbeiten wir?</h2>

                    <ul class="checklist">
                        <li>Raufasertapete (Standardware, überstreichbar)</li>
                        <li>Vliestapeten (formstabil, trocken zu verkleben)</li>
                        <li>Strukturtapeten (dreidimensionale Effekte, verschiedene Texturen)</li>
                        <li>Mustertapeten mit Rapport (Musterzuordnung erforderlich)</li>
                        <li>Glasfasertapeten (nicht brennbar, für gewerbliche Räume geeignet)</li>
                        <li>Naturfasertapeten (Sisal, Jute – spezielle Verarbeitungstechnik nötig)</li>
                    </ul>

                    <h2>Untergrundvorbereitung</h2>

                    <p>Der Untergrund entscheidet über die Haltbarkeit. Alte Tapeten werden zuerst entfernt, Risse und Fehlstellen mit Spachtelmasse geschlossen, die Oberfläche angeschliffen. Dann folgt das Grundieren mit Tiefengrund – dieser Schritt kontrolliert die Saugfähigkeit und sorgt für gleichmäßige Haftung. Das Überspringen dieses Schritts ist der häufigste Fehler.</p>

                    <h2>Präzision beim Tapezieren</h2>

                    <p>Die erste Bahn wird am Lot ausgerichtet. Die übrigen Bahnen werden stumpf gestoßen – Überlappungen bleiben als sichtbarer Wulst. Bei Mustertapeten muss der Rapport auf Augenhöhe stimmen. Innen- und Außenecken erfordern eigene Techniken. Wir berechnen den Bedarf vorab, damit Sie weder zu wenig noch zu viel kaufen.</p>

                    <h2>Häufige Fragen</h2>

                    <div class="faq-list">
                        <details class="faq-item">
                            <summary>Tapete oder Farbe – was ist besser?</summary>
                            <div class="faq-item__body">
                                <p>Tapete kaschiert Unebenheiten und bietet gestalterische Vielfalt. Farbe ist schneller zu aktualisieren und erlaubt häufigere Wechsel. Wir besprechen gerne beide Optionen für Ihren Raum.</p>
                            </div>
                        </details>
                        <details class="faq-item">
                            <summary>Wie aufwändig ist das Entfernen alter Tapeten?</summary>
                            <div class="faq-item__body">
                                <p>Das hängt von der Anzahl der Lagen und dem Untergrund ab. In Altbauten können mehrere Schichten übereinander kleben. Wir kalkulieren die Nacharbeiten realistisch ein und nennen sie im Angebot gesondert.</p>
                            </div>
                        </details>
                        <details class="faq-item">
                            <summary>Kann ich während der Arbeiten in der Wohnung bleiben?</summary>
                            <div class="faq-item__body">
                                <p>Ja, das ist kein Problem. Wir brauchen freien Wandzugang und Platz zum Schneiden und Einleimen. In angrenzenden Räumen ist normales Wohnen ohne Einschränkungen möglich.</p>
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
                            <a href="innenmalerei.php">Innenmalerei</a>
                            <a href="aussenmalerei.php">Außenmalerei</a>
                            <a href="tapezierarbeiten.php" class="active">Tapezierarbeiten</a>
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

    <section class="cta-section" aria-labelledby="tapezierarbeiten-cta">
        <div class="container cta-section__inner">
            <span class="cta-section__label">Kostenlos &amp; unverbindlich</span>
            <h2 class="cta-section__title" id="tapezierarbeiten-cta">Tapezierarbeiten anfragen</h2>
            <p class="cta-section__text">Wir besichtigen den Untergrund, schätzen den Aufwand realistisch ein und erstellen Ihnen ein vollständiges Angebot – inklusive Untergrundvorbereitung.</p>
            <div class="cta-section__actions">
                <a href="kontakt.php" class="btn btn--accent btn--lg">Kostenvoranschlag anfordern</a>
                <a href="tel:+491723047213" class="btn btn--outline-light">Jetzt anrufen: 0172 3047213</a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
