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
			$List = Get_Data("publicity", "and publicityID = $id_f");
			$op_vis_str = ($List['op_vis'] == "0") ? "Public" : "Draft";
			$op_vis = $List['publicityStatus'];
			$title = $List['publicityTitle'];
			$subTitle=$List['publicitySubTitle'];
			$excerpt_seminar  = htmlspecialchars_decode($List['publicityDescription']);
			$content_seminar  = htmlspecialchars_decode($List['publicityContent']);
			$thumbnail_alt=$List['publicityThumbnail_alt'];
			$thumbnail=$List['publicityThumbnail'];
			
			$consultantID = $List['consultantID']; 
			

			
			list($op_front, $op_bottom) = explode(" ", $List['publicity_Date']);
			list($op_date_year, $op_date_month, $op_date_day) = explode("-", $op_front);
			list($op_date_hour,$op_date_minute,) = explode(":", $op_bottom);
		}
?>
<script type="text/javascript">
		$(document).ready(function() {
				$('.listbox_cm').change(function(){
				   	$('p#loadding').show();
						//$('#load_option').hide( "slow", function() {
    					//alert( "Animation complete." );
  						//});
					 	$.post("ajax/load_category_consultant.php",{
						  typeID: $('.listbox_cm').val()
					   }, function(response){
						setTimeout("finishAjax('"+escape(response)+"')", 400);
					  });
					return false;
				});	
					
				
			});
			function finishAjax(response){
				 $('p#loadding').hide();
				 $('#load_option').show();
				 $('#load_option').html(unescape(response));
	 		 //$('#'+id).fadeIn();
				}
			function ClickDiv()	
				{
					 $('#load_option').hide("slow", function() {
								//alert( "Animation complete." );
								});
				}
		
</script>
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
                <p class="title_txt">Title</p>
                <input id="post_title" type="text" name="title" value="<?php echo $title;?>" />
                </div>
                
                <div class="clear">
                 <p class="title_txt">Sub Title</p>
                	<input id="post_title" type="text" name="subTitle" value="<?php echo $subTitle;?>" />
                </div>
			
				

				<div class="clear">
				<p class="title_txt">Excerpt</p>
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
                
				<!--Begin consultant category-->
					 <div style="margin-top:5px;"></div>
                 <!--Begin select boxx-->
                <div class="clear">
                 <p class="title_txt clear">担当コンサルタント</p>
                 <?php
				 	if(!isset($consultantID) || empty($consultantID) || $consultantID==0)
					{
						$Get_Option=To_Get_Data("consultant"," and consultant_Status=0 order by consultant_Name ASC");
				  ?>
                  <div class="clear">
                  <div class="option_select_consul">
                  <?php 
				  	if($Get_Option['cnt'] > 0)
					{
						echo "<select name='consultantID' class='listbox_cm'>";
						echo "<option value=''>Select Consultant</option>";
						for($i=0; $i<$Get_Option['cnt']; $i++)
							{
								$List_Option = $Get_Option[$i];
								$values_option=$List_Option['consultant_ID'];
								$names_option=$List_Option['consultant_Name'];
								echo "<option value='{$values_option}'>{$names_option}</option>";
								
							}
							
						echo "</select>";
				echo " <p id='loadding' style='display:none'><img src='img/ajax-loader.gif' border='0'/>Please waiting..</p>";
					}
					else
					{
					echo "<a href='index.php?sid=category_consultant&op=select'>Please Click Add Category Consul</a>"	;
					}
				  ?>
                </div>  
                  <div id="load_option" style="display:none;" class="clear"> </div>
           </div>
                  <?php 
					}else{
						$Get_update_option=To_Get_Data("consultant"," and consultant_Status=0 order by consultant_ID= $consultantID DESC, consultant_Name ASC");
						if($Get_update_option['cnt'] > 0)
						{
				     ?>
                  <!--Process Update-->
                  <div class="clear">
                  	<div class="option_select_consul">
                  <p>
                	<select name="consultantID" class="listbox_cm">
                         <?php 
						 	for($i=0; $i<$Get_update_option['cnt']; $i++)
							{
								$List_update_option = $Get_update_option[$i];
								$values_option_update=$List_update_option['consultant_ID'];
								$names_option_update=$List_update_option['consultant_Name'];
								echo "<option value='{$values_option_update}'>{$names_option_update}</option>";
						 	}
						?>
                    </select>
                    </p>
               <p id="loadding" style="display:none"><img src="img/ajax-loader.gif" border="0"/>Please waiting..</p>
                  </div>  
                  <div id="load_option" class="clear"> 
		<?php $where_total_consul_content = "and consultant_Status=0 and consultant_ID={$consultantID} ";
$Data_consul_content = To_Get_Data("consultant", $where_total_consul_content);
	$category_consul_title=$Data_consul_content[0]['consultant_Name'];
	$category_consul_subtitle=$Data_consul_content[0]['consultant_Info'];
	$category_consul_thumnail=$Data_consul_content[0]['consultant_Thumb'];
	
	?>							
    					<div class="thumnail_category"><img src="<?php echo "./upload_thumnail/".$category_consul_thumnail; ?>" border="0">
                        </div>
                        <div class="title_category"><h2><?php echo $category_consul_title; ?></h2>
                        	<p><?php echo $category_consul_subtitle; ?></p>
                        </div>
                        <div class="close_category"><a id="close_tab_category" onclick="ClickDiv();" href="javascript:void(0);"><img src="img/1379593090_close.png" border="0" width="16"/></a>
                        </div>
    			</div>
                        
                      </div>
                  		<?php 
							}
						?>
                  <!--End-->
                  
                  <?php 
					}
				  ?>
                </div>
                   <!--End select boxx-->
				<!--End -->

                
			<div class="clear">
               <p class="title_txt">Content</p>
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
				  height:'300'
                 }
		);
		CKEDITOR.instances['bcontent'];
		//CKEDITOR.replace('excerpt', {width:'100%', height:'100'});
		CKEDITOR.replace('excerpt',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		CKEDITOR.instances['excerpt'];
		
		
		
		});
		
	
</script>