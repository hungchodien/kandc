<?php 
	ob_start();
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IE 6]>
<html id="ie6" class="toolbar" dir="ltr" lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="toolbar" dir="ltr" lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="toolbar" dir="ltr" lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html id="noIE" class="toolbar" dir="ltr" lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<!--<![endif]-->
<head>

<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />

<title>Administrator website kandc.com for KREIS & Company Inc</title>

<!-- no cache headers -->
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="no-cache">
<meta http-equiv="Expires" content="-1">
<meta http-equiv="Cache-Control" content="no-cache">
<!-- end no cache headers -->

<link rel="stylesheet" type="text/css" href="css/import.css" media="all" />

<!--[if lt IE 9]>
<script src="js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php 
	$sid="";
	$sid=$_GET['sid'];
	
	if(!empty($sid))
		{
			$model=$sid;
		}
		else
		{
			$model="";
		}
	if(isset($_GET['cate_nsc']))
		{
			$cate_nsc=$_GET['cate_nsc'];
		}
		else
		{
			$cate_nsc="";
		}
?>
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/watermark.js'></script>
<script type='text/javascript' src='js/tabs.js'></script>
<script type='text/javascript' src='js/admin.js'></script>
<script type='text/javascript' src='js/admin_kandc.js'></script>
<script type="text/javascript" src="js/jquery.form.js"></script>

<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>

<script language="javascript">
	$(document).ready(function() {
			$(window).load(function() {
					$('#post_leftmenu').load('inc/post_ajax_left.php',{'model[]': ["<?php echo "$model"; ?>"]<?php if($cate_nsc!=""){echo ",'cate_nsc':{$cate_nsc}"; } ?>});
					$('#cate_leftmenu').load('inc/cate_ajax_left.php',{'model[]': ["<?php echo "$model"; ?>"] });
					
					
					
				});
			
			
		});
	
</script>
</head>

<body>
<div class="load_ajax" style="display:none;">
<div class="loader"></div>
</div>	
