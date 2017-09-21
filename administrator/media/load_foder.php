<?php 
	header ("Expires: ".gmdate("D, d M Y H:i:s", time())." GMT");  
	header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");  
	header ("Cache-Control: no-cache, must-revalidate");  
	header ("Pragma: no-cache");
	@include('Lib1/_init.php');
	@include('../Lib1/_init.php');
	@include('../../Lib1/_init.php');
	@include('../../../Lib1/_init.php');
	if(isset($_GET['part'])):
		$ourDir =$_GET['part'];
	else:
	$ourDir = $fodermedia;
	endif;
	$foders = @scandir($ourDir);
	echo "<div class='clear group_foder'>";
	
	foreach($foders as $forder):
		
		if($forder!="" && $forder!="."&& $forder!=".."&& $forder!="..."):
			if(isset($_GET['part'])):
				$ourDir=str_replace("../","",$ourDir);
				echo "<div class='clear foder_box set_del_img'>";
					echo "<img src='$ourDir/$forder' border='0' />";
					echo "<span class='close_dele'><a href='javascript:void(0);' class='close_img_del' onclick=Delete_img('$ourDir/$forder','../$ourDir');>Close</a></span>";
				echo "</div>";
			else:
		echo "<div class='clear foder_box'>";
		echo "<div class='icon_foder'><img src='img/folder_icon.png' border='0' width='40'/></div>";
		echo "<div class='a_foder'><a class='forder_inc' href='javascript:void(0);' onClick=onclide('$ourDir/$forder'); title='".$forder."'>".$forder."</a></div>";
		echo "</div>";
			endif;
		endif;
	endforeach;
   echo "<div>";
   ?>
   					
	

