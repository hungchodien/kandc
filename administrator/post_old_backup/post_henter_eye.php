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
			$List = Get_Data("henter_eye", " and status_henter_eye=0  
and main_thumbnail_henter_eye!='' 
order by id_henter_eye DESC limit 1","main_thumbnail_henter_eye");
			$thumbnail_set_all=$List['main_thumbnail_henter_eye'];
			?>
            <script type="text/javascript">
            	jQuery(document).ready(function(){
						$("#txt_feat_2").val("media_uploads/hunters-eye/og-hunter-eye.png");
						   
						var container_img="<div class='clear container_load_seo_img' style='text-align:center'><img src='media_uploads/hunters-eye/og-hunter-eye.png'/></div>";
						$(container_img).insertAfter( "#postimagediv" );
				})
            </script>
            
            <?php
		}
		else
		{
			$List = Get_Data("henter_eye", "and id_henter_eye = $id_f");
			$op_vis_str = ($List['status_henter_eye'] == "0") ? "Public" : "Draft";
			$op_vis = $List['status_henter_eye'];
			$title = $List['title_henter_eye'];
			$subtitle= $List['subtitle_henter_eye'];
			$consultant_thumb_henter_eye = $List['consultant_thumb_henter_eye'];
			//$content_henter_eye=htmlspecialchars_decode($List['content_henter_eye']);
			//$excerpt_henter_eye = htmlspecialchars_decode($List['excerpt_henter_eye']);
			
			//$content_henter_eye_company = htmlspecialchars_decode($List['content_henter_eye_company']);
			//$year_henter_eye_company = $List['year_henter_eye_company'];
			$thumbnail=$List['Thumbnail_henter_eye'];
			
			$thumbnail_upload_csv=$List['csv_upload_henter_eye_company'];
			
			$caption_id_1=$List['caption_id_1'];
			$caption_id_2=$List['caption_id_2'];
			$caption_id_3=$List['caption_id_3'];
			
			$title_con_1=$List['title_con_1'];
			$title_con_2=$List['title_con_2'];
			$title_con_3=$List['title_con_3'];
			
			$content_con_1 = htmlspecialchars_decode($List['content_con_1']);
			$content_con_2 = htmlspecialchars_decode($List['content_con_2']);
			$content_con_3 = htmlspecialchars_decode($List['content_con_3']);
			$description_hunter=htmlspecialchars_decode($List['description_henter_eye']);
			$target_henter_eye=$List['target_henter_eye'];
			$vol_number=$List['vol_number'];
			//$capital_henter_eye_company =$List['capital_henter_eye_company'];
			//$numberEmployees_henter_eye_company =$List['numberEmployees_henter_eye_company'];  
			//$location_henter_eye_company =$List['location_henter_eye_company']; 
			$seo_keyword=htmlspecialchars_decode($List['seo_keyword']);
			$seo_description=htmlspecialchars_decode($List['seo_description']);
			$seo_og_description=htmlspecialchars_decode($List['seo_og_description']);
			$seo_og_title=htmlspecialchars_decode($List['seo_og_title']);

			$seo_add_thumb_meta=$List['seo_add_thumb_meta']; 
			$thumbnail_all=$List['main_thumbnail_henter_eye'];
			
			$consultant_set_fure=$List['consultant_add_thumbnail'];
			$consultant_set_fure1=$List['consultant_add_thumbnail_index'];
			  

			$thumbnail_alt=$List['Thumbnail_henter_eye_alt'];
			$main_thumbnail_alt=$List['main_thumbnail_henter_eye_alt'];
			$consultant_thumbnail_alt=$List['consultant_add_thumbnail_alt'];
			$index_thumbnail_alt=$List['consultant_add_thumbnail_index_alt'];
 
			list($op_front, $op_bottom) = explode(" ", $List['date_henter_eye']);
			list($op_date_year, $op_date_month, $op_date_day) = explode("-", $op_front);
			list($op_date_hour,$op_date_minute,) = explode(":", $op_bottom);		
			
		}

?>
<script type="text/javascript">
		$(document).ready(function() {
				$('.listbox_cm').change(function(){
					
					var select_consultant_s=$.trim($(this).find('option:selected').text());
					var title_hunter=$('.title_hun').val();
					var content_description="クライス＆カンパニーキャリアコンサルタントの"+select_consultant_s+"が執筆したヘッドハンターの目「"+title_hunter+"」です。";
					$("#seo_description").val(content_description);
					//$("#seo_og_description").val(content_description);
					
					
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
                <p class="title_txt">Vol Number: 例え: (Vol.320)</p>
                <input class="vol_hun" id="post_title" type="text" name="vol_number" value="<?php echo $vol_number;?>" />
                </div>
                
				<div class="clear">
                <p class="title_txt">タイトル</p>
                <input class="title_hun" id="post_title" type="text" name="title_henter_eye" value="<?php echo $title;?>" />
                </div>
                <div class="clear">
               <!-- <p class="title_txt">Sub Title</p>
                
               <input id="post_title" type="text" name="subtitle" value="<?php echo $subtitle;?>" />
                -->
                </div>
                 <div style="margin-top:5px;"></div>
                <div class="clear">
                <p class="title_txt">ターゲット</p>
                
               <input id="post_title" type="text" name="target_hunter" value="<?php echo $target_henter_eye;?>" />
                
                </div>
                
                 <div class="clear">
                    <p class="title_txt">企業概要（ヘッドハンターの目一覧の中グレーで表示される部分です。）</p>
                    <div class="clear">
                          <!-- 내용 -->
                          <textarea id="description_hunter" name="description_hunter" cols="40" style="height: 150px; width:100%;"><?php echo $description_hunter;?></textarea>
                     </div>
                </div>
                
                
                <div style="margin-top:5px;"></div>
                 <!--Begin select boxx-->
                <div class="clear">
                 <p class="title_txt clear">担当コンサルタント</p>
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
                   
   <!--Begin Icon CheckBox ***************************************************************-->
      <div class="postbox" id="tag">
        <h3 class="hndle">Icon(Check Box)</h3>
        <div class="inside clear">
        <div class="clear">
        <?php 
$where_total_1 .= "and icon_Checkbox_hunter_Status=0";
$Data_1 = To_Get_Data("icon_checkbox_hunter", $where_total_1." order by icon_Checkbox_hunter_Date desc");
//$Data_count = To_Get_Data("category_notice_seminar_career", $where_total,"count(*) as `count_num` ","Y");
//echo $Data_count['count_num'];
	if($Data_1['cnt'] > 0){
		
		for($i=0; $i<$Data_1['cnt']; $i++)
		{
			//$selected="";
			$List_1 = $Data_1[$i];
			//print_r($List);
			$seq1 = $List_1['icon_Checkbox_hunter_ID'];
			
			//$Data_Get=To_Get_Data("category_interview", "and `id_category_notice_seminar_career`={$seq}");
			
			$title_content_1 = addslashes($List_1['icon_Checkbox_hunter_Name']);
				
			?>
				
					<div class="icon_checkx">
				    <label>
				      <input type="checkbox" name="icon_hunter_up[]" value="<?php echo $seq1; ?>" id="checkbox_cmc_<?php echo $seq1; ?>"  <?php 
					  if($id_f):
					  	$Data_interview_check_1=To_Get_Data("henter_eye as A join icon_checkbox_join_hunter_eye as B on  A.id_henter_eye=B.id_henter_eye", " and A.id_henter_eye=$id_f");
						if($Data_interview_check_1['cnt'] > 0){
									for($j=0; $j<$Data_interview_check_1['cnt']; $j++)
									{
										//$selected="";
										$List_interview_check_1 = $Data_interview_check_1[$j];
										$seq_check_1 = $List_interview_check_1['icon_Checkbox_hunter_ID'];
										if($seq_check_1==$seq1):
											echo "checked='checked'";
										endif;
									}
							}
					  	endif;
					  ?>    />
				      <?php echo $title_content_1; ?>
                      </label>
				    <br />
				 </div>
				<?php 
		}
		//echo $i;
	}else{
	echo "Please Add Icon(Check Box) Hunter Eye=> <a href='index.php?sid=icon_checkbox_hunter&op=insert'> Here</a>";
	}
		 ?>
         </div>
		  <div class="clear"></div>
      </div>
    </div>
 <!--End ICon CheckBox **************************************************************-->
    <!--Caption-Option -->
              <div class="clear">
              		<div class="caption_s">
                    	<div class="title_txt">テーマ</div>
                        <div class="clear">
                        <select name="caption_id_1" class="cation_option">
                        	<?php 
			if(empty($caption_id_1) || $caption_id_1=="0" || !isset($caption_id_1))
			{
									
				$Get_Option1=To_Get_Data("caption_henter_eye"," and caption_henter_eye_Status=0 order by caption_henter_eye_Name ASC");
				if($Get_Option1['cnt'] > 0)
					{
						
						echo "<option value=''>____Option____</option>";
						for($i=0; $i<$Get_Option1['cnt']; $i++)
							{
								$List_Option1 = $Get_Option1[$i];
								$values_option1=$List_Option1['caption_henter_eye_ID'];
								$names_option1=$List_Option1['caption_henter_eye_Name'];
								echo "<option value='{$values_option1}'>{$names_option1}</option>";
								
							}
					}
					else
					{
				echo "<a href='index.php?sid=caption_henter_eye&op=select'>Please Click Add Caption Hunter Eye</a>"	;
					}
                                    
			}
			else
			{
							$Get_update_option1=To_Get_Data("caption_henter_eye"," and caption_henter_eye_Status=0 order by caption_henter_eye_ID= $caption_id_1 DESC, caption_henter_eye_Name ASC");
						if($Get_update_option1['cnt'] > 0)
						{
							for($i=0; $i<$Get_update_option1['cnt']; $i++)
							{
								$List_update_option1 = $Get_update_option1[$i];
								$values_option_update1=$List_update_option1['caption_henter_eye_ID'];
								$names_option_update1=$List_update_option1['caption_henter_eye_Name'];
								echo "<option value='{$values_option_update1}'>{$names_option_update1}</option>";
						 	}
						}			
			}
							?>
                        </select>
                        </div>
                    </div>
              		<div class="title_s">
                    	<p class="title_txt">タイトル</p>
                        <p>
                    	<input type="text" class="post_title" name="title_con_1" value="<?php echo $title_con_1;?>" />
                        </p>
                    </div>
              </div>
   <!--End Caption-Option -->
                 <div class="clear">
                    <p class="title_txt">内容</p>
                    <div id="post_container" class="clearfix">
                        <div id="post_tabs" class="clearfix post_edit_block">
                            <div class="tab_container">
                                <div class="editor-container" id="content-editor-container">
                                    
                                    <!-- 내용 -->
                                    <textarea id="content_con_1" name="content_con_1" cols="40" style="height: 295px;"><?php echo $content_con_1;?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                <!--2-->
                  <!--Caption-Option -->
              <div class="clear">
              		<div class="caption_s">
                    	<div class="title_txt">テーマ</div>
                        <div class="clear">
                        <select name="caption_id_2" class="cation_option">
                        	<?php 
			if(empty($caption_id_2) || $caption_id_2=="0" || !isset($caption_id_2))
			{
									
				$Get_Option2=To_Get_Data("caption_henter_eye"," and caption_henter_eye_Status=0 order by caption_henter_eye_Name ASC");
				if($Get_Option2['cnt'] > 0)
					{
						
						echo "<option value=''>____Option____</option>";
						for($i=0; $i<$Get_Option2['cnt']; $i++)
							{
								$List_Option2 = $Get_Option2[$i];
								$values_option2=$List_Option2['caption_henter_eye_ID'];
								$names_option2=$List_Option2['caption_henter_eye_Name'];
								echo "<option value='{$values_option2}'>{$names_option2}</option>";
								
							}
					}
					else
					{
				echo "<a href='index.php?sid=caption_henter_eye&op=select'>Please Click Add Caption Hunter Eye</a>"	;
					}
                                    
			}
			else
			{
							$Get_update_option2=To_Get_Data("caption_henter_eye"," and caption_henter_eye_Status=0 order by caption_henter_eye_ID= $caption_id_2 DESC, caption_henter_eye_Name ASC");
						if($Get_update_option2['cnt'] > 0)
						{
							for($i=0; $i<$Get_update_option2['cnt']; $i++)
							{
								$List_update_option2 = $Get_update_option2[$i];
								$values_option_update2=$List_update_option2['caption_henter_eye_ID'];
								$names_option_update2=$List_update_option2['caption_henter_eye_Name'];
								echo "<option value='{$values_option_update2}'>{$names_option_update2}</option>";
						 	}
						}			
			}
							?>
                        </select>
                        </div>
                    </div>
              		<div class="title_s">
                    	<p class="title_txt">タイトル</p>
                        <p>
                    	<input type="text" class="post_title" name="title_con_2" value="<?php echo $title_con_2;?>" />
                        </p>
                    </div>
              </div>
   <!--End Caption-Option -->
                 <div class="clear">
                    <p class="title_txt">内容</p>
                    <div id="post_container" class="clearfix">
                        <div id="post_tabs" class="clearfix post_edit_block">
                            <div class="tab_container">
                                <div class="editor-container" id="content-editor-container">
                                    
                                    <!-- 내용 -->
                                    <textarea id="content_con_2" name="content_con_2" cols="40" style="height: 295px;"><?php echo $content_con_2;?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <!--3-->
                 <!--Caption-Option -->
              <div class="clear">
              		<div class="caption_s">
                    	<div class="title_txt">テーマ</div>
                        <div class="clear">
                        <select name="caption_id_3" class="cation_option">
                        	<?php 
			if(empty($caption_id_3) || $caption_id_3=="0" || !isset($caption_id_3))
			{
									
				$Get_Option3=To_Get_Data("caption_henter_eye"," and caption_henter_eye_Status=0 order by caption_henter_eye_Name ASC");
				if($Get_Option3['cnt'] > 0)
					{
						
						echo "<option value=''>____Option____</option>";
						for($i=0; $i<$Get_Option3['cnt']; $i++)
							{
								$List_Option3 = $Get_Option3[$i];
								$values_option3=$List_Option3['caption_henter_eye_ID'];
								$names_option3=$List_Option3['caption_henter_eye_Name'];
								echo "<option value='{$values_option3}'>{$names_option3}</option>";
								
							}
					}
					else
					{
				echo "<a href='index.php?sid=caption_henter_eye&op=select'>Please Click Add Caption Hunter Eye</a>"	;
					}
                                    
			}
			else
			{
							$Get_update_option3=To_Get_Data("caption_henter_eye"," and caption_henter_eye_Status=0 order by caption_henter_eye_ID= $caption_id_3 DESC, caption_henter_eye_Name ASC");
						if($Get_update_option3['cnt'] > 0)
						{
							for($i=0; $i<$Get_update_option3['cnt']; $i++)
							{
								$List_update_option3 = $Get_update_option3[$i];
								$values_option_update3=$List_update_option3['caption_henter_eye_ID'];
								$names_option_update3=$List_update_option3['caption_henter_eye_Name'];
								echo "<option value='{$values_option_update3}'>{$names_option_update3}</option>";
						 	}
						}			
			}
							?>
                        </select>
                        </div>
                    </div>
              		<div class="title_s">
                    	<p class="title_txt">タイトル</p>
                        <p>
                    	<input type="text" class="post_title" name="title_con_3" value="<?php echo $title_con_3;?>" />
                        </p>
                    </div>
              </div>
   <!--End Caption-Option -->
                 <div class="clear">
                    <p class="title_txt">内容</p>
                    <div id="post_container" class="clearfix">
                        <div id="post_tabs" class="clearfix post_edit_block">
                            <div class="tab_container">
                                <div class="editor-container" id="content-editor-container">
                                    
                                    <!-- 내용 -->
                                    <textarea id="content_con_3" name="content_con_3" cols="40" style="height: 295px;"><?php echo $content_con_3;?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
               
                
               
			<div class="clear">
                	<!--Code upload csv-->
                     <p class="title_txt">CSVを添付</p>
                    	<div class="file_csv_up" id="text_input_file">
             			<input type="text" name="csv_upload_henter_eye_company" id="csv_upload_henter_eye_company" value="<?php echo $thumbnail_upload_csv; ?>" />
             			</div>
            			 <div id="csv_upload"><input type="file" id="csv" name="csv" />Choose File</div>

							<div class="clear"></div>
               </div>
  <script type="text/javascript">
	    jQuery(document).ready(function(){
			
			
			//this seo og-title
			
			$('.title_hun').bind('input keyup keydown keypress', function(){
				//var vol_hunter=$('.vol_hun').val();
				var title_hunter=$(this).val();
				//var content_title_seo=vol_hunter+' '+title_hunter;
				$('#seo_og_title').val(title_hunter);
				//alert(content_title_seo);
			});
			
			
			$('#description_hunter').bind('input keyup keydown keypress', function(){
				var og_description_hunter=$(this).val();
				$('#seo_og_description').val(og_description_hunter);
				//alert(content_title_seo);
			});
			
			
			//set content description
			$('.title_hun').bind('input keyup keydown keypress', function(){
					var select_consultant_s=$.trim($('.listbox_cm').find('option:selected').text());
					var title_hunter=$(this).val();
					var content_description="クライス＆カンパニーキャリアコンサルタントの"+select_consultant_s+"が執筆したヘッドハンターの目「"+title_hunter+"」です。";
					$("#seo_description").val(content_description);
					//$("#seo_og_description").val(content_description);
			});
			
			//set conten keyword
			$('.category_henter_eye_l .inside p input:checkbox').change(function(){
				
				var content_category_item="";
				
				$('.category_henter_eye_l .inside p input:checkbox').each(function () {
   					if (this.checked) {
						content_category_item +=","+$.trim($(this).parent().text());
					}
 				});
	$("#seo_keyword").val("ヘッド,ハンター,の,目,企業,レポート"+content_category_item+",ハンティング,転職,支援,人材,紹介,30代,キャリア,コンサルティング");
			 });
			
			
		});
  </script>             
               <br />
               <!-- SEO-->
                 <div class="clear">
                    <p class="title_txt">SEO Keyword:&nbsp;ヘッドハンティング,転職支援,人材紹介,サーチファーム,エグゼクティブサーチ,ヘッドハンター</p>
                    <div id="post_container" class="clearfix">
                       <!-- 내용 -->
                       <textarea id="seo_keyword" name="seo_keyword" cols="40" style="height: 50px; width:100%;"><?php echo $seo_keyword;?></textarea>
                    </div>
                </div>
               <br />
               <div class="clear">
                    <p class="title_txt">SEO Description: 例え）クライス&amp;カンパニーのコンサルタントがヘッドハンターの視点で注目の企業を分析します。【Vol.331】世界を目指すベンチャー企業に今入る！ （コンサルタント：岡田 麗）</p>
                    <div id="post_container" class="clearfix">
                       <!-- 내용 -->
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
			//$("#post_title").Watermark("Enter title here");
	jQuery(function($){
		//CKEDITOR.replace('content_con_1',{width:'100%', height:'100'});
		CKEDITOR.replace('content_con_1',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		CKEDITOR.instances['content_con_1'];
		//CKEDITOR.replace('content_con_2',{width:'100%', height:'100'});
		CKEDITOR.replace('content_con_2',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		CKEDITOR.instances['content_con_2'];
		//CKEDITOR.replace('content_con_3',{width:'100%', height:'100'});
		CKEDITOR.replace('content_con_3',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		CKEDITOR.instances['content_con_3'];
		//CKEDITOR.replace('description_hunter',{width:'100%', height:'100'});
		/*CKEDITOR.replace('description_hunter',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100',
				  startupMode: 'source'
                 }
		);
		CKEDITOR.instances['description_hunter'];*/
		
		

		

		});
	
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
