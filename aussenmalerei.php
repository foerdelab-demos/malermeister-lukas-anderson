<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$page_title       = 'Außenmalerei Dinslaken | Malermeister Anderson';
$meta_description = 'Außenmalerei und Außenanstriche in Dinslaken. Fachgerechte Behandlung aller Außenbauteile – Holzwerk, Fenster, Türen, Gitter. Meisterbetrieb Anderson.';
$page_class       = 'page-aussenmalerei';
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
                <span aria-current="page">Außenmalerei</span>
            </nav>
            <h1 class="page-hero__title">Außenmalerei in Dinslaken – dauerhafter Schutz für Ihr Gebäude</h1>
            <p class="page-hero__sub">Fachgerechte Anstriche für Holzwerk, Metallflächen, Fenster, Türen und Tore.</p>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="service-page-layout">
                <article class="prose">

                    <p>Außenmalerei ist in erster Linie Witterungsschutz – und erst in zweiter Linie eine Frage der Optik. Ein intakter Anstrich an Holzfenstern, Außentüren und Holzverkleidungen verhindert das Eindringen von Feuchtigkeit und verlangsamt das Verwittern des Materials. Im Raum Dinslaken herrscht ein Klima mit häufigem Regen und wechselnden Temperaturen, die Außenbauteile stark beanspruchen.</p>

                    <h2>Was streichen wir an Außenbauteilen?</h2>

                    <ul class="checklist">
                        <li>Holzfenster und Holztüren (Grundierung, Voranstrich, Schlussanstrich)</li>
                        <li>Metalltore, Gitter und Geländer</li>
                        <li>Holzverkleidungen und Veranden</li>
                        <li>Dachüberstände und Traufen</li>
                        <li>Garagentore</li>
                        <li>Außentreppen und Balkongeländer</li>
                    </ul>

                    <h2>Untergrundvorbereitung</h2>

                    <p>Die Untergrundvorbereitung macht mindestens sechzig Prozent der Gesamtarbeit aus. Loser Altanstrich wird abgeschabt oder abgeschliffen. Bei Holzbauteilen messen wir die Restfeuchte – nasses Holz nimmt keinen dauerhaften Anstrich an. Astlöcher und harzreiche Stellen werden mit Knotengrund vorbehandelt. Metallteile werden entrostet und mit zinkhaltiger Grundierung behandelt.</p>

                    <h2>Farben für den Außenbereich</h2>

                    <p>Für Holzfenster verwenden wir Alkydharzmischungen oder moderne Wasserlacke mit UV-Schutz. Holzschutzlasuren bieten je nach Variante transparenten oder deckenden Schutz. Für Metallflächen kommen Rostschutzfarben, Kunstharzlacke oder Hammerschlaglacke zum Einsatz. Wir arbeiten mit Produkten von Brillux, Sikkens und Caparol.</p>

                    <h2>Häufige Fragen</h2>

                    <div class="faq-list">
                        <details class="faq-item">
                            <summary>Wie lange hält ein Außenanstrich?</summary>
                            <div class="faq-item__body">
                                <p>Gut vorbereitete Holzfenster können acht bis fünfzehn Jahre halten. Regelmäßige Sichtprüfung alle zwei bis drei Jahre und kleine Ausbesserungen an kritischen Stellen verlängern die Lebensdauer deutlich.</p>
                            </div>
                        </details>
                        <details class="faq-item">
                            <summary>Können alte Anstriche überstrichen werden?</summary>
                            <div class="faq-item__body">
                                <p>Das hängt davon ab, ob der bestehende Anstrich noch fest haftet und ob die Schichtdicke es zulässt. Bei zu vielen Altanstrichschichten ist ein Abziehen oft sinnvoller. Wir prüfen das vor Ort und beraten Sie ehrlich.</p>
                            </div>
                        </details>
                        <details class="faq-item">
                            <summary>Wann ist der richtige Zeitpunkt?</summary>
                            <div class="faq-item__body">
                                <p>Außenanstriche setzen mindestens fünf Grad Celsius voraus. Die besten Jahreszeiten sind spätes Frühjahr, Frühsommer und früher Herbst. Wir planen unsere Außenarbeiten sorgfältig nach Wetterlage.</p>
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
                            <a href="aussenmalerei.php" class="active">Außenmalerei</a>
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

    <section class="cta-section" aria-labelledby="aussenmalerei-cta">
        <div class="container cta-section__inner">
            <span class="cta-section__label">Kostenlos &amp; unverbindlich</span>
            <h2 class="cta-section__title" id="aussenmalerei-cta">Außenbauteile streichen lassen?</h2>
            <p class="cta-section__text">Wir schauen uns die Situation vor Ort an, prüfen den Untergrund und erstellen Ihnen ein Angebot, das alle Vorbereitungsschritte einschließt.</p>
            <div class="cta-section__actions">
                <a href="kostenvoranschlag.php" class="btn btn--accent btn--lg">Kostenvoranschlag anfordern</a>
                <a href="tel:+491723047213" class="btn btn--outline-light">Jetzt anrufen: 0172 3047213</a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
