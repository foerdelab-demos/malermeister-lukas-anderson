<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$page_title       = 'Bodenverlegearbeiten Dinslaken | Malermeister Anderson';
$meta_description = 'Bodenverlegearbeiten in Dinslaken: Laminat, Vinyl, Kork, Teppich. Professionelle Untergrundvorbereitung und sorgfältige Verlegung. Meisterbetrieb Anderson.';
$page_class       = 'page-bodenverlegearbeiten';
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
                <span aria-current="page">Bodenverlegearbeiten</span>
            </nav>
            <h1 class="page-hero__title">Bodenverlegearbeiten in Dinslaken – solide Arbeit von unten</h1>
            <p class="page-hero__sub">Laminat, Vinyl, Kork und Teppich – sorgfältig verlegt auf perfekt vorbereitetem Untergrund.</p>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="service-page-layout">
                <article class="prose">

                    <p>Wer ein Zimmer streichen und tapezieren lässt, möchte oft gleichzeitig den Boden erneuern. Als Meisterbetrieb führen wir Bodenverlegearbeiten als vollintegrierte Leistung aus – nahtlos eingebettet in größere Renovierungsvorhaben, ohne Koordination mit einem zweiten Betrieb.</p>

                    <h2>Welche Bodenbeläge verlegen wir?</h2>

                    <h3>Laminat</h3>
                    <p>Moderne Klicksysteme auf Trittschalldämmung – schwimmend verlegt, ohne Kleber. Wir wählen die passende Abriebklasse (AC3 für Wohnräume, AC4/AC5 für stärker beanspruchte Bereiche).</p>

                    <h3>Vinyl und LVT</h3>
                    <p>Vollständig wasserabweisend und daher ideal für Küchen und Bäder. Je nach Produkt schwimmend oder verklebt – wir wählen die Methode nach Untergrund und Einsatzbereich.</p>

                    <h3>Kork</h3>
                    <p>Natürlich, wärmedämmend und schallabsorbierend. Als Klebe-Fliese oder Kork-Laminat erhältlich. Muss nach dem Verlegen versiegelt werden, da Kork feuchtigkeitsempfindlich ist.</p>

                    <h3>Teppichböden</h3>
                    <p>Weich, trittschalldämpfend und im Winter angenehm warm. Wir verlegen Schlingen- und Velours-Teppiche spannungsfrei mit Greiferleisten – eine Technik, die Faltenbildung langfristig verhindert.</p>

                    <h2>Untergrundvorbereitung</h2>

                    <p>Der Untergrund muss eben, trocken und tragfähig sein. Wir prüfen die Ebenheit mit der Richtlatte (max. 3 mm auf 2 m laut DIN) und gleichen Unebenheiten mit selbstverlaufender Ausgleichsmasse an. Die Restfeuchte messen wir mit der CM-Methode – erst bei zulässigen Werten beginnt die Verlegung.</p>

                    <h2>Häufige Fragen</h2>

                    <div class="faq-list">
                        <details class="faq-item">
                            <summary>Muss der alte Boden raus?</summary>
                            <div class="faq-item__body">
                                <p>Nicht zwingend. Fest verklebte, ebene Altbeläge können oft als Untergrund bleiben. Mehr als zwei Lagen empfehlen wir nicht, da Türen und Übergänge sonst Probleme bereiten.</p>
                            </div>
                        </details>
                        <details class="faq-item">
                            <summary>Wie lange dauert das Verlegen?</summary>
                            <div class="faq-item__body">
                                <p>Ein Zimmer mit ca. 25 m² ist inklusive Untergrund und Sockelleisten an einem Tag fertig. Bei Ausgleichsmasse kommt ein weiterer Trocknungstag hinzu.</p>
                            </div>
                        </details>
                        <details class="faq-item">
                            <summary>Welcher Boden eignet sich für Fußbodenheizung?</summary>
                            <div class="faq-item__body">
                                <p>Vor allem Vinyl und bestimmte Laminate. Der Wärmedurchlasswiderstand darf 0,15 m²K/W nicht überschreiten. Kork ist wegen seines hohen R-Werts meist nicht empfehlenswert.</p>
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
                            <a href="betonoptik.php">Betonoptik</a>
                            <a href="fassadengestaltung.php">Fassadengestaltung</a>
                            <a href="bodenverlegearbeiten.php" class="active">Bodenverlegearbeiten</a>
                            <a href="urlaubsservice.php">Urlaubsservice</a>
                        </nav>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="cta-section" aria-labelledby="bodenverlegearbeiten-cta">
        <div class="container cta-section__inner">
            <span class="cta-section__label">Kostenlos &amp; unverbindlich</span>
            <h2 class="cta-section__title" id="bodenverlegearbeiten-cta">Neuen Boden verlegen lassen?</h2>
            <p class="cta-section__text">Wir messen auf, prüfen den Untergrund und erstellen ein vollständiges Angebot – inklusive Untergrundvorbereitung, Verlegung und Abschlussleisten.</p>
            <div class="cta-section__actions">
                <a href="kostenvoranschlag.php" class="btn btn--accent btn--lg">Kostenvoranschlag anfordern</a>
                <a href="tel:+491723047213" class="btn btn--outline-light">Jetzt anrufen: 0172 3047213</a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
