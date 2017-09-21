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
			$List = Get_Data("kc_category_interview", "and kc_category_interview_id = $id_f");
			$op_vis_str = ($List['kc_category_interview_status'] == "0") ? "Public" : "Draft";
			$op_vis = $List['kc_category_interview_status'];
			
			$title_ja = $List['kc_category_interview_name_ja'];
			$title_en = $List['kc_category_interview_name_en'];
			
			$seo_keyword=htmlspecialchars_decode($List['seo_keyword']);
			$seo_description=htmlspecialchars_decode($List['seo_description']);
			$seo_add_thumb_meta=$List['seo_add_thumb_meta'];
			$seo_og_description=htmlspecialchars_decode($List['seo_og_description']);
			$seo_og_title=htmlspecialchars_decode($List['seo_og_title']);
			
			list($op_front, $op_bottom) = explode(" ", $List['kc_category_interview_date']);
			list($op_date_year, $op_date_month, $op_date_day) = explode("-", $op_front);
			list($op_date_hour,$op_date_minute,) = explode(":", $op_bottom);
		}

?>
<div class="content_bg_icon"><img src="../img/main/post_bg_icon.png" alt="" title="" /></div>
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
	<form name="board" id="board" method="post" action="post/board_proc.php" enctype="multipart/form-data">
	<input type="hidden" name="sid" value="<?php echo $sid; ?>" />
     <input type="hidden" name="model" value="<?php echo $op; ?>" />
     <input type="hidden" name="id" value="<?php echo $id_f; ?>" />


	<div id="content_body" class="fl">
		<div id="post_body" class="clearfix">
			<div id="post_body_content">
            	<div class="clear">
            	 	<p class="title_txt">Name Japan Interview</p>
                    <div id="post_container" class="clearfix">
						<input id="post_title" type="text" name="category_interview_title_ja" value="<?php echo $title_ja;?>" />
                    </div>
                </div>
               <br />
               <div class="clear">
            	 	<p class="title_txt">Name Englist Interview</p>
                    <div id="post_container" class="clearfix">
						<input id="post_title" type="text" name="category_interview_title_en" value="<?php echo $title_en;?>" />
                    </div>
                </div>
               <br />
               <!-- SEO-->
                 <div class="clear">
                    <p class="title_txt">SEO Keyword:&nbsp;ヘッドハンティング,転職支援,人材紹介,サーチファーム,エグゼクティブサーチ,ヘッドハンター</p>
                    <div id="post_container" class="clearfix">
                       <!-- 내용 -->
                       <textarea id="seo_keyword" name="seo_keyword" cols="40" style="height: 50px; width:100%;"><?php echo $seo_keyword;?></textarea>
                    </div>
                </div>
               <br />
               <div class="clear">
                    <p class="title_txt">SEO Description: 例え）クライス&amp;カンパニーのコンサルタントがヘッドハンターの視点で注目の企業を分析します。【Vol.331】世界を目指すベンチャー企業に今入る！ （コンサルタント：岡田 麗）</p>
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
               
               
			</div><!--post_body-->

			<?php include_once("form_left.php"); ?>

		</div>
	</div>
</form>

</div>