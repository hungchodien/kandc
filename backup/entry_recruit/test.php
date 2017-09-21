<?php 
	$ini_val = ini_get('upload_tmp_dir');
	$upload_tmp_dir = $ini_val ? $ini_val : sys_get_temp_dir();
	echo $upload_tmp_dir;
	echo "<br/><br/>";
	echo phpinfo();
?>
