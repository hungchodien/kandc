<?php
	$op_vis_array = array("1" => "Draft","0" => "Public");
$month_array = array("01"=>"Jan","02"=>"Feb","03"=>"Mar","04"=>"Apr","05"=>"May","06"=>"Jun", "07"=>"Jul","08"=>"Aug","09"=>"Sep","10"=>"Oct","11"=>"Nov","12"=>"Dec");
?>

<div id="content_right_bar" class="fr">
    <div class="postbox" id="publish">
        <h3 class="hndle">Publish</h3>
        <div class="inside clearfix">
            <div id="visibility">
                <p class="label"><b><?php echo $op_vis_str;?></b></p>

				<div id="post-visibility-select" style="display: block;">
					<?php echo create_crbox("op_vis", $op_vis_array, "radio", $op_vis);?>
                </div>
            </div>
            <div class="misc-pub-section curtime">
                <p id="timestamp"><b>DATE</b></p>

                <div id="timestampdiv" style="display: block;">
                    <div class="timestamp-wrap">
                        <?php echo Create_Selectbox("op_date_month", $month_array, $op_date_month, "tabindex='4'", "N");?>

                        <input type="text" tabindex="4" maxlength="2" size="2" name="op_date_day" id="op_date_day" value="<?php echo $op_date_day;?>" />
                        ,
                        <input type="text" tabindex="4" maxlength="4" size="4" name="op_date_year" id="op_date_year" value="<?php echo $op_date_year;?>" />
                        @
                        <input type="text" tabindex="4" maxlength="2" size="2" name="op_date_hour" id="op_date_hour" value="<?php echo $op_date_hour;?>" />
                        :
                        <input type="text" tabindex="4" maxlength="2" size="2" name="op_date_minute" id="op_date_minute" value="<?php echo $op_date_minute;?>" />
                    </div>

                </div>
            </div>

            
        </div>
        <div class="clear button_click">
        
        <p class="save_btn_p"><!--<a href="javascript:;" onClick="CKupdate();$("#board").ajaxSubmit();;"><span>Save</span></a>-->
       		<?php 
				if($_GET['op']=="insert")
				{
					?>
                    <input type="submit" name="submit" value="SAVE" id="save_btn" />
                    <?php
				}
				if($_GET['op']=="update")
				{
					?>
                    <input type="submit" name="submit" value="UPDATE" id="update_btn" />
                    <?php
				}
			?>	 
        </p>
        </div>
    </div>
    
    
    
    
    
    <?php 
		if($sid=="notice_semina_career"){
	?>
    <!--postbox-->

    <div class="postbox" id="tag">
        <h3 class="hndle">Category Notice-Semina-Career</h3>
        <div class="inside clear">
        <div class="clear">
        <?php 
$where_total .= "and status_category_notice_seminar_career=0";
$Data = To_Get_Data("category_notice_seminar_career", $where_total." order by date_category_notice_seminar_career desc");
//$Data_count = To_Get_Data("category_notice_seminar_career", $where_total,"count(*) as `count_num` ","Y");
//echo $Data_count['count_num'];
	if($Data['cnt'] > 0){
		
		for($i=0; $i<$Data['cnt']; $i++)
		{
			//$selected="";
			$List = $Data[$i];
			//print_r($List);
			$seq = $List['id_category_notice_seminar_career'];
			
			$Data_Get=To_Get_Data("notice_seminar_career", "and `id_category_notice_seminar_career`={$seq}");
			
			$title_content = addslashes($List['name_category_notice_seminar_career']);
				
			?>
				
					 
					   
						  <input type="radio" name="category_radio" value="<?php echo $seq; ?>" id="GroupRadio_<?php echo $seq; ?>" class="radio_category"  <?php 
						  	if($Data_Get['cnt'] > 0)
								{
									echo "checked='checked'";
								}
						  ?>   />
						 <?php echo $title_content; ?>
						<br />
					   
						  
				  
			 <?php 
		}
		//echo $i;
}else{
				echo "Please Add Category Category Notice-Semina-Career => <a href='index.php?sid=category_notice_semina_career&op=insert'> Here</a>";
	}
		 ?>
         </div>
		  <div class="clearfix"></div>
      </div>
    </div>
    <!--postbox-->
	<?php 
		}
	?>




    <!--postbox 2-->
    
    <?php 
		if($sid=="interview"){
	?>
    <!--postbox-->

    <div class="postbox" id="tag">
        <h3 class="hndle">Category Interviews</h3>
        <div class="inside clear">
        <div class="clear">
        <?php 
$where_total .= "and category_interview_Status=0";
$Data = To_Get_Data("category_interview", $where_total." order by category_interview_Date desc");
//$Data_count = To_Get_Data("category_notice_seminar_career", $where_total,"count(*) as `count_num` ","Y");
//echo $Data_count['count_num'];
	if($Data['cnt'] > 0){
		
		for($i=0; $i<$Data['cnt']; $i++)
		{
			//$selected="";
			$List = $Data[$i];
			//print_r($List);
			$seq = $List['category_interview_ID'];
			
			//$Data_Get=To_Get_Data("category_interview", "and `id_category_notice_seminar_career`={$seq}");
			
			$title_content = addslashes($List['category_interview_Name']);
				
			?>
				
					<p>
				    <label>
				      <input type="checkbox" name="category_interview[]" value="<?php echo $seq; ?>" id="checkbox_cmc_<?php echo $seq; ?>"  <?php 
					  if($id_f):
					  	$Data_interview_check=To_Get_Data("interview as A join category_join_interview as B on  A.id_interview=B.id_interview", " and A.id_interview=$id_f");
						if($Data_interview_check['cnt'] > 0){
									for($j=0; $j<$Data_interview_check['cnt']; $j++)
									{
										//$selected="";
										$List_interview_check = $Data_interview_check[$j];
										$seq_check = $List_interview_check['category_interview_ID'];
										if($seq_check==$seq):
											echo "checked='checked'";
										endif;
									}
							}
					  	endif;
					  ?>    />
				      <?php echo $title_content; ?>
                      </label>
				    <br />
				 </p>
				<?php 
		}
		//echo $i;
	}else{
	echo "Please Add Category Interview => <a href='index.php?sid=category_interview&op=insert'> Here</a>";
	}
		 ?>
         </div>
		  <div class="clearfix"></div>
      </div>
    </div>
    <!--postbox-->
	<?php 
		}
	?>



	<!--******************************************-->
	  <!--postbox 2-->
    
    <?php 
		if($sid=="career_up"){
	?>
    <!--postbox-->

    <div class="postbox" id="tag">
        <h3 class="hndle">Category Career Up</h3>
        <div class="inside clear">
        <div class="clear">
        <?php 
$where_total .= "and categgory_career_up_Status=0";
$Data = To_Get_Data("categgory_career_up", $where_total." order by categgory_career_up_Date desc");
//$Data_count = To_Get_Data("category_notice_seminar_career", $where_total,"count(*) as `count_num` ","Y");
//echo $Data_count['count_num'];
	if($Data['cnt'] > 0){
		
		for($i=0; $i<$Data['cnt']; $i++)
		{
			//$selected="";
			$List = $Data[$i];
			//print_r($List);
			$seq = $List['categgory_career_up_ID'];
			
			//$Data_Get=To_Get_Data("category_interview", "and `id_category_notice_seminar_career`={$seq}");
			
			$title_content = addslashes($List['categgory_career_up_Name']);
				
			?>
				
					<p>
				    <label>
				      <input type="checkbox" name="category_career_up[]" value="<?php echo $seq; ?>" id="checkbox_cmc_<?php echo $seq; ?>"  <?php 
					  if($id_f):
					  	$Data_interview_check=To_Get_Data("career_up as A join category_join_career_up as B on  A.id_career_up=B.id_career_up", " and A.id_career_up=$id_f");
						if($Data_interview_check['cnt'] > 0){
									for($j=0; $j<$Data_interview_check['cnt']; $j++)
									{
										//$selected="";
										$List_interview_check = $Data_interview_check[$j];
										$seq_check = $List_interview_check['categgory_career_up_ID'];
										if($seq_check==$seq):
											echo "checked='checked'";
										endif;
									}
							}
					  	endif;
					  ?>    />
				      <?php echo $title_content; ?>
                      </label>
				    <br />
				 </p>
				<?php 
		}
		//echo $i;
	}else{
	echo "Please Add Category Career Up => <a href='index.php?sid=category_career_up&op=insert'> Here</a>";
	}
		 ?>
         </div>
		  <div class="clearfix"></div>
      </div>
    </div>
    <!--postbox-->
	<?php 
		}
	?>

	<!--*****************************************-->
    
    
    
    <!--******************************************-->
	  <!--postbox 2-->
    
    <?php 
		if($sid=="henter_eye"){
	?>
    <!--postbox-->

    <div class="postbox" id="tag">
        <h3 class="hndle">Category Hunter Eye</h3>
        <div class="inside clear">
        <div class="clear">
        <?php 
$where_total .= "and category_hunter_Status=0";
$Data = To_Get_Data("category_hunter", $where_total." order by category_hunter_Date desc");
//$Data_count = To_Get_Data("category_notice_seminar_career", $where_total,"count(*) as `count_num` ","Y");
//echo $Data_count['count_num'];
	if($Data['cnt'] > 0){
		
		for($i=0; $i<$Data['cnt']; $i++)
		{
			//$selected="";
			$List = $Data[$i];
			//print_r($List);
			$seq = $List['category_hunter_ID'];
			
			//$Data_Get=To_Get_Data("category_interview", "and `id_category_notice_seminar_career`={$seq}");
			
			$title_content = addslashes($List['category_hunter_Name']);
				
			?>
				
					<p>
				    <label>
				      <input type="checkbox" name="category_hunter_up[]" value="<?php echo $seq; ?>" id="checkbox_cmc_<?php echo $seq; ?>"  <?php 
					  if($id_f):
					  	$Data_interview_check=To_Get_Data("henter_eye as A join category_join_hunter as B on  A.id_henter_eye=B.id_henter_eye", " and A.id_henter_eye=$id_f");
						if($Data_interview_check['cnt'] > 0){
									for($j=0; $j<$Data_interview_check['cnt']; $j++)
									{
										//$selected="";
										$List_interview_check = $Data_interview_check[$j];
										$seq_check = $List_interview_check['category_hunter_ID'];
										if($seq_check==$seq):
											echo "checked='checked'";
										endif;
									}
							}
					  	endif;
					  ?>    />
				      <?php echo $title_content; ?>
                      </label>
				    <br />
				 </p>
				<?php 
		}
		//echo $i;
	}else{
	echo "Please Add Category Hunter Eye=> <a href='index.php?sid=category_hunter&op=insert'> Here</a>";
	}
		 ?>
         </div>
		  <div class="clearfix"></div>
      </div>
    </div>
    <!--postbox-->
	<?php 
		}
	?>

	<!--*****************************************-->


    <!--postbox 3-->
    
	<?php 
		if($sid=="interview_index" || $sid=="interview" || $sid=="notice_semina_career" ||  $sid=="category_consultant" || $sid=="slide" || $sid=="news" || $sid=="category_consul" || $sid=="consul" || $sid=="career"|| $sid=="career_up" || $sid=="icon_checkbox_hunter" || $sid=="category_hunter" || $sid=="caption_henter_eye" || $sid=="henter_eye" || $sid=="seminar" || $sid=="publicity"){
	?>
    <div class="postbox" id="tag">
        <h3 class="hndle">Thumbnail</h3>
        <div class="inside clear">
        
        <?php 
			if(empty($thumbnail_set)):
		?>
        <!--Begin Thumbnail-->
        	<div class="text_input_file" id="text_input_file">
           <input type="text" name="file1" id="myfile_text1" value="<?php echo $thumbnail; ?>" readonly="readonly" />
             </div>
             <div id="mybutton"><input type="file" id="thumbnail" name="upload1" />Select</div>

			<div class="clear" align="center">
            <?php 
				if(empty($thumbnail)):
				echo "<font color='#FF0000' size='-1'>Choise Image</font>";
				else:
			?>
            <img src="upload_thumnail/<?php echo $thumbnail; ?>" width="150" border="0" />
            <?php 
				endif;
			?>
            </div>
         <!--End Thumbnail-->
            <?php 
				else:
			?>
            
             <!--Begin Thumbnail-->
        	<div class="text_input_file" id="text_input_file">
           <input type="text" name="file1" id="myfile_text1" value="<?php echo $thumbnail_set; ?>" readonly="readonly" />
             </div>
             <div id="mybutton">Select</div>

			<div class="clear" align="center">
				
                <img src="upload_thumnail/<?php echo $thumbnail_set; ?>" width="150" border="0" />
                
            </div>
         <!--End Thumbnail-->
            
            <?php 
				endif;
			?>
            
        </div>
    </div>
    <!--postbox-->
	<?php 
		}
	?>
	
   <!--***********************************************************************--> 
    
    <?php 
		if($sid=="henter_eye"){
	?>
    <div class="postbox" id="tag">
        <h3 class="hndle">Main Image</h3>
        <div class="inside clear">
        
        <?php 
			if(empty($thumbnail_set_all)):
		?>
        <!--Begin Thumbnail-->
        	<div class="text_input_file" id="text_input_file">
           <input type="text" name="file_all" id="myfile_text_all" value="<?php echo $thumbnail_all; ?>" readonly="readonly" />
             </div>
             <div id="mybutton"><input type="file" id="thumbnail_all" name="upload_all" />Select</div>

			<div class="clear" align="center">
            <?php 
				if(empty($thumbnail_all)):
				echo "<font color='#FF0000' size='-1'>Choise Image</font>";
				else:
			?>
            <img src="upload_thumnail/<?php echo $thumbnail_all; ?>" width="150" border="0" />
            <?php 
				endif;
			?>
            </div>
         <!--End Thumbnail-->
            <?php 
				else:
			?>
            
             <!--Begin Thumbnail-->
        	<div class="text_input_file" id="text_input_file">
           <input type="text" name="file_all" id="myfile_text_all" value="<?php echo $thumbnail_set_all; ?>" readonly="readonly" />
             </div>
             <div id="mybutton">Select</div>

			<div class="clear" align="center">
				
                <img src="upload_thumnail/<?php echo $thumbnail_set_all; ?>" width="150" border="0" />
                
            </div>
         <!--End Thumbnail-->
            
            <?php 
				endif;
			?>
            
        </div>
    </div>
    <!--postbox-->
	<?php 
		}
	?>
    
    <!--*************************************************************-->
    
    
      <!--postbox 2-->
	<?php 
		if($sid=="interview"){
	?>
    <!--Logo Image-->
    <div class="postbox" id="tag">
        <h3 class="hndle">Logo Company</h3>
        <div class="inside clear">
        
        	<div class="text_input_file" id="text_input_file">
            
             <input type="text" name="file2" id="myfile_text2" value="<?php echo $thumbnail1; ?>" readonly="readonly" />
             </div>
             <div id="mybutton"><input type="file" id="thumbnail1" name="upload2" />Select</div>

			<div class="clear" align="center">
            	 <?php 
				if(empty($thumbnail1)):
				echo "<font color='#FF0000' size='-1'>Choise Logo</font>";
				else:
				?>
            	<img src="upload_thumnail/<?php echo $thumbnail1; ?>" width="150" border="0" />
                <?php 
					endif;
				?>
            </div>
        </div>
    </div>
    <!--Main Thumb-->
    <div class="postbox" id="tag">
        <h3 class="hndle">Main Image</h3>
        <div class="inside clear">
        
        	<div class="text_input_file" id="text_input_file">
            
             <input type="text" name="file3" id="myfile_text3" value="<?php echo $thumbnail2; ?>" readonly="readonly" />
             </div>
             <div id="mybutton"><input type="file" id="thumbnail2" name="upload3" />Select</div>

			<div class="clear" align="center">
            	 <?php 
				if(empty($thumbnail1)):
				echo "<font color='#FF0000' size='-1'>Choise Image</font>";
				else:
				?>
            	<img src="upload_thumnail/<?php echo $thumbnail2; ?>" width="150" border="0" />
                <?php 
					endif;
				?>
            </div>
        </div>
    </div>
    <!--postbox-->
	<?php 
		}
	?>
    
   
   
   <div class="postbox" id="tag">
        <h3 class="hndle">Thumnail_Consultant</h3>
        <div class="inside clear">
        	<?php include('media/media_include.php'); ?>
        </div>
   </div>
    
    
    
    
    

</div>
<!--#content_right_bar-->
<script type="text/javascript">
$(document).ready(function() {
	$(window).load(function() {
	$('#thumbnail').change(function(evt) {
       // alert($(this).val());
		$("#myfile_text1").val($(this).val());
		$("#myfile_text1").attr("value",$(this).val());
		
		
    });
	
	$('#thumbnail1').change(function(evt) {
       // alert($(this).val());
		$("#myfile_text2").val($(this).val());
		$("#myfile_text2").attr("value",$(this).val());
		
		
    });
	$('#thumbnail2').change(function(evt) {
       // alert($(this).val());
		$("#myfile_text3").val($(this).val());
		$("#myfile_text3").attr("value",$(this).val());
		
		
    });
	$('#thumbnail_all').change(function(evt) {
       // alert($(this).val());
		$("#myfile_text_all").val($(this).val());
		$("#myfile_text_all").attr("value",$(this).val());
		
		
    });
	
	$('#bcontent').closest('form').submit(CKupdate);
	$('#excerpt').closest('form').submit(CKupdate);
	$('#content_con_1').closest('form').submit(CKupdate);
	$('#content_con_2').closest('form').submit(CKupdate);
	$('#content_con_3').closest('form').submit(CKupdate);
	$('#content_career_up').closest('form').submit(CKupdate);
	$('#excerpt_career_up').closest('form').submit(CKupdate);
	$('#consultant_Content').closest('form').submit(CKupdate);
	$('#consultant_Info').closest('form').submit(CKupdate);
	$('#consultant_Other').closest('form').submit(CKupdate);
	$('#category_consul_description').closest('form').submit(CKupdate);
	$('#GCDF_content').closest('form').submit(CKupdate);
	$('#about_company').closest('form').submit(CKupdate);
	$('#description_hunter').closest('form').submit(CKupdate);
	
	$('#strategy').closest('form').submit(CKupdate);
	$('#point1').closest('form').submit(CKupdate);
	$('#point11').closest('form').submit(CKupdate);
	$('#person').closest('form').submit(CKupdate);
	


        function CKupdate() {
            for (instance in CKEDITOR.instances)
                CKEDITOR.instances[instance].updateElement();
            return true;
        }
	

	var options = { 
    beforeSend: function() 
    {
    	$("#progress").show();
    	//clear everything
    	$("#bar").width('');
    	$("#message").html('');
		$("#percent").html('');
		$(".load_ajax").show();
    },
    uploadProgress: function(event, position, total, percentComplete) 
    {
    	$("#bar").width('');
    	$("#percent").html('');

    },
    success: function() 
    {
        $("#bar").width('100%');
    	$("#percent").html('<div class="success">Insert Complete</div>');
		$(".load_ajax").hide();


    },
	complete: function(response) 
	{
		$("#message").html("<div class='success'>"+response.responseText+"</div>");
	},
	error: function()
	{
		$("#message").html("<div class='error'> ERROR: unable to upload files</div>");

	}

}; 

     //$("#board").ajaxForm(options);
	 	   
		$("#board").ajaxForm(options);
	});

});
</script>