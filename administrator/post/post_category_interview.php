<?php 
		@include_once('Lib/_init.php');
			@include_once('../Lib/_init.php');
			@include_once('../../Lib/_init.php');
			@include_once('../../../Lib/_init.php');
	$id_f=$_GET['id'];
		if($op!="update")
		{
			$op_vis_str = "Public";
			$op_vis = "Y";
			$op_date_year = date("Y");
			$op_date_month = date("m");
			$op_date_day = date("d");
			$op_date_hour = date("H");
			$op_date_minute = date("i");
			//$mode = "insert";
		}
		else
		{
			$List = Get_Data("category_interview", "and category_interview_ID = $id_f");
			$op_vis_str = ($List['category_interview_Status'] == "0") ? "Public" : "Draft";
			$op_vis = $List['category_interview_Status'];
			$title = $List['category_interview_Name'];
			$seo_keyword=htmlspecialchars_decode($List['seo_keyword']);
			$seo_description=htmlspecialchars_decode($List['seo_description']);

			$seo_og_description=htmlspecialchars_decode($List['seo_og_description']);
			$seo_og_title=htmlspecialchars_decode($List['seo_og_title']);

			$seo_add_thumb_meta=$List['seo_add_thumb_meta'];
			list($op_front, $op_bottom) = explode(" ", $List['category_interview_Date']);
			list($op_date_year, $op_date_month, $op_date_day) = explode("-", $op_front);
			list($op_date_hour,$op_date_minute,) = explode(":", $op_bottom);
		}

?>
<div class="content_bg_icon"><img src="../img/main/post_bg_icon.png" alt="" title="" /></div>
<div id="page_title" class="clearfix">
    <div class="title_icon"><img src="img/main/post_content_icon.png" alt="" title="" /></div>
    <h1 id="dashboard_title" class="content_title">Add New POST</h1>
</div>
<div id="progress">
        <div id="bar"></div>
        <div id="percent"></div >
	</div>
    <br/>

	<div id="message"></div>
	<form name="board" id="board" method="post" action="post/board_proc.php" enctype="multipart/form-data">
	<input type="hidden" name="sid" value="<?php echo $sid; ?>" />
     <input type="hidden" name="model" value="<?php echo $op; ?>" />
     <input type="hidden" name="id" value="<?php echo $id_f; ?>" />


	<div id="content_body" class="fl">
		<div id="post_body" class="clearfix">
			<div id="post_body_content">
            	<div class="clear">
            	 <p class="title_txt">Name Category Interview</p>
				<input id="post_title" type="text" name="category_interview" value="<?php echo $title;?>" />
                </div>
                <?php include_once("inc/post_seo_input.php"); ?>
			</div>

			<?php include_once("form_left.php"); ?>

		</div>
	</div>
</form>

</div>