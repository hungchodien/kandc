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
			
			$List = Get_Data("kc_saiyo_column", "and kc_saiyo_column_id = $id_f");
			$op_vis_str = ($List['kc_saiyo_column_status'] == "0") ? "Public" : "Draft";
			$op_vis = $List['kc_saiyo_column_status'];
			$title = $List['kc_saiyo_column_title'];
			//$news_excerpt=htmlspecialchars_decode($List['news_excerpt']);
			$slug_column=$List['kc_saiyo_column_slug'];
			$vol_number=$List['kc_saiyo_column_vol_number'];
			$kc_saiyo_column_content = htmlspecialchars_decode($List['kc_saiyo_column_content']);

			$seo_keyword=htmlspecialchars_decode($List['seo_keyword']);
			$seo_description=htmlspecialchars_decode($List['seo_description']);
			$seo_og_description=htmlspecialchars_decode($List['seo_og_description']);
			$seo_og_title=htmlspecialchars_decode($List['seo_og_title']);
			$seo_add_thumb_meta=$List['seo_add_thumb_meta']; 

			//$thumbnail=$List['news_thumnail'];
			list($op_front, $op_bottom) = explode(" ", $List['kc_saiyo_column_date']);
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
                <p class="title_txt"><b style="color:#C00;">slug</b>(vol番号を入力 / 例え：33 / URL表示例：http://www.kc-saiyo.com/column/backnumber/entry-33.html）  </p>
                <input id="post_title" class="slug_post" type="text" name="slug_column" value="<?php echo $slug_column;?>" />
                </div>
                <br />
                
            	<div class="clear">
                <p class="title_txt">Vol (例え: Vol.33)</p>
                <input id="post_title" class="vol_post" type="text" name="vol_number" value="<?php echo $vol_number;?>" />
                </div>
                <br />
                
				<div class="clear">
                <p class="title_txt">タイトル</p>
                <input id="post_title" class="title_post" type="text" name="title" value="<?php echo $title;?>" />
                </div>
                <br />
               <!-- <div class="clear">
                    <p class="title_txt">Excerpt</p>
                    <div id="post_container" class="clearfix">
                        <div id="post_tabs" class="clearfix post_edit_block">
                            <div class="tab_container">
                                <div class="editor-container" id="content-editor-container">
                                   <textarea id="excerpt" name="excerpt" cols="40" style="height: 295px;"><?php echo $news_excerpt; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
               <div class="clear">
                   <p class="title_txt">内容</p>
                   <div id="post_container" class="clearfix">
                        <div id="post_tabs" class="clearfix post_edit_block">
                            <div class="tab_container">
                                <div class="editor-container" id="content-editor-container">
                                    <!-- 내용 -->
                                    <textarea id="bcontent" name="bcontent" cols="40" style="height: 300px;"><?php echo $kc_saiyo_column_content;?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <br />

<script type="text/javascript">
	jQuery(document).ready(function(){    
   		$('#post_body_content .title_post').bind('input keyup keydown keypress', function(){
				var title_value=$(this).val();
				var vol_number=$('input.vol_post').val();
				var seo_description_auto="「"+title_value+"」というテーマでクライス＆カンパニー代表の丸山貴宏が企業の採用力アップの極意をお伝えいたします。";
				var seo_og_description_auto="「"+title_value+"」というテーマでクライス＆カンパニー代表の丸山貴宏が企業の採用力アップの極意をお伝えいたします。";
				var seo_og_title=""+vol_number+title_value;
				var seo_keyword="人材紹介,中途採用,転職エージェント,採用力,コラム";
				$('#seo_description').val(seo_description_auto);
				$('#seo_keyword').val(seo_keyword);
				$('#seo_og_title').val(seo_og_title);
				$('#seo_og_description').val(seo_og_description_auto);
		});     
		        
    	$('#post_body_content .vol_post').bind('input keyup keydown keypress', function(){
				var title_value=$('input.title_post').val();
				var vol_number=$(this).val();
				var seo_description_auto="「"+title_value+"」というテーマでクライス＆カンパニー代表の丸山貴宏が企業の採用力アップの極意をお伝えいたします。";
				var seo_og_description_auto="「"+title_value+"」というテーマでクライス＆カンパニー代表の丸山貴宏が企業の採用力アップの極意をお伝えいたします。";
				var seo_og_title=""+vol_number+title_value;
				var seo_keyword="人材紹介,中途採用,転職エージェント,採用力,コラム";
				$('#seo_description').val(seo_description_auto);
				$('#seo_keyword').val(seo_keyword);
				$('#seo_og_title').val(seo_og_title);
				$('#seo_og_description').val(seo_og_description_auto);
		});    
		
	});
</script>            
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
				  height:'100'
                 }
		);
		CKEDITOR.instances['excerpt'];
		*/
		});
	
</script>