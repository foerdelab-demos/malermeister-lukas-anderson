<?php

$navigation = [
    ['label' => 'Startseite',       'href' => '/',                    'active' => 'index'],
    ['label' => 'Leistungen',       'href' => '/leistungen.php',       'active' => 'leistungen', 'dropdown' => true],
    ['label' => 'Referenzen',       'href' => '/referenzen.php',       'active' => 'referenzen'],
    ['label' => 'Über den Meister', 'href' => '/ueber-den-meister.php','active' => 'ueber'],
    ['label' => 'Kontakt',          'href' => '/kontakt.php',          'active' => 'kontakt'],
];

$services = [
    [
        'id'          => 'innenmalerei',
        'title'       => 'Innenmalerei',
        'href'        => '/innenmalerei.php',
        'icon'        => 'paint-roller',
        'short'       => 'Wände und Decken in höchster Qualität – von der Untergrundvorbereitung bis zum fertigen Anstrich.',
        'description' => 'Professionelle Innenmalerei für Wohnräume, Büros und Gewerbeimmobilien. Saubere Ausführung, hochwertige Farben und ein Ergebnis, das überzeugt.',
        'category'    => 'innen',
    ],
    [
        'id'          => 'aussenmalerei',
        'title'       => 'Außenmalerei',
        'href'        => '/aussenmalerei.php',
        'icon'        => 'house',
        'short'       => 'Langlebiger Schutz und frisches Erscheinungsbild für Ihre Fassade und Außenbauteile.',
        'description' => 'Außenanstriche mit wetterfesten Farben – fachgerecht ausgeführt für dauerhaften Schutz und ansprechendes Äußeres.',
        'category'    => 'aussen',
    ],
    [
        'id'          => 'tapezierarbeiten',
        'title'       => 'Tapezierarbeiten',
        'href'        => '/tapezierarbeiten.php',
        'icon'        => 'layers',
        'short'       => 'Vom klassischen Raufaser bis zur edlen Designtapete – präzise verarbeitet und sauber abgeschlossen.',
        'description' => 'Tapezierarbeiten jeder Art: Strukturtapeten, Vliestapeten, Mustertapeten und individuelle Wandbehänge.',
        'category'    => 'innen',
    ],
    [
        'id'          => 'kreative-wandgestaltung',
        'title'       => 'Kreative Wandgestaltung',
        'href'        => '/kreative-wandgestaltung.php',
        'icon'        => 'sparkles',
        'short'       => 'Individuelle Gestaltungsideen für Wände, die Charakter zeigen und bleibenden Eindruck hinterlassen.',
        'description' => 'Farbtechniken, Strukturputze, Akzentwände – kreative Lösungen, die Ihren Raum in etwas Besonderes verwandeln.',
        'category'    => 'innen',
    ],
    [
        'id'          => 'betonoptik',
        'title'       => 'Betonoptik',
        'href'        => '/betonoptik.php',
        'icon'        => 'cube',
        'short'       => 'Moderner Industrial-Look ohne rohen Beton – die Betonoptik-Beschichtung für Wände und Böden.',
        'description' => 'Hochwertige Betonoptik-Beschichtungen für Wohnräume, Büros und Küchen – langlebig, pflegeleicht und einzigartig.',
        'category'    => 'kreativ',
    ],
    [
        'id'          => 'fassadengestaltung',
        'title'       => 'Fassadengestaltung',
        'href'        => '/fassadengestaltung.php',
        'icon'        => 'building',
        'short'       => 'Gestaltung und Schutz Ihrer Hausfassade mit modernen Systemen und kreativen Farbkonzepten.',
        'description' => 'Fassadenrenovierung, Farbberatung und strukturierte Oberflächen – Ihr Gebäude erstrahlt in neuem Glanz.',
        'category'    => 'aussen',
    ],
    [
        'id'          => 'bodenverlegearbeiten',
        'title'       => 'Bodenverlegearbeiten',
        'href'        => '/bodenverlegearbeiten.php',
        'icon'        => 'grid',
        'short'       => 'Verlegung von Laminat, Vinyl, Kork und Teppich – sorgfältig und termingerecht.',
        'description' => 'Bodenleger-Facharbeiten für Wohn- und Gewerberäume. Beratung, Untergrundvorbereitung und saubere Verlegung.',
        'category'    => 'boden',
    ],
    [
        'id'          => 'urlaubsservice',
        'title'       => 'Urlaubsservice',
        'href'        => '/urlaubsservice.php',
        'icon'        => 'calendar',
        'short'       => 'Renovierung während Ihrer Abwesenheit – Sie reisen ab, wir renovieren, Sie kommen nach Hause.',
        'description' => 'Praktischer Urlaubsservice: Während Sie entspannen, erneuern wir Ihre Wände, Böden oder die ganze Wohnung.',
        'category'    => 'service',
    ],
];

$trust_signals = [
    ['label' => 'Meisterbetrieb',          'detail' => 'Staatlich geprüft'],
    ['label' => 'Seit ' . SITE_FOUNDED,    'detail' => 'Erfahrung aus Dinslaken'],
    ['label' => '5,0 Sterne',              'detail' => 'Kundenbewertungen'],
    ['label' => 'Hochwertige Materialien', 'detail' => 'Markenprodukte'],
    ['label' => 'Persönliche Betreuung',   'detail' => 'Direkt vom Meister'],
];

$company_info = [
    'name'    => SITE_NAME,
    'owner'   => SITE_OWNER,
    'phone'   => SITE_PHONE,
    'email'   => SITE_EMAIL,
    'street'  => SITE_ADDRESS_STREET,
    'zip'     => SITE_ADDRESS_ZIP,
    'city'    => SITE_ADDRESS_CITY,
    'founded' => SITE_FOUNDED,
    'motto'   => SITE_MOTTO,
    'hours'   => [
        'Montag – Freitag' => '07:00 – 18:00 Uhr',
        'Samstag'          => '08:00 – 13:00 Uhr',
        'Sonntag'          => 'Geschlossen',
    ],
];
