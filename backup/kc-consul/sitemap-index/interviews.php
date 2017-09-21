<?php ob_start();
$xml_file='';
echo '<?xml version="1.0" encoding="UTF-8" ?>'."\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
$datetime_format_php = date('Y-m-d');
include('sitemap_config.php');
$xml_file .='
<url>
<loc>
'.url_domain.'interview/
</loc>
<image:image>
<image:loc>
'.url_domain.'img/og/main.png
</image:loc>
<image:caption>面接官の本音</image:caption>
<image:license>'.url_domain.'</image:license>
<image:family_friendly>yes</image:family_friendly>
</image:image>
<lastmod>'.$datetime_format_php.'</lastmod>
<changefreq>daily</changefreq>
<priority>0.9</priority>
</url>';

 $Data_interview=To_Get_Data("kc_interview"," and kc_interview_status=0 order by kc_interview_date DESC,kc_interview_vol_number_slug DESC");
	  	$count_interview=$Data_interview['cnt'];
		if($count_interview>0):
		for($i=0;$i<$count_interview;$i++):
			$j=$i+1;
			$List_interview=$Data_interview[$i];
			//$id_interview_cate=$List_interview['kc_category_interview_id'];
			$id_interview=strip_tags(stripslashes($List_interview['kc_interview_id']));
			
			$vol_slug_interview=$List_interview['kc_interview_vol_number_slug'];
			$page_number_in=(int)$List_interview['kc_interview_page_number'];
			//echo $kc_interview_page_number;
				$Data_load_category=Get_Data("kc_category_interview as A join category_join_kc_interview as B on A.kc_category_interview_id=B.kc_category_interview_id"," and A.kc_category_interview_status=0 and B.kc_interview_id=$id_interview");
				$category_name_ja=$Data_load_category['kc_category_interview_name_ja'];
				$category_name_en=$Data_load_category['kc_category_interview_name_en'];
			$link_detail=url_domain."interview/".$category_name_en."/".$vol_slug_interview."/".$page_number_in.".html";
			$url_link_interview=htmlentities($link_detail);
			$src_thumnail_interview=url_root_main.$url_images_thumnail.$List_interview['kc_interview_main_img'];
			$url_thumnail=htmlentities($src_thumnail_interview);
			$alt_thumnail_interview=htmlspecialchars(strip_tags(stripslashes($List_interview['kc_interview_main_alt'])));
			$interview_date_cat=$List_interview['kc_interview_date'];
			$time_interview_cat_use=date('Y-m-d', strtotime($interview_date_cat));	
$xml_file .='
<url>
<loc>
'.$url_link_interview.'
</loc>
<image:image>
<image:loc>
'.$url_thumnail.'
</image:loc>
<image:caption>'.$alt_thumnail_interview.'</image:caption>
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