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
			$List = Get_Data("scrol_vender", "and scrol_venderID = $id_f");
			$op_vis_str = ($List['scrol_venderStatus'] == "0") ? "Public" : "Draft";
			$op_vis = $List['scrol_venderStatus'];
			$title = $List['scrol_venderName'];
			
			$interview_link=htmlspecialchars_decode($List['interview_link']);
			$company_interview_link=htmlspecialchars_decode($List['company_interview_link']);
			$interview_link_target=$List['interview_link_target'];
			$company_interview_link_target=$List['company_interview_link_target'];
			$scrol_venderLink   = $List['scrol_venderLink'];
			$thumbnail=$List['scrol_venderThumbnail'];
			
			$thumbnail_upload_csv=$List['company_job_csv'];
			$thumbnail_alt=$List['scrol_venderThumbnail_alt'];

			$company_name=$List['company_name'];
			$company_id=$List['company_id'];
			
			list($op_front, $op_bottom) = explode(" ", $List['scrol_venderDate']);
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
				<div class="clear">
                <p class="title_txt">Title</p>
                <input id="post_title" type="text" name="scrol_venderName" value="<?php echo $title;?>" />
                </div>
                <div class="clear pd">
                	<div class="l w70">
                    	 <p class="title_txt">Interview Link</p>
              			  <input id="post_title" type="text" name="interview_link" value="<?php echo $interview_link;?>" />
                    </div>
                    <div class="r w30">
                    	 <p class="title_txt">Target</p>
              			  <select name="interview_link_target" class="cation_option">
                          		<option value="<?php echo $interview_link_target;  ?>" ><?php echo $interview_link_target;  ?></option>
                          		<option value="_top">_top</option>
                          		<option value="_blank">_blank</option>
                                <option value="_self">_self</option>
                                <option value="_new">_new</option>
                                <option value="_parent">_parent</option>
                         </select>
                         
                    </div>
                </div>
                
                 <div class="clear pd">
                	<div class="l w70">
                    	 <p class="title_txt">Company Interview Link</p>
              			  <input id="post_title" type="text" name="company_interview_link" value="<?php echo $company_interview_link;?>" />
                    </div>
                    <div class="r w30">
                    	 <p class="title_txt">Target</p>
              			  <select name="company_interview_link_target" class="cation_option">
                          		<option value="<?php echo $company_interview_link_target;  ?>" ><?php echo $company_interview_link_target;  ?></option>
                          		<option value="_top">_top</option>
                          		<option value="_blank">_blank</option>
                                <option value="_self">_self</option>
                                <option value="_new">_new</option>
                                <option value="_parent">_parent</option>
                         </select>
                         
                    </div>
                </div>
                
                 <div class="clear">
                	<!--Code upload csv-->
                     <p class="title_txt">Company Job Info csv</p>
                    	<div class="file_csv_up" id="text_input_file">
             			<input type="text" name="csv_upload_interview" id="csv_upload_interview" value="<?php echo $thumbnail_upload_csv; ?>" />
             			</div>
            			 <div id="csv_upload"><input type="file" id="csv" name="csv" />Choose File</div>
						<div class="clear"></div>
              	 </div>
                 
               
                <div class="clear">
                	<p class="title_txt">Company Name</p>
                	<input id="post_title" type="text" name="company_name" value="<?php echo $company_name;?>" />
                </div>
                <div class="clear">
                	<p class="title_txt">Company ID</p>
                	<input id="post_title" type="text" name="company_id" value="<?php echo $company_id;?>" />
                </div>
				
                
                
                
                
		</div>
			
			<?php include_once("form_left.php"); ?>

		</div>
	</div>
</form>
</div>

<script type="text/javascript">
$(document).ready(function() {
	$('#csv').change(function(evt) {
       // alert($(this).val());
		$("#csv_upload_interview").val($(this).val());
		$("#csv_upload_interview").attr("value",$(this).val());
    });
});
</script>
