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
			$List = Get_Data("case_voice", "and case_voiceID = $id_f");
			$op_vis_str = ($List['case_voiceStatus'] == "0") ? "Public" : "Draft";
			$op_vis = $List['case_voiceStatus'];
			$title = $List['case_voiceTitle'];
			$subtitle=$List['case_voiceSubTitle'];
			$excerpt=htmlspecialchars_decode($List['case_voiceDescription']);
			$consultant_thumb_henter_eye = $List['case_voiceConsutantID'];
			
		//	$consul_excerpt=htmlspecialchars_decode($List['consul_excerpt']);
		//	$consul_content = htmlspecialchars_decode($List['consul_content']);
			
			//$thumbnail=$List['consul_thumnail'];
			$case_voicePersion=htmlspecialchars_decode($List['case_voicePersion']);
			
			$case_voiceNo1=$List['case_voiceNo1'];
			$case_voiceNo2=$List['case_voiceNo2'];
			$case_voiceNo3=$List['case_voiceNo3'];
			$case_voiceNo4=$List['case_voiceNo4'];
			$case_voiceNo5=$List['case_voiceNo5'];
			$case_voiceNo6=$List['case_voiceNo6'];
			$case_voiceNo7=$List['case_voiceNo7'];
			$case_voiceNo8=$List['case_voiceNo8'];
			
			$case_voiceJob=htmlspecialchars_decode($List['case_voiceJob']);
			$case_voiceStrategy=htmlspecialchars_decode($List['case_voiceStrategy']);
			
			$case_voicePoint1=$List['case_voicePoint1'];
			$case_voicePoint2=$List['case_voicePoint2'];
			$case_voicePoint3=$List['case_voicePoint3'];
			
			$descript_point1=htmlspecialchars_decode($List['case_voicePoint4']);
			//$category_consul_id=$List['category_consul_id'];
			$case_voicePoint11=$List['case_voicePoint11'];
			$case_voicePoint22=$List['case_voicePoint22'];
			$case_voicePoint33=$List['case_voicePoint33'];
			$descript_point11=htmlspecialchars_decode($List['case_voicePoint44']);
			
			$case_voiceSeo_key=htmlspecialchars_decode($List['case_voiceSeo_key']);
			$case_voiceSeo_Description=htmlspecialchars_decode($List['case_voiceSeo_Description']);
			$seo_og_description=htmlspecialchars_decode($List['seo_og_description']);
			$seo_og_title=htmlspecialchars_decode($List['seo_og_title']);
			$seo_add_thumb_meta=$List['seo_add_thumb_meta'];
			$consultant_set_fure=$List['consultant_add_thumbnail'];
			$consultant_thumbnail_alt=$List['consultant_add_thumbnail_alt'];
			list($op_front, $op_bottom) = explode(" ", $List['case_voiceDate']);
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
		<div id="post_body" class="clear">
			<div id="post_body_content" class="clear">
				<div class="clear">
                <p class="title_txt">Title</p>
                <input id="post_title" type="text" name="title" value="<?php echo $title;?>" />
                </div>
                
                <div class="clear">
                <p class="title_txt">Sub Title</p>
                <input id="post_title" type="text" name="subtitle" value="<?php echo $subtitle;?>" />
                </div>
                
                
                <div class="clear">
				<p class="title_txt">Excerpt</p>
				<div id="post_container" class="clearfix">
					<div id="post_tabs" class="clearfix post_edit_block">
						<div class="tab_container">
							<div class="editor-container" id="content-editor-container">
								
								<!-- 내용 -->
								<textarea id="excerpt" name="excerpt" cols="40" style="height: 295px;"><?php echo $excerpt; ?></textarea>
							</div>
						</div>
					</div>
				</div>
                </div>
                 <!--End select boxx-->
                <p class="title_txt">ご本人からの声</p>
				<div id="post_container" class="clearfix">
					<div id="post_tabs" class="clearfix post_edit_block">
						<div class="tab_container">
							<div class="editor-container" id="content-editor-container">
								
								<!-- 내용 -->
								<textarea id="person" name="person" cols="40" style="height: 295px;"><?php echo $case_voicePersion; ?></textarea>
							</div>
						</div>
					</div>
				</div>
                
                 <div class="clear">
                <p class="title_txt">転職活動日数</p>
                <input id="post_title" type="text" name="case_voiceNo1" value="<?php echo $case_voiceNo1;?>" />
                </div>
                 <div class="clear">
                <p class="title_txt">エントリー</p>
                <input id="post_title" type="text" name="case_voiceNo2" value="<?php echo $case_voiceNo2;?>" />
                </div>
                 <div class="clear">
                <p class="title_txt">面接</p>
                <input id="post_title" type="text" name="case_voiceNo3" value="<?php echo $case_voiceNo3;?>" />
                </div>
                 <div class="clear">
                <p class="title_txt">最初の企業へ応募</p>
                <input id="post_title" type="text" name="case_voiceNo4" value="<?php echo $case_voiceNo4;?>" />
                </div>
                 <div class="clear">
                <p class="title_txt">決定企業応募</p>
                <input id="post_title" type="text" name="case_voiceNo5" value="<?php echo $case_voiceNo5;?>" />
                </div>
                 <div class="clear">
                <p class="title_txt">決定企業面接</p>
                <input id="post_title" type="text" name="case_voiceNo6" value="<?php echo $case_voiceNo6;?>" />
                </div>
                 <div class="clear">
                <p class="title_txt">内定</p>
                <input id="post_title" type="text" name="case_voiceNo7" value="<?php echo $case_voiceNo7;?>" />
                </div>
                 <div class="clear">
                <p class="title_txt">決定</p>
                <input id="post_title" type="text" name="case_voiceNo8" value="<?php echo $case_voiceNo8;?>" />
                </div>
                
                 <p class="title_txt">転職前>転職後</p>
               <div id="post_container" class="clearfix">
					<div id="post_tabs" class="clearfix post_edit_block">
						<div class="tab_container">
							<div class="editor-container" id="content-editor-container">
								
								<!-- 내용 -->
								<textarea id="bcontent" name="bcontent" cols="40" style="height: 295px;"><?php echo $case_voiceJob;?></textarea>
							</div>
						</div>
					</div>
				</div>
                
                 <p class="title_txt">活動方針・戦略</p>
				<div id="post_container" class="clearfix">
					<div id="post_tabs" class="clearfix post_edit_block">
						<div class="tab_container">
							<div class="editor-container" id="content-editor-container">
								
								<!-- 내용 -->
								<textarea id="strategy" name="strategy" cols="40" style="height: 295px;"><?php echo $case_voiceStrategy; ?></textarea>
							</div>
						</div>
					</div>
				</div>
                
                <div class="clear">
                <p class="title_txt">企業に評価されたポイント　Point1</p>
                <input id="post_title" type="text" name="case_voicePoint1" value="<?php echo $case_voicePoint1;?>" />
                </div>
                <div class="clear">
                <p class="title_txt">企業に評価されたポイント　Point2</p>
                <input id="post_title" type="text" name="case_voicePoint2" value="<?php echo $case_voicePoint2;?>" />
                </div>
                <div class="clear">
                <p class="title_txt">企業に評価されたポイント　Point3</p>
                <input id="post_title" type="text" name="case_voicePoint3" value="<?php echo $case_voicePoint3;?>" />
                </div>
                
                 <p class="title_txt">採用担当の方の声</p>
				<div id="post_container" class="clearfix">
					<div id="post_tabs" class="clearfix post_edit_block">
						<div class="tab_container">
							<div class="editor-container" id="content-editor-container">
								
								<!-- 내용 -->
								<textarea id="point1" name="point1" cols="40" style="height: 295px;">
								<?php echo $descript_point1; ?></textarea>
							</div>
						</div>
					</div>
				</div>
                
                
                
                 <div class="clear">
                <p class="title_txt">職成功のカギ　Point1</p>
                <input id="post_title" type="text" name="case_voicePoint11" value="<?php echo $case_voicePoint11;?>" />
                </div>
                <div class="clear">
                <p class="title_txt">職成功のカギ　Point2</p>
                <input id="post_title" type="text" name="case_voicePoint22" value="<?php echo $case_voicePoint22;?>" />
                </div>
                <div class="clear">
                <p class="title_txt">職成功のカギ　Point3</p>
                <input id="post_title" type="text" name="case_voicePoint33" value="<?php echo $case_voicePoint33;?>" />
                </div>
                
                 <p class="title_txt"> 担当コンサルタントの声</p>
				<div id="post_container" class="clearfix">
					<div id="post_tabs" class="clearfix post_edit_block">
						<div class="tab_container">
							<div class="editor-container" id="content-editor-container">
								
								<!-- 내용 -->
								<textarea id="point11" name="point11" cols="40" style="height: 295px;"><?php echo $descript_point11; ?></textarea>
							</div>
						</div>
					</div>
				</div>
                
                
                
               <div style="margin-top:5px;"></div>
                 <!--Begin select boxx-->
                <div class="clear">
                 <p class="title_txt clear">Consultant-Thumbnail</p>
                 <?php
				 	if(!isset($consultant_thumb_henter_eye) || empty($consultant_thumb_henter_eye) || $consultant_thumb_henter_eye==0)
					{
						$Get_Option=To_Get_Data("consultant"," and consultant_Status=0 order by consultant_Name ASC");
				  ?>
                  <div class="clear">
                  <div class="option_select_consul">
                  <?php 
				  	if($Get_Option['cnt'] > 0)
					{
						echo "<select name='consultant_thumb_henter_eye' class='listbox_cm'>";
						echo "<option value=''>Select Option</option>";
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
						$Get_update_option=To_Get_Data("consultant"," and consultant_Status=0 order by consultant_ID= $consultant_thumb_henter_eye DESC, consultant_Name ASC");
						if($Get_update_option['cnt'] > 0)
						{
				     ?>
                  <!--Process Update-->
                  <div class="clear">
                  	<div class="option_select_consul">
                  <p>
                	<select name="consultant_thumb_henter_eye" class="listbox_cm">
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
		<?php $where_total_consul_content = "and consultant_Status=0 and consultant_ID={$consultant_thumb_henter_eye} ";
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
                        <div class="close_category"><a id="close_tab_category" onClick="ClickDiv();" href="javascript:void(0);"><img src="img/1379593090_close.png" border="0" width="16"/></a>
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
              
                <div class="clear">
                <p class="title_txt">SEO(Keywords)</p>
                <input id="post_title" type="text" name="case_voiceSeo_key" value="<?php echo $case_voiceSeo_key;?>" />
                </div>
				
               <div class="clear">
                <p class="title_txt">SEO(Description)</p>
                <input id="post_title" type="text" name="case_voiceSeo_Description" value="<?php echo $case_voiceSeo_Description;?>" />
               </div>
				<div class="clear">
                <p class="title_txt">SEO(Og Title)</p>
                <input id="post_title" type="text" name="seo_og_title" value="<?php echo $seo_og_title;?>" />
               </div>
				<div class="clear">
                <p class="title_txt">SEO(Og Description)</p>
                <input id="post_title" type="text" name="seo_og_description" value="<?php echo $seo_og_description;?>" />
               </div>

				 <?php include('inc/post_img_sharefacebook.php');?>

		</div>
			
			<?php include_once("form_left.php"); ?>

		</div>
	</div>
</form>


<script type="text/javascript">
	
		//$("#post_title").Watermark("Enter title here");
		jQuery(function($){
		//CKEDITOR.replace('bcontent', {width:'100%', height:'300'});
		CKEDITOR.replace('bcontent',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		CKEDITOR.instances['bcontent'];
		
		//CKEDITOR.replace('excerpt', {width:'100%', height:'100'});
		CKEDITOR.replace('strategy',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		CKEDITOR.instances['strategy'];
		
		CKEDITOR.replace('point11',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		CKEDITOR.instances['point11'];
		
		CKEDITOR.replace('point1',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		CKEDITOR.instances['point1'];
		
		CKEDITOR.replace('person',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		CKEDITOR.instances['person'];
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
