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
			$List = Get_Data("company_interviews", "and company_interviews_id = $id_f");
			$op_vis_str = ($List['company_interviews_status'] == "0") ? "Public" : "Draft";
			$op_vis = $List['company_interviews_status'];
			$title = $List['company_interviews_title'];
			$subtitle=$List['company_interviews_subtile'];
			
			$company_interviews_description = htmlspecialchars_decode($List['company_interviews_description']);
			$company_interviews_content=htmlspecialchars_decode($List['company_interviews_content']);
			$thumbnail_upload_csv=$List['company_interviews_file_csv']; 
			$seo_keyword=htmlspecialchars_decode($List['seo_keyword']);
			$seo_description=htmlspecialchars_decode($List['seo_description']);
			$seo_og_description=htmlspecialchars_decode($List['seo_og_description']);
			$seo_og_title=htmlspecialchars_decode($List['seo_og_title']);
			$seo_add_thumb_meta=$List['seo_add_thumb_meta']; 
			$thumbnail_alt=$List['company_interviews_main_thumbnail_alt'];
			$thumbnail=$List['company_interviews_main_thumbnail'];
			
			$company_interviews_subjectMenu=$List['company_interviews_subjectMenu'];
			
			$index_thumbnail_alt=$List['company_interviews_thumbnail_index_alt'];
			//$consultant_set_fure=$List['consultant_add_thumbnail'];
		 	$consultant_set_fure1=$List['company_interviews_thumbnail_index'];
			
			
			
			$company_interviews_tag=$List['company_interviews_tag'];
			//$company_interviews_tag_slug=$List['company_interviews_tag_slug'];
			$company_interviews_slug_subject=$List['slug_subject'];
            $company_interviews_subject=$List['company_interviews_subject'];
			

			list($op_front, $op_bottom) = explode(" ", $List['company_interviews_date']);
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
 <style type="text/css">
 	fieldset {
    padding:20px 0px;
    border:1px solid #666;
    border-radius:8px;
    box-shadow:0 0 10px #666;
}
legend {
    float:left;
    margin-top:-20px;
	font-weight:bold;
	color:#C00;
	background:#FFF;
	padding:2px 5px;
}
legend + * {
    clear:both;
}
 </style>
<form name="board" id="board" method="post" action="post/board_proc.php" enctype="multipart/form-data" >
	<input type="hidden" name="sid" value="<?php echo $sid; ?>" />
        <input type="hidden" name="model" value="<?php echo $op; ?>" />
        <input type="hidden" name="id" value="<?php echo $id_f; ?>" />
	<div id="content_body" class="fl">
		<div id="post_body" class="clearfix">
			<div id="post_body_content">
            
           <div class="clear" style="padding:5px 0; background-color:#F3F3F3;">
                  	
                    <div class="clear">
                        <p class="title_txt">Title</p>
                        <input id="post_title" class="title_company" type="text" name="title_interview" value="<?php echo $title;?>" />
                    </div>
                        
                    <div class="clear">
                        <p class="title_txt">Sub Title</p>
                        <input id="post_title" class="subtitle_company" type="text" name="subtitle_interview" value="<?php echo $subtitle;?>" />
                    </div>
                        
                        
                     <div class="clear">
                        <p class="title_txt">Excerpt</p>
                        <div id="post_container" class="clearfix">
                            <div id="post_tabs" class="clearfix post_edit_block">
                                <div class="tab_container">
                                    <div class="editor-container" id="content-editor-container">
                                        
                                        <!-- 내용 -->
                                        <textarea id="company_interviews_description" name="company_interviews_description" cols="40" style="height: 295px;"><?php echo $company_interviews_description; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                       </div>
                       
                       <div class="clear">
                            <!--Code upload csv-->
                             <p class="title_txt">Company Interview CSV</p>
                                <div class="file_csv_up" id="text_input_file">
                                <input type="text" name="csv_upload_interview" id="csv_upload_interview" value="<?php echo $thumbnail_upload_csv; ?>" />
                                </div>
                                 <div id="csv_upload"><input type="file" id="csv" name="csv" />Choose File</div>
                                <div class="clear"></div>
                        </div>
                      
              </div>
                
               <div class="clear">
                	<p class="title_txt"><b style="color:#C00">Company Name (*)</b>(Language input Latin)</p>
                	<input id="post_title" type="text" class="company_interviews_tag" name="company_interviews_tag" value="<?php echo $company_interviews_tag;?>" />
                </div>
                <div class="clear" style="display:none;">
                	<p class="title_txt">Slug Auto</p>
                	<input id="post_title" type="text" class="slug_company" name="company_interviews_tag_slug" value="<?php echo $company_interviews_tag_slug;?>" style="background:#D4D4D4;"/>
                </div>
                
                <div class="clear">
                	<p class="title_txt">Subject(Ex: 企業概要, 求める人材, カルチャー, 候補者にひとこと )</p>
                	<input id="post_title" type="text" name="company_interviews_subject" value="<?php echo $company_interviews_subject;?>" />
                </div>
                
                <div class="clear">
                	<p class="title_txt">Subject-Detail(Ex: 企業概要, 求める人材, カルチャー, 候補者にひとこと )</p>
                	<input id="post_title" type="text" name="company_interviews_subjectMenu" value="<?php echo $company_interviews_subjectMenu;?>" />
                </div>
                

				 <div class="clear">
                	<p class="title_txt">Slug Subject("Latin input" ex: subject-1, subject-2)</p>
                	<input id="post_title" type="text" class="slug_subject" name="company_interviews_slug_subject" value="<?php echo $company_interviews_slug_subject;?>" style="background:#D4D4D4;"/>
                </div>

                <div class="clear">
                  <p class="title_txt">Content</p>
                   <div id="post_container" class="clearfix">
                        <div id="post_tabs" class="clearfix post_edit_block">
                            <div class="tab_container">
                                <div class="editor-container" id="content-editor-container">
                                    
                                    <!--contents-->
                                    <textarea id="company_interviews_content" name="company_interviews_content" cols="40" style="height: 295px;"><?php echo $company_interviews_content;?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
          		  <!-- SEO-->
                 <div class="clear">
                    <p class="title_txt">SEO Keyword:&nbsp;ヘッドハンティング,転職支援,人材紹介,サーチファーム,エグゼクティブサーチ,ヘッドハンター</p>
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
                    <p class="title_txt">SEO Description: 例え）クライス&amp;カンパニーのコンサルタントがヘッドハンターの視点で注目の企業を分析します。【Vol.331】世界を目指すベンチャー企業に今入る！ （コンサルタント：岡田 麗）</p>
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

				<div class="clear">
                     <p class="title_txt">SEO Og:Title(Facebook):</p>
                     <div id="post_container" class="clearfix">
                         <div id="post_tabs" class="clearfix post_edit_block">
                              <div class="tab_container">
                                    <div class="editor-container" id="content-editor-container">
                                      <textarea id="seo_og_title" name="seo_og_title" cols="40" style="height: 100px;"><?php echo $seo_og_title;?></textarea>
                                </div>
                           </div>
                       </div>
                    </div>
                </div>

				<div class="clear">
                     <p class="title_txt">SEO Og:Description(Facebook):</p>
                     <div id="post_container" class="clearfix">
                         <div id="post_tabs" class="clearfix post_edit_block">
                              <div class="tab_container">
                                    <div class="editor-container" id="content-editor-container">
                                      <textarea id="seo_og_description" name="seo_og_description" cols="40" style="height: 100px;"><?php echo $seo_og_description;?></textarea>
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
		CKEDITOR.replace('company_interviews_content',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'300'
                 }
		);
		CKEDITOR.instances['company_interviews_content'];
		
		CKEDITOR.replace('company_interviews_description',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		CKEDITOR.instances['company_interviews_description'];
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

		CKEDITOR.replace('seo_og_description',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		CKEDITOR.instances['seo_og_description'];
		CKEDITOR.replace('seo_og_title',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		CKEDITOR.instances['seo_og_title'];
		
		});
	
</script>
<script src="js/jquery.autocomplete.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" media="all" />

<script type="text/javascript">
$(document).ready(function() {
	$('#csv').change(function(evt) {
       // alert($(this).val());
		$("#csv_upload_interview").val($(this).val());
		$("#csv_upload_interview").attr("value",$(this).val());
    });
	<?php 
		$Data_high_class=To_Get_Data("company_interviews"," and company_interviews_status=0"," DISTINCT company_interviews_tag_slug,company_interviews_tag,company_interviews_title,company_interviews_subtile,company_interviews_file_csv,company_interviews_description,company_interviews_thumbnail_index_alt,company_interviews_thumbnail_index");
		if($Data_high_class['cnt']>0):
			$i=0;
			$Data_all=array();
			for($i=0;$i<$Data_high_class['cnt']; $i++):
				$List_high_class = $Data_high_class[$i];
				array_push($Data_all, $List_high_class);
				$company_interviews_tag_slug=$List_high_class['company_interviews_tag'];
				$data_value_for.=$company_interviews_tag_slug.",";
			endfor;
			$data_value=substr($data_value_for, 0, -1);
			$List_Json= json_encode($Data_all);
	
	?>
	var Json_data=<?php echo $List_Json; ?>;
    var data_value = "<?php echo $data_value; ?>".split(",");
	$(".company_interviews_tag").autocomplete(data_value).result(function(){
			var set_txt=$(".company_interviews_tag").val();
			var index = findIndexByKeyValue(Json_data, "company_interviews_tag",set_txt);
			
			var title=Json_data[index]["company_interviews_title"];
			var company_interviews_tag_slug=Json_data[index]["company_interviews_tag_slug"];
			var company_interviews_subtile=Json_data[index]["company_interviews_subtile"];
			var company_interviews_file_csv=Json_data[index]["company_interviews_file_csv"];
			var company_interviews_description=Json_data[index]["company_interviews_description"];
			
			var company_interviews_description=Json_data[index]["company_interviews_description"];
			var index_thumbnail_alt=Json_data[index]["company_interviews_thumbnail_index_alt"];
			var feature_consultant_1=Json_data[index]["company_interviews_thumbnail_index"];
			
			$(".title_company").val(title);
			$(".subtitle_company").val(company_interviews_subtile);
			$("#csv_upload_interview").val(company_interviews_file_csv);
			CKEDITOR.instances['company_interviews_description'].setData(company_interviews_description);
			//$("#company_interviews_description").val(company_interviews_description);
			$(".slug_company").val(company_interviews_tag_slug);
			$('[name=index_thumbnail_alt]').val(index_thumbnail_alt) ;
			$('[name=feature_consultant_1]').val(feature_consultant_1) ;
		});
	<?php 
		endif;
	?>
	
});
function findIndexByKeyValue(arraytosearch, key, valuetosearch) {
 	//return arraytosearch.length;
	for (var i = 0; i < arraytosearch.length; i++) {
		//return arraytosearch[i][key];
	 	if (arraytosearch[i][key] == valuetosearch)
			{
				return i;
			}
	}
		return null;
	}
</script>
