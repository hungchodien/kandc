<?php
	ob_start();
	session_start();
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
	if(empty($_SESSION['MemberName']))
		{
			header('Location: login/login.php');
		}
		else
		{
			
//$page = ($page == "login") ?  "login/login.php" : "dashboard/";
?>

<?php include_once("inc/top.php"); ?>

<div class="content_bg_icon"><img src="img/main/dashboard_bg_icon.png" alt="" title="" /></div>
 <div id="body_inc" style="display:none;"></div>
	<?php
		$sid=$_GET['sid'];
		$op=$_GET['op'];
		$id=$_GET['id'];
		$input_key=$_GET['input_key'];
		//load with title:asc, date:desc, search,
		$cate_nsc=$_GET['cate_nsc'];
		if((int)$cate_nsc >0 && isset($_GET['cate_nsc'])){
			$params="sid={$sid}&op=select&cate_nsc={$cate_nsc}";
		}else
		{
			$params="sid={$sid}&op=select";
		}
		//$params_insert="sid={$sid}&op=insert";
		$params_update="sid={$sid}&op=update&id={$id}";
		$params_delete="sid={$sid}&op=delete&id={$id}";
        $params_search="sid={$sid}&op=search&input_key={$input_key}";
		if(!empty($sid))
			{
				if($op=="select")
				{
					
					echo "<script  type='text/javascript'>Load_Content('$params',1);</script>";
					
				}
				if($op=="insert")
				{
                	
					include('ajax/insert_content.php');
				}
				
				if($op=="delete")
				{
                	
					echo "<script  type='text/javascript'>Load_Delete_Data('$params_delete');</script>";
				}
				if($op=="update")
				{
                	
					include('ajax/insert_content.php');
				}
				if($op=="search")
				{
                	
					echo "<script   type='text/javascript'>Load_Content('$params_search');</script>";
				}
			}
			else
			{
				if(isset($_GET['media'])):
					switch($_GET['media'])
					{
						case "foder":
						include('media/media_inc.php');
						break;
						default:
						header('location:index.php');
					}
				else:
	 ?>

    <div id="page_title" class="clear">
        <div class="title_icon"><img src="img/main/dashboard_content_icon.png" alt="" title="" /></div>
        <h1 id="dashboard_title" class="content_title">DASHBOARD</h1>
    </div>
    
    <h2
     class="welcome">Welcome to your new Dashboard!</h2>

	<?php 
				endif;
			}
	?>
</div>
<!-- #content -->

<?php
	 include_once('inc/footer.php'); 
	}
?>