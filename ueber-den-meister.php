<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$page_title       = 'Über den Meister | Malermeister Anderson Dinslaken';
$meta_description = 'Lernen Sie Lukas Anderson kennen – Ihr Malermeister aus Dinslaken. Meisterqualifikation, persönlicher Ansatz, lokale Wurzeln und Leidenschaft für das Handwerk.';
$page_class       = 'page-ueber';
$current_page     = 'ueber';

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
                <span aria-current="page">Über den Meister</span>
            </nav>
            <h1 class="page-hero__title">Lukas Anderson – Malermeister aus Dinslaken</h1>
            <p class="page-hero__sub">Persönlich. Zuverlässig. Mit echter Leidenschaft für das Malerhandwerk.</p>
        </div>
    </div>

    <!-- ============================================================
         Section 1: Persönliche Vorstellung
    ============================================================ -->
    <section class="section" aria-labelledby="ueber-title">
        <div class="container">
            <div class="about-block">

                <div class="about-image">
                    <img src="assets/img/Firmen-Image-Profil-1-1605x2048.jpg" alt="Lukas Anderson – Malermeister aus Dinslaken, vor seinem Firmenfahrzeug" loading="lazy" width="1605" height="2048">
                </div>

                <div class="about-content">
                    <span class="section-label">Über mich</span>
                    <h2 id="ueber-title">Handwerk aus Überzeugung</h2>

                    <p>
                        Ich bin <?= SITE_OWNER ?>, Malermeister aus Dinslaken, und in dieser Region aufgewachsen. Wenn ich heute für Kunden in Dinslaken, Voerde oder Wesel arbeite, tue ich das nicht als anonymes Unternehmen, sondern als jemand, der selbst hier lebt und weiß, was die Menschen von einem Handwerker erwarten: Verlässlichkeit, klare Ansagen und Arbeit, die wirklich hält.
                    </p>

                    <p>
                        Meine Ausbildung zum Maler und Lackierer habe ich in Dinslaken abgeschlossen – danach folgten mehrere Jahre auf Baustellen unterschiedlichster Art: Privathaushalte, Gewerbeimmobilien, Neubauten und Sanierungen. Die Meisterprüfung habe ich mit Auszeichnung abgelegt, weil ich verstehen wollte, warum Techniken funktionieren und wie man Abläufe sauber plant. Im Jahr <?= SITE_FOUNDED ?> habe ich meinen eigenen Betrieb gegründet – mit einer klaren Vorstellung: keine Überbuchung, keine gehetzten Abläufe, sondern Fokus auf jedes einzelne Projekt.
                    </p>

                    <p>
                        Ich nehme mir die Zeit, jeden Auftrag persönlich zu besichtigen und wirklich zu verstehen, was gebraucht wird. Kein Angebot verlässt meinen Betrieb, ohne dass ich die Situation vor Ort selbst eingeschätzt habe.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================================
         Section 2: Was der Meistertitel bedeutet
    ============================================================ -->
    <section class="section section--alt" aria-labelledby="meister-title">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Qualifikation</span>
                <h2 id="meister-title">Meisterbetrieb – was das bedeutet</h2>
                <p>
                    Der Meistertitel im Malerhandwerk ist kein Ehrentitel – er ist eine staatlich geregelte Qualifikation
                    mit konkreten Anforderungen und rechtlichen Konsequenzen.
                </p>
            </div>

            <div class="grid-2">

                <div class="info-card">
                    <h3>Die Ausbildung zum Meister</h3>
                    <p>
                        Vier Prüfungsteile vor der Handwerkskammer: fachpraktisches Können, Theorie, kaufmännisch-rechtliche Grundlagen und Pädagogik. Voraussetzung: abgeschlossene Berufsausbildung und mehrjährige Praxis.
                    </p>
                </div>

                <div class="info-card">
                    <h3>Rechtliche Eintragungspflicht</h3>
                    <p>
                        Das Malerhandwerk ist zulassungspflichtig – nur mit Meisterprüfung und Eintragung in der Handwerksrolle darf ein Betrieb selbstständig arbeiten. Diese Eintragung ist ein gesetzliches Qualitätsmerkmal.
                    </p>
                </div>

                <div class="info-card">
                    <h3>Ausbildungsberechtigung</h3>
                    <p>
                        Ein Meisterbetrieb darf Lehrlinge ausbilden. Die pädagogische Eignung ist fester Bestandteil der Meisterprüfung – damit die Qualität des Handwerks langfristig gesichert bleibt.
                    </p>
                </div>

                <div class="info-card">
                    <h3>Qualitätsversprechen in der Praxis</h3>
                    <p>
                        Ihr Ansprechpartner hat sein Können unter Prüfungsbedingungen nachgewiesen und steht persönlich für Planung, Ausführung und Material ein – mit seinem Namen und seinem Betrieb.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================================
         Section 3: Philosophie
    ============================================================ -->
    <section class="section" aria-labelledby="philosophie-title">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Meine Arbeitsweise</span>
                <h2 id="philosophie-title">Meine Philosophie</h2>
                <p>Vier Grundsätze, nach denen ich jeden Auftrag angehe – unabhängig vom Umfang.</p>
            </div>

            <div class="feature-list">

                <article class="feature-item">
                    <div class="feature-item__icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="feature-item__title">Persönliche Betreuung</h3>
                        <p class="feature-item__text">
                            Jeder Auftrag wird von mir persönlich betreut – von der Besichtigung bis zur Übergabe. Sie haben immer denselben Ansprechpartner.
                        </p>
                    </div>
                </article>

                <article class="feature-item">
                    <div class="feature-item__icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 11 12 14 22 4"/>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="feature-item__title">Ehrlichkeit und Transparenz</h3>
                        <p class="feature-item__text">
                            Wenn ein Untergrund mehr Vorbereitung braucht, erfahren Sie das vor Beginn der Arbeiten – nicht als Nachtrag auf der Rechnung. Versteckte Kosten gibt es bei mir nicht.
                        </p>
                    </div>
                </article>

                <article class="feature-item">
                    <div class="feature-item__icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                            <path d="M2 17l10 5 10-5"/>
                            <path d="M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="feature-item__title">Handwerk vor Quantität</h3>
                        <p class="feature-item__text">
                            Bewusst weniger Projekte, dafür jedes mit dem Anspruch, den gutes Handwerk verdient. Zeit, Konzentration und das richtige Material – für jeden Kunden.
                        </p>
                    </div>
                </article>

                <article class="feature-item">
                    <div class="feature-item__icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 8v4l3 3"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="feature-item__title">Regionale Verbundenheit</h3>
                        <p class="feature-item__text">
                            Dinslaken und der Niederrhein sind meine Heimat. Kurze Wege bedeuten schnelle Reaktion und keine Anfahrtskosten.
                        </p>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- ============================================================
         Section 4: Zitat + CTA
    ============================================================ -->
    <section class="section section--alt" aria-label="Zitat und Kontaktaufforderung">
        <div class="container">

            <blockquote class="quote-block">
                <p class="quote-block__text">
                    "<?= SITE_MOTTO ?> – das ist kein Slogan, das ist mein Anspruch an mich selbst.
                    Jede Oberfläche, die ich abgebe, muss so aussehen, als ob ich sie für mich selbst gemacht hätte."
                </p>
                <cite class="quote-block__cite"><?= SITE_OWNER ?>, Malermeister</cite>
            </blockquote>

            <div class="cta-section">
                <div class="cta-section__inner">
                    <span class="cta-section__label">Bereit für Ihr Projekt?</span>
                    <h2 class="cta-section__title">Lernen wir uns kennen</h2>
                    <p class="cta-section__text">
                        Ich komme gerne zu Ihnen, schaue mir die Situation vor Ort an und erstelle Ihnen ein
                        transparentes Angebot – kostenlos und unverbindlich. Rufen Sie mich an oder schreiben Sie mir.
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
