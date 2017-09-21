<?php 
	@include('Lib/_init.php');
	@include('../Lib/_init.php');
	@include('../../Lib/_init.php');
	@include('../../../Lib/_init.php');
	$id_f=$_GET['id'];
		if($op!="update")
		{
			echo "ERROR!<br/>";
			echo "This function is only for editing";
			exit();
		}
		else
		{
			$List = Get_Data("category", "and id = $id_f");
			$op_vis_str = "Public";
			$op_vis = 0;
			$title = $List['name'];
			$key_title = $List['name'];
			$group_relead=$List['group_related'];
			$group_relead_ex=explode(",",$group_relead);


			$keyword_search_array=$List['keyword_search'];
			//print_r($keyword_search_array);
			$keyword_search_data=unserialize(base64_decode($keyword_search_array));
			//print_r($keyword_search);
			$i=0;
			for($i=0;$i<count($keyword_search_data); $i++){
				$keyword_search .=$keyword_search_data[$i]['keyword'].",";
			}
			$keyword_search=substr($keyword_search, 0, -1);



			$description=htmlspecialchars_decode($List['description']);

			$op_date_year = date("Y");
			$op_date_month = date("m");
			$op_date_day = date("d");
			$op_date_hour = date("H");
			$op_date_minute = date("i");
			//list($op_front, $op_bottom) = explode(" ", $List['date_career_up']);
			//list($op_date_year, $op_date_month, $op_date_day) = explode("-", $op_front);
			//list($op_date_hour,$op_date_minute,) = explode(":", $op_bottom);
		}
	function search_array_post($needle,$array)
	{
		foreach($array as $key => $value)
			if ($value==$needle)
			return true;
		return false;
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
                    <p class="title_txt">Title</p>
                    <input id="post_title" type="text" name="title_news" value="<?php echo $title;?>" />
                </div>
				

				<div class="clear">
                	<p class="title_txt">Keyword Search Job</p>
                    <input id="post_title" type="text" name="keyword_search" value="<?php echo $keyword_search;?>" />
                </div>

				<div class="clear">
				<p class="title_txt">Description</p>
				<div id="post_container" class="clearfix">
					<div id="post_tabs" class="clearfix post_edit_block">
						<div class="tab_container">
							<div class="editor-container" id="content-editor-container">
								
								<!--contents-->
								<textarea id="bcontent" name="bcontent" cols="40" style="height: 150px;"><?php echo $description; ?></textarea>
							</div>
						</div>
					</div>
				</div>
                </div>
                

                <div class="clear">
                	<p class="title_txt" style="margin:10px 0 10px 0;">CATEGORY RELATED(Select box)</p>
                    <div class="clear" style="border:1px solid #CCC; background:#F5F5F5;">
                    	<div id="tree" style="margin:10px auto; padding:10px;">
                            		
                            		<!--Begin code tree-->
                                  <?php 
                                    $Data_parent=To_Get_Data("`category`"," and `id`!=1 and `parent_id` is NUll order by `id` ASC","`id`,`name`,`key_name`");
									if($Data_parent['cnt'] > 0){
										
									echo "<ul class=clear>";
									$count_parent_cate=$Data_parent['cnt'];
									for($m=0; $m<$count_parent_cate; $m++){
										$List_parent = $Data_parent[$m];
										$id_parent=$List_parent['id'];
										$name_parent=$List_parent['name'];
										$name_parent_us=$List_parent['key_name'];
										?>
                                        <li>
                                        <input type="checkbox" name="check_box[]" value="<?php echo $id_parent; ?>" <?php if($id_parent==$id_f):echo "disabled";endif; ?>  <?php if(search_array_post($id_parent,$group_relead_ex)): echo "checked";endif; ?>>
                                        <label <?php if($id_parent==$id_f):echo "style='color:#960;'";endif; ?> ><?php echo $name_parent; ?> (<?php echo $name_parent_us; ?>)  "<i>ID:<b><?php echo $id_parent; ?></b></i>"</label>
                                        	
                                        		<!--Begin Chilrent-->
                                                	<?php 
									 $Data_chil=To_Get_Data("`category`"," and `parent_id`='$id_parent' order by `id` ASC","`id`,`name`");
									 if($Data_chil['cnt'] > 0)
									 {
										 echo "<ul>";
										 $count_chil_cate=$Data_chil['cnt'];
										 for($j=0; $j<$count_chil_cate; $j++)
										 {
											 $List_chil = $Data_chil[$j];
											 $id_chil=$List_chil['id'];
											 $name_chil=$List_chil['name'];
											 ?>
                                             <li>
                                             <input type="checkbox" name="check_box[]" value="<?php echo $id_chil; ?>" <?php if($id_chil==$id_f):echo "disabled";endif; ?> <?php if(search_array_post($id_chil,$group_relead_ex)): echo "checked";endif; ?>>
                                             <label <?php if($id_chil==$id_f):echo "style='color:#960;'";endif; ?>><?php echo $name_chil; ?>  "<i>ID:<b><?php echo $id_chil; ?></b></i>"</label>
                                            </li>
                                             <?php 
										 }
										 echo "</ul>";
									 }
												?>
                                            	<!--End Chilrent-->
                                            
                                     	</li>
                                   <?php 
										}
										
									echo "</ul>";
									
									}
									?>
                                    
                                    </ul>
                                    <!--End code tree-->
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
		//CKEDITOR.replace('bcontent', {width:'100%', height:'300'});
		CKEDITOR.replace('bcontent',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'150'
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