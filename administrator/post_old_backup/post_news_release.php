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
		}
		else
		{
			$List = Get_Data("news_release", "and news_release_id = $id_f");
			$op_vis_str = ($List['news_release_status'] == "0") ? "Public" : "Draft";
			$op_vis = $List['news_release_status'];
			
			
			$title = $List['news_release_title'];
			//$thumbnail=$List['Thumbnail_henter_eye'];
			$attach_file_pdf=$List['news_release_attach_file'];
			$news_release_excerpt = htmlspecialchars_decode($List['news_release_excerpt']);
			$bcontent = htmlspecialchars_decode($List['news_release_content']);
			
			
			$seo_keyword=htmlspecialchars_decode($List['seo_keyword']);
			$seo_description=htmlspecialchars_decode($List['seo_description']);
			$seo_og_description=htmlspecialchars_decode($List['seo_og_description']);
			$seo_og_title=htmlspecialchars_decode($List['seo_og_title']);
			$seo_add_thumb_meta=$List['seo_add_thumb_meta']; 
			//$thumbnail_alt=$List['Thumbnail_henter_eye_alt'];
			list($op_front, $op_bottom) = explode(" ", $List['news_release_date']);
			list($op_date_year, $op_date_month, $op_date_day) = explode("-", $op_front);
			list($op_date_hour,$op_date_minute,) = explode(":", $op_bottom);		
		}

?>
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
                	<input class="vol_hun" id="post_title" type="text" name="title" value="<?php echo $title;?>" />
                </div>
                
				<br />  
               <!--<div class="clear">
                    <p class="title_txt">Excerpt</p>
                    <div class="clear">
                         <textarea id="excerpt" name="excerpt" cols="40" style="height: 150px; width:100%;"><?php echo $news_release_excerpt;?></textarea>
                     </div>
                </div>-->
               <div class="clear">
                    <p class="title_txt">Content</p>
                    <div class="clear">
                          <!-- 내용 -->
                          <textarea id="bcontent" name="bcontent" cols="40" style="height: 200px; width:100%;"><?php echo $bcontent;?></textarea>
                     </div>
                </div>
              <br />  
			   <div class="clear">
                	<!--Code upload csv-->
                     <p class="title_txt">Attach PDF file</p>
                    	<div class="file_csv_up" id="text_input_file">
             			<input type="text" name="pdf_upload_file" id="pdf_upload_file" value="<?php echo $attach_file_pdf; ?>" />
             			</div>
            			 <div id="csv_upload"><input type="file" id="csv" name="pdf_upload" />Upload</div>

							<div class="clear"></div>
               </div>
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
		
		CKEDITOR.replace('bcontent',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		CKEDITOR.instances['bcontent'];
		
	});
	
</script>
<script type="text/javascript">
$(document).ready(function() {
	$('#csv').change(function(evt) {
       // alert($(this).val());
		$("#pdf_upload_file").val($(this).val());
		$("#pdf_upload_file").attr("value",$(this).val());
    });
});
</script>
