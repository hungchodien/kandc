<?php ob_start();
$xml_file='';
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
include('sitemap_config.php');
$datetime_format_php = date('Y-m-d');
$xml_file .='
<url>
<loc>
'.url_domain.'
</loc>
<lastmod>'.$datetime_format_php.'</lastmod>
<changefreq>daily</changefreq>
<priority>1.0</priority>
</url>';
$xml_file .='
<url>
<loc>
'.url_domain.'about-us/
</loc>
<lastmod>'.$datetime_format_php.'</lastmod>
<changefreq>daily</changefreq>
<priority>0.9</priority>
</url>';
$xml_file .='
<url>
<loc>
'.url_domain.'job-search/
</loc>
<lastmod>'.$datetime_format_php.'</lastmod>
<changefreq>daily</changefreq>
<priority>0.9</priority>
</url>';
$xml_file .='
<url>
<loc>
'.url_domain.'blog/
</loc>

<lastmod>'.$datetime_format_php.'</lastmod>
<changefreq>daily</changefreq>
<priority>0.9</priority>
</url>';
$xml_file .='
<url>
<loc>
'.url_domain.'entry/
</loc>
<lastmod>'.$datetime_format_php.'</lastmod>
<changefreq>daily</changefreq>
<priority>0.9</priority>
</url>';
$xml_file .='
<url>
<loc>
'.url_domain.'entry-career-consultation/
</loc>
<lastmod>'.$datetime_format_php.'</lastmod>
<changefreq>daily</changefreq>
<priority>0.9</priority>
</url>';
$xml_file .='
<url>
<loc>
'.url_domain.'sitemap/
</loc>

<lastmod>'.$datetime_format_php.'</lastmod>
<changefreq>daily</changefreq>
<priority>0.9</priority>
</url>';
$xml_file .='
<url>
<loc>
'.url_domain.'entry_easy/
</loc>
<lastmod>'.$datetime_format_php.'</lastmod>
<changefreq>daily</changefreq>
<priority>0.9</priority>
</url>';

$xml_file .='
<url>
<loc>
'.url_domain.'jobinfo/
</loc>
<lastmod>'.$datetime_format_php.'</lastmod>
<changefreq>daily</changefreq>
<priority>0.8</priority>
</url>';

$xml_file .='</urlset>';
header('Content-type: text/xml');
echo $xml_file;
ob_flush();
?>