<?php
// Regenerates sitemap.xml, bingsitemap.xml and llms.txt from metadata/pages.php.
// Run from the project root after changing page metadata: php tools/build_seo_files.php [YYYY-MM-DD]

if (PHP_SAPI !== 'cli') {
    http_response_code(404);
    exit;
}

$root = dirname(__DIR__);
$pages = require $root . '/metadata/pages.php';
$lastmod = ($argv[1] ?? date('Y-m-d')) . 'T08:00:00+00:00';

// PDFs that were already listed in the sitemap
$pdfs = [
    'Nyaki érműtét.pdf' => 'Nyaki érműtét – műtéti tájékoztató',
    'Alsó végtagi érműtét.pdf' => 'Alsó végtagi érműtét – műtéti tájékoztató',
    'Aneurysma műtét.pdf' => 'Aneurysma műtét – műtéti tájékoztató',
    'Hagyományos visszérműtét.pdf' => 'Hagyományos visszérműtét – műtéti tájékoztató',
    'Lézeres vagy radiofrekvenciás visszérműtét.pdf' => 'Lézeres vagy radiofrekvenciás visszérműtét – műtéti tájékoztató',
    'Ragasztásos visszérműtét.pdf' => 'Ragasztásos visszérműtét – műtéti tájékoztató',
];

function pdf_url($file)
{
    return SITE_URL . '/resources/' . rawurlencode($file);
}

// --- sitemaps ---------------------------------------------------------------
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n"
    . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ($pages as $page) {
    if (!empty($page['noindex'])) {
        continue;
    }
    $xml .= "    <url>\n        <loc>" . SITE_URL . $page['path'] . "</loc>\n        <lastmod>$lastmod</lastmod>\n    </url>\n";
}
foreach ($pdfs as $file => $title) {
    $xml .= "    <url>\n        <loc>" . pdf_url($file) . "</loc>\n        <lastmod>$lastmod</lastmod>\n    </url>\n";
}
$xml .= "</urlset>\n";
file_put_contents($root . '/sitemap.xml', $xml);
file_put_contents($root . '/bingsitemap.xml', $xml);

// --- llms.txt ----------------------------------------------------------------
// Summary sentences are taken from the visible site text (Kezdőlap, Bemutatkozás, Árak, Elérhetőségek).
$llms = "# " . DOCTOR_NAME . " – érsebész, visszérsebész (Budapest)\n\n"
    . "> " . DOCTOR_NAME . " sebész, érsebész szakorvos, egyetemi docens, a Semmelweis Egyetem Városmajori Szív- és Érgyógyászati Klinika Érsebészeti Tanszékének osztályvezető főorvosa. "
    . "Tíz év általános sebészeti tevékenység után specializálódott az érsebészetre, melyet 25 éve gyakorol. "
    . "Vénás betegellátás (modern lézeres visszérműtétek és ambuláns betegvizsgálat) magánrendelés keretében a VP-MED Egészségcentrumban (1042 Budapest, Árpád út 56.), "
    . "artériás betegellátás OEP finanszírozással a Semmelweis Egyetem Szív- és Érgyógyászati Klinikán (1122 Budapest, Városmajor utca 68.).\n\n"
    . "- Lézeres visszérműtét egy végtagon: 490.000 Ft (VP-MED, az árak tájékoztató jellegűek)\n"
    . "- Időpont, vénás betegségek (VP-MED): +36309631363\n"
    . "- Időpont, verőér/artériás betegségek (Semmelweis): +3614586800, beutaló szükséges\n"
    . "- Ingyenes kérdés az orvosnak: " . SITE_URL . "/kerdesek.php\n";

$sections = ['Visszeresség és visszérműtét', 'Árak', 'Rendelések', 'Az orvosról', 'Érbetegségek', 'Dokumentumok'];
foreach ($sections as $section) {
    $llms .= "\n## $section\n\n";
    foreach ($pages as $page) {
        if (($page['llms_section'] ?? null) === $section) {
            $llms .= "- [" . $page['title'] . "](" . SITE_URL . $page['path'] . "): " . $page['description'] . "\n";
        }
    }
    if ($section === 'Dokumentumok') {
        foreach ($pdfs as $file => $title) {
            $llms .= "- [$title](" . pdf_url($file) . ")\n";
        }
    }
}
file_put_contents($root . '/llms.txt', $llms);

echo "sitemap.xml, bingsitemap.xml, llms.txt written (lastmod $lastmod)\n";
