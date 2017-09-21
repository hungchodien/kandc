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

    <div class="postbox category_career_up_l" id="tag">
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

    <div class="postbox category_henter_eye_l" id="tag">
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
	<!--******************************************-->
	  <!--postbox 2-->
    
    <?php 
		if($sid=="mailmagazine"){
	?>
    <!--postbox-->

    <div class="postbox" id="tag">
        <h3 class="hndle">Category MailMagazine</h3>
        <div class="inside clear">
        <div class="clear">
        <?php 
$where_total .= "and category_mailmagazine_Status=0";
$Data = To_Get_Data("category_mailmagazine", $where_total." order by category_mailmagazine_Date desc");
//$Data_count = To_Get_Data("category_notice_seminar_career", $where_total,"count(*) as `count_num` ","Y");
//echo $Data_count['count_num'];
	if($Data['cnt'] > 0){
		
		for($i=0; $i<$Data['cnt']; $i++)
		{
			//$selected="";
			$List = $Data[$i];
			//print_r($List);
			$seq = $List['category_mailmagazine_ID'];
			
			//$Data_Get=To_Get_Data("category_interview", "and `id_category_notice_seminar_career`={$seq}");
			
			$title_content = addslashes($List['category_mailmagazine_Name']);
			$title_content_slug = addslashes($List['category_mailmagazine_Slug']);
				
			?>
				
					<p style="padding:3px; border-bottom:1px #F2F2F2 solid;">
				   
				      <input type="radio" name="category_mailmagazine" value="<?php echo $seq; ?>" id="checkbox_cmc_<?php echo $seq; ?>"  <?php 
					  if($id_f):
					  				if($category_id==$seq):
											echo "checked='checked'";
										endif;
									
							
					  	endif;
					  ?>    style="margin:0; vertical-align:middle;"/>
				      <?php echo $title_content; ?>
                      
				    
				 </p>
				<?php 
		}
		//echo $i;
	}else{
	echo "Please Add Category MailMagazine=> <a href='index.php?sid=category_mailmagazine&op=insert'> Here</a>";
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
		if($sid=="report"){
	?>
    <!--postbox-->

    <div class="postbox" id="tag">
        <h3 class="hndle">Category Report</h3>
        <div class="inside clear">
        <div class="clear">
        <?php 
$where_total .= "and category_report_status=0";
$Data = To_Get_Data("category_report", $where_total." order by category_report_date desc");
//$Data_count = To_Get_Data("category_notice_seminar_career", $where_total,"count(*) as `count_num` ","Y");
//echo $Data_count['count_num'];
	if($Data['cnt'] > 0){
		
		for($i=0; $i<$Data['cnt']; $i++)
		{
			//$selected="";
			$List = $Data[$i];
			//print_r($List);
			$seq = $List['category_report_id'];
			
			//$Data_Get=To_Get_Data("category_interview", "and `id_category_notice_seminar_career`={$seq}");
			
			$title_content = addslashes($List['category_report_title']);
				
			?>
				
					<p>
				    <label>
				      <input type="checkbox" name="category_report[]" value="<?php echo $seq; ?>" id="checkbox_cmc_<?php echo $seq; ?>"  <?php 
					  if($id_f):
					  	$Data_interview_check=To_Get_Data("report as A join category_join_report as B on  A.report_id=B.report_id", " and A.report_id=$id_f");
						if($Data_interview_check['cnt'] > 0){
									for($j=0; $j<$Data_interview_check['cnt']; $j++)
									{
										//$selected="";
										$List_interview_check = $Data_interview_check[$j];
										$seq_check = $List_interview_check['category_report_id'];
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
	echo "Please Add Category Report=> <a href='index.php?sid=category_report&op=insert'> Here</a>";
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
	  <!--postbox 5-->
    
    <?php 
		if($sid=="kc_consul_interview"){
	?>
    <!--postbox-->

    <div class="postbox clear" id="tag">
        <h3 class="hndle">Category Interviews</h3>
        <div class="inside clear">
        <div class="clear kc_category_interview_box">
        <?php 
	$where_total .= "and kc_category_interview_status=0";
	$Data = To_Get_Data("kc_category_interview", $where_total." order by kc_category_interview_date desc","kc_category_interview_id,kc_category_interview_name_ja,kc_category_interview_name_en");
	//$Data_count = To_Get_Data("category_notice_seminar_career", $where_total,"count(*) as `count_num` ","Y");
	//echo $Data_count['count_num'];
	if($Data['cnt'] > 0){
		
		for($p=0; $p<$Data['cnt']; $p++)
		{
			$List = $Data[$p];
			$seq = (int)$List['kc_category_interview_id'];
			$title_content = addslashes($List['kc_category_interview_name_ja']);
			$title_content_en = addslashes($List['kc_category_interview_name_en']);
			
			?>
				<p>
				    <label class="kc_consul_label">
				      <input class="checkbox_kc_<?php echo $seq; ?> " tdr="<?php echo $title_content_en;?>" type="checkbox" name="category_kc_interview[]" value="<?php echo $seq; ?>" id="checkbox_cmc_<?php echo $seq; ?>"  <?php 
					  if($id_f):
					  	$Data_interview_kc_check=To_Get_Data("`category_join_kc_interview`", " and `kc_interview_id`=$id_f and `kc_category_interview_id`=$seq");
						if($Data_interview_kc_check['cnt'] > 0)
						{
							echo "checked='checked'";
						}
					  	endif;
					  ?>    />
				      <?php echo $title_content; ?>
                      </label>
				 </p>
				<?php 
		}
		//echo $i;
	}else{
	echo "Please Add Category Report=> <a href='index.php?sid=kc_category_interview&op=insert'> Here</a>";
	}
		 ?>
         </div>
		  <div class="clearfix"></div>
      </div>
    </div>
    <!--postbox-->
    
    
    <div class="postbox main_img_right_kc" id="tag">
        <h3 class="hndle">Main Image</h3>
         <!--begin alt images-->
         <div class="inside  clear">
         <h5>Title Thumbnail:</h5>
         <p><input id="post_title" class="main_thumbnail_alt" type="text" name="main_thumbnail_alt" value="<?php echo $main_thumbnail_alt;?>" /></p>
         </div>
         <!--end-->
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
            	<img class="img_show" src="upload_thumnail/<?php echo $thumbnail2; ?>" width="150" border="0" />
                <?php 
					endif;
				?>
            </div>
        </div>
    </div>
    
    
    <div class="postbox kc_thumnail_right" id="tag">
        <h3 class="hndle">Thumbnail</h3>
        <!--begin alt images-->
         <div class="inside  clear">
         <h5>Title Thumbnail:</h5>
         <p><input id="post_title" class="thumbnail_alt" type="text" name="thumbnail_alt" value="<?php echo $thumbnail_alt;?>" /></p>
         </div>
         <!--end-->
        <div class="inside clear">
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
            <img class="img_show" src="upload_thumnail/<?php echo $thumbnail; ?>" width="150" border="0" />
            <?php 
				endif;
			?>
            </div>
         <!--End Thumbnail-->
           
            
        </div>
    </div>
    <!--postbox-->
    
    
    
    <div class="postbox kc_backnumber_right" id="tag">
        <h3 class="hndle"> Backnumber image</h3>
         <!--begin alt images-->
         <div class="inside clear">
         <h5>Title Thumbnail:</h5>
         <p><input id="post_title" class="backnumber_alt" type="text" name="logo_thumbnail_alt" value="<?php echo $backnumber_thumbnail_alt;?>" /></p>
         </div>
         <!--end-->
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
    
	<?php 
		}
	?>

	<!--*****************************************-->







    <!--postbox 3-->
    
	<?php 
		if($sid=="interview_index" || $sid=="interview" || $sid=="notice_semina_career" ||  $sid=="category_consultant" || $sid=="slide" || $sid=="news" || $sid=="category_consul" || $sid=="consul" || $sid=="career" || $sid=="icon_checkbox_hunter" || $sid=="category_hunter" || $sid=="caption_henter_eye" || $sid=="seminar" || $sid=="publicity"|| $sid=="notice_seminar_career" || $sid=="read" || $sid=="kc_consul_feature_company" || $sid=="category_mailmagazine" || $sid=="mailmagazine" || $sid=="interview_company" || $sid=="career_column" || $sid=="category_report" || $sid=="report"){
	?>
    <div class="postbox" id="tag">
        <h3 class="hndle">Thumbnail</h3>
        <!--begin alt images-->
         <div class="inside clear">
         <h5>Title Thumbnail:</h5>
         <p><input id="post_title" type="text" name="thumbnail_alt" value="<?php echo $thumbnail_alt;?>" /></p>
         </div>
         <!--end-->
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
    
    <?php /*?><?php 
		if($sid=="henter_eye"){
	?>
    <div class="postbox" id="tag">
        <h3 class="hndle">Main Image</h3>
        <!--begin alt images-->
         <div class="inside clear">
         <h5>Title Thumbnail:</h5>
         <p><input id="post_title" type="text" name="main_thumbnail_alt" value="<?php echo $main_thumbnail_alt;?>" /></p>
         </div>
         <!--end-->
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
	?><?php */?>
    
    <!--*************************************************************-->
    
    
      <!--postbox 2-->
	<?php 
		if($sid=="interview"){
	?>
    <!--Logo Image-->
    <div class="postbox" id="tag">
        <h3 class="hndle">Logo Company</h3>
         <!--begin alt images-->
         <div class="inside clear">
         <h5>Title Thumbnail:</h5>
         <p><input id="post_title" type="text" name="logo_thumbnail_alt" value="<?php echo $logo_thumbnail_alt;?>" /></p>
         </div>
         <!--end-->
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
         <!--begin alt images-->
         <div class="inside clear">
         <h5>Title Thumbnail:</h5>
         <p><input id="post_title" type="text" name="main_thumbnail_alt" value="<?php echo $main_thumbnail_alt;?>" /></p>
         </div>
         <!--end-->
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
    
   
   <?php if($sid=="interview" || $sid=="career_up" || $sid=="henter_eye" || $sid=="voice"): ?>
   <div class="postbox" id="tag">
        <h3 class="hndle">Thumbnail Consultant</h3>
         <!--begin alt images-->
         <div class="inside clear">
         <h5>Title Thumbnail:</h5>
         <p><input id="post_title" type="text" name="consultant_thumbnail_alt" value="<?php echo $consultant_thumbnail_alt;?>" /></p>
         </div>
         <!--end-->
        <div class="inside clear">
        	<?php include('media/media_include.php'); ?>
        </div>
   </div>
   <?php 
   		endif;
   ?>
     <?php if($sid=="career_up" || $sid=="henter_eye" || $sid=="feature_jobs" || $sid=="interview_company"): ?>
    <div class="postbox" id="tag">
        <h3 class="hndle">Thumbnail Index</h3>
         <!--begin alt images-->
         <div class="inside clear">
         <h5>Title Thumbnail:</h5>
         <p><input id="post_title" type="text" name="index_thumbnail_alt" value="<?php echo $index_thumbnail_alt;?>" /></p>
         </div>
         <!--end-->
        <div class="inside clear">
        	<?php include('media/media_include1.php'); ?>
        </div>
   </div>
    <?php endif; ?>
    
     <?php if($sid=="category_consultant"): ?>
   <div class="postbox" id="tag">
        <h3 class="hndle">Og:image<br />(set Career up)</h3>
        <div class="inside clear">
        	<?php include('media/media_include.php'); ?>
        </div>
   </div>
   <?php 
   		endif;
   ?>
    
	 <!--Begin turnning point-->
    <?php 
		if($sid=="turnning_point_interview"):
	?>
    
    <!--item-->
     <div class="postbox" id="tag">
	        <h3 class="hndle">Main Image</h3>
	         <!--begin alt images-->
	         <div class="inside clear">
	         <h5>Title Thumbnail:</h5>
	         <p><input id="post_title" type="text" class="tn_img_alt1" name="tn_img_alt1" value="<?php echo $tn_img_alt1;?>" /></p>
	         </div>
	         <!--end-->
	        <div class="inside clear">
	        	<div class="text_input_file" id="text_input_file">
	            	<input type="text" name="tn_file1" id="tn_file_txt1" value="<?php echo $tn_file_txt1; ?>" readonly="readonly" />
	             </div>
	             <div id="mybutton"><input type="file" id="tn_thumbnail1" name="tn_upload1" />Select</div>
				 <div class="clear" align="center">
	            	 <?php 
					if(empty($tn_file_txt1)):
					  echo "<div id='img_src_none_set1' class='img_src_none_set'></div>";
					else:
					?>
	            	<img id="tn_img_left_show1" src="upload_thumnail/<?php echo $tn_file_txt1; ?>" width="150" border="0" />
	                <?php 
						endif;
					?>
	            </div>
	        </div>
    	</div>
     <!--end item-->
     
     <!--Item (Mobile fields)-->
     <div class="postbox" id="tag">
	        <h3 class="hndle">Main Image (Mobile)</h3>
	         <!--begin alt images-->
	         <div class="inside clear">
	         <h5>Title Thumbnail (Mobile):</h5>
	         <p><input id="post_title" type="text" class="tn_img_alt7" name="tn_img_alt7" value="<?php echo $tn_img_alt7;?>" /></p>
	         </div>
	         <!--end-->
	        <div class="inside clear">
	        	<div class="text_input_file" id="text_input_file">
	            	<input type="text" name="tn_file7" id="tn_file_txt7" value="<?php echo $tn_file_txt7; ?>" readonly="readonly" />
	             </div>
	             <div id="mybutton"><input type="file" id="tn_thumbnail7" name="tn_upload7" />Select</div>
				 <div class="clear" align="center">
	            	 <?php 
					if(empty($tn_file_txt7)):
					  echo "<div id='img_src_none_set7' class='img_src_none_set'></div>";
					else:
					?>
	            	<img id="tn_img_left_show7" src="upload_thumnail/<?php echo $tn_file_txt7; ?>" width="150" border="0" />
	                <?php 
						endif;
					?>
	            </div>
	        </div>
    	</div>
     <!--end item-->
     
     <!--item-->
     <div class="postbox" id="tag">
	        <h3 class="hndle">Index Image</h3>
	         <!--begin alt images-->
	         <div class="inside clear">
	         <h5>Title Thumbnail:</h5>
	         <p><input id="post_title" type="text" class="tn_img_alt2" name="tn_img_alt2" value="<?php echo $tn_img_alt2;?>" /></p>
	         </div>
	         <!--end-->
	        <div class="inside clear">
	        	<div class="text_input_file" id="text_input_file">
	            	<input type="text" name="tn_file2" id="tn_file_txt2" value="<?php echo $tn_file_txt2; ?>" readonly="readonly" />
	             </div>
	             <div id="mybutton"><input type="file" id="tn_thumbnail2" name="tn_upload2" />Select</div>
				 <div class="clear" align="center">
	            	 <?php 
					if(empty($tn_file_txt2)):
						echo "<div id='img_src_none_set2' class='img_src_none_set'></div>";
					else:
					?>
	            	<img id="tn_img_left_show2" src="upload_thumnail/<?php echo $tn_file_txt2; ?>" width="150" border="0" />
	                <?php 
						endif;
					?>
	            </div>
	        </div>
    	</div>
     <!--end item-->
     
      <!--item-->
     <div class="postbox" id="tag">
	        <h3 class="hndle">Index title Image</h3>
	         <!--begin alt images-->
	         <div class="inside clear">
	         <h5>Title Thumbnail:</h5>
	         <p><input id="post_title" type="text" class="tn_img_alt3" name="tn_img_alt3" value="<?php echo $tn_img_alt3;?>" /></p>
	         </div>
	         <!--end-->
	        <div class="inside clear">
	        	<div class="text_input_file" id="text_input_file">
	            	<input type="text" name="tn_file3" id="tn_file_txt3" value="<?php echo $tn_file_txt3; ?>" readonly="readonly" />
	             </div>
	             <div id="mybutton"><input type="file" id="tn_thumbnail3" name="tn_upload3" />Select</div>
				 <div class="clear" align="center">
	            	 <?php 
					if(empty($tn_file_txt3)):
						echo "<div id='img_src_none_set3' class='img_src_none_set'></div>";
					else:
					?>
	            	<img id="tn_img_left_show3" src="upload_thumnail/<?php echo $tn_file_txt3; ?>" width="150" border="0" />
	                <?php 
						endif;
					?>
	            </div>
	        </div>
    	</div>
     <!--end item-->
     
      <!--item-->
     <div class="postbox" id="tag">
	        <h3 class="hndle">Index Name Image</h3>
	         <!--begin alt images-->
	         <div class="inside clear">
	         <h5>Title Thumbnail:</h5>
	         <p><input id="post_title" type="text" class="tn_img_alt4" name="tn_img_alt4" value="<?php echo $tn_img_alt4;?>" /></p>
	         </div>
	         <!--end-->
	        <div class="inside clear">
	        	<div class="text_input_file" id="text_input_file">
	            	<input type="text" name="tn_file4" id="tn_file_txt4" value="<?php echo $tn_file_txt4; ?>" readonly="readonly" />
	             </div>
	             <div id="mybutton"><input type="file" id="tn_thumbnail4" name="tn_upload4" />Select</div>
				 <div class="clear" align="center">
	            	 <?php 
					if(empty($tn_file_txt4)):
						echo "<div id='img_src_none_set4' class='img_src_none_set'></div>";
					else:
					?>
	            	<img id="tn_img_left_show4" src="upload_thumnail/<?php echo $tn_file_txt4; ?>" width="150" border="0" />
	                <?php 
						endif;
					?>
	            </div>
	        </div>
    	</div>
     <!--end item-->
     
      <!--item-->
     <div class="postbox" id="tag">
	        <h3 class="hndle">Thumbnail</h3>
	         <!--begin alt images-->
	         <div class="inside clear">
	         <h5>Title Thumbnail:</h5>
	         <p><input id="post_title" type="text" class="tn_img_alt5" name="tn_img_alt5" value="<?php echo $tn_img_alt5;?>" /></p>
	         </div>
	         <!--end-->
	        <div class="inside clear">
	        	<div class="text_input_file" id="text_input_file">
	            	<input type="text" name="tn_file5" id="tn_file_txt5" value="<?php echo $tn_file_txt5; ?>" readonly="readonly" />
	             </div>
	             <div id="mybutton"><input type="file" id="tn_thumbnail5" name="tn_upload5" />Select</div>
				 <div class="clear" align="center">
	            	 <?php 
					if(empty($tn_file_txt5)):
						echo "<div id='img_src_none_set5' class='img_src_none_set'></div>";
					else:
					?>
	            	<img id="tn_img_left_show5" src="upload_thumnail/<?php echo $tn_file_txt5; ?>" width="150" border="0" />
	                <?php 
						endif;
					?>
	            </div>
	        </div>
    	</div>
     <!--end item-->
     
      <!--item-->
     <div class="postbox" id="tag">
	        <h3 class="hndle">Backnumber title image</h3>
	         <!--begin alt images-->
	         <div class="inside clear">
	         <h5>Title Thumbnail:</h5>
	         <p><input id="post_title" type="text" class="tn_img_alt6" name="tn_img_alt6" value="<?php echo $tn_img_alt6;?>" /></p>
	         </div>
	         <!--end-->
	        <div class="inside clear">
	        	<div class="text_input_file" id="text_input_file">
	            	<input type="text" name="tn_file6" id="tn_file_txt6" value="<?php echo $tn_file_txt6; ?>" readonly="readonly" />
	             </div>
	             <div id="mybutton"><input type="file" id="tn_thumbnail6" name="tn_upload6" />Select</div>
				 <div class="clear" align="center">
	            	 <?php 
					if(empty($tn_file_txt6)):
						echo "<div id='img_src_none_set6' class='img_src_none_set'></div>";
					else:
					?>
	            	<img id="tn_img_left_show6" src="upload_thumnail/<?php echo $tn_file_txt6; ?>" width="150" border="0" />
	                <?php 
						endif;
					?>
	            </div>
	        </div>
    	</div>
     <!--end item-->
     
    <?php 
		endif;
	?>
    <!--End turnnig point-->
    



</div>
<!--#content_right_bar-->
<script type="text/javascript">
$(document).ready(function() {
	$(window).load(function() {


	for(i=1;i<8;i++)
	{
		$('#tn_thumbnail'+i).change(function(evt) {
	      
		   $(this).parent().parent().find('#text_input_file input').val($(this).val());
		   $(this).parent().parent().find('#text_input_file input').attr("value",$(this).val());
			//$("#tn_file_txt"+i).val($(this).val());
			//$("#tn_file_txt"+i).attr("value",$(this).val());
		});
	}	

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
	

	$('#seo_og_title').closest('form').submit(CKupdate);
	$('#seo_og_description').closest('form').submit(CKupdate);


	$('#content_1').closest('form').submit(CKupdate);
	$('#content_2').closest('form').submit(CKupdate);
	$('#content_3').closest('form').submit(CKupdate);
	$('#content_4').closest('form').submit(CKupdate);
	$('#content_5').closest('form').submit(CKupdate);
	

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

	$('#consultant_short_excerpt').closest('form').submit(CKupdate);

	$('#about_company').closest('form').submit(CKupdate);
	$('#description_hunter').closest('form').submit(CKupdate);
	
	$('#company_interviews_content').closest('form').submit(CKupdate);
	$('#company_interviews_description').closest('form').submit(CKupdate);
	
	$('#strategy').closest('form').submit(CKupdate);
	$('#point1').closest('form').submit(CKupdate);
	$('#point11').closest('form').submit(CKupdate);
	$('#person').closest('form').submit(CKupdate);
	
	

	$('#seo_keyword').closest('form').submit(CKupdate);
	$('#seo_description').closest('form').submit(CKupdate);

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