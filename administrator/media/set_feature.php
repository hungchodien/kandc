<?php 
	header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	clearstatcache();
?>
<script language="javascript">
	
	function home_index()
		{
			
				$("#load_inc").load("media/set_feature.php");
					
		}	
	function onclide(msg)
		{
			
				$("#load_inc").load("media/set_feature.php?part="+msg+"&rand="+Math.round(Math.random()*10000));
					
		}
	function set_image(prame,load_path){
				var path=document.getElementById("txt_feat");
				path.value=prame;
				$("#dialog_foder").dialog( "close" );
			}
</script>
<?php 
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
	echo "<div class='lack'><a href='javascript:void(0);' onClick='home_index();'>Index</a></div>";
	
	foreach($foders as $forder):
		
		if($forder!="" && $forder!="."&& $forder!=".."&& $forder!="..."):
			if(isset($_GET['part'])):
				$ourDir=str_replace("../","",$ourDir);
				
				echo "<div class='clear foder_box set_fi'>";
					echo "<a href='javascript:void(0);' class='set_fied' onclick=set_image('$ourDir/$forder','../$ourDir');><img src='$ourDir/$forder' border='0' /><span style='display:none;'>$ourDir</span></a>";
					
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
   						
	

