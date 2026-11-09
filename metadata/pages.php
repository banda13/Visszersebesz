<?php
// Single source of page metadata: <head> tags, JSON-LD, sitemaps and llms.txt are built from this.

const SITE_URL = 'https://visszersebesz.hu';
const SITE_NAME = 'Visszérsebész – Dr. Szabó Gábor Viktor';
const DOCTOR_NAME = 'Dr. Szabó Gábor Viktor Ph.D.';

$crumb_home = ['name' => 'Kezdőlap', 'path' => '/'];
$crumb_diseases = ['name' => 'Érbetegségek', 'path' => '/erbetegsegek.php'];

return [
    'index' => [
        'path' => '/',
        'title' => 'Lézeres visszérműtét Budapest – Dr. Szabó Gábor Viktor Ph.D.',
        'description' => 'Minimál invazív lézeres visszérműtét helyi érzéstelenítésben, kórházi befekvés nélkül. Érsebész szakorvos, egyetemi docens, 25 év tapasztalat, Budapest.',
        'og_image' => 'default',
        'page_type' => 'WebPage',
        'breadcrumb' => [$crumb_home],
        'llms_section' => 'Az orvosról',
        'extra_head' => '<meta name="msvalidate.01" content="7FAB506BAAF2B6FBBD888AA3C91CD97B" />' . "\n"
            . '    <link rel="preload" as="image" href="/images/laser_cover_1.jpg" media="(max-width: 800px)" fetchpriority="high">' . "\n"
            . '    <link rel="preload" as="image" href="/images/laser_cover_2.jpg" media="(min-width: 801px)" fetchpriority="high">',
    ],
    'visszerek' => [
        'path' => '/visszerek.php',
        'title' => 'Visszeresség kezelése, visszérműtét típusai – Visszérsebész',
        'description' => 'A visszeresség tünetei, CEAP besorolása, ultrahangos vizsgálata és kezelése: lézeres visszérműtét, nyitott műtét, szklerotherápia.',
        'og_image' => 'default',
        'page_type' => 'MedicalWebPage',
        'breadcrumb' => [$crumb_home, $crumb_diseases, ['name' => 'Visszeresség', 'path' => '/visszerek.php']],
        'condition' => 'visszer',
        'llms_section' => 'Visszeresség és visszérműtét',
    ],
    'arak' => [
        'path' => '/arak.php',
        'title' => 'Visszérműtét árak – lézeres visszérműtét 490.000 Ft',
        'description' => 'Lézeres visszérműtét egy végtagon 490.000 Ft: műtét, kontroll, kompressziós harisnya és eredményességi garancia. Visszérvizsgálat 30.000 Ft.',
        'og_image' => 'clinic',
        'page_type' => 'WebPage',
        'breadcrumb' => [$crumb_home, ['name' => 'Árak', 'path' => '/arak.php']],
        'offers' => true,
        'llms_section' => 'Árak',
    ],
    'bemutatkozas' => [
        'path' => '/bemutatkozas.php',
        'title' => 'Dr. Szabó Gábor Viktor Ph.D. – érsebész, egyetemi docens',
        'description' => 'A Semmelweis Egyetem Érsebészeti Tanszékének osztályvezető főorvosa, egyetemi docens. Tanulmányok, munkahelyek, tagságok, oktatás.',
        'og_image' => 'doctor',
        'og_type' => 'profile',
        'page_type' => 'ProfilePage',
        'breadcrumb' => [$crumb_home, ['name' => 'Bemutatkozás', 'path' => '/bemutatkozas.php']],
        'llms_section' => 'Az orvosról',
    ],
    'elerhetoseg' => [
        'path' => '/elerhetoseg.php',
        'title' => 'Rendelés és időpontkérés – visszérsebész Budapest',
        'description' => 'Visszér-rendelés a VP-MED Egészségcentrumban (1042 Budapest, Árpád út 56.), artériás ambulancia a Semmelweis Egyetem Városmajori klinikáján.',
        'og_image' => 'clinic',
        'page_type' => 'ContactPage',
        'breadcrumb' => [$crumb_home, ['name' => 'Elérhetőségek', 'path' => '/elerhetoseg.php']],
        'llms_section' => 'Rendelések',
        'extra_head' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">' . "\n"
            . '    <link rel="stylesheet" href="/css/google_maps.css">',
    ],
    'kerdesek' => [
        'path' => '/kerdesek.php',
        'title' => 'Orvos válaszol – ingyenes kérdés érsebésztől',
        'description' => 'Kérdezzen ingyen érsebész szakorvost visszerességről, visszérműtétről, nyaki érszűkületről, aneurysmáról vagy alsó végtagi érszűkületről.',
        'og_image' => 'doctor',
        'page_type' => 'WebPage',
        'breadcrumb' => [$crumb_home, ['name' => 'Orvos válaszol', 'path' => '/kerdesek.php']],
        'llms_section' => 'Rendelések',
    ],
    'erbetegsegek' => [
        'path' => '/erbetegsegek.php',
        'title' => 'Érbetegségek tudástár – visszeresség, carotis, aneurysma, érszűkület',
        'description' => 'Az érbetegségek tünetei, vizsgálata és kezelése érsebész szakorvostól: visszeresség, nyaki erek, értágulatok, alsó végtagi érszűkület.',
        'og_image' => 'default',
        'page_type' => 'CollectionPage',
        'breadcrumb' => [$crumb_home, $crumb_diseases],
        'llms_section' => 'Érbetegségek',
    ],
    'nyakierek' => [
        'path' => '/nyakierek.php',
        'title' => 'Nyaki érszűkület (carotis) kezelése és műtéte, stroke megelőzés',
        'description' => 'A nyaki érszűkület (carotis stenosis) tünetei, ultrahang és CTA vizsgálata, gyógyszeres kezelése, nyitott műtéte és stentelése.',
        'og_image' => 'default',
        'page_type' => 'MedicalWebPage',
        'breadcrumb' => [$crumb_home, $crumb_diseases, ['name' => 'Nyaki erek betegségei', 'path' => '/nyakierek.php']],
        'condition' => 'carotis',
        'llms_section' => 'Érbetegségek',
    ],
    'alsovegtag' => [
        'path' => '/alsovegtag.php',
        'title' => 'Alsó végtagi érszűkület tünetei és kezelése – érsebész',
        'description' => 'Az alsó végtagi érszűkület tünetei, vizsgálatai, gyógyszeres kezelése és műtéti típusai érsebész szakorvos leírásában.',
        'og_image' => 'default',
        'page_type' => 'MedicalWebPage',
        'breadcrumb' => [$crumb_home, $crumb_diseases, ['name' => 'Alsó végtagi érszűkület', 'path' => '/alsovegtag.php']],
        'condition' => 'pad',
        'llms_section' => 'Érbetegségek',
    ],
    'ertagulatok' => [
        'path' => '/ertagulatok.php',
        'title' => 'Értágulat, aorta aneurysma – nyitott műtét és stentgraft',
        'description' => 'Az értágulatok (aneurysmák) tünetei, vizsgálatai, nyitott műtéti és endovascularis (stentgraft) kezelése a mellkasi és hasi aortán.',
        'og_image' => 'default',
        'page_type' => 'MedicalWebPage',
        'breadcrumb' => [$crumb_home, $crumb_diseases, ['name' => 'Értágulatok, aneurysmák', 'path' => '/ertagulatok.php']],
        'condition' => 'aneurysma',
        'llms_section' => 'Érbetegségek',
    ],
    'hivatkozasok' => [
        'path' => '/hivatkozasok.php',
        'title' => 'Műtéti tájékoztatók és beleegyező nyilatkozatok (PDF)',
        'description' => 'Letölthető műtéti tájékoztatók és beleegyező nyilatkozatok: visszérműtét, nyaki érműtét, alsó végtagi érműtét, aneurysma műtét.',
        'og_image' => 'default',
        'page_type' => 'WebPage',
        'breadcrumb' => [$crumb_home, ['name' => 'Hivatkozások', 'path' => '/hivatkozasok.php']],
        'llms_section' => 'Dokumentumok',
    ],
    'kereses' => [
        'path' => '/kereses.php',
        'title' => 'Keresés – Visszérsebész',
        'description' => '',
        'og_image' => 'default',
        'noindex' => true,
    ],
];
