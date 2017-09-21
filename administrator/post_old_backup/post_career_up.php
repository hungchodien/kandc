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
			//$thumbnail_set=$List['thumbnail_career_up'];
			$List = Get_Data("career_up", " and status_career_up=0  
and thumbnail_career_up!='' 
order by id_career_up DESC limit 1","thumbnail_career_up");
			$thumbnail_set=$List['thumbnail_career_up'];
		}
		else
		{
			$List = Get_Data("career_up", "and id_career_up = $id_f");
			$op_vis_str = ($List['status_career_up'] == "0") ? "Public" : "Draft";
			$op_vis = $List['status_career_up'];
			$title = $List['title_career_up'];
			$subtitle=$List['subtitle_career_up'];
			//$content_career_up=htmlspecialchars_decode($List['content_career_up']);


			$title_1 = $List['title_1'];
			$content_1=htmlspecialchars_decode($List['content_1']);
			$title_2 = $List['title_2'];
			$content_2=htmlspecialchars_decode($List['content_2']);
			$title_3 = $List['title_3'];
			$content_3=htmlspecialchars_decode($List['content_3']);
			$title_4 = $List['title_4'];
			$content_4=htmlspecialchars_decode($List['content_4']);
			$title_5 = $List['title_5'];
			$content_5=htmlspecialchars_decode($List['content_5']);


			$excerpt_career_up  = htmlspecialchars_decode($List['excerpt_career_up']);
			
			$consultant_thumb_career_up = $List['consultant_thumb_career_up'];
			$consultant_set_fure=$List['consultant_add_thumbnail'];
			$consultant_set_fure1=$List['consultant_add_thumbnail_index'];
			$thumbnail=$List['thumbnail_career_up'];
			
			$advice1=htmlspecialchars_decode($List['advice1']);
			$advice2=htmlspecialchars_decode($List['advice2']);
			$advice3=htmlspecialchars_decode($List['advice3']);
			
			$seo_keyword=htmlspecialchars_decode($List['seo_keyword']);
			$seo_description=htmlspecialchars_decode($List['seo_description']);
			$seo_add_thumb_meta=$List['seo_add_thumb_meta'];

			$seo_og_description=htmlspecialchars_decode($List['seo_og_description']);
			$seo_og_title=htmlspecialchars_decode($List['seo_og_title']);
			$thumbnail_alt=$List['thumbnail_career_up_alt'];
			$consultant_thumbnail_alt=$List['consultant_add_thumbnail_alt'];
			$index_thumbnail_alt=$List['consultant_add_thumbnail_index_alt'];

			list($op_front, $op_bottom) = explode(" ", $List['date_career_up']);
			list($op_date_year, $op_date_month, $op_date_day) = explode("-", $op_front);
			list($op_date_hour,$op_date_minute,) = explode(":", $op_bottom);
		}

?>
<script type="text/javascript">
		$(document).ready(function() {
				var container_img="";
				$('.listbox_cm').change(function(){
					
					var content_category_item="";
					var content_category_item1="";
					var select_consultant_s=$.trim($(this).find('option:selected').text());
					var title_hunter=$('.title_hun').val();
					$('.category_career_up_l .inside p input:checkbox').each(function () {
	   					if (this.checked) {
							content_category_item +=" "+$.trim($(this).parent().text());
							content_category_item1 +=","+$.trim($(this).parent().text());
						}
 					});
					var content_description="クライス＆カンパニーキャリアコンサルタントの" +select_consultant_s+ "が執筆した「"+content_category_item+"」をテーマにしたキャリアアップコラム「"+title_hunter+"」です。";
					$("#seo_description").val(content_description);
					var content_keyword="ヘッド,ハンティング,転職,支援,人材,紹介,30代,コンサルティング,コラム,キャリア"+content_category_item1;
					$("#seo_keyword").val(content_keyword);
					
					
				   	$('p#loadding').show();
						//$('#load_option').hide( "slow", function() {
    					//alert( "Animation complete." );
  						//});
					 	$.post("ajax/load_category_consultant.php",{
						  typeID: $('.listbox_cm').val()
					   }, function(response){
						setTimeout("finishAjax('"+escape(response)+"')", 400);
					  });
					  
					  $.post("ajax/load_categroy_consultant_img.php",{
						  typeID: $('.listbox_cm').val()
						  }, function(data){
						   $("#txt_feat_2").val(data);
						   $(".container_load_seo_img").remove();
						   $(".image_load_fo").remove();
						   container_img="<div class='clear container_load_seo_img' style='text-align:center'><img src='"+data+"'/></div>";
						   $(container_img).insertAfter( "#postimagediv" );
						   
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
<form name="board" id="board" method="post" action="post/board_proc.php"  enctype="multipart/form-data">
	<input type="hidden" name="sid" value="<?php echo $sid; ?>" />
        <input type="hidden" name="model" value="<?php echo $op; ?>" />
        <input type="hidden" name="id" value="<?php echo $id_f; ?>" />

	<div id="content_body" class="fl">
		<div id="post_body" class="clearfix">
			<div id="post_body_content">
				<div class="clear">
                <p class="title_txt">Vol Number: Ex: (Vol.320)</p>
                <input id="post_title" class="vol_hun" type="text" name="title_career_up" value="<?php echo $title; ?>" />
                </div>
                <div class="clear">
                <p class="title_txt">Title</p>
                <input id="post_title" class="title_hun" type="text" name="subtitle_career_up" value="<?php echo $subtitle; ?>" />
                </div>
                <div style="margin-top:5px;"></div>
                
                 <!--Begin select boxx-->
                <div class="clear">
                 <p class="title_txt clear">Consultant-Thumbnail</p>
                 <?php
				 	if(!isset($consultant_thumb_career_up) || empty($consultant_thumb_career_up) || $consultant_thumb_career_up==0)
					{
						$Get_Option=To_Get_Data("consultant"," and consultant_Status=0 order by consultant_Name ASC");
				  ?>
                  <div class="clear">
                  <div class="option_select_consul">
                  <?php 
				  	if($Get_Option['cnt'] > 0)
					{
						echo "<select name='consultant_thumb_henter_eye' class='listbox_cm'>";
						echo "<option value=''>________Select Option_______</option>";
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
						$Get_update_option=To_Get_Data("consultant"," and consultant_Status=0 order by consultant_ID= $consultant_thumb_career_up DESC, consultant_Name ASC");
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
		<?php $where_total_consul_content = "and consultant_Status=0 and consultant_ID={$consultant_thumb_career_up} ";
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
				
               <div class="clear">
                    <p class="title_txt">Excerpt</p>
                    <div id="post_container" class="clearfix">
                       <!-- 내용 -->
                       <textarea id="excerpt_career_up" name="excerpt_career_up" style="width:100%; height:150px;"><?php echo $excerpt_career_up; ?></textarea>
                    </div>
                </div>
                
                
                <div class="clear">
                <p class="title_txt">Advice 1</p>
                <input id="post_title" type="text" name="advice1" value="<?php echo $advice1; ?>" />
                </div>
				
                <div class="clear">
                <p class="title_txt">Advice 2</p>
                <input id="post_title" type="text" name="advice2" value="<?php echo $advice2; ?>" />
                </div>
                
                 <div class="clear">
                <p class="title_txt">Advice 3</p>
                <input id="post_title" type="text" name="advice3" value="<?php echo $advice3; ?>" />
                </div>
                

				 <div class="clear">.</div>
                <div class="clear">
                <p class="title_txt">Title 1</p>
                <input id="post_title" type="text" name="title_1" value="<?php echo $title_1; ?>" />
                </div>
                <div class="clear">
                    <p class="title_txt">Content 1</p>
                    <div id="post_container" class="clearfix">
                        <div id="post_tabs" class="clearfix post_edit_block">
                            <div class="tab_container">
                                <div class="editor-container" id="content-editor-container">
                                    
                                    <!-- 내용 -->
                                    <textarea id="content_1" name="content_1" cols="40" style="height: 100px;"><?php echo $content_1; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
				</div> 
                
                <div class="clear">
               		 <p class="title_txt">Title 2</p>
                	 <input id="post_title" type="text" name="title_2" value="<?php echo $title_2; ?>" />
                </div>
                <div class="clear">
                    <p class="title_txt">Content 2</p>
                    <div id="post_container" class="clearfix">
                        <div id="post_tabs" class="clearfix post_edit_block">
                            <div class="tab_container">
                                <div class="editor-container" id="content-editor-container">
                                    
                                    <!-- 내용 -->
                                    <textarea id="content_2" name="content_2" cols="40" style="height: 100px;"><?php echo $content_2; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
				</div> 
                
                
                <div class="clear">
               		 <p class="title_txt">Title 3</p>
                	 <input id="post_title" type="text" name="title_3" value="<?php echo $title_3; ?>" />
                </div>
                <div class="clear">
                    <p class="title_txt">Content 3</p>
                    <div id="post_container" class="clearfix">
                        <div id="post_tabs" class="clearfix post_edit_block">
                            <div class="tab_container">
                                <div class="editor-container" id="content-editor-container">
                                    
                                    <!-- 내용 -->
                                    <textarea id="content_3" name="content_3" cols="40" style="height: 100px;"><?php echo $content_3; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
				</div> 
                
               <div class="clear">
               		 <p class="title_txt">Title 4</p>
                	 <input id="post_title" type="text" name="title_4" value="<?php echo $title_4; ?>" />
                </div>
                <div class="clear">
                    <p class="title_txt">Content 4</p>
                    <div id="post_container" class="clearfix">
                        <div id="post_tabs" class="clearfix post_edit_block">
                            <div class="tab_container">
                                <div class="editor-container" id="content-editor-container">
                                    
                                    <!-- 내용 -->
                                    <textarea id="content_4" name="content_4" cols="40" style="height: 100px;"><?php echo $content_4; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
				</div> 
                
                <div class="clear">
               		 <p class="title_txt">Title 5</p>
                	 <input id="post_title" type="text" name="title_5" value="<?php echo $title_5; ?>" />
                </div>
                <div class="clear">
                    <p class="title_txt">Content 5</p>
                    <div id="post_container" class="clearfix">
                        <div id="post_tabs" class="clearfix post_edit_block">
                            <div class="tab_container">
                                <div class="editor-container" id="content-editor-container">
                                    
                                    <!-- 내용 -->
                                    <textarea id="content_5" name="content_5" cols="40" style="height: 100px;"><?php echo $content_5; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
				</div> 
<script type="text/javascript">
	jQuery(document).ready(function(){
		//this seo og-title
			/*$('.vol_hun').bind('input keyup keydown keypress', function(){
				var vol_hunter=$(this).val();
				var title_hunter=$('.title_hun').val();
				var content_title_seo=vol_hunter+' '+title_hunter;
				//alert(content_title_seo);
				$('#seo_og_title').val(content_title_seo);
			});*/
			
			
			$('.title_hun').bind('input keyup keydown keypress', function(){
					var select_consultant_s=$.trim($('.listbox_cm').find('option:selected').text());
					var title_hunter=$(this).val();
					var content_category_item="";
					$('.category_career_up_l .inside p input:checkbox').each(function () {
	   					if (this.checked) {
							content_category_item +=" "+$.trim($(this).parent().text());
						}
 					});
					var content_description="クライス＆カンパニーキャリアコンサルタントの" +select_consultant_s+ "が執筆した「"+content_category_item+"」をテーマにしたキャリアアップコラム「"+title_hunter+"」です。";
					$('#seo_og_title').val(title_hunter);
					$("#seo_description").val(content_description);
					//$("#seo_og_description").val(content_description);
			});
			
			//set conten keyword
			$('.category_career_up_l .inside p input:checkbox').change(function(){
				
				var content_category_item="";
				
				$('.category_career_up_l .inside p input:checkbox').each(function () {
   					if (this.checked) {
						content_category_item +=","+$.trim($(this).parent().text());
						//content_category_item +=","+$.trim($(this).parent().text());
					}
 				});
	$("#seo_keyword").val("ヘッド,ハンティング,転職,支援,人材,紹介,30代,コンサルティング,コラム,キャリア"+content_category_item);
	
				
					var select_consultant_s=$.trim($('.listbox_cm').find('option:selected').text());
					var title_hunter=$('.title_hun').val();
					var content_description="クライス＆カンパニーキャリアコンサルタントの" +select_consultant_s+ "が執筆した「"+content_category_item.replace(",","")+"」をテーマにしたキャリアアップコラム「"+title_hunter+"」です。";
					$("#seo_description").val(content_description);
					//$("#seo_og_description").val(content_description);
				});
			
			   $('#excerpt_career_up').bind('input keyup keydown keypress', function(){
				   	var excerpt_og=$(this).val();
					$("#seo_og_description").val(excerpt_og);
				});
			
			
	});
</script>

				<br />
                <!-- SEO-->
                 <div class="clear">
                    <p class="title_txt">SEO Key Word:</p>
                    <div id="post_container" class="clearfix">
                         <!-- 내용 -->
                        <textarea id="seo_keyword" name="seo_keyword" cols="40" style="height: 50px; width:100%;"><?php echo $seo_keyword;?></textarea>
                              
                    </div>
                </div>
               	<br />
               <div class="clear">
                    <p class="title_txt">SEO Description:</p>
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
		jQuery(function($){
		//$("#post_title").Watermark("Enter title here");
		
		
		CKEDITOR.replace('content_1',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		
		CKEDITOR.instances[ 'content_1' ];
		
		CKEDITOR.replace('content_2',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		
		CKEDITOR.instances[ 'content_2' ];
		
		CKEDITOR.replace('content_3',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		
		CKEDITOR.instances[ 'content_3' ];
		
		CKEDITOR.replace('content_4',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		
		CKEDITOR.instances[ 'content_4' ];
		
		CKEDITOR.replace('content_5',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		
		CKEDITOR.instances[ 'content_5' ];
		



		
		//CKEDITOR.replace('excerpt_career_up', {width:'100%',height:'300'});
		/*CKEDITOR.replace('excerpt_career_up',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'50',
				  startupMode: 'source'
                 }
		);
		
		CKEDITOR.instances[ 'excerpt_career_up' ];*/
		
		
	});
				
			 
				
		
	
</script>