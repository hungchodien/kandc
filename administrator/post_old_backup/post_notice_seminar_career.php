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
			$List = Get_Data("notice_seminar_career", "and id_notice_seminar_career = $id_f");
			$op_vis_str = ($List['status_notice_seminar_career'] == "0") ? "Public" : "Draft";
			$op_vis = $List['status_notice_seminar_career'];
			$title = $List['title_notice_seminar_career'];
			$target_notice_seminar_career =$List['target_notice_seminar_career'];
			$date_other_notice_seminar_career=$List['date_other_notice_seminar_career'];
			$link_notice_seminar_career   = $List['link_notice_seminar_career'];
			$thumbnail=$List['thumbnail_notice_seminar_career'];
			$thumbnail_alt=$List['thumbnail_notice_seminar_career_alt'];			
			list($op_front, $op_bottom) = explode(" ", $List['date_notice_seminar_career']);
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
<form name="board" id="board" method="post" action="post/board_proc.php" enctype="multipart/form-data">
	<input type="hidden" name="sid" value="<?php echo $sid; ?>" />
        <input type="hidden" name="model" value="<?php echo $op; ?>" />
        <input type="hidden" name="id" value="<?php echo $id_f; ?>" />
        <input type="hidden" name="cate_nsc" value="<?php echo $_GET['cate_nsc']; ?>" />
	<div id="content_body" class="fl">
		<div id="post_body" class="clearfix">
			<div id="post_body_content">
				<div>
                <p class="title_txt">Title</p>
                <input id="post_title" type="text" name="title_notice_seminar_career" value="<?php echo $title;?>" />
                </div>

				<div class="clear">
                <p class="title_txt">Date Other (Ex: <i>【福岡】2014年9月20日(土) ;【東京】2014年10月18日(土)</i>). Every Date separated by <i>;</i>   </p>
                <input id="post_title" type="text" name="date_other_notice_seminar_career" value="<?php echo $date_other_notice_seminar_career;?>" />
                </div>

                <div>
                <p class="title_txt">Link</p>
                <input id="post_title" type="text" name="link_notice_seminar_career" value="<?php echo $link_notice_seminar_career;?>" />
                </div>
               <div>
                <p class="title_txt">Target</p>
                		<select name="target_notice_seminar_career" id="list_box">
                        	<option value="<?php echo $target_notice_seminar_career; ?>"><?php echo $target_notice_seminar_career; ?></option>
                        	<option value="">NONE</option>
                            <option value="_blank">BLANK</option>
                            <option value="_top">TOP</option>
                            <option value="_new">NEW</option>
                            <option value="_self">SELF</option>
                            <option value="_parent">PARENT</option>

                        </select>
                        
                </div>
                
				
                
                
                
                
		</div>
			
			<?php include_once("form_left.php"); ?>

		</div>
	</div>
</form>

</div>
<script type="text/javascript">
	//jQuery(function($){
		//$("#post_title").Watermark("Enter title here");
		//CKEDITOR.replace('content_henter_eye', {width:'100%', height:'300'});
		//CKEDITOR.replace('excerpt_henter_eye', {width:'100%', height:'100'});
		//CKEDITOR.replace('content_henter_eye_company', {width:'100%', height:'300'});
		
		
	//});
</script>
<script type="text/javascript">
$(document).ready(function() {
	$('#csv').change(function(evt) {
       // alert($(this).val());
		$("#csv_upload_henter_eye_company").val($(this).val());
		$("#csv_upload_henter_eye_company").attr("value",$(this).val());
    });
});
</script>