<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$page_title       = 'Betonoptik Dinslaken | Malermeister Anderson';
$meta_description = 'Betonoptik in Dinslaken – moderne Wandbeschichtungen im Industrial-Look. Wände, Böden, Küchen. Langlebig und pflegeleicht. Meisterbetrieb Anderson.';
$page_class       = 'page-betonoptik';
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
                <span aria-current="page">Betonoptik</span>
            </nav>
            <h1 class="page-hero__title">Betonoptik in Dinslaken – moderner Industrial-Look, handgefertigt</h1>
            <p class="page-hero__sub">Hochwertige Betonoptik-Beschichtungen für Wände, Böden und Küchen – von Hand aufgetragen.</p>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="service-page-layout">
                <article class="prose">

                    <p>Betonoptik ist keine echte Betonwand – sondern eine mineralische Beschichtung, die den Charakter von Sichtbeton erzeugt. Sie lässt sich auf nahezu jedem tragfähigen Untergrund auftragen – Gipskarton, Putz, sogar Fliesen. Farbe und Textur sind individuell abstimmbar: Grau ist nur ein Ausgangspunkt; Betonoptik ist auch in Beige, Anthrazit oder Khaki realisierbar.</p>

                    <h2>Wo kann Betonoptik eingesetzt werden?</h2>

                    <ul class="checklist">
                        <li>Wohnzimmerwände als Akzentfläche</li>
                        <li>Schlafzimmer und Arbeitszimmer</li>
                        <li>Küchenwände und Küchenrückwände (Spritzschutz)</li>
                        <li>Badezimmer (mit geeigneter Feuchtraumversiegelung)</li>
                        <li>Böden (als Alternative zu Fliesen oder Parkett)</li>
                        <li>Ladenflächen, Büros, Gastronomie</li>
                    </ul>

                    <h2>Der Verarbeitungsprozess</h2>

                    <ol class="process-steps">
                        <li class="process-step">
                            <strong>Untergrundvorbereitung:</strong> Der Untergrund muss tragfähig, sauber und trocken sein. Ein Haftvermittler sichert die Verbindung zur Betonoptik-Masse.
                        </li>
                        <li class="process-step">
                            <strong>Grundschicht:</strong> Erste Lage dünn mit dem Japanspachtel auftragen. Nach Trocknung leicht anschleifen – diese Schicht schafft die Haftfläche.
                        </li>
                        <li class="process-step">
                            <strong>Deckschicht:</strong> Die zweite und dritte Lage erzeugen die charakteristische Textur. Die Bewegungsführung des Spatels schafft das typische Betonbild – jede Fläche wird zum Unikat.
                        </li>
                        <li class="process-step">
                            <strong>Versiegelung:</strong> Zwei bis drei Lagen Versiegelung schützen vor Feuchtigkeit und Abrieb. Für Böden und Feuchträume verwenden wir stärkere Systeme.
                        </li>
                    </ol>

                    <h2>Vorteile gegenüber echtem Beton</h2>

                    <ul class="checklist">
                        <li>Geringes Eigengewicht – keine zusätzliche statische Belastung</li>
                        <li>Fugenlos – keine Schmutzfugen wie bei Fliesen</li>
                        <li>Auf bestehenden Untergründen anwendbar</li>
                        <li>Viele Farbnuancen möglich</li>
                        <li>Reparaturfähig bei lokalen Beschädigungen</li>
                        <li>Hygienisch und leicht zu reinigen</li>
                    </ul>

                    <h2>Häufige Fragen</h2>

                    <div class="faq-list">
                        <details class="faq-item">
                            <summary>Wie lange hält die Betonoptik?</summary>
                            <div class="faq-item__body">
                                <p>Mit fachgerechter Versiegelung zehn bis fünfzehn Jahre, oft länger. Böden unterliegen stärkerem Verschleiß – hier empfehlen wir ggf. eine Nachversiegelung nach einigen Jahren.</p>
                            </div>
                        </details>
                        <details class="faq-item">
                            <summary>Kann Betonoptik im Badezimmer verwendet werden?</summary>
                            <div class="faq-item__body">
                                <p>Ja, mit Feuchtraumversiegelung. Wir wählen Versiegelungen, die auch im Duschbereich dauerhaft wasserdicht bleiben.</p>
                            </div>
                        </details>
                        <details class="faq-item">
                            <summary>Ist Betonoptik auf Fliesen möglich?</summary>
                            <div class="faq-item__body">
                                <p>Ja, sofern die Fliesen fest verankert sind. Die Fliesenoberfläche wird angeschliffen und die Fugen durch die Beschichtung egalisiert. Wir prüfen die Eignung bei der Besichtigung.</p>
                            </div>
                        </details>
                    </div>

                </article>

                <aside class="sidebar">
                    <div class="sidebar-card sidebar-card--accent">
                        <h3>Kostenloser Kostenvoranschlag</h3>
                        <p>Rufen Sie uns an oder nutzen Sie unser Formular.</p>
                        <a href="kostenvoranschlag.php" class="btn btn--accent" style="width:100%;justify-content:center;margin-bottom:var(--space-3)">Anfrage senden</a>
                        <a href="tel:+491723047213" class="btn btn--outline-light" style="width:100%;justify-content:center">0172 3047213</a>
                    </div>
                    <div class="sidebar-card">
                        <h3>Alle Leistungen</h3>
                        <nav class="service-nav" aria-label="Leistungsnavigation">
                            <a href="innenmalerei.php">Innenmalerei</a>
                            <a href="aussenmalerei.php">Außenmalerei</a>
                            <a href="tapezierarbeiten.php">Tapezierarbeiten</a>
                            <a href="kreative-wandgestaltung.php">Kreative Wandgestaltung</a>
                            <a href="betonoptik.php" class="active">Betonoptik</a>
                            <a href="fassadengestaltung.php">Fassadengestaltung</a>
                            <a href="bodenverlegearbeiten.php">Bodenverlegearbeiten</a>
                            <a href="urlaubsservice.php">Urlaubsservice</a>
                        </nav>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="cta-section" aria-labelledby="betonoptik-cta">
        <div class="container cta-section__inner">
            <span class="cta-section__label">Kostenlos &amp; unverbindlich</span>
            <h2 class="cta-section__title" id="betonoptik-cta">Betonoptik für Ihre Wände oder Böden?</h2>
            <p class="cta-section__text">Wir besichtigen den Untergrund, zeigen Materialproben und erstellen ein vollständiges Angebot – inklusive Untergrundvorbereitung und Versiegelung.</p>
            <div class="cta-section__actions">
                <a href="kostenvoranschlag.php" class="btn btn--accent btn--lg">Kostenvoranschlag anfordern</a>
                <a href="tel:+491723047213" class="btn btn--outline-light">Jetzt anrufen: 0172 3047213</a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
