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
			$List = Get_Data("consultant", "and consultant_ID = $id_f");
			$op_vis_str = ($List['consultant_Status'] == "0") ? "Public" : "Draft";
			$op_vis = $List['consultant_Status'];
			$title = $List['consultant_Name'];


			//$consultant_Content=htmlspecialchars_decode($List['consultant_Content']);
			//$consultant_Other = htmlspecialchars_decode($List['consultant_Other']);


			//$consultant_Content=mb_convert_encoding($List['consultant_Content'],"UTF-8","HTML-ENTITIES");
			//$consultant_Other=mb_convert_encoding($List['consultant_Other'],"UTF-8","HTML-ENTITIES");

			$consultant_Content=$List['consultant_Content'];
			$consultant_Other = $List['consultant_Other'];
			$consultant_short_excerpt=$List['consultant_short_excerpt'];
			$consultant_Info  = $List['consultant_Info'];



			$consultant_kc_consult_blog=htmlspecialchars_decode($List['consultant_kc_consult_blog']);


			$GCDF=$List['GCDF'];
			
			$thumbnail=$List['consultant_Thumb'];
			$consultant_position=$List['position_cp'];
			$GCDF_view=  htmlspecialchars_decode($List['GCDF_view']);
 			 $report_link=htmlspecialchars_decode($List['report_link']);
			 $column_link=htmlspecialchars_decode($List['column_link']);

			 $consultant_set_fure=$List['public_seo_img'];

			$consultant_entry_id=$List['consultant_entry_id'];

			 
			 $seo_keyword=htmlspecialchars_decode($List['seo_keyword']);
			 $seo_description=htmlspecialchars_decode($List['seo_description']);
			 $seo_og_description=htmlspecialchars_decode($List['seo_og_description']);
			 $seo_og_title=htmlspecialchars_decode($List['seo_og_title']);

			 $seo_add_thumb_meta=$List['seo_add_thumb_meta'];
			$thumbnail_alt=$List['consultant_Thumb_alt'];
			list($op_front, $op_bottom) = explode(" ", $List['consultant_Date']);
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
<form name="board" id="board" method="post" action="post/board_proc.php"  enctype="multipart/form-data">
	<input type="hidden" name="sid" value="<?php echo $sid; ?>" />
        <input type="hidden" name="model" value="<?php echo $op; ?>" />
        <input type="hidden" name="id" value="<?php echo $id_f; ?>" />

	<div id="content_body" class="fl">
		<div id="post_body" class="clearfix">
			<div id="post_body_content">
				<div class="clear">
                <p class="title_txt">コンサルタント お名前</p>
                <input id="post_title" type="text" name="consultant_Name" value="<?php echo $title; ?>" />
                </div>
                <div class="clear">
                <p class="title_txt">Postion</p>
                <input id="post_title" type="text" name="consultant_position" value="<?php echo $consultant_position; ?>" />
                </div>
                
              <div style="margin:10px;" class="clear">
                <p class="title_txt">GCDFマーク</p>
               		<div class="radiobox clear">
                	  <label>
                	    <input type="radio" name="GCDF" value="0" id="GCDF0"<?php if(empty($GCDF) || $GCDF==0): 
						echo "checked"; endif;
						 ?> >
                	    None</label>
                	  
                	  <label>
                	    <input type="radio" name="GCDF" value="1" id="GCDF1" <?php if($GCDF==1): 
						echo "checked"; endif;
						 ?> >
                	    GCDF</label>
                	  </div>
                      <div class="clear GCDF_invail">
                      		 <p class="title_txt red">プロフィール画像＆GCDF</p>
                            <div id="post_container" class="clearfix">
                                <div id="post_tabs" class="clearfix post_edit_block">
                                    <div class="tab_container">
                                        <div class="editor-container" id="content-editor-container">
                                            
                                            <!-- 내용 -->
                                            <textarea id="GCDF_content" name="GCDF_content" cols="40" style="height: 295px;"><?php echo $GCDF_view; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>	
                      </div>
           	    
                </div>
                

				 <div class="clear">
	                <p class="title_txt">Consultant Short Excerpt</p>
						<div id="post_container" class="clearfix">
							<div id="post_tabs" class="clearfix post_edit_block">
								<div class="tab_container">
									<div class="editor-container" id="content-editor-container">
										
										<!-- 내용 -->
										<textarea id="consultant_short_excerpt" name="consultant_short_excerpt" cols="40" style="height: 200px;"><?php echo $consultant_short_excerpt; ?></textarea>
									</div>
								</div>
							</div>
						</div>
				</div>


				<div class="clear">
                <p class="title_txt">メインコンテンツ</p>
				<div id="post_container" class="clearfix">
					<div id="post_tabs" class="clearfix post_edit_block">
						<div class="tab_container">
							<div class="editor-container" id="content-editor-container">
								
								<!-- 내용 -->
								<textarea id="consultant_Info" name="consultant_Info" cols="40" style="height: 295px;"><?php echo $consultant_Info; ?></textarea>
							</div>
						</div>
					</div>
				</div>
				</div>
                <div class="clear">
                <p class="title_txt">サブコンテンツ ex)キャリアコンサルトしてのモットーは？</p>
				<div id="post_container" class="clearfix">
					<div id="post_tabs" class="clearfix post_edit_block">
						<div class="tab_container">
							<div class="editor-container" id="content-editor-container">
								
								<!-- 내용 -->
								<textarea id="consultant_Other" name="consultant_Other" cols="40" style="height: 295px;"><?php echo $consultant_Other; ?></textarea>
							</div>
						</div>
					</div>
				</div>
				</div>
                <div class="clear">
				<p class="title_txt">経歴・得意分野・実践紹介</p>
				<div id="post_container" class="clearfix">
					<div id="post_tabs" class="clearfix post_edit_block">
						<div class="tab_container">
							<div class="editor-container" id="content-editor-container">
								
								<!-- 내용 -->
								<textarea id="consultant_Content" name="consultant_Content" cols="40" style="height: 295px;"><?php echo $consultant_Content; ?></textarea>
							</div>
						</div>
					</div>
				</div>
                </div>
                <div class="clear">
                <p class="title_txt">担当企業レポートヘッドハンターの目</p>
                <input id="post_title" type="text" name="report_link" value="<?php echo $report_link; ?>" />
                </div>
                 <div class="clear">
                <p class="title_txt">担当コラムキャリアアップコラム</p>
                <input id="post_title" type="text" name="column_link" value="<?php echo $column_link; ?>" />
                </div>
                
				<br />
				<div class="clear">
                	<p class="title_txt">Description Author(KC-consul Blog)</p>
               		<div id="post_container" class="clearfix">
                       <textarea id="description_kc_consul_blog" name="description_kc_consul_blog" cols="40" style="height: 50px; width:100%;"><?php echo $consultant_kc_consult_blog;?></textarea>
                    </div>
                </div>
				<br />
				 <div class="clear">
               	 	<p class="title_txt">Consultant entry ID</p>
                	<input id="post_title" type="text" name="consultant_entry_id" value="<?php echo $consultant_entry_id; ?>" />
                </div>

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
		</div>
			
			<?php include_once("form_left.php"); ?>

		</div>
	</div>
</form>

</div>
<script type="text/javascript">
		jQuery(function($){
		//$("#post_title").Watermark("Enter title here");
		//CKEDITOR.replace('consultant_Info', {width:'100%', height:'100'});
		CKEDITOR.replace('consultant_Info',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		CKEDITOR.instances['consultant_Info'];
		

		CKEDITOR.replace('consultant_short_excerpt',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		CKEDITOR.instances['consultant_short_excerpt'];


		//CKEDITOR.replace('consultant_Other', {width:'100%', height:'100'});
		CKEDITOR.replace('consultant_Other',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'100'
                 }
		);
		CKEDITOR.instances['consultant_Other'];
		
		//CKEDITOR.replace('consultant_Content', {width:'100%', height:'200'});
		CKEDITOR.replace('consultant_Content',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'200'
                 }
		);
		CKEDITOR.instances['consultant_Content'];
		
		//CKEDITOR.replace('GCDF_content', {width:'100%', height:'200'});
		CKEDITOR.replace('GCDF_content',{
                  width: '100%',
                  resize_maxWidth: '100%',
                  resize_minWidth: '100%', 
				  height:'200'
                 }
		);
		CKEDITOR.instances['GCDF_content'];
		
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