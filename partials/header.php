<?php
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/../includes/config.php';
}
$page_title       = $page_title       ?? SITE_NAME . ' – ' . SITE_MOTTO;
$meta_description = $meta_description ?? 'Ihr Malermeisterbetrieb in Dinslaken. Innenmalerei, Außenmalerei, Betonoptik und mehr. Qualität vom Meister – persönlich, zuverlässig, regional.';
$page_class       = $page_class       ?? 'page-default';

$schema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'LocalBusiness',
    '@id'             => SITE_URL,
    'name'            => SITE_NAME,
    'description'     => 'Malermeisterbetrieb in Dinslaken – Innenmalerei, Außenmalerei, Betonoptik, Tapezierarbeiten und mehr.',
    'url'             => SITE_URL,
    'telephone'       => SITE_PHONE_RAW,
    'email'           => SITE_EMAIL,
    'founder'         => ['@type' => 'Person', 'name' => SITE_OWNER],
    'foundingDate'    => SITE_FOUNDED,
    'address'         => [
        '@type'           => 'PostalAddress',
        'streetAddress'   => SITE_ADDRESS_STREET,
        'addressLocality' => SITE_ADDRESS_CITY,
        'postalCode'      => SITE_ADDRESS_ZIP,
        'addressRegion'   => SITE_REGION,
        'addressCountry'  => SITE_COUNTRY,
    ],
    'geo' => [
        '@type'     => 'GeoCoordinates',
        'latitude'  => '51.5662',
        'longitude' => '6.7404',
    ],
    'openingHoursSpecification' => [
        [
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Monday','Tuesday','Wednesday','Thursday','Friday'],
            'opens'     => '07:00',
            'closes'    => '18:00',
        ],
        [
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => 'Saturday',
            'opens'     => '08:00',
            'closes'    => '13:00',
        ],
    ],
    'priceRange'     => '€€',
    'currenciesAccepted' => 'EUR',
    'paymentAccepted' => 'Cash, Bank Transfer',
    'areaServed'      => [
        ['@type' => 'City', 'name' => 'Dinslaken'],
        ['@type' => 'City', 'name' => 'Wesel'],
        ['@type' => 'City', 'name' => 'Oberhausen'],
        ['@type' => 'City', 'name' => 'Duisburg'],
    ],
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name'  => 'Malerleistungen',
        'itemListElement' => [
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Innenmalerei']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Außenmalerei']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Betonoptik']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Tapezierarbeiten']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Kreative Wandgestaltung']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Fassadengestaltung']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Bodenverlegearbeiten']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Urlaubsservice']],
        ],
    ],
];
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($meta_description) ?>">
    <meta name="robots" content="index, follow">
    <meta name="author" content="<?= SITE_OWNER ?>">
    <link rel="canonical" href="<?= SITE_URL . $_SERVER['REQUEST_URI'] ?>">

    <!-- Open Graph -->
    <meta property="og:type"        content="website">
    <meta property="og:title"       content="<?= htmlspecialchars($page_title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($meta_description) ?>">
    <meta property="og:url"         content="<?= SITE_URL . $_SERVER['REQUEST_URI'] ?>">
    <meta property="og:site_name"   content="<?= SITE_NAME ?>">
    <meta property="og:locale"      content="de_DE">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Lora:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    <?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
    </script>

    <!-- Favicon placeholder -->
    <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">
</head>
<body class="<?= htmlspecialchars($page_class) ?>
<?php require_once __DIR__ . '/demo.php'; ?>">
