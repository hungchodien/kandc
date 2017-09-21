<?php 
		@include_once('Lib/_init.php');
			@include_once('../Lib/_init.php');
			@include_once('../../Lib/_init.php');
			@include_once('../../../Lib/_init.php');
	$id_f=$_GET['id'];
	
		if($op!="update")
		{
			$op_vis_str = "Public";
			$op_vis = "0";
			$op_date_year = date("Y");
			$op_date_month = date("m");
			$op_date_day = date("d");
			$op_date_hour = date("H");
			$op_date_minute = date("i");
			//$mode = "insert";
		}
		else
		{
			$List = Get_Data("career_form", "and career_formID = $id_f");
			$op_vis_str = ($List['op_vis'] == "0") ? "Public" : "Draft";
			$op_vis = $List['career_formStatus'];
			$title = $List['career_formTitle'];
			$subTitle=$List['career_formSubTitle'];
			$excerpt_seminar  = htmlspecialchars_decode($List['career_formDescription']);
			$content_seminar  = htmlspecialchars_decode($List['career_formContent']);
			
			$thumbnail=$List['career_formThumbnail'];
			
			
			

			
			list($op_front, $op_bottom) = explode(" ", $List['career_form_Date']);
			list($op_date_year, $op_date_month, $op_date_day) = explode("-", $op_front);
			list($op_date_hour,$op_date_minute,) = explode(":", $op_bottom);
		}
?>

<div class="content_bg_icon"><img src="img/main/post_bg_icon.png" alt="" title="" /></div>
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
<form name="board" id="board" method="post" action="post/board_proc.php" enctype="multipart/form-data" >
		<input type="hidden" name="sid" value="<?php echo $sid; ?>" />
        <input type="hidden" name="model" value="<?php echo $op; ?>" />
        <input type="hidden" name="id" value="<?php echo $id_f; ?>" />
	<div id="content_body" class="fl">
		<div id="post_body" class="clearfix">
			<div id="post_body_content">
				<div>
                <p class="title_txt">Title</p>
                <input id="post_title" type="text" name="title" value="<?php echo $title;?>" />
                </div>
                
                <div>
               <p class="title_txt">Position</p>
                <input id="post_title" type="text" name="subTitle" value="<?php echo $subTitle;?>" />
                </div>
				<div class="clear">
				<p class="title_txt">Date</p>
				<div id="post_container" class="clearfix">
					<div id="post_tabs" class="clearfix post_edit_block">
						<div class="tab_container">
							<div class="editor-container" id="content-editor-container">
								
								<!-- 내용 -->
								<textarea id="excerpt" name="excerpt" cols="40" style="height: 295px;"><?php echo $excerpt_seminar; ?></textarea>
							</div>
						</div>
					</div>
				</div>
                </div>

                <div class="clear">
                    <p class="title_txt">Time</p>
                    <div id="post_container" class="clearfix">
                        <div id="post_tabs" class="clearfix post_edit_block">
                            <div class="tab_container">
                                <div class="editor-container" id="content-editor-container">

                                    <!-- 내용 -->
                                    <textarea id="bcontent" name="bcontent" cols="40" style="height: 295px;"><?php echo $content_seminar;?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
		</div>
			
			<?php include_once("form_left.php"); ?>

		</div>
	</div>
</form>
	
</div>
<script type="text/javascript">
			//$("#post_title").Watermark("Enter title here");
		jQuery(function($){
		//CKEDITOR.replace('bcontent', {width:'100%', height:'100'});
		
		CKEDITOR.replace('bcontent',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'300',
				  startupMode: 'source'	
                 }
		);
		CKEDITOR.instances['bcontent'];
		//CKEDITOR.replace('excerpt', {width:'100%', height:'100'});
		CKEDITOR.replace('excerpt',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100',
				  startupMode: 'source' 	
                 }
		);
		CKEDITOR.instances['excerpt'];
		
		
		
		});
		
	
</script>