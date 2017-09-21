<script type="text/javascript">
			//$("#post_title").Watermark("Enter title here");
	jQuery(function($){
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