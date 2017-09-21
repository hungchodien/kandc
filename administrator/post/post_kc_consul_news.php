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
			$List = Get_Data("kc_consul_news", "and kc_consul_news_id = $id_f");
			$op_vis_str = ($List['op_vis'] == "0") ? "Public" : "Draft";
			$op_vis = $List['status_read_index'];
			$title = $List['kc_consul_news_title'];
			
			$excerpt_index_interview  = htmlspecialchars_decode($List['kc_consul_news_excerpt']);
			$link_index_interview  = $List['kc_consul_news_link'];
			
			$targer_index_interview  = $List['kc_consul_news_target'];
			
			//$thumbnail_index_interview =$List['thumbnail_read_index'];
			//$thumbnail_alt=$List['thumbnail_read_index_alt'];
			
			list($op_front, $op_bottom) = explode(" ", $List['kc_consul_news_date']);
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
                <p class="title_txt">タイトル</p>
                <input id="post_title" type="text" name="kc_consul_news_title" value="<?php echo $title;?>" />
                </div>
                
                <br/>
			
				<!--<p class="title_txt">Excerpt</p>
                <div id="post_container" class="clearfix">
					<div id="post_tabs" class="clearfix post_edit_block">
						<div class="tab_container">
							<div class="editor-container" id="content-editor-container">
								<textarea id="bcontent" name="bcontent" cols="40" style="height: 295px;"><?php echo $excerpt_index_interview;?></textarea>
							</div>
						</div>
					</div>
				</div>-->

                <br/>
                <div>
                <p class="title_txt">リンク先</p>
                <input id="post_title" type="text" name="kc_consul_news_link" value="<?php echo $link_index_interview ;?>" />
                </div>
                <br/>
                <div class="clear">
                  		<p class="title_txt">Target(新しいタブで開くには_blankを選択）</p>
                		<select name="kc_consul_news_target" id="list_box">
                        	<option value="" <?php if($targer_index_interview==''): echo "selected"; endif; ?>>NONE</option>
                            <option value="_blank" <?php if($targer_index_interview=='_blank'): echo "selected"; endif; ?> ></option>
                            <option value="_top" <?php if($targer_index_interview=='_top'): echo "selected"; endif; ?>>TOP</option>
                            <option value="_new" <?php if($targer_index_interview=='_new'): echo "selected"; endif; ?>>NEW</option>
                            <option value="_self" <?php if($targer_index_interview=='_self'): echo "selected"; endif; ?>>SELF</option>
                            <option value="_parent" <?php if($targer_index_interview=='_parent'): echo "selected"; endif; ?>>PARENT</option>
						</select>
                </div>
				
		</div>
			
			<?php include_once("form_left.php"); ?>

		</div>
	</div>
</form>
	
</div>
<script type="text/javascript">
			//$("#post_title").Watermark("Enter title here");
		//jQuery(function($){
		//CKEDITOR.replace('bcontent', {width:'100%', height:'100'});
		
		//CKEDITOR.replace('bcontent',{
         //         width: '100%',
         //         resize_maxWidth: '100%',
         //         resize_minWidth: '100%', 
		//		  height:'100'
         //        }
		//);
		
	//	CKEDITOR.instances['bcontent'];
	//	});
	
</script>