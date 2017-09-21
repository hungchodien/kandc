<?php 
	@include('Lib1/_init.php');
	@include('../Lib1/_init.php');
	@include('../../Lib1/_init.php');
	@include('../../../Lib1/_init.php');
	function MakeDirectory($dir, $mode = 0777)
	{
	  if (is_dir($dir) || @mkdir($dir,$mode)) return TRUE;
	  if (!MakeDirectory(dirname($dir),$mode)) return FALSE;
	  return @mkdir($dir,$mode);
	}
	MakeDirectory($fodermedia."/".$name);
	
?>