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
			//$mode = "insert";
		}
		else
		{
			$List = Get_Data("kc_consul_feature_company", "and kc_consul_feature_company_id = $id_f");
			$op_vis_str = ($List['kc_consul_feature_company_status'] == "0") ? "Public" : "Draft";
			$op_vis = $List['kc_consul_feature_company_status'];
			$title = $List['kc_consul_feature_company_title'];
			
			
			$content_company_point=htmlspecialchars_decode($List['kc_consul_feature_company_point']);
			$content_company_interview=htmlspecialchars_decode($List['kc_consul_feature_company_interview']);
			
			
			$seo_keyword=htmlspecialchars_decode($List['seo_keyword']);
			$seo_description=htmlspecialchars_decode($List['seo_description']);
			$thumbnail_upload_csv=$List['kc_consul_feature_company_csv']; 
			$seo_add_thumb_meta=$List['seo_add_thumb_meta'];
			
			$thumbnail=$List['kc_consul_feature_company_logo'];
			$thumbnail_alt=$List['index_thumbnail_alt'];
			
			list($op_front, $op_bottom) = explode(" ", $List['kc_consul_feature_company_date']);
			list($op_date_year, $op_date_month, $op_date_day) = explode("-", $op_front);
			list($op_date_hour,$op_date_minute,) = explode(":", $op_bottom);
		}

?>
<!--<script type="text/javascript">
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
		
</script>-->
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
                <input id="post_title" type="text" name="title_feature_job" value="<?php echo $title;?>" />
                </div>
                
                
               <div class="clear">
               <p class="title_txt">Point</p>
               <div id="post_container" class="clearfix">
					<div id="post_tabs" class="clearfix post_edit_block">
						<div class="tab_container">
							<div class="editor-container" id="content-editor-container">
								
								<!-- 내용 -->
								<textarea id="bcontent" name="bcontent" cols="40" style="height: 295px;"><?php echo $content_company_point;?></textarea>
							</div>
						</div>
					</div>
				</div>
                </div>
                
                <div class="clear">
               <p class="title_txt">Interview</p>
               <div id="post_container" class="clearfix">
					<div id="post_tabs" class="clearfix post_edit_block">
						<div class="tab_container">
							<div class="editor-container" id="content-editor-container">
								
								<!-- 내용 -->
								<textarea id="bcontent_1" name="bcontent_1" cols="40" style="height: 295px;"><?php echo $content_company_interview;?></textarea>
							</div>
						</div>
					</div>
				</div>
                </div>
                
                
                <div class="clear">
                	<!--Code upload csv-->
                     <p class="title_txt">CSV Upload</p>
                    	<div class="file_csv_up" id="text_input_file">
             			<input type="text" name="csv_upload_interview" id="csv_upload_interview" value="<?php echo $thumbnail_upload_csv; ?>" />
             			</div>
            			 <div id="csv_upload"><input type="file" id="csv" name="csv" />Choose File</div>
						<div class="clear"></div>
              	 </div>
                 
                
			 <div style="margin-top:5px;"></div>
               <!--Load consultant-->
				
                
                 <!-- SEO-->
                 <div class="clear">
                    <p class="title_txt">SEO Key Word:</p>
                    <div id="post_container" class="clearfix">
                        <div id="post_tabs" class="clearfix post_edit_block">
                            <div class="tab_container">
                                <div class="editor-container" id="content-editor-container">
                                    
                                    <!-- 내용 -->
                                    <textarea id="seo_keyword" name="seo_keyword" cols="40" style="height: 100px;"><?php echo $seo_keyword;?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
               <div class="clear">
                    <p class="title_txt">SEO Description:</p>
                    <div id="post_container" class="clearfix">
                        <div id="post_tabs" class="clearfix post_edit_block">
                            <div class="tab_container">
                                <div class="editor-container" id="content-editor-container">
                                    
                                    <!-- 내용 -->
                                    <textarea id="seo_description" name="seo_description" cols="40" style="height: 200px;"><?php echo $seo_description;?></textarea>
                                </div>
                            </div>
                        </div>
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
		//CKEDITOR.replace('bcontent', {width:'100%', height:'300'});
		CKEDITOR.replace('bcontent',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'200'
                 }
		);
		CKEDITOR.instances['bcontent'];
		//CKEDITOR.replace('excerpt', {width:'100%', height:'100'});
		
		CKEDITOR.replace('bcontent_1',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'200'
                 }
		);
		CKEDITOR.instances['bcontent_1'];
		
		CKEDITOR.replace('seo_keyword',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		CKEDITOR.instances['seo_keyword'];
		CKEDITOR.replace('seo_description',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'150'
                 }
		);
		CKEDITOR.instances['seo_description'];
		
		
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