<?php
//$output_dir = "../media_uploads/hieu_le";
$cut_string=explode("/",$_POST['path_url']);
$cut_string1=$cut_string[count($cut_string)-1];
$output_dir=$_POST['path_url']."/";
//echo $_POST['path_url'];
//print_r($_FILES["myfile"]);
if(isset($_FILES["myfile"]))
{
	$ret = array();

	$error =$_FILES["myfile"]["error"];
	if(!is_array($_FILES["myfile"]["name"])) //single file
	{
 	 	$fileName = $_FILES["myfile"]["name"];
 		@move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $_FILES["myfile"]["name"]);
    	$ret[$fileName]= $output_dir.$fileName;
	}
	else
	{
	  $fileCount = count($_FILES["myfile"]["name"]);
	  for($i=0; $i < $fileCount; $i++)
	  {
	  	$fileName = $_FILES["myfile"]["name"][$i];
	  	$ret[$fileName]= $output_dir.$fileName;
		@move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName );
	  }
	
	}
	header("Location: " . $_SERVER['HTTP_REFERER']."&part=".$cut_string1);
 }
 ?>