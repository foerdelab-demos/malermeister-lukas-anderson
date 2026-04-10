<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$page_title       = 'Fassadengestaltung Dinslaken | Malermeister Anderson';
$meta_description = 'Fassadengestaltung und Fassadenrenovierung in Dinslaken. Farbkonzepte, Wärmedämmputze, Schutzanstriche für Ihr Haus. Meisterbetrieb Anderson.';
$page_class       = 'page-fassadengestaltung';
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
                <span aria-current="page">Fassadengestaltung</span>
            </nav>
            <h1 class="page-hero__title">Fassadengestaltung in Dinslaken – Ihr Haus in bestem Licht</h1>
            <p class="page-hero__sub">Fassadenrenovierung, Farbkonzepte und Schutzanstriche für dauerhaften Werterhalt.</p>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="service-page-layout">
                <article class="prose">

                    <p>Eine intakte Fassade schützt Ihr Gebäude vor Witterung – Regen dringt in rissigen Putz ein, gefriert im Winter und weitet den Schaden aus. Was als Haarriss beginnt, kann in wenigen Jahren zu erheblichen Putzschäden führen. Eine rechtzeitige Renovierung ist daher nicht nur gestalterisch, sondern auch wirtschaftlich sinnvoll.</p>

                    <h2>Unser Vorgehen</h2>

                    <p>Jede Fassadenrenovierung beginnt mit einer gründlichen Bestandsaufnahme: Risse, Ausblühungen, Algen- und Moosbefall, Haftverlust des alten Anstrichs. Wir messen die Restfeuchte im Mauerwerk und geben Ihnen eine ehrliche Einschätzung, ob eine Renovierung ausreicht oder ob Vorarbeiten nötig sind.</p>

                    <h2>Fassadenfarben und Beschichtungssysteme</h2>

                    <ul class="checklist">
                        <li>Silikonharzfarben (beste Witterungsbeständigkeit, wasserabweisend)</li>
                        <li>Silikatfarben (mineralisch, diffusionsoffen, sehr langlebig)</li>
                        <li>Dispersionsfarben (Standardprodukt, wirtschaftlich)</li>
                        <li>Kunstharzputze (Reibeputz, Kratzputz – strukturierte Oberflächen)</li>
                        <li>Wärmedämmputze (zusätzlicher Dämmwert)</li>
                    </ul>

                    <p>Die Farbwahl stimmen wir mit Farbfächern der Systemhersteller auf Dachziegel, Fensterrahmen und Zierteile ab. Wir empfehlen immer einen großzügigen Probestrich – Farben wirken auf großen Fassadenflächen deutlich intensiver als auf dem Musterkärtchen.</p>

                    <h2>Häufige Fragen</h2>

                    <div class="faq-list">
                        <details class="faq-item">
                            <summary>Was kostet eine Fassadenrenovierung?</summary>
                            <div class="faq-item__body">
                                <p>Das hängt von Fassadengröße, Untergrund, Beschichtungssystem und Vorarbeiten ab. Wir bieten eine kostenlose Besichtigung und ein detailliertes Angebot an.</p>
                            </div>
                        </details>
                        <details class="faq-item">
                            <summary>Muss ich Gerüstkosten extra bezahlen?</summary>
                            <div class="faq-item__body">
                                <p>Wo ein Gerüst nötig ist, organisieren wir es als Teil des Auftrags und weisen die Kosten transparent im Angebot aus. Bei niedrigen Fassaden kommen wir mit Leitern aus.</p>
                            </div>
                        </details>
                        <details class="faq-item">
                            <summary>Was tun bei Algen und Moos auf der Fassade?</summary>
                            <div class="faq-item__body">
                                <p>Einfach überstreichen hilft nicht – der Befall schlägt durch. Wir entfernen Bewüchse mechanisch, behandeln mit einem bioziden Vorbehandlungsmittel und verwenden bei starkem Befall Farben mit fungizidem Zusatz.</p>
                            </div>
                        </details>
                        <details class="faq-item">
                            <summary>Wie oft sollte eine Fassade renoviert werden?</summary>
                            <div class="faq-item__body">
                                <p>Alle zehn bis fünfzehn Jahre – das ist normaler Bauunterhalt. Regelmäßige Pflege fängt kleine Schäden früh ab und ist deutlich günstiger als eine aufgeschobene Sanierung.</p>
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
                            <a href="tapezierarbeiten.php">Tapezierarbeiten</a>
                            <a href="kreative-wandgestaltung.php">Kreative Wandgestaltung</a>
                            <a href="betonoptik.php">Betonoptik</a>
                            <a href="fassadengestaltung.php" class="active">Fassadengestaltung</a>
                            <a href="bodenverlegearbeiten.php">Bodenverlegearbeiten</a>
                            <a href="urlaubsservice.php">Urlaubsservice</a>
                        </nav>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="cta-section" aria-labelledby="fassadengestaltung-cta">
        <div class="container cta-section__inner">
            <span class="cta-section__label">Kostenlos &amp; unverbindlich</span>
            <h2 class="cta-section__title" id="fassadengestaltung-cta">Fassade renovieren lassen?</h2>
            <p class="cta-section__text">Wir besichtigen Ihr Gebäude, beurteilen den Zustand der Fassade und erstellen ein vollständiges Angebot – inklusive aller Vorbereitungsschritte.</p>
            <div class="cta-section__actions">
                <a href="kontakt.php" class="btn btn--accent btn--lg">Kostenvoranschlag anfordern</a>
                <a href="tel:+491723047213" class="btn btn--outline-light">Jetzt anrufen: 0172 3047213</a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
