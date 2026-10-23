<?php
// Builds the JSON-LD @graph for a page. Facts here must match what is visible on the site.

function schema_procedures()
{
    return [
        'lezeres' => [
            '@type' => 'MedicalProcedure',
            '@id' => SITE_URL . '/visszerek.php#lezeres-visszermutet',
            'name' => 'Lézeres és radiofrekvenciás visszérműtét',
            'alternateName' => 'Endovénás lézeres visszérműtét',
            'procedureType' => 'https://schema.org/PercutaneousProcedure',
            'bodyLocation' => 'Alsó végtag felületes vénái',
            'howPerformed' => 'Helyi érzéstelenítésben, ultrahang vezérléssel a felületes fővénába katétert vezetünk, majd a katéter hőképző szakaszát fokozatosan visszahúzva a vénát belülről elzárjuk.',
            'followup' => 'A beteg negyed órával a beavatkozás után saját lábán távozik; kontroll vizsgálat kb. két hónap múlva.',
            'url' => SITE_URL . '/visszerek.php',
        ],
        'ragasztasos' => [
            '@type' => 'MedicalProcedure',
            '@id' => SITE_URL . '/visszerek.php#ragasztasos-visszermutet',
            'name' => 'Ragasztásos visszérműtét',
            'procedureType' => 'https://schema.org/PercutaneousProcedure',
            'bodyLocation' => 'Alsó végtag felületes vénái',
            'howPerformed' => 'A fővéna ragasztóval történő kezelése egy tűszúrásból végzett eljárással.',
            'url' => SITE_URL . '/visszerek.php',
        ],
        'nyitott' => [
            '@type' => 'SurgicalProcedure',
            '@id' => SITE_URL . '/visszerek.php#nyitott-visszermutet',
            'name' => 'Nyitott visszérműtét',
            'bodyLocation' => 'Alsó végtag felületes vénái',
            'howPerformed' => 'Rövid altatásban vagy gerinctáji érzéstelenítésben a teljes beteg felületes vénás érszakaszt eltávolítjuk, a lágyéki elégtelen vénás billentyűt elvarrjuk.',
            'followup' => 'Egynapos befekvés, varratszedés általában egy hét múlva.',
            'url' => SITE_URL . '/visszerek.php',
        ],
        'sclero' => [
            '@type' => 'MedicalProcedure',
            '@id' => SITE_URL . '/visszerek.php#szkleroterapia',
            'name' => 'Sclerotherapia (szklerotherápia)',
            'alternateName' => 'Injekciós kezelés, hab-sclerotherapia',
            'procedureType' => 'https://schema.org/NoninvasiveProcedure',
            'bodyLocation' => 'Pókhálóvénák, seprűvénák, oldalági vénák',
            'howPerformed' => 'A kis vénákat egy nagyon vékony tűvel megszúrjuk és az ereket feltöltjük a sclerotizáló anyaggal.',
            'followup' => 'II-es kompressziós gyógyharisnya viselése két hétig javasolt.',
            'url' => SITE_URL . '/visszerek.php',
        ],
        'carotis_nyitott' => [
            '@type' => 'SurgicalProcedure',
            '@id' => SITE_URL . '/nyakierek.php#nyitott-carotis-mutet',
            'name' => 'Nyitott nyaki érműtét (a kóros plakk eltávolítása)',
            'bodyLocation' => 'Nyaki verőér (arteria carotis)',
            'howPerformed' => 'Altatásban, a nyaki ér megnyitása után a kóros plakkot eltávolítjuk.',
            'url' => SITE_URL . '/nyakierek.php',
        ],
        'carotis_stent' => [
            '@type' => 'MedicalProcedure',
            '@id' => SITE_URL . '/nyakierek.php#carotis-stent',
            'name' => 'Katéteres értágítás stent beültetéssel (nyaki ér)',
            'procedureType' => 'https://schema.org/PercutaneousProcedure',
            'bodyLocation' => 'Nyaki verőér (arteria carotis)',
            'url' => SITE_URL . '/nyakierek.php',
        ],
        'pad_endo' => [
            '@type' => 'MedicalProcedure',
            '@id' => SITE_URL . '/alsovegtag.php#kateteres-ertagitas',
            'name' => 'Endovascularis beavatkozás: katéteres értágítás, stent beültetés',
            'procedureType' => 'https://schema.org/PercutaneousProcedure',
            'bodyLocation' => 'Hasi és alsó végtagi verőerek',
            'url' => SITE_URL . '/alsovegtag.php',
        ],
        'pad_nyitott' => [
            '@type' => 'SurgicalProcedure',
            '@id' => SITE_URL . '/alsovegtag.php#nyitott-mutet',
            'name' => 'Nyitott érműtét (plakk eltávolítás, áthidaló műtét műérrel vagy saját érrel)',
            'bodyLocation' => 'Hasi és alsó végtagi verőerek',
            'url' => SITE_URL . '/alsovegtag.php',
        ],
        'aneurysma_nyitott' => [
            '@type' => 'SurgicalProcedure',
            '@id' => SITE_URL . '/ertagulatok.php#nyitott-mutet',
            'name' => 'Nyitott műtét: a tágult érszakasz pótlása műérrel',
            'bodyLocation' => 'Aorta és perifériás verőerek',
            'url' => SITE_URL . '/ertagulatok.php',
        ],
        'aneurysma_stentgraft' => [
            '@type' => 'MedicalProcedure',
            '@id' => SITE_URL . '/ertagulatok.php#stentgraft',
            'name' => 'Endovascularis műtét (EVAR, TEVAR) stentgraft beültetéssel',
            'procedureType' => 'https://schema.org/PercutaneousProcedure',
            'bodyLocation' => 'Mellkasi és hasi aorta',
            'url' => SITE_URL . '/ertagulatok.php',
        ],
    ];
}

function schema_conditions()
{
    return [
        'visszer' => [
            'name' => 'Visszeresség',
            'alternateName' => 'Varicositas, krónikus vénás elégtelenség',
            'icd10' => 'I83',
            'symptoms' => ['Nehéz láb érzés', 'Feszülés, esti vizenyősség', 'Kitágult, kanyargós vénák', 'Barna bőrelszíneződés a belbokánál', 'Vénás fekély'],
            'treatments' => ['lezeres', 'ragasztasos', 'nyitott', 'sclero'],
        ],
        'carotis' => [
            'name' => 'Nyaki érszűkület (carotis stenosis)',
            'icd10' => 'I65.2',
            'symptoms' => ['Ellenoldali testfélgyengeség vagy bénulás', 'Látótérkiesés'],
            'treatments' => ['carotis_nyitott', 'carotis_stent'],
        ],
        'pad' => [
            'name' => 'Alsó végtagi érszűkület',
            'alternateName' => 'Perifériás artériás betegség',
            'icd10' => 'I70.2',
            'symptoms' => [],
            'treatments' => ['pad_endo', 'pad_nyitott'],
        ],
        'aneurysma' => [
            'name' => 'Értágulat, aneurysma',
            'alternateName' => 'Aorta aneurysma',
            'icd10' => 'I71',
            'symptoms' => [],
            'treatments' => ['aneurysma_nyitott', 'aneurysma_stentgraft'],
        ],
    ];
}

function schema_sitewide_nodes()
{
    $vpmed = SITE_URL . '/#vpmed';
    $semmelweis = SITE_URL . '/#semmelweis';
    return [
        [
            '@type' => 'WebSite',
            '@id' => SITE_URL . '/#website',
            'url' => SITE_URL . '/',
            'name' => SITE_NAME,
            'inLanguage' => 'hu-HU',
            'publisher' => ['@id' => SITE_URL . '/#physician'],
        ],
        [
            '@type' => ['Physician', 'Person'],
            '@id' => SITE_URL . '/#physician',
            'name' => DOCTOR_NAME,
            'givenName' => 'Gábor Viktor',
            'familyName' => 'Szabó',
            'honorificPrefix' => 'Dr.',
            'honorificSuffix' => 'Ph.D.',
            'jobTitle' => 'érsebész, sebész szakorvos, egyetemi docens',
            'description' => 'Érsebész, sebész szakorvos, egyetemi docens. A Semmelweis Egyetem Városmajori Szív- és Érgyógyászati Klinika Érsebészeti Tanszékének osztályvezető főorvosa.',
            'medicalSpecialty' => ['https://schema.org/Surgical', 'https://schema.org/Cardiovascular'],
            'url' => SITE_URL . '/',
            'image' => SITE_URL . '/images/FotoDrSzGV.jpg',
            'knowsAbout' => [
                'Lézeres visszérműtét', 'Nyitott visszérműtét', 'Sclerotherapia', 'Visszeresség',
                'Nyaki erek sebészete (carotis)', 'Alsó végtagi érszűkület', 'Aneurysma, stentgraft',
            ],
            'knowsLanguage' => ['hu', 'en', 'de'],
            'alumniOf' => [
                '@type' => 'CollegeOrUniversity',
                'name' => 'Semmelweis Orvostudományi Egyetem, Általános Orvostudományi Kar',
            ],
            'hasCredential' => [
                ['@type' => 'EducationalOccupationalCredential', 'name' => 'Általános orvosi diploma', 'dateCreated' => '1990'],
                ['@type' => 'EducationalOccupationalCredential', 'name' => 'Általános sebészeti szakvizsga', 'dateCreated' => '1994'],
                ['@type' => 'EducationalOccupationalCredential', 'name' => 'Érsebészeti szakvizsga', 'dateCreated' => '1998'],
                ['@type' => 'EducationalOccupationalCredential', 'name' => 'Igazságügyi orvosszakértő', 'dateCreated' => '2008'],
                ['@type' => 'EducationalOccupationalCredential', 'name' => 'Ph.D. fokozat, Semmelweis Egyetem', 'dateCreated' => '2011'],
            ],
            'memberOf' => [
                ['@type' => 'Organization', 'name' => 'Magyar Sebész Társaság'],
                ['@type' => 'Organization', 'name' => 'Magyar Angiologiai és Érsebészeti Társaság'],
                ['@type' => 'Organization', 'name' => 'Magyar Tudományos Akadémia Köztestület'],
                ['@type' => 'Organization', 'name' => 'Érsebészet Szakmai Grémium'],
            ],
            'worksFor' => [['@id' => $vpmed], ['@id' => $semmelweis]],
        ],
        [
            '@type' => 'MedicalClinic',
            '@id' => $vpmed,
            'name' => 'VP-MED Egészségcentrum és Oktatási Központ',
            'url' => 'https://vpmed.hu/',
            'telephone' => '+36309631363',
            'email' => 'info@vpmed.hu',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Árpád út 56, fsz. 33',
                'addressLocality' => 'Budapest',
                'postalCode' => '1042',
                'addressCountry' => 'HU',
            ],
            'geo' => ['@type' => 'GeoCoordinates', 'latitude' => 47.561258, 'longitude' => 19.086339],
            'medicalSpecialty' => 'https://schema.org/Surgical',
            'availableService' => [
                ['@id' => SITE_URL . '/visszerek.php#lezeres-visszermutet'],
                ['@id' => SITE_URL . '/visszerek.php#szkleroterapia'],
            ],
        ],
        [
            '@type' => 'Hospital',
            '@id' => $semmelweis,
            'name' => 'Semmelweis Egyetem Városmajori Szív- és Érgyógyászati Klinika, Érsebészeti Tanszék',
            'url' => 'http://semmelweis.hu/ersebeszet/',
            'telephone' => '+3614586800',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Városmajor utca 68.',
                'addressLocality' => 'Budapest',
                'postalCode' => '1122',
                'addressCountry' => 'HU',
            ],
            'geo' => ['@type' => 'GeoCoordinates', 'latitude' => 47.507146, 'longitude' => 19.013559],
        ],
    ];
}

function schema_offers()
{
    // Price lines as printed on /arak.php (VP-MED), last updated 2025.12.28.
    $lines = [
        ['Visszeresség érsebészeti vizsgálata (15-20 perc)', 30000, null],
        ['Visszérvizsgálat + alsó végtagi színes ultrahang', 40000, null],
        ['Kontroll vizsgálat', 25000, null],
        ['Műtét utáni első kontroll', 0, null],
        ['Érbeteg vizsgálat + doppler (20-30 perc)', 40000, null],
        ['Érbeteg lelet konzultáció - vizsgálat nélkül (15 perc)', 25000, null],
        ['Injekciós szkleroterápia (1 ampulla)', 25000, 'sclero'],
        ['Lézeres visszérműtét egy végtagon', 490000, 'lezeres'],
        ['Lézeres visszérműtét egyszerre két végtagon', 720000, 'lezeres'],
    ];
    $offers = [];
    foreach ($lines as [$name, $price, $procedure]) {
        $item = $procedure
            ? ['@id' => schema_procedures()[$procedure]['@id']]
            : ['@type' => 'Service', 'name' => $name];
        $offers[] = [
            '@type' => 'Offer',
            'name' => $name,
            'price' => $price,
            'priceCurrency' => 'HUF',
            'validFrom' => '2025-12-28',
            'itemOffered' => $item,
        ];
    }
    return [
        '@type' => 'OfferCatalog',
        '@id' => SITE_URL . '/arak.php#arak',
        'name' => 'Visszérműtét és vizsgálatok árai – VP-MED Egészségcentrum',
        'itemListElement' => $offers,
    ];
}

function schema_graph($page_id, $page)
{
    $url = SITE_URL . $page['path'];
    $graph = schema_sitewide_nodes();

    $webpage = [
        '@type' => $page['page_type'] ?? 'WebPage',
        '@id' => $url . '#webpage',
        'url' => $url,
        'name' => $page['title'],
        'description' => $page['description'],
        'inLanguage' => 'hu-HU',
        'isPartOf' => ['@id' => SITE_URL . '/#website'],
        'breadcrumb' => ['@id' => $url . '#breadcrumb'],
    ];

    if ($page_id === 'index') {
        $webpage['about'] = ['@id' => SITE_URL . '/#physician'];
    } elseif ($page_id === 'bemutatkozas') {
        $webpage['mainEntity'] = ['@id' => SITE_URL . '/#physician'];
    } elseif ($page_id === 'elerhetoseg') {
        $webpage['about'] = [['@id' => SITE_URL . '/#vpmed'], ['@id' => SITE_URL . '/#semmelweis']];
    }

    if (!empty($page['condition'])) {
        $procedures = schema_procedures();
        $c = schema_conditions()[$page['condition']];
        $condition = [
            '@type' => 'MedicalCondition',
            '@id' => $url . '#condition',
            'name' => $c['name'],
            'code' => ['@type' => 'MedicalCode', 'codeValue' => $c['icd10'], 'codingSystem' => 'ICD-10'],
            'possibleTreatment' => array_map(function ($t) use ($procedures) {
                return ['@id' => $procedures[$t]['@id']];
            }, $c['treatments']),
        ];
        if (!empty($c['alternateName'])) {
            $condition['alternateName'] = $c['alternateName'];
        }
        if ($c['symptoms']) {
            $condition['signOrSymptom'] = array_map(function ($s) {
                return ['@type' => 'MedicalSignOrSymptom', 'name' => $s];
            }, $c['symptoms']);
        }
        $webpage['about'] = ['@id' => $url . '#condition'];
        $webpage['medicalAudience'] = ['@type' => 'MedicalAudience', 'audienceType' => 'Patient'];
        $webpage['author'] = ['@id' => SITE_URL . '/#physician'];
        $graph[] = $condition;
        foreach ($c['treatments'] as $t) {
            $graph[] = $procedures[$t];
        }
    }

    if (!empty($page['offers'])) {
        $procedures = schema_procedures();
        $graph[] = $procedures['lezeres'];
        $graph[] = $procedures['sclero'];
        $graph[] = schema_offers();
        foreach ($graph as &$node) {
            if (($node['@id'] ?? '') === SITE_URL . '/#vpmed') {
                $node['hasOfferCatalog'] = ['@id' => SITE_URL . '/arak.php#arak'];
            }
        }
        unset($node);
        $webpage['mainEntity'] = ['@id' => SITE_URL . '/arak.php#arak'];
    } elseif (($page['condition'] ?? '') !== 'visszer') {
        // the clinic's availableService refers to these; keep the references resolvable on every page
        $procedures = schema_procedures();
        $graph[] = ['@type' => 'MedicalProcedure', '@id' => $procedures['lezeres']['@id'], 'name' => $procedures['lezeres']['name']];
        $graph[] = ['@type' => 'MedicalProcedure', '@id' => $procedures['sclero']['@id'], 'name' => $procedures['sclero']['name']];
    }

    $items = [];
    foreach ($page['breadcrumb'] as $i => $crumb) {
        $items[] = [
            '@type' => 'ListItem',
            'position' => $i + 1,
            'name' => $crumb['name'],
            'item' => SITE_URL . $crumb['path'],
        ];
    }
    $graph[] = $webpage;
    $graph[] = ['@type' => 'BreadcrumbList', '@id' => $url . '#breadcrumb', 'itemListElement' => $items];

    return ['@context' => 'https://schema.org', '@graph' => $graph];
}

function schema_script($page_id, $page)
{
    $json = json_encode(schema_graph($page_id, $page), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    return '<script type="application/ld+json">' . $json . '</script>';
}
