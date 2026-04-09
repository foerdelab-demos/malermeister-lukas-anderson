<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$page_title       = 'Urlaubsservice Dinslaken | Malermeister Anderson';
$meta_description = 'Urlaubsservice in Dinslaken: Renovierung während Ihrer Abwesenheit. Sie fahren weg, wir renovieren. Malermeister Anderson – zuverlässig und vertrauenswürdig.';
$page_class       = 'page-urlaubsservice';
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
                <span aria-current="page">Urlaubsservice</span>
            </nav>
            <h1 class="page-hero__title">Urlaubsservice in Dinslaken – renoviert, wenn Sie zurückkommen</h1>
            <p class="page-hero__sub">Renovierung während Ihrer Abwesenheit – Sie reisen ab, wir arbeiten, Sie kommen in frisch renovierte Räume zurück.</p>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="service-page-layout">
                <article class="prose">

                    <p>Renovierung bedeutet Lärm, Geruch und Staub – das muss nicht sein, während Sie zu Hause sind. Mit unserem Urlaubsservice planen wir die Arbeiten so, dass Sie in der Zwischenzeit verreisen. Bei Ihrer Rückkehr sind die Räume fertig renoviert, Möbel stehen an ihrem Platz, Abfall ist entsorgt.</p>

                    <h2>Was kann erledigt werden?</h2>

                    <ul class="checklist">
                        <li>Wände und Decken streichen (einzelne Zimmer oder ganze Wohnung)</li>
                        <li>Tapeten entfernen und neu tapezieren</li>
                        <li>Böden verlegen (Laminat, Vinyl, Teppich)</li>
                        <li>Treppenhäuser renovieren</li>
                        <li>Küche und Bad streichen (feuchtraumgeeignete Farben)</li>
                        <li>Kombination aus mehreren Leistungen</li>
                    </ul>

                    <h2>So funktioniert es</h2>

                    <ol class="process-steps">
                        <li class="process-step">
                            <strong>Planung:</strong> Besichtigung vor Ihrem Urlaub – Räume, Farben, Materialien und Böden werden besprochen. Sie erhalten einen schriftlichen Kostenvoranschlag mit festen Preisen.
                        </li>
                        <li class="process-step">
                            <strong>Schlüsselübergabe:</strong> Vor Abreise übergeben Sie den Schlüssel. Möbel werden abgedeckt, die Wohnung wird fotografiert.
                        </li>
                        <li class="process-step">
                            <strong>Arbeiten:</strong> Wir arbeiten Raum für Raum. Abfälle werden täglich entsorgt. Bei unvorhergesehenen Befunden kontaktieren wir Sie vor jeder Entscheidung.
                        </li>
                        <li class="process-step">
                            <strong>Übergabe:</strong> Bei Ihrer Rückkehr ist alles fertig. Erst nach Ihrer Abnahme ist der Auftrag abgeschlossen.
                        </li>
                    </ol>

                    <h2>Vertrauen und Sicherheit</h2>

                    <p>Wir sind ein eingetragener Meisterbetrieb mit vollständiger Betriebshaftpflichtversicherung. Die Arbeiten werden ausschließlich von uns selbst ausgeführt – kein Subunternehmer, keine wechselnden Hilfskräfte. Falls Sie uns noch nicht kennen, können wir vorab einen kleineren Auftrag durchführen.</p>

                    <h2>Häufige Fragen</h2>

                    <div class="faq-list">
                        <details class="faq-item">
                            <summary>Wie weit im Voraus muss ich buchen?</summary>
                            <div class="faq-item__body">
                                <p>Vier bis sechs Wochen Vorlaufzeit. In den Sommerferien sind die Kapazitäten früh ausgebucht – melden Sie sich rechtzeitig.</p>
                            </div>
                        </details>
                        <details class="faq-item">
                            <summary>Was, wenn unvorhergesehene Schäden auftreten?</summary>
                            <div class="faq-item__body">
                                <p>Wir dokumentieren den Ausgangszustand per Foto. Bei versteckten Schäden kontaktieren wir Sie und warten auf Ihre Entscheidung – es wird nichts eigenmächtig entschieden.</p>
                            </div>
                        </details>
                        <details class="faq-item">
                            <summary>Muss ich alle Materialien selbst kaufen?</summary>
                            <div class="faq-item__body">
                                <p>Nein. Wir beschaffen alles und weisen die Kosten transparent aus. Eigene Materialwünsche nennen Sie uns einfach – wir besorgen es oder arbeiten mit Ihrem Material.</p>
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
                            <a href="bodenverlegearbeiten.php">Bodenverlegearbeiten</a>
                            <a href="urlaubsservice.php" class="active">Urlaubsservice</a>
                        </nav>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="cta-section" aria-labelledby="urlaubsservice-cta">
        <div class="container cta-section__inner">
            <span class="cta-section__label">Kostenlos &amp; unverbindlich</span>
            <h2 class="cta-section__title" id="urlaubsservice-cta">Urlaub planen, Renovierung gleich dazu?</h2>
            <p class="cta-section__text">Wir besichtigen Ihre Räume vor Ihrer Abreise, halten alles schriftlich fest und übergeben die fertig renovierte Wohnung bei Ihrer Rückkehr.</p>
            <div class="cta-section__actions">
                <a href="kostenvoranschlag.php" class="btn btn--accent btn--lg">Kostenvoranschlag anfordern</a>
                <a href="tel:+491723047213" class="btn btn--outline-light">Jetzt anrufen: 0172 3047213</a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
