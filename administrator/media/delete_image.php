<?php 
	header ("Expires: ".gmdate("D, d M Y H:i:s", time())." GMT");  
	header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");  
	header ("Cache-Control: no-cache, must-revalidate");  
	header ("Pragma: no-cache");
	$img_url="../".$_GET['img_url'];
	if(file_exists($img_url)):
		echo "$img_url";
		@unlink($img_url);
	else:
		echo '<script>
		alert("Path URL not Found");
	</script>	';
	endif;
?>
