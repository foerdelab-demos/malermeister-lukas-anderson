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
                    <div class="about-image__placeholder" aria-label="Porträt Lukas Anderson, Malermeister">
                        <span>Porträt<br><?= SITE_OWNER ?><br>Malermeister</span>
                    </div>
                </div>

                <div class="about-content">
                    <span class="section-label">Über mich</span>
                    <h2 id="ueber-title">Handwerk aus Überzeugung</h2>

                    <p>
                        Ich bin <?= SITE_OWNER ?>, Malermeister aus Dinslaken, und ich bin in dieser Region aufgewachsen. Das Niederrheinische – die Menschen hier, die Direktheit, der Zusammenhalt in den Nachbarschaften – das hat mich geprägt. Wenn ich heute für Kunden in Dinslaken, Voerde oder Wesel arbeite, tue ich das nicht als anonymes Unternehmen, sondern als jemand, der selbst hier lebt und weiß, was die Menschen in dieser Gegend von einem Handwerker erwarten: Verlässlichkeit, klare Ansagen und Arbeit, die wirklich hält.
                    </p>

                    <p>
                        Meine Ausbildung zum Maler und Lackierer habe ich in Dinslaken abgeschlossen. Schon früh hat mich fasziniert, wie sehr eine frisch gestrichene Wand einen Raum verwandeln kann – nicht nur optisch, sondern auch in der Atmosphäre, die ein Zuhause ausstrahlt. Nach der Gesellenprüfung habe ich mehrere Jahre auf Baustellen unterschiedlichster Art gearbeitet: in Privathaushalten, in Gewerbeimmobilien, in Neubauprojekten und bei umfangreichen Sanierungen. Diese Breite an Erfahrung war für mich wichtiger als eine frühe Spezialisierung, weil sie mir gezeigt hat, welche Anforderungen in der Praxis wirklich zählen.
                    </p>

                    <p>
                        Die Entscheidung, die Meisterschule zu besuchen, war für mich keine Frage des Karrieredenkens – sie war die logische Fortsetzung meiner Überzeugung, dass Handwerk nicht nach dem Gesellenbrief aufhört. Ich wollte verstehen, warum bestimmte Techniken funktionieren und andere nicht, warum Materialien unterschiedlich reagieren, und wie man Abläufe so plant, dass am Ende alles zusammenpasst. Die Meisterprüfung habe ich mit Auszeichnung abgelegt.
                    </p>

                    <p>
                        Im Jahr <?= SITE_FOUNDED ?> habe ich meinen eigenen Betrieb gegründet. Der Entschluss fiel mir leicht, weil ich von Anfang an eine klare Vorstellung hatte, wie ich arbeiten wollte: keine Überbuchung, keine gehetzten Abläufe, sondern echter Fokus auf jedes einzelne Projekt. Ein Kunde, der mich beauftragt, soll wissen, dass ich persönlich für das Ergebnis stehe – nicht ein anonymes Team, das ich morgen nicht mehr kenne.
                    </p>

                    <p>
                        Was mich antreibt, ist nicht das Abarbeiten von Aufträgen, sondern der Moment, wenn ein Kunde das fertige Ergebnis sieht und merkt, dass sein Zuhause wieder stimmt. Dieses Feedback – ob es ein nickendes Lächeln ist oder eine kurze Nachricht ein paar Wochen nach dem Auftrag – ist mein Maßstab. Wenn ich das erreiche, hat meine Arbeit ihren Zweck erfüllt.
                    </p>

                    <p>
                        Ich nehme mir die Zeit, jeden Auftrag persönlich zu besichtigen, das Gespräch zu suchen und wirklich zu verstehen, was gebraucht wird. Kein Angebot verlässt meinen Betrieb, ohne dass ich die Situation vor Ort selbst eingeschätzt habe. Das kostet Zeit – aber es ist die einzige Methode, mit der ich ein Ergebnis garantieren kann, hinter dem ich stehe.
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
                        Vor der Meisterprüfung steht eine abgeschlossene Berufsausbildung als Maler und Lackierer sowie
                        mehrjährige Berufserfahrung. Die Meisterschule selbst umfasst vier Prüfungsteile: fachpraktisches
                        Können, fachtheoretisches Wissen, kaufmännisch-rechtliche Grundlagen und berufs- und
                        arbeitspädagogische Eignung. Die Prüfungen werden vor der Handwerkskammer abgelegt und von
                        unabhängigen Prüfern bewertet. Eine Meisterprüfung dauert in der Vorbereitung und Durchführung
                        in der Regel zwei bis drei Jahre.
                    </p>
                </div>

                <div class="info-card">
                    <h3>Rechtliche Eintragungspflicht</h3>
                    <p>
                        In Deutschland ist das Malerhandwerk ein zulassungspflichtiges Handwerk. Das bedeutet: Wer
                        einen Meisterbetrieb führen will, muss in der Handwerksrolle eingetragen sein. Voraussetzung
                        dafür ist in der Regel die Meisterprüfung oder eine gleichwertig anerkannte Qualifikation.
                        Betriebe ohne diese Eintragung dürfen handwerkliche Maler- und Lackiererarbeiten nicht selbstständig
                        ausführen. Die Eintragung schützt Sie als Auftraggeber – sie ist ein gesetzlich geregeltes
                        Qualitätsmerkmal, keine freiwillige Auszeichnung.
                    </p>
                </div>

                <div class="info-card">
                    <h3>Ausbildungsberechtigung</h3>
                    <p>
                        Ein Meisterbetrieb ist berechtigt, Lehrlinge auszubilden. Das setzt voraus, dass der Meister
                        nicht nur selbst sein Handwerk beherrscht, sondern auch in der Lage ist, Wissen systematisch
                        weiterzugeben. Die berufs- und arbeitspädagogische Eignung ist fester Bestandteil der
                        Meisterprüfung. Dahinter steckt der Gedanke, dass die Qualität eines Handwerks nur dann
                        langfristig gesichert ist, wenn gut ausgebildete Fachkräfte nachkommen.
                    </p>
                </div>

                <div class="info-card">
                    <h3>Qualitätsversprechen in der Praxis</h3>
                    <p>
                        Für Sie als Auftraggeber bedeutet ein Meisterbetrieb in erster Linie: Ihr Ansprechpartner
                        kennt sein Handwerk nicht nur aus der Praxis, sondern hat es unter Prüfungsbedingungen
                        nachgewiesen. Er trägt die volle Verantwortung für Planung, Ausführung und Material. Fehler
                        gehen nicht auf Unterauftragnehmer zurück, die keine Garantie übernehmen. Der Meister steht
                        persönlich dafür ein – mit seinem Namen und seinem Betrieb.
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
                            Jeder Auftrag wird von mir persönlich betreut – von der ersten Besichtigung über die
                            Ausführung bis zur Übergabe. Sie haben immer denselben Ansprechpartner und müssen
                            Ihr Anliegen nicht mehrfach erklären. Wenn ich etwas zusage, dann halte ich es auch.
                            Das ist für mich nicht verhandelbar.
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
                            Ich sage Ihnen, was ich sehe – auch wenn es nicht das ist, was Sie hören möchten.
                            Wenn ein Untergrund mehr Vorbereitung braucht als erwartet, erfahren Sie das vor Beginn
                            der Arbeiten, nicht als Nachtrag auf der Rechnung. Mein Angebot enthält alle Positionen
                            offen und nachvollziehbar. Versteckte Kosten gibt es bei mir nicht.
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
                            Ich nehme bewusst nicht mehr Aufträge an, als ich mit Sorgfalt ausführen kann. Lieber
                            weniger Projekte, dafür jedes mit dem Anspruch, den mein Handwerk verdient. Gute
                            Malerarbeit ist keine Massenware. Sie erfordert Zeit, Konzentration und das richtige
                            Material – und das bekommt jeder meiner Kunden, unabhängig von der Auftragsgröße.
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
                            Dinslaken und die Region am Niederrhein sind meine Heimat. Ich kenne die Häuser hier,
                            die typischen Baumaterialien, die lokalen Gegebenheiten. Kurze Wege bedeuten schnelle
                            Reaktionszeiten und keine versteckten Anfahrtskosten. Und: Wenn ich für jemanden hier
                            gearbeitet habe, begegnen wir uns auf dem Marktplatz. Das verpflichtet.
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
