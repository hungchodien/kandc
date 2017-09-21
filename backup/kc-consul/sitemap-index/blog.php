<?php ob_start();
$xml_file='';
echo '<?xml version="1.0" encoding="UTF-8" ?>'."\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
$datetime_format_php = date('Y-m-d');
include('sitemap_config.php');
$xml_file .='
<url>
<loc>
'.url_domain.'blog/
</loc>
<image:image>
<image:loc>
'.url_domain.'img/og/main.png
</image:loc>
<image:caption>キャリアコンサルタントのこぼれ話</image:caption>
<image:license>'.url_domain.'</image:license>
<image:family_friendly>yes</image:family_friendly>
</image:image>
<lastmod>'.$datetime_format_php.'</lastmod>
<changefreq>daily</changefreq>
<priority>0.9</priority>
</url>';

 $Data_blog=To_Get_Data("kc_blog as A join consultant as B on A.consultantID=B.consultant_ID"," and A.kc_blog_status=0 order by A.kc_blog_date DESC");
		$count_blog_list=$Data_blog['cnt'];
		if($count_blog_list>0):
		for($i=0;$i<$count_blog_list;$i++):
				$j=$i+1;
				$List_blog=$Data_blog[$i];
				$id_blog=$List_blog['kc_blog_id'];
				$link_detail=url_domain."blog/".$id_blog.".html";
				$url_link_interview=htmlspecialchars($link_detail);
				$title=htmlspecialchars($List_blog['kc_blog_title']);
				$author=$List_blog['consultant_Name'];
								
				$blog_date=$List_blog['kc_blog_date'];
				$time_interview_cat_use=date('Y-m-d', strtotime($blog_date));					
$xml_file .='
<url>
<loc>
'.$url_link_interview.'
</loc>
<image:image>
<image:loc>
'.url_domain.'img/og/main.png
</image:loc>
<image:caption>'.$title.'</image:caption>
<image:license>'.url_domain.'</image:license>
<image:family_friendly>yes</image:family_friendly>
</image:image>
<lastmod>'.$time_interview_cat_use.'</lastmod>
<changefreq>daily</changefreq>
<priority>0.8</priority>
</url>';
	endfor;
	endif;
?>
<?php
$xml_file .='</urlset>';
header('Content-type: text/xml');
echo $xml_file;
ob_flush();
?>