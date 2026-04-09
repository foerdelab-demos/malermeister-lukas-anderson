<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$page_title       = 'Kreative Wandgestaltung Dinslaken | Malermeister Anderson';
$meta_description = 'Kreative Wandgestaltung in Dinslaken: Akzentwände, Farbkonzepte, Strukturtechniken, dekorative Oberflächen. Individuelle Gestaltung vom Meisterbetrieb.';
$page_class       = 'page-kreative-wandgestaltung';
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
                <span aria-current="page">Kreative Wandgestaltung</span>
            </nav>
            <h1 class="page-hero__title">Kreative Wandgestaltung in Dinslaken – Ihre Wände, Ihr Stil</h1>
            <p class="page-hero__sub">Akzentwände, Farbkonzepte, Strukturtechniken und dekorative Oberflächen für jeden Geschmack.</p>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="service-page-layout">
                <article class="prose">

                    <p>Kreative Wandgestaltung ist die konsequente Erweiterung handwerklicher Malerarbeit: Farbwahl, Oberflächentechniken und dekorative Beschichtungen, die aus einem Raum etwas Besonderes machen. Ob einzelne Akzentwand oder vollständig gestalteter Raum – wir setzen um, was Sie sich vorstellen, und beraten Sie dort, wo Sie noch keine klare Vorstellung haben.</p>

                    <h2>Techniken und Oberflächen</h2>

                    <ul class="checklist">
                        <li>Farbverläufe (Ombré-Technik)</li>
                        <li>Wischputze und Strukturputze</li>
                        <li>Marmorino und Stucco-Techniken</li>
                        <li>Kreidefarbe (Chalk Paint) für matte Oberflächen</li>
                        <li>Metallic-Effekte und Perlglanzfarben</li>
                        <li>Schablonentechnik für Muster und Ornamente</li>
                    </ul>

                    <h2>So läuft die Farbberatung ab</h2>

                    <ol class="process-steps">
                        <li class="process-step">
                            <strong>Erstes Gespräch:</strong> Wir besprechen Ihre Wünsche, den gewünschten Stil und die Nutzung des Raums. Bestehende Böden und Möbel werden berücksichtigt.
                        </li>
                        <li class="process-step">
                            <strong>Farbvorschläge:</strong> Wir bringen Farbmuster und Materialproben mit. Bei Strukturtechniken zeigen wir Referenzfotos.
                        </li>
                        <li class="process-step">
                            <strong>Probestrich:</strong> Direkt an Ihrer Wand – denn Farbe wirkt auf der Fläche anders als auf dem Musterkärtchen.
                        </li>
                        <li class="process-step">
                            <strong>Ausführung:</strong> Nach Ihrer Entscheidung beginnen wir mit Untergrundvorbereitung und Ausführung.
                        </li>
                    </ol>

                    <h2>Häufige Fragen</h2>

                    <div class="faq-list">
                        <details class="faq-item">
                            <summary>Kann ich später wieder weiß streichen?</summary>
                            <div class="faq-item__body">
                                <p>Bei den meisten Techniken ja. Über glatte Beschichtungen lässt sich nach einem Voranstrich direkt überstreichen. Bei Strukturputzen bleibt die Struktur sichtbar. Wir beraten Sie gerne, was bei Ihrer spezifischen Technik möglich ist.</p>
                            </div>
                        </details>
                        <details class="faq-item">
                            <summary>Wie teuer ist kreative Wandgestaltung?</summary>
                            <div class="faq-item__body">
                                <p>Das hängt von der Technik, der Wandfläche und dem Vorbereitungsaufwand ab. Ein Ombré-Anstrich ist deutlich günstiger als ein vollflächiger Marmorino. Wir erklären transparent, welche Schritte in den Preis einfließen.</p>
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
                            <a href="kreative-wandgestaltung.php" class="active">Kreative Wandgestaltung</a>
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

    <section class="cta-section" aria-labelledby="kreative-wandgestaltung-cta">
        <div class="container cta-section__inner">
            <span class="cta-section__label">Kostenlos &amp; unverbindlich</span>
            <h2 class="cta-section__title" id="kreative-wandgestaltung-cta">Ideen für Ihre Wände?</h2>
            <p class="cta-section__text">Wir kommen zur Beratung, bringen Farbmuster mit und zeigen Ihnen, was an Ihren Wänden möglich ist – ohne Verpflichtung und ohne Aufpreis für die Beratung.</p>
            <div class="cta-section__actions">
                <a href="kostenvoranschlag.php" class="btn btn--accent btn--lg">Kostenvoranschlag anfordern</a>
                <a href="tel:+491723047213" class="btn btn--outline-light">Jetzt anrufen: 0172 3047213</a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
