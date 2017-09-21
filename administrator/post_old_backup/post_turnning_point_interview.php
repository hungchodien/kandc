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
			$List = Get_Data("`turning_point_interview`", "and `turning_point_interview_id` = $id_f");
			$op_vis_str = ($List['turning_point_interview_status'] == "0") ? "Public" : "Draft";
			$op_vis = $List['turning_point_interview_status'];
			$title = $List['turning_point_interview_title'];
			
			$special=(int)$List['turning_point_interview_special'];
			
			$page_number=$List['turning_point_interview_page_number'];
			$vol_number=$List['turning_point_interview_vol_number'];
			$vol_number_slug=$List['turning_point_interview_vol_slug'];
			$excerpt=htmlspecialchars_decode($List['turning_point_interview_excerpt']);
			
			$data_comment=unserialize(base64_decode($List['turning_point_interview_comment']));
			$comment_content=$data_comment['comment'];
			$comment_img_alt=$data_comment['alt'];
			$comment_img_src=$data_comment['src'];
			$editor_name=$data_comment['editor_name'];
			$photographer_name=$data_comment['photographer_name'];
			
			$seo_keyword=htmlspecialchars_decode($List['seo_keyword']);
			$seo_description=htmlspecialchars_decode($List['seo_description']);
			$seo_og_description=htmlspecialchars_decode($List['seo_og_description']);
			$seo_og_title=htmlspecialchars_decode($List['seo_og_title']);
			$seo_add_thumb_meta=$List['seo_add_thumb_meta']; 
			
			
			$tn_img_alt1=$List['turning_point_interview_main_alt'];
			$tn_file_txt1=$List['turning_point_interview_main_img'];
			
			$tn_img_alt2=$List['turning_point_interview_index_alt'];
			$tn_file_txt2=$List['turning_point_interview_index_img'];
			
			$tn_img_alt3=$List['turning_point_interview_index_title_alt'];
			$tn_file_txt3=$List['turning_point_interview_index_title_img'];
			
			$tn_img_alt4=$List['turning_point_interview_index_name_alt'];
			$tn_file_txt4=$List['turning_point_interview_index_name_img'];
			
			$tn_img_alt5=$List['turning_point_interview_thumnail_alt'];
			$tn_file_txt5=$List['turning_point_interview_thumnail_img'];
			
			$tn_img_alt6=$List['turning_point_interview_backnumber_alt'];
			$tn_file_txt6=$List['turning_point_interview_backnumber_img'];
			
			$tn_img_alt7=$List['turning_point_interview_main_img_mobile'];
			$tn_file_txt7=$List['turning_point_interview_main_img_mobile'];
			
			
			list($op_front, $op_bottom) = explode(" ", $List['turning_point_interview_date']);
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
            	<div class="clear">
	                <p class="title_txt">Page number</p>
	                <input class="page_number" id="post_title" type="text" name="page_number" value="<?php echo $page_number;?>" />
                </div>
                <br/>
                <div class="clear hightligths_group" style="padding:10px; margin:0 0 10px 0; background:#C99;">
	                <label for="special"><b style="color:#060; font-size:14px;">Special interview</b>
	                  <input type="checkbox" id="special"  name="special" value="1" <?php if($special==1): echo 'checked="checked"'; endif; ?> />
                    </label>
                </div>
                <br/>
				<div class="clear">
	                <p class="title_txt">Vol Number</p>
	                <input class="vol_number" id="post_title" type="text" name="vol_number" value="<?php echo $vol_number;?>" />
                </div>
                <br/>
                <div class="clear">
	                <p class="title_txt"><b style="color:#C00">Vol Slug</b></p>
	                <input class="vol_number_slug" id="post_title" type="text" name="vol_number_slug" value="<?php echo $vol_number_slug;?>" />
                </div>
                <br/>
                <div class="clear">
	                <p class="title_txt">Title</p>
	                <input class="title" id="post_title" type="text" name="title" value="<?php echo $title;?>" />
                </div>
                <br/>
				
                
                <script type="text/javascript">
		jQuery(document).ready(function($){
			  $('.add_part_roundtable').delegate('a.add', 'click', function() {
	var count_div_group_roundtable=$(this).parent().parent().find('.item_roundtable').index()+1;			  
	var item_roundtable='<div class="item_roundtable clear"><p class="title_txt">Company Name</p><input id="post_title" type="text" name="company_name'+count_div_group_roundtable+'" value="" /><p class="title_txt">Postion</p><input id="post_title" type="text" name="postion'+count_div_group_roundtable+'" value="" /><p class="title_txt">Interviewee full name</p><input id="post_title" type="text" name="interview_fullname'+count_div_group_roundtable+'" value="" /><p class="title_txt">Profile content</p><textarea id="profile_content'+count_div_group_roundtable+'" name="profile_content'+count_div_group_roundtable+'" cols="40" style="height: 50px; width:100%;"></textarea><p class="title_txt">Profile image</p><div class="clear group_profile_img"><div id="text_input_file" class="file_csv_up"><input type="text" class="alt" placeholder="alt img" value="" id="profile_img_alt'+count_div_group_roundtable+'" name="profile_img_alt'+count_div_group_roundtable+'"><input type="text" class="src" placeholder="Click `select` Choose image" value="" id="profile_img_src'+count_div_group_roundtable+'" name="profile_img_src'+count_div_group_roundtable+'"></div><div id="csv_upload"><input type="file" class="up" name="profile_upload'+count_div_group_roundtable+'" id="profile_upload'+count_div_group_roundtable+'" onChange="Change_upload(this.id)">Select</div></div></div><!--item_roundtable-->';
				 $('.group_roundtable').append(item_roundtable);	
				 $(this).parent().parent().find(".group_roundtable").find(".roundtable_txt").val(count_div_group_roundtable);          
			});
		});
</script>
     <div class="clear container_roundtable container_consultant_turnning">
			<p class="title_txt"></p>
            <div class="group_roundtable clear">
            	
            	<?php
                $content_interview_consultant=unserialize(base64_decode($List['turning_point_interview_consultant']));
				$content_roundtable=@array_filter($content_interview_consultant);
				?>
                <input class="roundtable_txt" type="hidden" value="<?php if(count($content_roundtable)>0):echo count($content_roundtable);else: echo "1"; endif; ?>" name="roundtable_item">
                <?php
				if(!empty($content_roundtable)):
					$count_item_roundtable=count($content_roundtable);
					for($rt=0;$rt<$count_item_roundtable;$rt++):
						$rb=$rt+1;
				?>
	            	<div class="item_roundtable clear">
						<p class="title_txt">Company Name</p>
                    	<input id="post_title" type="text" name="company_name<?php echo $rb; ?>" value="<?php echo $content_roundtable[$rt]['company_name']; ?>" />
                    	<p class="title_txt">Postion</p>
                        <input id="post_title" type="text" name="postion<?php echo $rb; ?>" value="<?php echo $content_roundtable[$rt]['postion']; ?>" /> 
                        <p class="title_txt">Interviewee full name</p>
						<input id="post_title" type="text" name="interview_fullname<?php echo $rb; ?>" value="<?php echo $content_roundtable[$rt]['interview_fullname']; ?>" />
                        <p class="title_txt">Profile content</p>
						<textarea id="profile_content" name="profile_content<?php echo $rb; ?>" cols="40" style="height: 50px; width:100%;"><?php echo stripslashes(htmlspecialchars_decode($content_roundtable[$rt]['profile_content'])); ?></textarea>
                        <p class="title_txt">Profile image</p>
                        <div class="clear group_profile_img">
							<div id="text_input_file" class="file_csv_up">
                            	<input type="text" class="alt" placeholder="alt img" value="<?php echo $content_roundtable[$rt]['profile_img_alt']; ?>" id="profile_img_alt<?php echo $rb; ?>" name="profile_img_alt<?php echo $rb; ?>">
	             				<input type="text" class="src" placeholder="Click `select` Choose image" value="<?php echo $content_roundtable[$rt]['profile_img_src']; ?>" id="profile_img_src<?php echo $rb; ?>" name="profile_img_src<?php echo $rb; ?>">
	             			</div>
                            <div id="csv_upload"><input type="file" class="up" name="profile_upload<?php echo $rb; ?>" id="profile_upload<?php echo $rb; ?>" onchange="Change_upload(this.id)">Select</div>
                        </div>
                    </div><!--item_roundtable-->
                <?php 
						endfor;
					else:
				?>
                <div class="item_roundtable clear">
						<p class="title_txt">Company Name</p>
                    	<input id="post_title" type="text" name="company_name1" value="" />
                    	<p class="title_txt">Postion</p>
                        <input id="post_title" type="text" name="postion1" value="" /> 
                        <p class="title_txt">Interviewee full name</p>
						<input id="post_title" type="text" name="interview_fullname1" value="" />
                        <p class="title_txt">Profile content</p>
							<textarea id="profile_content" name="profile_content1" cols="40" style="height: 50px; width:100%;"></textarea>
                        <p class="title_txt">Profile image</p>
                        <div class="clear group_profile_img">
							<div id="text_input_file" class="file_csv_up">
                            	<input type="text" class="alt" placeholder="alt img" value="" id="profile_img_alt1" name="profile_img_alt1">
	             				<input type="text" class="src" placeholder="Click `select` Choose image" value="" id="profile_img_src1" name="profile_img_src1">
	             			</div>
                            <div id="csv_upload"><input type="file" class="up" name="profile_upload1" id="profile_upload1" onchange="Change_upload(this.id)">Select</div>
                        </div>
                    </div><!--item_roundtable-->
                <?php endif; ?>
            </div><!--group_roundtable-->
            <div class="clear add_link add_part_roundtable">
                	<a class="add r">Add Consultant</a>
           	</div><!--add_part_roundtable-->
	     </div>    
            <br/>    
            <div class="clear">
                  <p class="title_txt">Excerpt</p>
                  <div class="clear">
                       <textarea id="excerpt" name="excerpt" cols="40" style="height: 150px; width:100%;"><?php echo $excerpt;?></textarea>
                 </div>
             </div>       
             <br/>  
              
              
<script type="text/javascript">
	jQuery(document).ready(function($){
		  $('.add_part_item').delegate('a.add', 'click', function() {
			 var count_div_group_parent_1=$(this).parent().parent().index()+1; 
			 var count_div_group_1=$(this).parent().parent().find('.content_add_item_interview').find('.group_item_interview').length+1;
			 var html_add_item_1='<div class="group_item_interview item_part_c_'+count_div_group_parent_1+count_div_group_1+' clear"><div class="clear"><p class="title_txt">Consultant name</p><input class="consultant_post" disabled="disabled" style="float:left; width:60%; padding:0 2% 0 0;" id="post_title" type="text" name="content_consultant_kc_interview'+count_div_group_parent_1+count_div_group_1+'" value="" /><label for="set_consultant_name'+count_div_group_parent_1+count_div_group_1+'" style="float:left; width:38%; padding:0;"><input type="checkbox" id="set_consultant_name'+count_div_group_parent_1+count_div_group_1+'" name="set_consultant_name'+count_div_group_parent_1+count_div_group_1+'" value="1" checked="checked" onchange="set_consultant_check(this.id)"/><b style="color:#060; font-size:14px;">Auto System</b></label></div><div class="clear"><p class="title_txt">Quetion</p><textarea id="content_right_kc_interview" name="content_right_question_interview'+count_div_group_parent_1+count_div_group_1+'" cols="40" style="height: 40px; width:100%;"></textarea></div><div class="clear"><p class="title_txt">Interviewee name</p><input id="post_title" type="text" name="content_interviewee_kc_interview'+count_div_group_parent_1+count_div_group_1+'" value="" /></div><div class="clear"><p class="title_txt">Answer</p><textarea id="content_right_kc_interview" name="content_answer_kc_interview'+count_div_group_parent_1+count_div_group_1+'" cols="40" style="height: 80px; width:100%;"></textarea></div><div class="clear group_content_img" style="display: none;"><div id="text_input_file" class="file_csv_up"><input type="text" class="txt_alt_img" placeholder="alt img" value="" id="content_img_alt'+count_div_group_parent_1+count_div_group_1+'" name="content_img_alt'+count_div_group_parent_1+count_div_group_1+'"><select class="content_postion_img" name="content_postion_img'+count_div_group_parent_1+count_div_group_1+'"><option value="left">Left</option><option value="right">Right</option></select><input type="text" class="txt_src_img" placeholder="Click `select` Choose image" value="" id="content_img_src'+count_div_group_parent_1+count_div_group_1+'" name="content_img_src'+count_div_group_parent_1+count_div_group_1+'"></div><div id="csv_upload"><input type="file" class="content_up" name="content_upload'+count_div_group_parent_1+count_div_group_1+'" id="content_upload'+count_div_group_parent_1+count_div_group_1+'" onchange="Set_content_upload(this.id)">Select</div></div><div class="show_img_content clear" id="show_img_content'+count_div_group_parent_1+count_div_group_1+'" style="text-align:right;" onclick="show_img_add(this.id)">Add image</div></div><!--group_item_interview-->';
			 $('.group_content_interview'+count_div_group_parent_1+' .content_add_item_interview').append(html_add_item_1);	
			 $(this).parent().parent().find(".field_group").find(".group_txt").val(count_div_group_1);
		});
		 $(document).on('click', '.live_add_part_c a.add', function(e) {
			 var length_item=$(this).parent().parent().find('.content_add_item_interview').find('.group_item_interview').length+1;
				var length_item_two=$(this).parent().parent().index()+1;
				var html_add_item_news='<div class="group_item_interview item_part_c_'+length_item_two+length_item+' clear"><div class="clear"><p class="title_txt">Consultant name</p><input class="consultant_post" disabled="disabled" style="float:left; width:60%; padding:0 2% 0 0;" id="post_title" type="text" name="content_consultant_kc_interview'+length_item_two+length_item+'" value="" /><label for="set_consultant_name'+length_item_two+length_item+'" style="float:left; width:38%; padding:0;"><input type="checkbox" id="set_consultant_name'+length_item_two+length_item+'" name="set_consultant_name'+length_item_two+length_item+'" value="1" checked="checked" onchange="set_consultant_check(this.id)"/><b style="color:#060; font-size:14px;">Auto System</b></label></div><div class="clear"><p class="title_txt">Quetion</p><textarea id="content_right_kc_interview" name="content_right_question_interview'+length_item_two+length_item+'" cols="40" style="height: 40px; width:100%;"></textarea></div><div class="clear"><p class="title_txt">Interviewee name</p><input id="post_title" type="text" name="content_interviewee_kc_interview'+length_item_two+length_item+'" value="" /></div><div class="clear"><p class="title_txt">Answer</p><textarea id="content_right_kc_interview" name="content_answer_kc_interview'+length_item_two+length_item+'" cols="40" style="height: 80px; width:100%;"></textarea></div><div class="clear group_content_img" style="display: none;"><div id="text_input_file" class="file_csv_up"><input type="text" class="txt_alt_img" placeholder="alt img" value="" id="content_img_alt'+length_item_two+length_item+'" name="content_img_alt'+length_item_two+length_item+'"><select class="content_postion_img" name="content_postion_img'+length_item_two+length_item+'"><option value="left">Left</option><option value="right">Right</option></select><input type="text" class="txt_src_img" placeholder="Click `select` Choose image" value="" id="content_img_src'+length_item_two+length_item+'" name="content_img_src'+length_item_two+length_item+'"></div><div id="csv_upload"><input type="file" class="content_up" name="content_upload'+length_item_two+length_item+'" id="content_upload'+length_item_two+length_item+'" onchange="Set_content_upload(this.id)">Select</div></div><div class="show_img_content clear" id="show_img_content'+length_item_two+length_item+'" style="text-align:right;" onclick="show_img_add(this.id)">Add image</div></div><!--group_item_interview-->';
				var newRow_item=$('.group_content_interview'+length_item_two+' .content_add_item_interview').append(html_add_item_news);	
				$(this).parent().parent().find(".field_group").find(".group_txt").val(length_item);		
		 });
		 $('.live_add_part_c').delegate('.add', 'click', function() {
			 	alert('ok');
			 });
			$('.add_part_group').delegate('.add', 'click', function() {	
			var count_div_group_parent=$('.group_content_interview').length+1; 
			var count_div_group=$('.group_content_interview .group_item_interview').length+1;
			var html_add_part_group='<div class="group_content_interview group_content_interview'+count_div_group_parent+' clear"><div class="field_group clear"><p class="title_txt">Sub title (Gold title)</p><input id="post_title" type="text" name="content_subtitle[]" value="" /><input class="group_txt" type="hidden" name="group_item[]" value="1" /></div><div class="clear content_add_item_interview"><div class="group_item_interview  clear"><div class="clear"><p class="title_txt">Consultant name</p><input class="consultant_post" disabled="disabled" style="float:left; width:60%; padding:0 2% 0 0;" id="post_title" type="text" name="content_consultant_kc_interview'+count_div_group_parent+'1" value="" /><label for="set_consultant_name'+count_div_group_parent+'1" style="float:left; width:38%; padding:0;"><input type="checkbox" id="set_consultant_name'+count_div_group_parent+'1" name="set_consultant_name'+count_div_group_parent+'1" value="1" checked="checked" onchange="set_consultant_check(this.id)"/><b style="color:#060; font-size:14px;">Auto System</b></label></div><div class="clear"><p class="title_txt">Quetion</p><textarea id="content_right_kc_interview" name="content_right_question_interview'+count_div_group_parent+'1" cols="40" style="height: 40px; width:100%;"></textarea></div><div class="clear"><p class="title_txt">Interviewee name</p><input id="post_title" type="text" name="content_interviewee_kc_interview'+count_div_group_parent+'1" value="" /></div><div class="clear"><p class="title_txt">Answer</p><textarea id="content_right_kc_interview" name="content_answer_kc_interview'+count_div_group_parent+'1" cols="40" style="height: 80px; width:100%;"></textarea></div><div class="clear group_content_img" style="display: none;"><div id="text_input_file" class="file_csv_up"><input type="text" class="txt_alt_img" placeholder="alt img" value="" id="content_img_alt'+count_div_group_parent+'1" name="content_img_alt'+count_div_group_parent+'1"><select class="content_postion_img" name="content_postion_img'+count_div_group_parent+'1"><option value="left">Left</option><option value="right">Right</option></select><input type="text" class="txt_src_img" placeholder="Click `select` Choose image" value="" id="content_img_src'+count_div_group_parent+'1" name="content_img_src'+count_div_group_parent+'1"></div><div id="csv_upload"><input type="file" class="content_up" name="content_upload'+count_div_group_parent+'1" id="content_upload'+count_div_group_parent+'1" onchange="Set_content_upload(this.id)">Select</div></div><div class="show_img_content clear" id="show_img_content'+count_div_group_parent+'1" style="text-align:right;" onclick="show_img_add(this.id)">Add image</div></div><!--group_item_interview--></div><!--content_add_item_interview--><div class="clear add_link live_add_part_c"><a class="add r">+Add Part B</a></div></div><!--group_content_interview-->';		
	
			$('.content_add_group_interview').append(html_add_part_group );	
		});
	});
</script>                
 <?php 
 		//echo $List['turning_point_interview_content'];
	 	$content_json_get=unserialize($List['turning_point_interview_content']);
		//print_r( $content_json_get);
		$content_array_group=@array_filter($content_json_get);
		//$content_array_group=$content_json_get;
		//print_r($content_json);
	 ?>                  
     <!--Begin content detail field-->    
    <div class="container_content_interview clear">
    	
	        <div class="content_add_group_interview clear">       
	          <?php
		 		if(!empty($content_array_group)):
				for($j=0;$j<count($content_array_group);$j++):
				$m=$j+1;
				
				$group_item_array=@array_filter($content_array_group[$j]['group_item']);
				//print_r($group_item_array);
				$count_group_item=count($group_item_array);
		  	 ?>
			       <div class="group_content_interview group_content_interview<?php echo $m; ?> clear"> 
				            <div class="field_group clear">
				                <p class="title_txt">Sub title (Gold title)</p>
				                <input id="post_title" type="text" name="content_subtitle[]" value="<?php echo $content_array_group[$j]['subtitle']; ?>" />
			                    <input type="hidden" class="group_txt" name="group_item[]" value="<?php echo $count_group_item; ?>" />
				            </div> 
					              <div class="clear content_add_item_interview">
                                  		<?php 
											for($u=0;$u<$count_group_item;$u++):
											$n=$u+1;
										?> 
						              	<div class="group_item_interview item_part_c_<?php echo $m.$n; ?> clear">
									            <div class="clear group_consultant_name_post">
									                <p class="title_txt">Consultant name</p>
									                <input class="consultant_post" id="post_title" style="float:left; width:60%; padding:0 2% 0 0;" type="text" name="content_consultant_kc_interview<?php echo $m.$n; ?>" value="<?php echo mb_convert_encoding($group_item_array[$u]['content_consultant'],"UTF-8","HTML-ENTITIES"); ?>" <?php if($group_item_array[$u]['set_consultant_name']==1): ?>disabled="disabled" <?php endif; ?> />
                                                     <label for="set_consultant_name<?php echo $m.$n; ?>" style="float:left; width:38%; padding:0;">
	                  									<input type="checkbox" id="set_consultant_name<?php echo $m.$n; ?>"  name="set_consultant_name<?php echo $m.$n; ?>" value="1" <?php if($group_item_array[$u]['set_consultant_name']==1): echo 'checked="checked"'; endif; ?> onchange="set_consultant_check(this.id)" />
                                                        <b style="color:#060; font-size:14px;">Auto System</b>
                    								</label>
									            </div> 
									            
									            <div class="clear">
									                <p class="title_txt">Quetion</p>
									                <textarea id="content_right_kc_interview" name="content_right_question_interview<?php echo $m.$n; ?>" cols="40" style="height: 40px; width:100%;"><?php echo $group_item_array[$u]['content_question']; ?></textarea>
									            </div>
                                                
                                                <div class="clear">
									                <p class="title_txt">Interviewee name</p>
									               <input id="post_title" type="text" name="content_interviewee_kc_interview<?php echo $m.$n; ?>" value="<?php echo $group_item_array[$u]['content_interviewee']; ?>" />
									            </div> 
                                                
                                                <div class="clear">
									                <p class="title_txt">Answer</p>
									                <textarea id="content_right_kc_interview" name="content_answer_kc_interview<?php echo $m.$n; ?>" cols="40" style="height: 80px; width:100%;"><?php echo $group_item_array[$u]['content_answer']; ?></textarea>
									            </div> 
                                                <div class="clear group_content_img" <?php if(empty($group_item_array[$u]['content_src_img'])): ?> style="display:none;" <?php endif; ?>>
                                                	<div id="text_input_file" class="file_csv_up">
						                            	<input type="text" class="txt_alt_img" placeholder="alt img" value="<?php echo $group_item_array[$u]['content_alt_img']; ?>" id="content_img_alt<?php echo $m.$n; ?>" name="content_img_alt<?php echo $m.$n; ?>">
                                                        <select class="content_postion_img" name="content_postion_img<?php echo $m.$n; ?>" id="content_postion_img<?php echo $m.$n; ?>">
                                                        	<option value="" <?php if($group_item_array[$u]['content_postion_img']==""): ?> selected="selected" <?php endif; ?>>None</option>
                                                        	<option value="left" <?php if($group_item_array[$u]['content_postion_img']=="left"): ?> selected="selected" <?php endif; ?>>Left</option>
                                                            <option value="right" <?php if($group_item_array[$u]['content_postion_img']=="right"): ?> selected="selected" <?php endif; ?>>Right</option>
                                                        </select>
							             				<input type="text" class="txt_src_img" placeholder="Click `select` Choose image" value="<?php echo $group_item_array[$u]['content_src_img']; ?>" id="content_img_src<?php echo $m.$n; ?>" name="content_img_src<?php echo $m.$n; ?>">
							             			</div>
						                            <div id="csv_upload"><input type="file" class="content_up" name="content_upload<?php echo $m.$n; ?>" id="content_upload<?php echo $m.$n; ?>" onchange="Set_content_upload(this.id)">Select</div>
						                        </div>  
                                                <div class="show_img_content clear" id="show_img_content<?php echo $m.$n; ?>" style="text-align:right; <?php if(!empty($group_item_array[$u]['content_src_img'])): ?> display:none; <?php endif; ?>" onclick="show_img_add(this.id)" >Add image</div>
                                                
                                                 
									      </div><!--group_item_interview-->
                                      	<?php 
											endfor;
										 ?>
					               </div><!--content_add_item_interview-->   
			                 <div class="clear add_link add_part_item">
			                      <a class="add r">+Add Part B</a>	
			                 </div>
			     </div><!--group_content_interview--> 
	            <?php 
					endfor;
				?>
                <?php else:?>
                	<div class="group_content_interview group_content_interview1 clear"> 
				            <div class="field_group clear">
				                <p class="title_txt">Sub title (Gold title)</p>
				                <input id="post_title" type="text" name="content_subtitle[]" value="" />
			                    <input type="hidden" class="group_txt" name="group_item[]" value="1" />
				            </div> 
					              <div class="clear content_add_item_interview">
					              	<div class="group_item_interview  clear">
								              	<div class="clear">
									                <p class="title_txt">Consultant name</p>
									                <input class="consultant_post" id="post_title" disabled="disabled" type="text" name="content_consultant_kc_interview11" value="" style="float:left; width:60%; padding:0 2% 0 0;" />
                                                    <label for="set_consultant_name11" style="float:left; width:38%; padding:0;">
	                  									<input type="checkbox" id="set_consultant_name11"  name="set_consultant_name11" value="1" checked="checked" onchange="set_consultant_check(this.id)"/>
                                                        <b style="color:#060; font-size:14px;">Auto System</b>
                    								</label>
									            </div> 
									            
									            <div class="clear">
									                <p class="title_txt">Quetion</p>
									                <textarea id="content_right_kc_interview" name="content_right_question_interview11" cols="40" style="height: 40px; width:100%;"></textarea>
									            </div>
                                                
                                                <div class="clear">
									                <p class="title_txt">Interviewee name</p>
									               <input id="post_title" type="text" name="content_interviewee_kc_interview11" value="" />
									            </div> 
                                                
                                                <div class="clear">
									                <p class="title_txt">Answer</p>
									                <textarea id="content_right_kc_interview" name="content_answer_kc_interview11" cols="40" style="height: 80px; width:100%;"></textarea>
									            </div>  
                                                 <div class="clear group_content_img">
                                                 	<div id="text_input_file" class="file_csv_up">
						                            	<input type="text" class="txt_alt_img" placeholder="alt img" value="" id="content_img_alt11" name="content_img_alt11">
							             				 <select class="content_postion_img" name="content_postion_img11">
                                                        	<option value="left">Left</option>
                                                            <option value="right">Right</option>
                                                        </select>
                                                        <input type="text" class="txt_src_img" placeholder="Click `select` Choose image" value="" id="content_img_src11" name="content_img_src11">
							             			</div>
						                            <div id="csv_upload"><input type="file" class="content_up" name="content_upload11" id="content_upload11" onchange="Set_content_upload(this.id)">Select</div>
						                        </div>  
                                                <div class="show_img_content clear" id="show_img_content11" style="text-align:right;" onclick="show_img_add(this.id)">Add image</div>
                                                 
                                                
								      </div><!--group_item_interview-->
					               </div><!--content_add_item_interview-->   
			                 <div class="clear add_link add_part_item">
			                      <a class="add r">+Add Part B</a>	
			                 </div>
			            </div><!--group_content_interview--> 
                <?php endif; ?>
	        </div><!--content_add_group_interview--> 
             
            <div class="clear add_link add_part_group">
                <a class="add r">+Add Part C</a>	
           </div>
      </div><!--container_content_interview-->         
       <br /> 
       <br/>  
       
          <div class="clear"> 
          	   <p class="title_txt">Comment image</p>   
	           <div class="clear group_comment_img">
					<div id="text_input_file" class="file_csv_up">
	                     <input type="text" class="comment_alt" placeholder="alt img" value="<?php echo $comment_img_alt; ?>" id="comment_img_alt" name="comment_img_alt">
		             	<input type="text" class="comment_src" placeholder="Click `select` Choose image" value="<?php echo $comment_img_src; ?>" id="comment_img_src" name="comment_img_src">
		           </div>
	               <div id="csv_upload"><input type="file" class="comment_up" name="comment_upload" id="comment_upload" onchange="comment_upload_set(this.id)">Select</div>
	          </div>  
          </div> 
          <br/>     
              
              
           <div class="clear">
                  <p class="title_txt">Comment</p>
                  <div class="clear">
                       <textarea id="comment_content" name="comment_content" cols="40" style="height: 150px; width:100%;"><?php echo stripslashes($comment_content);?></textarea>
                 </div>
             </div>       
             <br/>     
            <div class="clear">
					<p class="title_txt">editor name</p>
					<input id="post_title" type="text" name="editor_name" value="<?php echo $editor_name; ?>" />
			</div>   
            <br />
             <div class="clear">
					<p class="title_txt">photographer name</p>
					<input id="post_title" type="text" name="photographer_name" value="<?php echo $photographer_name; ?>" />
			</div>   
            <br />
               <!-- SEO-->
                 <div class="clear">
                    <p class="title_txt">SEO Keyword:&nbsp;ヘッドハンティング,転職支援,人材紹介,サーチファーム,エグゼクティブサーチ,ヘッドハンター</p>
                    <div id="post_container" class="clearfix">
                       <textarea id="seo_keyword" name="seo_keyword" cols="40" style="height: 50px; width:100%;"><?php echo $seo_keyword;?></textarea>
                    </div>
                </div>
               <br />
               <div class="clear">
                    <p class="title_txt">SEO Description: 例え）クライス&amp;カンパニーのコンサルタントがヘッドハンターの視点で注目の企業を分析します。【Vol.331】世界を目指すベンチャー企業に今入る！ （コンサルタント：岡田 麗）</p>
                    <div id="post_container" class="clearfix">
                       <textarea id="seo_description" name="seo_description" cols="40" style="height: 50px; width:100%;"><?php echo $seo_description;?></textarea>
                    </div>
                </div>
                <br />
				<div class="clear">
                     <p class="title_txt">SEO Og:Title(Facebook):</p>
                     <div id="post_container" class="clearfix">
                         <textarea id="seo_og_title" name="seo_og_title" cols="40" style="height: 50px; width:100%;"><?php echo $seo_og_title;?></textarea>
                     </div>
                </div>
                <br />
				 <div class="clear">
                     <p class="title_txt">SEO Og:Description(Facebook):</p>
                     <div id="post_container" class="clearfix">
                         <textarea id="seo_og_description" name="seo_og_description" cols="40" style="height: 50px; width:100%;"><?php echo $seo_og_description;?></textarea>
                    </div>
                </div>
			
				  <?php include('inc/post_img_sharefacebook.php');?>
               <!--END SEO -->
               
		</div>
			
			<?php include_once("form_left.php"); ?>

		</div>
	</div>
</form>

</div>
<script type="text/javascript">
$(document).ready(function() {
	var n = $( "input#special:checked" ).length;
  	if(n==0)
	{
	  $(".add_part_roundtable").hide();
	}
	
	$( "input#special").on( "click",function(){
		$(".add_part_roundtable").toggle();
	});
	<?php 
		if($_GET['op']=='insert'):
	?>
	$('.group_content_img').each(function(){
			$(this).hide();
	});
	<?php 
		endif;
	?>
	
	
	
	
	
	
});
function set_consultant_check($id){
	var  id = $('#'+$id);
	if(id.is(':checked'))
	{
		id.parent().parent().find('input.consultant_post').prop("disabled", true);
	}
	else
	{
		id.parent().parent().find('input.consultant_post').prop("disabled", false);
	}
}
function Set_content_upload($id){
	var  id = $('#'+$id);
	id.parent().parent().find('input.txt_src_img').val(id.val());
	id.parent().next().find('input.txt_src_img').attr("value",id.val());
}
function Change_upload($id){
	var  id = $('#'+$id);
	id.parent().parent().find('#text_input_file input.src').val(id.val());
	id.parent().parent().find('#text_input_file input.src').attr("value",id.val());
}
function show_img_add($id){
	var  id = $('#'+$id);
	id.parent().find('.group_content_img').stop().slideToggle('slow');
	id.hide();
}
function comment_upload_set($id){
	var  id = $('#'+$id);
	id.parent().parent().find('#text_input_file input#comment_img_src').val(id.val());
	id.parent().parent().find('#text_input_file input#comment_img_src').attr("value",id.val());
}
</script>




<script src="js/jquery.autocomplete.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" media="all" />

<script type="text/javascript">
$(document).ready(function() {
	<?php 
		$Data_high_class=To_Get_Data("turning_point_interview","  and `turning_point_interview_id` in (select `turning_point_interview_id` from `turning_point_interview` group by  `turning_point_interview_vol_slug`)");
		if($Data_high_class['cnt']>0):
			$i=0;
			$Data_all=array();
			$count_hight_slug=$Data_high_class['cnt'];
			for($i=0;$i<$count_hight_slug; $i++):
				$List_high_class = $Data_high_class[$i];
				array_push($Data_all,array(
						"turning_point_interview_id" => $List_high_class['turning_point_interview_id'],
						"turning_point_interview_vol_number" => $List_high_class['turning_point_interview_vol_number'],
						"turning_point_interview_title" => $List_high_class['turning_point_interview_title'],
						"turning_point_interview_vol_slug"=>$List_high_class['turning_point_interview_vol_slug'],
						
						
						"turning_point_interview_index_img"=>$List_high_class['turning_point_interview_index_img'],
						"turning_point_interview_index_alt"=>$List_high_class['turning_point_interview_index_alt'],
					  	"turning_point_interview_index_title_img"=>$List_high_class['turning_point_interview_index_title_img'],
						"turning_point_interview_index_title_alt"=>$List_high_class['turning_point_interview_index_title_alt'],
					  	"turning_point_interview_index_name_img"=>$List_high_class['turning_point_interview_index_name_img'],
						"turning_point_interview_index_name_alt"=>$List_high_class['turning_point_interview_index_name_alt'],
					  	"turning_point_interview_thumnail_img"=>$List_high_class['turning_point_interview_thumnail_img'],
						"turning_point_interview_thumnail_alt"=>$List_high_class['turning_point_interview_thumnail_alt'],
					  	"turning_point_interview_backnumber_img"=>$List_high_class['turning_point_interview_backnumber_img'],
						"turning_point_interview_backnumber_alt"=>$List_high_class['turning_point_interview_backnumber_alt'],
					  	
						//"turning_point_interview_main_img_mobile"=>$List_high_class['turning_point_interview_main_img_mobile'],
						//"turning_point_interview_main_alt_mobile"=>$List_high_class['turning_point_interview_main_alt_mobile'],
						
						"turning_point_interview_special"=>$List_high_class['turning_point_interview_special'],
						
						
						
						"seo_keyword"=>$List_high_class['seo_keyword'],
						"seo_description"=>$List_high_class['seo_description'],
						"seo_og_title"=>$List_high_class['seo_og_title'],
						"seo_og_description"=>$List_high_class['seo_og_description'],
						"seo_add_thumb_meta"=>$List_high_class['seo_add_thumb_meta'],
						
						
						"turning_point_interview_comment"=>unserialize($List_high_class['turning_point_interview_comment']),
						"turning_point_interview_consultant"=>unserialize(base64_decode($List_high_class['turning_point_interview_consultant'])),
						"turning_point_interview_content"=>unserialize($List_high_class['turning_point_interview_content']),
						
					)
				);
				$company_interviews_tag_slug=$List_high_class['turning_point_interview_vol_slug'];
				$data_value_for.=$company_interviews_tag_slug.",";
			endfor;
			$data_value=substr($data_value_for, 0, -1);
			//echo $data_value;
			$List_Json= json_encode($Data_all);
	
	?>
	var Json_data=<?php echo $List_Json; ?>;
    var data_value = "<?php echo $data_value; ?>".split(",");
	$(".vol_number_slug").autocomplete(data_value).result(function(){
			var set_txt=$(".vol_number_slug").val();
			var index = findIndexByKeyValue(Json_data, "turning_point_interview_vol_slug",set_txt);
			var turning_point_interview_id=Json_data[index]["turning_point_interview_id"];
			
			$(".vol_number").val(Json_data[index]["turning_point_interview_vol_number"]);
			$(".title").val(Json_data[index]["turning_point_interview_title"]);
			
			
			
			$("#seo_keyword").val(Json_data[index]["seo_keyword"]);
			$("#seo_description").val(Json_data[index]["seo_description"]);
			$("#seo_og_title").val(Json_data[index]["seo_og_title"]);
			$("#seo_og_description").val(Json_data[index]["seo_og_description"]);
			$("#txt_feat_2").val(Json_data[index]["seo_add_thumb_meta"]);
			
			
			$(".tn_img_alt2").val(Json_data[index]["turning_point_interview_index_alt"]);
			$("#tn_file_txt2").val(Json_data[index]["turning_point_interview_index_img"]);
	$('#img_src_none_set2').prepend($('<img>',{id:'img_auto2',class:'img_auto_complete',width:150,src:'upload_thumnail/'+Json_data[index]["turning_point_interview_index_img"]}));
		
			
			$(".tn_img_alt3").val(Json_data[index]["turning_point_interview_index_title_alt"]);
			$("#tn_file_txt3").val(Json_data[index]["turning_point_interview_index_title_img"]);
	$('#img_src_none_set3').prepend($('<img>',{id:'img_auto3',class:'img_auto_complete',width:150,src:'upload_thumnail/'+Json_data[index]["turning_point_interview_index_title_img"]}));
			
			$(".tn_img_alt4").val(Json_data[index]["turning_point_interview_index_name_alt"]);
			$("#tn_file_txt4").val(Json_data[index]["turning_point_interview_index_name_img"]);
	$('#img_src_none_set4').prepend($('<img>',{id:'img_auto4',class:'img_auto_complete',width:150,src:'upload_thumnail/'+Json_data[index]["turning_point_interview_index_name_img"]}));
			
			$(".tn_img_alt5").val(Json_data[index]["turning_point_interview_thumnail_alt"]);
			$("#tn_file_txt5").val(Json_data[index]["turning_point_interview_thumnail_img"]);
	$('#img_src_none_set5').prepend($('<img>',{id:'img_auto5',class:'img_auto_complete',width:150,src:'upload_thumnail/'+Json_data[index]["turning_point_interview_thumnail_img"]}));
			
			$(".tn_img_alt6").val(Json_data[index]["turning_point_interview_backnumber_alt"]);
			$("#tn_file_txt6").val(Json_data[index]["turning_point_interview_backnumber_img"]);
	$('#img_src_none_set6').prepend($('<img>',{id:'img_auto6',class:'img_auto_complete',width:150,src:'upload_thumnail/'+Json_data[index]["turning_point_interview_backnumber_img"]}));
			//$(".link_realeated").val(Json_data[index]["kc_interview_realeated_link"]);
			if(Json_data[index]["turning_point_interview_special"]==1){
				$("#special").attr("checked","checked");
			}else{
				$("#special").removeAttr("checked");
			}

			var interview_consultant_value=Json_data[index]["turning_point_interview_consultant"];
			var html_apend_roundtable='';
			var data_roundtable='';
		
			$.each(interview_consultant_value,function(j,data_consultant){
				//console.log(data_consultant);
				var k=j+1;
			    html_apend_roundtable += '<div class="item_roundtable clear"><p class="title_txt">Company Name</p><input id="post_title" type="text" name="company_name'+k+'" value="'+data_consultant.company_name+'" /><p class="title_txt">Postion</p><input id="post_title" type="text" name="postion'+k+'" value="'+data_consultant.postion+'" /><p class="title_txt">Interviewee full name</p><input id="post_title" type="text" name="interview_fullname'+k+'" value="'+data_consultant.interview_fullname+'" /><p class="title_txt">Profile content</p><textarea id="profile_content'+k+'" name="profile_content'+k+'" cols="40" style="height: 50px; width:100%;">'+stripslashes(data_consultant.profile_content)+'</textarea><p class="title_txt">Profile image</p><div class="clear group_profile_img"><div id="text_input_file" class="file_csv_up"><input type="text" class="alt" placeholder="alt img" value="'+data_consultant.profile_img_alt+'" id="profile_img_alt'+k+'" name="profile_img_alt'+k+'"><input type="text" class="src" placeholder="Click `select` Choose image" value="'+data_consultant.profile_img_src+'" id="profile_img_src'+k+'" name="profile_img_src'+k+'"></div><div id="csv_upload"><input type="file" class="up" name="profile_upload'+k+'" id="profile_upload'+k+'" onChange="Change_upload(this.id)">Select</div></div></div><!--item_roundtable-->';
			});
		
			$('.roundtable_txt').val(interview_consultant_value.length);
			$('.item_roundtable').remove();
			$('.group_roundtable').append(html_apend_roundtable);		


			/*var postion_value=Json_data[index]["kc_interview_postion"];
			var html_apend_postion='';
			var data_postion='';
				//alert(dataSize);
			$.each(postion_value,function(i,data_postion){
				//console.log(data_postion);
				var u=i+1;
			     html_apend_postion += '<div class="group_postion_field item_list_postion'+u+' clear"><br/><div class="clear"><p class="title_txt">役職</p><input class="postion" id="post_title" type="text" name="postion'+u+'" value="'+data_postion.postion+'" /></div><br/><div class="clear"><p class="title_txt">話者氏名(例:山田太郎)</p><input class="interviewee_fullname" id="post_title" type="text" name="interviewee_fullname'+u+'" value="'+data_postion.interviewee_fullname+'" /></div></div><!--group_postion_field-->';
			});*/
			/*$('.postion_txt').val(postion_value.length);
			$('.group_postion_field').remove();
			$('.content_postion_group').append(html_apend_postion);	
			$.getJSON("ajax/load_category_kc_interview.php?kc_cat_interview="+kc_interview_id, function(result_cate){
		        $.each(result_cate,function(i, field){
		            //console.log(field.id);
					$('label.kc_consul_label input[type="checkbox"]').removeAttr('checked');
					$('label.kc_consul_label input#checkbox_cmc_'+field.id).attr('checked', 'checked');
		        });
		    });*/
			
		});
	<?php 
		endif;
	?>
	
});
function findIndexByKeyValue(arraytosearch, key, valuetosearch) {
 	//return arraytosearch.length;
	for (var i = 0; i < arraytosearch.length; i++) {
		//return arraytosearch[i][key];
	 	if (arraytosearch[i][key] == valuetosearch)
			{
				return i;
			}
	}
		return null;
	}
function stripslashes(str) {
  return (str + '')
    .replace(/\\(.?)/g, function(s, n1) {
      switch (n1) {
        case '\\':
          return '\\';
        case '0':
          return '\u0000';
        case '':
          return '';
        default:
          return n1;
      }
    });
}	

</script>


