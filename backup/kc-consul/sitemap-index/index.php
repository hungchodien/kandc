<?php ob_start(); 
header('Content-type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
if(isset($_SERVER['HTTPS'])):
if ($_SERVER["HTTPS"] == "on"): 
$protocol = "https:";
else:
$protocol = "http:";
endif;
else :
$protocol = "http:";
endif;
$url_map=$protocol."//www.kc-consul.com/sitemap-index/";
$datetime_format_php = date('Y-m-d');
echo '<sitemapindex xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/siteindex.xsd">';
?>
<sitemap>
<loc><?php echo $url_map; ?>static.xml</loc>
<lastmod><?php echo $datetime_format_php; ?></lastmod>
</sitemap>
<sitemap>
<loc><?php echo $url_map; ?>interviews.xml</loc>
<lastmod><?php echo $datetime_format_php; ?></lastmod>
</sitemap>
<sitemap>
<loc><?php echo $url_map; ?>blog.xml</loc>
<lastmod><?php echo $datetime_format_php; ?></lastmod>
</sitemap>
<?php 
  echo '</sitemapindex>';
	ob_flush();
?>