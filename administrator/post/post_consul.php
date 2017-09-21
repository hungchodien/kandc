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
			$List = Get_Data("consul", "and consul_id = $id_f");
			$op_vis_str = ($List['consul_status'] == "0") ? "Public" : "Draft";
			$op_vis = $List['consul_status'];
			$title = $List['consul_title'];
			$subtitle=$List['consul_subtitle'];
			$consul_excerpt=htmlspecialchars_decode($List['consul_excerpt']);
			$consul_content = htmlspecialchars_decode($List['consul_content']);
			
			$thumbnail=$List['consul_thumnail'];
			
			
			$category_consul_id=$List['category_consul_id'];

			
			list($op_front, $op_bottom) = explode(" ", $List['consul_date']);
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
					 	$.post("ajax/load_category_consul.php",{
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
                <input id="post_title" type="text" name="consul_title" value="<?php echo $title;?>" />
                </div>
                
                <div class="clear">
                <p class="title_txt">Sub Title</p>
                <input id="post_title" type="text" name="consul_subtitle" value="<?php echo $subtitle;?>" />
                </div>
                <!--Begin select boxx-->
                <div class="clear">
                 <p class="title_txt clear">Select Category Consul</p>
                 <?php
				 	if(!isset($category_consul_id) || empty($category_consul_id) || $category_consul_id==0)
					{
						$Get_Option=To_Get_Data("category_consul"," and category_consul_status=0 order by category_consul_date DESC");
				  ?>
                  <div class="clear">
                  <div class="option_select_consul">
                  <?php 
				  	if($Get_Option['cnt'] > 0)
					{
						echo "<select name='option_con' class='listbox_cm'>";
						echo "<option value=''>Select Option</option>";
						for($i=0; $i<$Get_Option['cnt']; $i++)
							{
								$List_Option = $Get_Option[$i];
								$values_option=$List_Option['category_consul_id'];
								$names_option=$List_Option['category_consul_title'];
								echo "<option value='{$values_option}'>{$names_option}</option>";
								
							}
							
						echo "</select>";
				echo " <p id='loadding' style='display:none'><img src='img/ajax-loader.gif' border='0'/>Please waiting..</p>";
					}
					else
					{
					echo "<a href='index.php?sid=consul&op=select'>Please Click Add Category Consul</a>"	;
					}
				  ?>
                </div>  
                  <div id="load_option" style="display:none;" class="clear"> </div>
           </div>
                  <?php 
					}else{
						$Get_update_option=To_Get_Data("category_consul"," and category_consul_status=0 order by category_consul_id= $category_consul_id DESC, category_consul_title ASC");
						if($Get_update_option['cnt'] > 0)
						{
				     ?>
                  <!--Process Update-->
                  <div class="clear">
                  	<div class="option_select_consul">
                  <p>
                	<select name="option_con" class="listbox_cm">
                         <?php 
						 	for($i=0; $i<$Get_update_option['cnt']; $i++)
							{
								$List_update_option = $Get_update_option[$i];
								$values_option_update=$List_update_option['category_consul_id'];
								$names_option_update=$List_update_option['category_consul_title'];
								echo "<option value='{$values_option_update}'>{$names_option_update}</option>";
						 	}
						?>
                    </select>
                    </p>
               <p id="loadding" style="display:none"><img src="img/ajax-loader.gif" border="0"/>Please waiting..</p>
                  </div>  
                  <div id="load_option" class="clear"> 
		<?php $where_total_consul_content = "and category_consul_status=0 and category_consul_id={$category_consul_id} ";
$Data_consul_content = To_Get_Data("category_consul", $where_total_consul_content);
	$category_consul_title=$Data_consul_content[0]['category_consul_title'];
	$category_consul_subtitle=$Data_consul_content[0]['category_consul_subtitle'];
	$category_consul_thumnail=$Data_consul_content[0]['category_consul_thumnail'];
	
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
                <p class="title_txt">Excerpt</p>
				<div id="post_container" class="clearfix">
					<div id="post_tabs" class="clearfix post_edit_block">
						<div class="tab_container">
							<div class="editor-container" id="content-editor-container">
								
								<!-- 내용 -->
								<textarea id="excerpt" name="excerpt" cols="40" style="height: 295px;"><?php echo $consul_excerpt; ?></textarea>
							</div>
						</div>
					</div>
				</div>
                
               <p class="title_txt">Content</p>
               <div id="post_container" class="clearfix">
					<div id="post_tabs" class="clearfix post_edit_block">
						<div class="tab_container">
							<div class="editor-container" id="content-editor-container">
								
								<!-- 내용 -->
								<textarea id="bcontent" name="bcontent" cols="40" style="height: 295px;"><?php echo $consul_content;?></textarea>
							</div>
						</div>
					</div>
				</div>
                
				
               
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
