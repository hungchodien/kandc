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
			$List = Get_Data("kc_blog", "and kc_blog_id = $id_f");
			$op_vis_str = ($List['kc_blog_status'] == "0") ? "Public" : "Draft";
			$op_vis = $List['kc_blog_status'];
			
			$title_blog = $List['kc_blog_title'];
			$excerpt =htmlspecialchars_decode($List['kc_blog_excerpt']);
			$content = htmlspecialchars_decode($List['kc_blog_content']);
			$consultant_thumb_henter_eye=$List['consultantID'];
 
 			$seo_keyword=htmlspecialchars_decode($List['seo_keyword']);
			$seo_description=htmlspecialchars_decode($List['seo_description']);
			$seo_og_description=htmlspecialchars_decode($List['seo_og_description']);
			$seo_og_title=htmlspecialchars_decode($List['seo_og_title']);

			$seo_add_thumb_meta=$List['seo_add_thumb_meta']; 
 
			list($op_front, $op_bottom) = explode(" ", $List['kc_blog_date']);
			list($op_date_year, $op_date_month, $op_date_day) = explode("-", $op_front);
			list($op_date_hour,$op_date_minute,) = explode(":", $op_bottom);		
			
		}

?>
<script type="text/javascript">
		$(document).ready(function() {
				$('.listbox_cm').change(function(){
					$('p#loadding').show();
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
                <p class="title_txt">タイトル</p>
                <input class="title_hun" id="post_title" type="text" name="title_blog" value="<?php echo $title_blog;?>" />
                </div>
                
				<div class="clear">
                    <p class="title_txt">説明文（FBのDescriptionとして使う部分）</p>
                    <div class="clear">
                          <!-- 내용 -->
                          <textarea id="excerpt" name="excerpt" cols="40" style="height: 100px; width:100%;"><?php echo $excerpt;?></textarea>
                     </div>
                </div>
                
                <br/>
                <div style="margin-top:5px;"></div>
                 <!--Begin select boxx-->
                <div class="clear">
                 <p class="title_txt clear">作成者（担当コンサルタント）</p>
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
                   <br/>
                <div class="clear">
                    <p class="title_txt">内容</p>
                    <div class="clear">
                          <!-- 내용 -->
                          <textarea id="bcontent" name="bcontent" cols="40" style="height: 150px; width:100%;"><?php echo $content;?></textarea>
                     </div>
                </div>   
	<script type="text/javascript">
	    jQuery(document).ready(function(){
			//this seo og-title
			var seo_keyword="こぼれ話コンサルタント,コンサルティング,戦略コンサル,ITコンサル,ポストコンサル,EXコンサル,転職,人材紹介,エージェント";
			$("#seo_keyword").val(seo_keyword);
			$('.title_hun').bind('input keyup keydown keypress', function(){
				//var vol_hunter=$('.vol_hun').val();
				var title_hunter=$(this).val();
				var description=title_hunter+"| 現役コンサルタントの転職専門人材紹介会社。他コンサルティングファームへの転職はもちろん、ポストコンサル転職など、コンサル経験が活かせるキャリアをコンサル出身キャリアコンサルタントが無料で全面サポート。年収800万円以上の高年収、管理職、スペシャリストの求人だけでなく、独占案件・非公開求人も豊富。";
				//var content_title_seo=vol_hunter+' '+title_hunter;
				$('#seo_description').val(description);
				$('#seo_og_title').val(title_hunter);
				//alert(content_title_seo);
			});
			
			
			$('#excerpt').bind('input keyup keydown keypress', function(){
				var og_description_hunter=$(this).val();
				$('#seo_og_description').val(og_description_hunter);
				//alert(content_title_seo);
			});
		  if( $('#txt_feat_2').val()=="")
		  {
			$('#txt_feat_2').val('img/og/og-cc-blog.png');
			var container_img="<div class='clear container_load_seo_img' style='text-align:center'><img src='http://kc-consul.com/img/og/og-cc-blog.png'/></div>";
			$(container_img).insertAfter( "#postimagediv" );
		  }
			
			
			
			
		});
  </script>             
               <br />
               <!-- SEO-->
                 <div class="clear">
                    <p class="title_txt">SEO Keyword:</p>
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
			//$("#post_title").Watermark("Enter title here");
	jQuery(function($){
				//CKEDITOR.replace('content_con_1',{width:'100%', height:'100'});
				
				//CKEDITOR.replace('content_con_2',{width:'100%', height:'100'});
				CKEDITOR.replace('bcontent',{
		                  width: '100%',
		                  resize_maxWidth: '100%',
		                  resize_minWidth: '100%', 
						  height:'200'
		                 }
				);
				CKEDITOR.instances['bcontent'];
		});
	
</script>
