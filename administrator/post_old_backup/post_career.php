<?php 
	@include('Lib/_init.php');
	@include('../Lib/_init.php');
	@include('../../Lib/_init.php');
	@include('../../../Lib/_init.php');
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
			$List = Get_Data("career", " and status_career=0 and (date_career_fist!='' or date_career_end!='' 
and thumbnail_career!='' or date_career_to1!='' or date_career_to2!='' or date_career_to3!='' or date_career_to4!='')
order by careerID DESC limit 1","date_career_to1,date_career_to2,date_career_to3,date_career_to4,date_career_fist,date_career_end,thumbnail_career");
			$date_set_fist_set=$List['date_career_fist'];
			$date_set_end_set=$List['date_career_end'];
			
			$date_set_to_1=$List['date_career_to1'];
			$date_set_to_2=$List['date_career_to2'];
			$date_set_to_3=$List['date_career_to3'];
			$date_set_to_4=$List['date_career_to4'];
			
			$thumbnail_set=$List['thumbnail_career'];
			$css_display1="style='display:block'";
			$css_display2="style='display:none'";
			if($date_set_to_1!="" || $date_set_to_2!="" || $date_set_to_3!="" || $date_set_to_4!="" ):
				$css_display1="style='display:none'";
				$css_display2="style='display:block'";
			endif;
			//$mode = "insert"; style="display:none"
		}
		else
		{
			$List = Get_Data("career", "and careerID = $id_f");
			$op_vis_str = ($List['status_career'] == "0") ? "Public" : "Draft";
			$op_vis = $List['status_career'];
			$title = $List['title_career'];
			$category_name = $List['category_name'];
			$date_1=$List['date_career_fist'];
			$date_2=$List['date_career_end'];
			$date_3=$List['date_career_to1'];
			$date_4=$List['date_career_to2'];
			$date_5=$List['date_career_to3'];
			$date_6=$List['date_career_to4'];
			
			$css_display1="style='display:block'";
			$css_display2="style='display:none'";
			if($date_3!="" || $date_4!="" || $date_5!="" || $date_6!="" ):
				$css_display1="style='display:none'";
				$css_display2="style='display:block'";
			endif;
			
			$news_content = htmlspecialchars_decode($List['content_career']);

			$thumbnail=$List['thumbnail_career'];
			

			
			list($op_front, $op_bottom) = explode(" ", $List['date_up_career']);
			list($op_date_year, $op_date_month, $op_date_day) = explode("-", $op_front);
			list($op_date_hour,$op_date_minute,) = explode(":", $op_bottom);
		}

?>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
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
                <p class="title_txt">Date 1</p>
                <?php 
					if(!empty($date_set_fist_set)):
				?>
              <input id="post_title" type="text"  name="date_1" value="<?php echo $date_set_fist_set;?>" readonly style="background:#FFECEA;" />
                <?php 
					else:
					?>
                    <input id="datepicker1" type="text"  name="date_1" value="<?php echo $date_1;?>"  />
                    <?php 
					endif;
				?>
                </div>
                <div class="clear">
                <p class="title_txt">Date 2</p>
                
                <?php 
					if(!empty($date_set_end_set)):
				?>
                <input id="post_title" type="text"  name="date_2" value="<?php echo $date_set_end_set;?>" readonly style="background:#FFECEA;" />
                <?php 
					else:
					?>
                    <input id="datepicker2" type="text"  name="date_2" value="<?php echo $date_2;?>" />
                    <?php 
					endif;
				?>
                </div>
               
                <div class="clear to_show_date" <?php echo $css_display1; ?>>Add To Date</div>
                <div class="clear group_date_fix" <?php echo $css_display2; ?>>
                            <div class="clear">
                            <p class="title_txt">Date 3</p>
                            <?php 
                                if(!empty($date_set_to_1)):
                            ?>
                          <input id="post_title" type="text"  name="date_3" value="<?php echo $date_set_to_1;?>" readonly style="background:#FFECEA;" />
                            <?php 
                                else:
                                ?>
                                <input id="datepicker3" type="text"  name="date_3" value="<?php echo $date_3;?>" class="post_title"/>
                                <?php 
                                endif;
                            ?>
                            </div>
                            <div class="clear">
                            <p class="title_txt">Date 4</p>
                            
                            <?php 
                                if(!empty($date_set_to_2)):
                            ?>
                            <input id="post_title" type="text"  name="date_4" value="<?php echo $date_set_to_2;?>" readonly style="background:#FFECEA;" />
                            <?php 
                                else:
                                ?>
                                <input id="datepicker4" type="text"  name="date_4" value="<?php echo $date_4;?>" class="post_title"/>
                                <?php 
                                endif;
                            ?>
                            </div>
                            <div class="clear">
                            <p class="title_txt">Date 5</p>
                            <?php 
                                if(!empty($date_set_to_3)):
                            ?>
                          <input id="post_title" type="text"  name="date_5" value="<?php echo $date_set_to_3;?>" readonly style="background:#FFECEA;" />
                            <?php 
                                else:
                                ?>
                                <input id="datepicker5" type="text"  name="date_5" value="<?php echo $date_5;?>" class="post_title"/>
                                <?php 
                                endif;
                            ?>
                            </div>
                            <div class="clear">
                            <p class="title_txt">Date 6</p>
                            
                            <?php 
                                if(!empty($date_set_to_4)):
                            ?>
                            <input id="post_title" type="text"  name="date_6" value="<?php echo $date_set_to_4;?>" readonly style="background:#FFECEA;" />
                            <?php 
                                else:
                                ?>
                                <input id="datepicker6" type="text"  name="date_6" value="<?php echo $date_6;?>" class="post_title"/>
                                <?php 
                                endif;
                            ?>
                            </div>
                
                </div>
            	
				<div class="clear">
                <p class="title_txt">Title</p>
                <input id="post_title" type="text" name="title_news" value="<?php echo $title;?>" />
                </div>
                
                <div class="clear">
                <p class="title_txt">Category Name</p>
                <input id="post_title" type="text" name="category_name" value="<?php echo $category_name;?>" />
                </div> 
                
             <div class="clear">
                   <p class="title_txt">Content</p>
                   <div id="post_container" class="clearfix">
                        <div id="post_tabs" class="clearfix post_edit_block">
                            <div class="tab_container">
                                <div class="editor-container" id="content-editor-container">
                                    
                                    <!-- 내용 -->
                                    <textarea id="bcontent" name="bcontent" cols="40" style="height: 295px;"><?php echo $news_content;?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
               </div> 
               
               
		   <div class="clear">
           		 <p class="title_txt">Consultant Category</p>
                <?php 
				if($sid=="career"){
				?>
			<!--postbox-->
			<div class="clear" style="margin-top:5px;"></div>
			<div class="postbox" id="tag">
				
				<div class="inside clear">
				<div class="clear">
				<?php 
		$where_total .= "and consultant_Status=0";
		$Data = To_Get_Data("consultant", $where_total." order by consultant_Date desc");
		//$Data_count = To_Get_Data("category_notice_seminar_career", $where_total,"count(*) as `count_num` ","Y");
		//echo $Data_count['count_num'];
			if($Data['cnt'] > 0){
				
				for($i=0; $i<$Data['cnt']; $i++)
				{
					//$selected="";
					$List = $Data[$i];
					//print_r($List);
					$seq = $List['consultant_ID'];
					
					//$Data_Get=To_Get_Data("category_interview", "and `id_category_notice_seminar_career`={$seq}");
					
					$title_content = addslashes($List['consultant_Name']);
						
					?>
						
							<div class="check_category_consutant">
							<label>
							  <input type="checkbox" name="category_consultant[]" value="<?php echo $seq; ?>" id="checkbox_cmc_<?php echo $seq; ?>"  <?php 
							  if($id_f):
								$Data_interview_check=To_Get_Data("career as A join career_consultant as B on  A.careerID=B.careerID", " and A.careerID=$id_f");
								if($Data_interview_check['cnt'] > 0){
											for($j=0; $j<$Data_interview_check['cnt']; $j++)
											{
												//$selected="";
												$List_interview_check = $Data_interview_check[$j];
												$seq_check = $List_interview_check['consultant_ID'];
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
						 </div>
						<?php 
				}
				//echo $i;
			}else{
			echo "Please Add Category Consultant => <a href='index.php?sid=consultant&op=insert'> Here</a>";
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
		//CKEDITOR.replace('bcontent', {width:'100%', height:'300'});
		CKEDITOR.replace('bcontent',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'300'
                 }
		);
		CKEDITOR.instances['bcontent'];
		
		 $("#datepicker1").datepicker();
		 $("#datepicker2").datepicker();
		  $("#datepicker3").datepicker();
		   $("#datepicker4").datepicker();
		    $("#datepicker5").datepicker();
			 $("#datepicker6").datepicker();
			 
			$( ".to_show_date" ).click(function() {
					$(".group_date_fix").show(1000);
					$(".to_show_date").hide(1000);
				});
		});
	
</script>