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
			$List = Get_Data("interview", "and id_interview = $id_f");
			$op_vis_str = ($List['status_interview'] == "0") ? "Public" : "Draft";
			$op_vis = $List['status_interview'];
			$title = $List['title_interview'];
			$subtitle=$List['subtitle_interview'];
			$content_interview=htmlspecialchars_decode($List['content_interview']);
			$excerpt_interview = htmlspecialchars_decode($List['excerpt_interview']);
			$keyword_interview = $List['keyword_interview'];
			$thumbnail=$List['thumbnail_interview'];
			$consultant_set_fure=$List['consultant_add_thumbnail'];
			$thumbnail_upload_csv=$List['csv_file']; 
			$vol_number=$List['vol_number'];
			$description_interview=$List['description_interview'];
			$seo_add_thumb_meta=$List['seo_add_thumb_meta'];

			$seo_og_description=htmlspecialchars_decode($List['seo_og_description']);
			$seo_og_title=htmlspecialchars_decode($List['seo_og_title']);

			$about_company=htmlspecialchars_decode($List['about_company']);
            $constitution_interview=htmlspecialchars_decode($List['constitution_interview']);
			$established=$List['established'];

			$capital=$List['capital'];

			$employees=$List['employees'];

			$headquarters=$List['headquarters'];

			$entry_id =$List['entry_id'];

			$company_name=$List['company_name'];
			
			$consultantID = $List['consultantID']; 

			$fullname_interview=$List['fullname_interview'];

			$thumbnail1=$List['logo_thumnail'];
			$thumbnail2=$List['main_thumbnail_interview'];
			
			$thumbnail_alt=$List['thumbnail_interview_alt'];
			$logo_thumbnail_alt=$List['logo_thumnail_alt'];
			$main_thumbnail_alt=$List['main_thumbnail_interview_alt'];
			$consultant_thumbnail_alt=$List['consultant_add_thumbnail_alt'];

			list($op_front, $op_bottom) = explode(" ", $List['date_interview']);
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
                <p class="title_txt">Vol Number (例：Vol.96)</p>
                <input id="post_title" type="text" name="vol_number" value="<?php echo $vol_number;?>" />
                </div>
                
				<div class="clear">
                <p class="title_txt">会社名を入力してください。 (例：株式会社 クライスカンパニー)</p>
                <input id="post_title" type="text" class="title_interview" name="title_interview" value="<?php echo $title;?>" />
                </div>
                
                <div class="clear">
                <p class="title_txt">記事のタイトル</p>
                <input id="post_title" type="text" class="subtitle_interview" name="subtitle_interview" value="<?php echo $subtitle;?>" />
                </div>
                
                <div class="clear">
                	<p class="title_txt">話者氏名（例：山田 太郎）</p>
                	<input id="post_title" type="text" class="fullname_interview" name="fullname_interview" value="<?php echo $fullname_interview; ?>" />
                </div>

                <div class="clear">
				<p class="title_txt">会社紹介文</p>
				<div id="post_container" class="clearfix">
					<div id="post_tabs" class="clearfix post_edit_block">
						<div class="tab_container">
							<div class="editor-container" id="content-editor-container">
								
								<!-- 내용 -->
								<textarea id="about_company" name="about_company" cols="40" style="height: 295px;"><?php echo $about_company; ?></textarea>
							</div>
						</div>
					</div>
				</div>
                </div>
                
                 <div class="clear">
                <p class="title_txt">設立年月　Established</p>
                <input id="post_title" type="text" name="established" value="<?php echo $established;?>" />
                </div>
                
                <div class="clear">
                <p class="title_txt">資本金　Capital</p>
                <input id="post_title" type="text" name="capital" value="<?php echo $capital;?>" />
                </div>
                
                <div class="clear">
                <p class="title_txt">従業員数　Number of employees</p>
                <input id="post_title" type="text" name="employees" value="<?php echo $employees;?>" />
                </div>
                
                 <div class="clear">
                <p class="title_txt">本社所在地　Headquarters</p>
                <input id="post_title" type="text" name="headquarters" value="<?php echo $headquarters;?>" />
                </div>
                
                <div class="clear">
                	<!--Code upload csv-->
                     <p class="title_txt">スカウト情報 CSV</p>
                    	<div class="file_csv_up" id="text_input_file">
             			<input type="text" name="csv_upload_interview" id="csv_upload_interview" value="<?php echo $thumbnail_upload_csv; ?>" />
             			</div>
            			 <div id="csv_upload"><input type="file" id="csv" name="csv" />Choose File</div>
						<div class="clear"></div>
              	 </div>
                 
                

                
                
			<div class="clear">
				<p class="title_txt">説明文又は会社紹介文</p>
				<div id="post_container" class="clearfix">
					<div id="post_tabs" class="clearfix post_edit_block">
						<div class="tab_container">
							<div class="editor-container" id="content-editor-container">
								
								<!--contents-->
								<textarea id="excerpt" name="excerpt" cols="40" style="height: 170px; width:100%;"><?php echo $excerpt_interview; ?></textarea>
							</div>
						</div>
					</div>
				</div>
                </div>
                
  
        
 <!--Begin code ****************************************************************************************************-->           
                
	<div class="clear">
               <p class="title_txt">内容</p>
               <div id="post_container" class="clearfix">
					<div id="post_tabs" class="clearfix post_edit_block">
						<div class="tab_container">
							<div class="editor-container" id="content-editor-container">
								<textarea id="bcontent" name="bcontent" cols="40" style="height: 295px;"><?php echo $content_interview;?></textarea>
							</div>
						</div>
					</div>
				</div>
     </div>
               
               
     <?php 
	 	$content_json=unserialize($List['content_json_interview']);
		$content_array_group=@array_filter($content_json['group_content']);
		//print_r($content_array_group);
	 ?>          
    <div class="clear">
                <p class="title_txt">説明文</p>
              <textarea id="post_title" name="content_a" cols="40" style="height: 150px;"><?php echo $content_json['content_a']; ?></textarea>
    </div>       
          <!--Begin content detail field-->    
    <div class="container_content_interview clear">
    	<div class="content_add_group_interview clear">
         <?php
		 		if(!empty($content_array_group)):
				for($j=0;$j<count($content_array_group);$j++):
				$m=$j+1;
				
				$group_item_array=@array_filter($content_array_group[$j]['group_item']);
				$count_group_item=count($group_item_array);
		  ?>
          <div class="group_content_interview group_content_interview<?php echo $m; ?> clear"> 
	            <div class="field_group clear">
	                <p class="title_txt">タイトル（ゴルド）</p>
	                <input id="post_title" type="text" name="content_b[]" value="<?php echo $content_array_group[$j]['content_b']; ?>" />
                    <input type="hidden" class="group_txt" name="group_item[]" value="<?php echo $count_group_item; ?>" />
	            </div> 
              <div class="clear content_add_item_interview">
              	    <?php 
						for($u=0;$u<$count_group_item;$u++):
						$n=$u+1;
					?> 
		            <div class="group_item_interview item_part_c_<?php echo $m.$n; ?> clear">
				            <div class="clear">
				                <p class="title_txt">コンサルタント名（例：岡田）</p>
				                <input id="post_title" type="text" name="content_consultant_name<?php echo $m.$n; ?>" value="<?php echo $group_item_array[$u]['consultant_name']; ?>" />
				            </div> 
				            
				            <div class="clear">
				                <p class="title_txt">質問</p>
				                <input id="post_title" type="text" name="content_question<?php echo $m.$n; ?>" value="<?php echo $group_item_array[$u]['question']; ?>" />
				            </div> 
				            
				            <div class="clear">
				                <p class="title_txt">話者名</p>
				                <input id="post_title" type="text" name="content_interview_name<?php echo $m.$n; ?>" value="<?php echo $group_item_array[$u]['interview_name']; ?>" />
				            </div> 
				            
				            <div class="clear">
				                <p class="title_txt">答え</p>
				                 <textarea id="post_title" name="content_aswer<?php echo $m.$n; ?>" cols="40" style="height: 100px;"><?php echo $group_item_array[$u]['aswer']; ?></textarea>
				            </div>
	                 </div><!--group_item_interview-->
                 	<?php 
						endfor;
					?>
               </div><!--content_add_item_interview-->   
                 <div class="clear add_link add_part_item">
                      <a class="add r">+ 会話を追加する</a>	
                 </div>
            </div><!--group_content_interview-->
            
            <?php endfor; ?>
            
            <?php else:?>
              <div class="group_content_interview group_content_interview1 clear"> 
	            <div class="field_group clear">
	                <p class="title_txt">タイトル（ゴルド）</p>
	                <input id="post_title" type="text" name="content_b[]" value="" />
                    <input type="hidden" class="group_txt" name="group_item[]" value="1" />
	            </div> 
              <div class="clear content_add_item_interview">
              	     
	            <div class="group_item_interview  clear">
			            <div class="clear">
			                <p class="title_txt">コンサルタント名（例：岡田）</p>
			                <input id="post_title" type="text" name="content_consultant_name11" value="" />
			            </div> 
			            
			            <div class="clear">
			                <p class="title_txt">質問</p>
			                <input id="post_title" type="text" name="content_question11" value="" />
			            </div> 
			            
			            <div class="clear">
			                <p class="title_txt">話者名</p>
			                <input id="post_title" type="text" name="content_interview_name11" value="" />
			            </div> 
			            
			            <div class="clear">
			                <p class="title_txt">答え</p>
			                 <textarea id="post_title" name="content_aswer11" cols="40" style="height: 100px;"></textarea>
			            </div>
                 </div><!--group_item_interview-->
               </div><!--content_add_item_interview-->   
                 <div class="clear add_link add_part_item">
                      <a class="add r">+ 会話を追加する</a>	
                 </div>
            </div><!--group_content_interview-->
            <?php endif; ?>
            
        </div><!--content_add_group_interview--> 
             
            <div class="clear add_link add_part_group">
                <a class="add r">+ 新しいタイトルを追加する</a>	
           </div>
      </div><!--container_content_interview-->         
<script type="text/javascript">
jQuery(document).ready(function($){
	  $('.add_part_item').delegate('a.add', 'click', function() {
		 var count_div_group_parent_1=$(this).parent().parent().index()+1; 
		 var count_div_group_1=$(this).parent().parent().find('.content_add_item_interview').find('.group_item_interview').length+1;
		 var html_add_item_1='<div class="group_item_interview item_part_c_'+count_div_group_parent_1+count_div_group_1+' clear"><div class="clear"><p class="title_txt">コンサルタント名（例：岡田）</p><input id="post_title" type="text" name="content_consultant_name'+count_div_group_parent_1+count_div_group_1+'" value="" /></div><div class="clear"><p class="title_txt">質問</p><input id="post_title" type="text" name="content_question'+count_div_group_parent_1+count_div_group_1+'" value="" /></div><div class="clear"><p class="title_txt">話者名</p><input id="post_title" type="text" name="content_interview_name'+count_div_group_parent_1+count_div_group_1+'" value="" /></div><div class="clear"><p class="title_txt">答え</p><textarea id="post_title" name="content_aswer'+count_div_group_parent_1+count_div_group_1+'" cols="40" style="height: 100px;"></textarea></div></div><!--group_item_interview--> ';
		 $('.group_content_interview'+count_div_group_parent_1+' .content_add_item_interview').append(html_add_item_1);	
		 $(this).parent().parent().find(".field_group").find(".group_txt").val(count_div_group_1);
	});
	 $(document).on('click', '.live_add_part_c a.add', function(e) {
		 var length_item=$(this).parent().parent().find('.content_add_item_interview').find('.group_item_interview').length+1;
			var length_item_two=$(this).parent().parent().index()+1;
			var html_add_item_news='<div class="group_item_interview item_part_c_'+length_item_two+length_item+' clear"><div class="clear"><p class="title_txt">コンサルタント名（例：岡田）</p><input id="post_title" type="text" name="content_consultant_name'+length_item_two+length_item+'" value="" /></div><div class="clear"><p class="title_txt">質問</p><input id="post_title" type="text" name="content_question'+length_item_two+length_item+'" value="" /></div><div class="clear"><p class="title_txt">話者名</p><input id="post_title" type="text" name="content_interview_name'+length_item_two+length_item+'" value="" /></div><div class="clear"><p class="title_txt">答え</p><textarea id="post_title" name="content_aswer'+length_item_two+length_item+'" cols="40" style="height: 100px;"></textarea></div></div><!--group_item_interview--> ';
			var newRow_item=$('.group_content_interview'+length_item_two+' .content_add_item_interview').append(html_add_item_news);	
			$(this).parent().parent().find(".field_group").find(".group_txt").val(length_item);		
	 });
	 $('.live_add_part_c').delegate('.add', 'click', function() {
		 	alert('ok');
		 });
		$('.add_part_group').delegate('.add', 'click', function() {	
		var count_div_group_parent=$('.group_content_interview').length+1; 
		var count_div_group=$('.group_content_interview .group_item_interview').length+1;
		var html_add_part_group='<div class="group_content_interview group_content_interview'+count_div_group_parent+' clear"><div class="field_group clear"><p class="title_txt">タイトル（ゴルド）</p><input id="post_title" type="text" name="content_b[]" value="" /><input class="group_txt" type="hidden" name="group_item[]" value="1" /></div><div class="clear content_add_item_interview"><div class="group_item_interview clear"><div class="clear"><p class="title_txt">コンサルタント名（例：岡田）</p><input id="post_title" type="text" name="content_consultant_name'+count_div_group_parent+'1" value="" /></div><div class="clear"><p class="title_txt">質問</p><input id="post_title" type="text" name="content_question'+count_div_group_parent+'1" value="" /></div><div class="clear"><p class="title_txt">話者名</p><input id="post_title" type="text" name="content_interview_name'+count_div_group_parent+'1" value="" /></div><div class="clear"><p class="title_txt">答え</p><textarea id="post_title" name="content_aswer'+count_div_group_parent+'1" cols="40" style="height: 100px;"></textarea></div></div><!--group_item_interview--></div><!--content_add_item_interview--><div class="clear add_link live_add_part_c"><a class="add r">+ 会話を追加する</a></div></div><!--group_content_interview-->';		

		$('.content_add_group_interview').append(html_add_part_group );	
	});
});
</script>    
         
         
         
 <!--End code ****************************************************************************************************--> 
                
                
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

				<div class="clear">
                <p class="title_txt">構成</p>
                <input id="post_title" type="text" name="constitution_interview" value="<?php echo $constitution_interview;?>" />
                </div>

				<div class="clear">
                <p class="title_txt">企業ID</p>
                <input id="post_title" type="text" name="entry_id" value="<?php echo $entry_id;?>" />
                </div>
                
				<div class="clear">
                	<p class="title_txt">会社名 (例：株式会社 クライスカンパニー)</p>
                	<input id="post_title" type="text" name="company_name" value="<?php echo $company_name;?>" />
                </div>
 				<script type="text/javascript">
                	jQuery(document).ready(function(){
						<?php if($op!="update"):?>
						var keyword_interview="ヘッドハンティング,転職支援,人材紹介,サーチファーム,エグゼクティブサーチ,面接官,本音";
						$('.keyword_interview').val(keyword_interview);
						<?php endif; ?>
						$('.title_interview').bind('input keyup keydown keypress', function(){
							var fullname_interview=$('.fullname_interview').val();
							var title_intervew=$(this).val();
							var content_description_seo=title_intervew+"の現役面接官"+fullname_interview+"氏へのインタビュー記事です。普段知ることができない同社の面接風景やジャッジポイントなどがご覧いただけます。";
							$('.description_interview').val(content_description_seo);
							//alert(content_title_seo);
						});
						$('.fullname_interview').bind('input keyup keydown keypress', function(){
							var fullname_interview=$(this).val();
							var title_intervew=$('.title_interview').val();
							var content_description_seo=title_intervew+"の現役面接官"+fullname_interview+"氏へのインタビュー記事です。普段知ることができない同社の面接風景やジャッジポイントなどがご覧いただけます。";
							$('.description_interview').val(content_description_seo);
							//alert(content_title_seo);
						});
						
						$('.subtitle_interview').bind('input keyup keydown keypress', function(){
							var subtitle_interview=$(this).val();
							$('.seo_og_title').val(subtitle_interview);
						});
						
						$('#excerpt').bind('input keyup keydown keypress', function(){
							var excerpt_content = $(this).val();
							$('.seo_og_description').val(excerpt_content);
						});
						
					});
                </script>               
  				<div class="clear">
                <p class="title_txt">SEO <?php echo htmlspecialchars("<meta>"); ?> Keyword:</p>
                <input id="post_title" class="keyword_interview" type="text" name="keyword_interview" value="<?php echo $keyword_interview ;?>" />
                </div>
                
                <div class="clear">
                <p class="title_txt">SEO <?php echo htmlspecialchars("<meta>"); ?> Description:</p>
                		<input id="post_title" class="description_interview" type="text" name="description_interview" value="<?php echo $description_interview ;?>" />
                </div>
                

				<div class="clear">
                <p class="title_txt">SEO <?php echo htmlspecialchars("<meta>"); ?> Og Title:</p>
                		<input id="post_title" class="seo_og_title" type="text" name="seo_og_title" value="<?php echo $seo_og_title ;?>" />
                </div>

				<div class="clear">
                <p class="title_txt">SEO <?php echo htmlspecialchars("<meta>"); ?> Og Description:</p>
                		<input id="post_title" type="text" class="seo_og_description" name="seo_og_description" value="<?php echo $seo_og_description ;?>" />
                 </div>
                

                 <?php include('inc/post_img_sharefacebook.php');?>
                
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
		//CKEDITOR.replace('excerpt', {width:'100%', height:'100'});
		/*CKEDITOR.replace('excerpt',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100',
				  startupMode: 'source'
                 }
		);
		CKEDITOR.instances['excerpt'];*/
		//CKEDITOR.replace('about_company', {width:'100%', height:'100'});
		CKEDITOR.replace('about_company',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100',
				  startupMode: 'source'
                 }
		);
		CKEDITOR.instances['about_company'];
		
		
		});
	
</script>
<script type="text/javascript">
$(document).ready(function() {
	$('#csv').change(function(evt) {
       // alert($(this).val());
		$("#csv_upload_interview").val($(this).val());
		$("#csv_upload_interview").attr("value",$(this).val());
    });
});
</script>