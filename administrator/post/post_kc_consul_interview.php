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
			$List = Get_Data("`kc_interview`", "and `kc_interview_id` = $id_f");
			$op_vis_str = ($List['kc_interview_status'] == "0") ? "Public" : "Draft";
			$op_vis = $List['kc_interview_status'];
			$title = $List['kc_interview_title'];
			$page_number=$List['kc_interview_page_number'];
			$vol_number=$List['kc_interview_vol_number'];
			$vol_number_slug=$List['kc_interview_vol_number_slug'];
			$company_name=$List['kc_interview_company_name'];
			$company_id=$List['kc_interview_company_id'];
			$excerpt_kc_interview=htmlspecialchars_decode($List['kc_interview_excerpt']);
			$highlights=$List['highlights'];

			$link_realeated=$List['kc_interview_realeated_link'];
			$link_realeated_check=$List['kc_interview_realeated_link_check_hide'];
			
			$seo_keyword=htmlspecialchars_decode($List['seo_keyword']);
			$seo_description=htmlspecialchars_decode($List['seo_description']);
			$seo_og_description=htmlspecialchars_decode($List['seo_og_description']);
			$seo_og_title=htmlspecialchars_decode($List['seo_og_title']);

			$seo_add_thumb_meta=$List['seo_add_thumb_meta']; 
			
			$thumbnail_alt=$List['kc_interview_thumbnail_alt'];
			$main_thumbnail_alt=$List['kc_interview_main_alt'];
			$backnumber_thumbnail_alt=$List['kc_interview_backnumber_alt'];
			$thumbnail=$List['kc_interview_thumbnail'];
			$thumbnail1=$List['kc_interview_backnumber'];
			$thumbnail2=$List['kc_interview_main_img'];
 			
			
			list($op_front, $op_bottom) = explode(" ", $List['kc_interview_date']);
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
	                <p class="title_txt"><b style="color:#C00">Vol (例え: vol33)</b></p>
	                <input class="vol_number_slug" id="post_title" type="text" name="vol_number_slug" value="<?php echo $vol_number_slug;?>" />
                </div>
                <br/>	
                <div class="clear">
	                <p class="title_txt">Vol (例え: Vol.33)</p>
	                <input class="vol_number" id="post_title" type="text" name="vol_number" value="<?php echo $vol_number;?>" />
                </div>
                <br/>
                <div class="clear">
	                <p class="title_txt">ページ番号(例え: 1) </p>
	                <input class="page_number" id="post_title" type="text" name="page_number" value="<?php echo $page_number;?>" />
                </div>
                <br/>
				
                <div class="clear hightligths_group" style="padding:10px; margin:0 0 10px 0; background:#E2DDC0;<?php if($page_number!=1):echo "display:none;";endif; ?>">
	                <label for="highlights"><b style="color:#7d7d7d; font-size:16px;">注目インタビューに表示する</b>
	                  <input type="checkbox" id="highlights"  name="highlights" value="1" <?php if($highlights==1): echo 'checked="checked"'; endif; ?> <?php if($page_number!=1):echo "disabled ";endif; ?>/>
                    </label>
                   
                </div>
                <br />
                <div class="clear">
	                <p class="title_txt">タイトル</p>
	                <input class="title" id="post_title" type="text" name="title" value="<?php echo $title;?>" />
                </div>
                <br/>
				<div class="clear">
	                <p class="title_txt">企業名</p>
	                <input class="company_name" id="post_title" type="text" name="company_name" value="<?php echo $company_name;?>" />
                </div>
                <br/>
                <div class="clear">
	                <p class="title_txt">企業ID </p>
	                <input class="company_id" id="post_title" type="text" name="company_id" value="<?php echo $company_id;?>" />
                </div>
            	<br/>
			<script type="text/javascript">
				jQuery(document).ready(function($){
					$('.add_postion_tbl').delegate('a.add_postion', 'click', function() {
						 var count_div_group_postion=$(this).parent().parent().find('.group_postion_field').index()+1; 
						var html_add_item_postion='<div class="group_postion_field item_list_postion'+count_div_group_postion+' clear"><br/><div class="clear"><p class="title_txt">役職</p><input class="postion" id="post_title" type="text" name="postion'+count_div_group_postion+'" value="" /></div><br/><div class="clear"><p class="title_txt">話者氏名(例:山田太郎) </p><input class="interviewee_fullname" id="post_title" type="text" name="interviewee_fullname'+count_div_group_postion+'" value="" /></div></div><!--group_postion_field-->';
						 $('.content_postion_group').append(html_add_item_postion);	
						 $(this).parent().parent().find(".content_postion_group").find(".postion_txt").val(count_div_group_postion);
					});
				});
			</script>
         <div class="clear container_append_postion" style="padding:10px 0; margin:10px 0; background:#F4F4F4; border-bottom:1px dashed #C60;border-top:1px dashed #C60;">   
             
             <?php 
	 			$content_postion=unserialize($List['kc_interview_postion']);
				$content_array_postion=@array_filter($content_postion);
				//print_r($content_array_postion);
	 		?> 
            	<div class="clear content_postion_group">  
             		<input type="hidden" class="postion_txt" name="postion_item" value="<?php if(count($content_array_postion)>=1):echo count($content_array_postion); else: echo "1"; endif; ?>" />  
             <?php
		 		if(!empty($content_array_postion)):
				for($j=0;$j<count($content_array_postion);$j++):
					$m=$j+1;
					//$group_item_postion_array=@array_filter($content_array_postion[$j]['group_item']);
					//$count_group_postion_item=count($group_item_postion_array);
					$postion_item=$content_array_postion[$j]['postion'];
					$interviewee_fullname=$content_array_postion[$j]['interviewee_fullname'];
					if(!empty($postion_item) && !empty($interviewee_fullname)):
		  ?>
          
	               <div class="group_postion_field item_list_postion<?php echo $m; ?>  clear"> 
		                <div class="clear">
			                <p class="title_txt">役職</p>
			                <input class="postion" id="post_title" type="text" name="postion<?php echo $m; ?>" value="<?php echo $postion_item; ?>" />
		                </div>
		                <br/>
		                <div class="clear">
			                <p class="title_txt">話者氏名(例:山田太郎) </p>
			                <input class="interviewee_fullname" id="post_title" type="text" name="interviewee_fullname<?php echo $m; ?>" value="<?php echo $interviewee_fullname; ?>" />
		                </div>
	                </div><!--group_postion_field-->
              
          
          <?php endif; endfor; ?>
           <?php else:?>   
             
	               <div class="group_postion_field item_list_postion1  clear"> 
		                <div class="clear">
			                <p class="title_txt">役職</p>
			                <input class="postion" id="post_title" type="text" name="postion1" value="" />
		                </div>
		                <br/>
		                <div class="clear">
			                <p class="title_txt">話者氏名(例:山田太郎)</p>
			                <input class="interviewee_fullname" id="post_title" type="text" name="interviewee_fullname1" value="" />
		                </div>
	                </div><!--group_postion_field-->
               
          <?php endif; ?>     
             </div><!--content_postion_group-->   
               
                <div class="clear add_postion_tbl add_link" style="padding:5px 0 10px 0;">
                      <a class="add add_postion r">+話者氏名を追加する</a>	
                </div> 
           </div><!--container_append_postion-->   
            <br/> 
            <div class="clear">
                  <p class="title_txt">説明文</p>
                  <div class="clear">
                       <textarea id="excerpt_kc_interview" name="excerpt_kc_interview" cols="40" style="height: 150px; width:100%;"><?php echo $excerpt_kc_interview;?></textarea>
                 </div>
           </div>    
            <br/> 
 <script type="text/javascript">
jQuery(document).ready(function($){
	  $('.add_part_item').delegate('a.add', 'click', function() {
		 var count_div_group_parent_1=$(this).parent().parent().index()+1; 
		 var count_div_group_1=$(this).parent().parent().find('.content_add_item_interview').find('.group_item_interview').length+1;
		 var html_add_item_1='<div class="group_item_interview item_part_c_'+count_div_group_parent_1+count_div_group_1+' clear"><div class="clear"><p class="title_txt">名前（例え：入江）</p><input id="post_title" type="text" name="content_left_kc_interview'+count_div_group_parent_1+count_div_group_1+'" value="" /></div><br/><div class="clear"><p class="title_txt">質問又は答え</p><textarea id="content_right_kc_interview" name="content_right_kc_interview'+count_div_group_parent_1+count_div_group_1+'" cols="40" style="height: 80px; width:100%;"></textarea></div></div><!--group_item_interview--> ';
		 $('.group_content_interview'+count_div_group_parent_1+' .content_add_item_interview').append(html_add_item_1);	
		 $(this).parent().parent().find(".field_group").find(".group_txt").val(count_div_group_1);
	});
	 $(document).on('click', '.live_add_part_c a.add', function(e) {
		 var length_item=$(this).parent().parent().find('.content_add_item_interview').find('.group_item_interview').length+1;
			var length_item_two=$(this).parent().parent().index()+1;
			var html_add_item_news='<div class="group_item_interview item_part_c_'+length_item_two+length_item+' clear"><div class="clear"><p class="title_txt">名前（例え：入江）</p><input id="post_title" type="text" name="content_left_kc_interview'+length_item_two+length_item+'" value="" /></div><br/><div class="clear"><p class="title_txt">質問又は答え</p><textarea id="content_right_kc_interview" name="content_right_kc_interview'+length_item_two+length_item+'" cols="40" style="height: 80px; width:100%;"></textarea></div></div><!--group_item_interview--> ';
			var newRow_item=$('.group_content_interview'+length_item_two+' .content_add_item_interview').append(html_add_item_news);	
			$(this).parent().parent().find(".field_group").find(".group_txt").val(length_item);		
	 });
	 $('.live_add_part_c').delegate('.add', 'click', function() {
		 	alert('ok');
		 });
		$('.add_part_group').delegate('.add', 'click', function() {	
		var count_div_group_parent=$('.group_content_interview').length+1; 
		var count_div_group=$('.group_content_interview .group_item_interview').length+1;
		var html_add_part_group='<div class="group_content_interview group_content_interview'+count_div_group_parent+' clear"><div class="field_group clear"><p class="title_txt">タイトル（Gold色）</p><input id="post_title" type="text" name="content_subtitle[]" value="" /><input class="group_txt" type="hidden" name="group_item[]" value="1" /></div><div class="clear content_add_item_interview"><div class="group_item_interview clear"><div class="clear"><p class="title_txt">名前（例え：入江）</p><input id="post_title" type="text" name="content_left_kc_interview'+count_div_group_parent+'1" value="" /></div><br/><div class="clear"><p class="title_txt">質問又は答え</p><textarea id="content_right_kc_interview" name="content_right_kc_interview'+count_div_group_parent+'1" cols="40" style="height: 80px; width:100%;"></textarea></div></div><!--group_item_interview--></div><!--content_add_item_interview--><div class="clear add_link live_add_part_c"><a class="add r">+会話を追加する</a></div></div><!--group_content_interview-->';		

		$('.content_add_group_interview').append(html_add_part_group );	
	});
});
</script>                
 <?php 
	 	$content_json=unserialize($List['kc_interview_content']);
		$content_array_group=@array_filter($content_json);
		//print_r($content_array_group);
	 ?>                  
     <!--Begin content detail field-->    
    <div class="container_content_interview clear">
    	
	        <div class="content_add_group_interview clear">       
	          <?php
		 		if(!empty($content_array_group)):
				for($j=0;$j<count($content_array_group);$j++):
				$m=$j+1;
				
				$group_item_array=@array_filter($content_array_group[$j]['group_item']);
				//print_r($group_item_array);
				$count_group_item=count($group_item_array);
		  	 ?>
			       <div class="group_content_interview group_content_interview<?php echo $m; ?> clear"> 
				            <div class="field_group clear">
				                <p class="title_txt">タイトル（Gold色）</p>
				                <input id="post_title" type="text" name="content_subtitle[]" value="<?php echo $content_array_group[$j]['subtitle']; ?>" />
			                    <input type="hidden" class="group_txt" name="group_item[]" value="<?php echo $count_group_item; ?>" />
				            </div> 
					              <div class="clear content_add_item_interview">
                                  		<?php 
											for($u=0;$u<$count_group_item;$u++):
											$n=$u+1;
										?> 
						              	<div class="group_item_interview item_part_c_<?php echo $m.$n; ?> clear">
									            <div class="clear">
									                <p class="title_txt">名前（例え：入江）</p>
									                <input id="post_title" type="text" name="content_left_kc_interview<?php echo $m.$n; ?>" value="<?php echo $group_item_array[$u]['content_left']; ?>" />
									            </div> 
									            
									            <div class="clear">
									                <p class="title_txt">質問又は答え</p>
									                <textarea id="content_right_kc_interview" name="content_right_kc_interview<?php echo $m.$n; ?>" cols="40" style="height: 80px; width:100%;"><?php echo $group_item_array[$u]['content_right']; ?></textarea>
									            </div> 
									      </div><!--group_item_interview-->
                                      	<?php 
											endfor;
										 ?>
					               </div><!--content_add_item_interview-->   
			                 <div class="clear add_link add_part_item">
			                      <a class="add r">+会話を追加する</a>	
			                 </div>
			     </div><!--group_content_interview--> 
	            <?php 
					endfor;
				?>
                <?php else:?>
                	<div class="group_content_interview group_content_interview1 clear"> 
				            <div class="field_group clear">
				                <p class="title_txt">タイトル（Gold色）</p>
				                <input id="post_title" type="text" name="content_subtitle[]" value="" />
			                    <input type="hidden" class="group_txt" name="group_item[]" value="1" />
				            </div> 
					              <div class="clear content_add_item_interview">
					              	<div class="group_item_interview  clear">
								            <div class="clear">
								                <p class="title_txt">名前（例え：入江）</p>
								                <input id="post_title" type="text" name="content_left_kc_interview11" value="" />
								            </div> 
								            
								            <div class="clear">
								                <p class="title_txt">質問又は答え</p>
								                <textarea id="content_right_kc_interview" name="content_right_kc_interview11" cols="40" style="height: 80px; width:100%;"></textarea>
								            </div> 
								      </div><!--group_item_interview-->
					               </div><!--content_add_item_interview-->   
			                 <div class="clear add_link add_part_item">
			                      <a class="add r">+会話を追加する</a>	
			                 </div>
			            </div><!--group_content_interview--> 
                <?php endif; ?>
	        </div><!--content_add_group_interview--> 
             
            <div class="clear add_link add_part_group">
                <a class="add r">+新しいタイトルを追加する</a>	
           </div>
      </div><!--container_content_interview-->         
            
    
 <br /> 
     
    <div class="clear group_link_realeated">  
       <p class="title_txt">前編・後編リンク</p>  
       <div class="link_realeated clear">
			<input id="post_title"  style="width:60%;" type="text" class="link_realeated" name="link_realeated" value="<?php echo $link_realeated; ?>" /> 
            <label class="post_realeated_check" for="hiden_post"><input type="checkbox" value="1" name="hiden_post" id="hiden_post" <?php if($link_realeated_check==1): ?>checked="checked"<?php endif; ?> style="vertical-align:middle;"/> トップから隠す（後編の場合チェック）</label>
	  </div><!--item_roundtable--> 
    </div><!--group_link_realeated-->
   <br /> 


 <script type="text/javascript">
		jQuery(document).ready(function($){
			  $('.add_part_roundtable').delegate('a.add', 'click', function() {
	var count_div_group_roundtable=$(this).parent().parent().find('.item_roundtable').index()+1;			  
	var item_roundtable='<div class="item_roundtable clear"><p class="title_txt">リンクカテゴリ（トップインタビューor コンサルタント座談会）</p><input id="post_title" class="main_roundtable" type="text" name="main_roundtable'+count_div_group_roundtable+'" value="" /><p class="title_txt">リンクタイトル（社名 話者氏名）</p><input id="post_title" class="title_roundtable" type="text" name="title_roundtable'+count_div_group_roundtable+'" value="" /><p class="title_txt">リンク先（リンクする記事のURL）</p><input id="post_title" type="text" class="link_roundtable" name="link_roundtable'+count_div_group_roundtable+'" value="" /></div><!--item_roundtable-->';
				 $('.group_roundtable').append(item_roundtable);	
				 $(this).parent().parent().find(".group_roundtable").find(".roundtable_txt").val(count_div_group_roundtable);          
			});
		});
</script>
     <div class="clear container_roundtable">
			<p class="title_txt"></p>
            <div class="group_roundtable clear">
            	
            	<?php
                $content_roundtables=unserialize($List['link_roundtable']);
				$content_roundtable=@array_filter($content_roundtables);
				?>
                <input class="roundtable_txt" type="hidden" value="<?php if(count($content_roundtable)>0):echo count($content_roundtable);else: echo "1"; endif; ?>" name="roundtable_item">
                <?php
				if(!empty($content_roundtable)):
					$count_item_roundtable=count($content_roundtable);
					for($rt=0;$rt<$count_item_roundtable;$rt++):
						$rb=$rt+1;
				?>
	            	<div class="item_roundtable clear">
						<p class="title_txt">リンクカテゴリ（トップインタビューor コンサルタント座談会）</p>
                    	<input id="post_title" type="text" name="main_roundtable<?php echo $rb; ?>" value="<?php echo $content_roundtable[$rt]['main']; ?>" />
                    	<p class="title_txt">リンクタイトル（社名 話者氏名）</p>
                        <input id="post_title" type="text" name="title_roundtable<?php echo $rb; ?>" value="<?php echo $content_roundtable[$rt]['title']; ?>" /> 
                        <p class="title_txt">リンク先（リンクする記事のURL）</p>
						<input id="post_title" type="text" name="link_roundtable<?php echo $rb; ?>" value="<?php echo $content_roundtable[$rt]['link']; ?>" />
                        
	                </div><!--item_roundtable-->
                <?php 
						endfor;
					else:
				?>
                <div class="item_roundtable clear">
					<p class="title_txt">リンクカテゴリ（トップインタビューor コンサルタント座談会）</p>
                    <input id="post_title" type="text" name="main_roundtable1" value="" />
                	<p class="title_txt">リンクタイトル（社名 話者氏名）</p>
                    <input id="post_title" type="text" name="title_roundtable1" value="" />
                     <p class="title_txt">リンク先（リンクする記事のURL）</p>
					<input id="post_title" type="text" name="link_roundtable1" value="" />
                </div><!--item_roundtable-->
                <?php endif; ?>
            </div><!--group_roundtable-->
            <div class="clear add_link add_part_roundtable">
                	<a class="add r">リンクを追加する</a>
           	</div><!--add_part_roundtable-->
	  </div>    
         
<script type="text/javascript">
	    	jQuery(document).ready(function(){
					//this seo og-title
					$('#post_body_content .title').bind('input keyup keydown keypress', function(){
						var title_hunter=$(this).val();
						$('#seo_og_title').val(title_hunter);
						var company_name=$('input.company_name').val();
						var page_number=$('input.page_number').val();
						//var select_category_s=$('.kc_category_interview_box input[type=checkbox][checked]').val();
						 var select_category_s="";
						 $(".kc_category_interview_box input:checkbox:checked").each(function () {
							 select_category_s = $(this).attr('tdr');;
						});
						//alert(select_category_s);
						var leng_postion=$('.group_postion_field').length-1;
						var interviewee_fullname_arr="";
						var content_postion_interview_full_top="";
						var content_postion_interview_full_symposium="";
						var content_postion_interview_full_inexperience="";
						var content_postion_interview_full_consultant_post="";
						$('.group_postion_field').each(function(){
							//alert(index);
							var postion=$(this).find('input.postion').val();
							var interviewee_fullname=$(this).find('input.interviewee_fullname').val();
							
							content_postion_interview_full_top +=postion+"&nbsp;"+interviewee_fullname;
							content_postion_interview_full_inexperience +=postion+"&nbsp;"+interviewee_fullname;
							content_postion_interview_full_consultant_post +=postion+"&nbsp;"+interviewee_fullname;
							content_postion_interview_full_symposium +=postion+"&nbsp;"+interviewee_fullname+"氏と";
							interviewee_fullname_arr +=","+interviewee_fullname;
						});
						if(leng_postion>0){
							content_postion_interview_full_symposium=content_postion_interview_full_symposium.substr(0, content_postion_interview_full_symposium.length-2); 
						}
							switch(select_category_s)
							{
								case "top":
				var description=company_name+"&nbsp;"+content_postion_interview_full_top+"氏の独占インタビュー記事「"+title_hunter+"」"+page_number+"ページ目です。他には公開されていない赤裸々な情報が満載です。";
								break;
								case "symposium":
				var description=company_name+"の現場コンサルタント"+content_postion_interview_full_symposium+"氏の座談会記事「"+title_hunter+"」"+page_number+"ページ目です。他ファームから転職したからこそ感じるリアルな現場の状況やコンサルタントの声がご覧いただけます。";
								break;
								case "inexperience":
				var description="未経験からコンサルタントへ転身した現役コンサルタント"+company_name+"&nbsp;"+content_postion_interview_full_inexperience+"氏のインタビュー記事「"+title_hunter+"」"+page_number+"ページ目です。コンサルタントを目指す方におすすめです。";
								break;
								case "consultant-post":
				var description="ポストコンサル転職でコンサルファームから事業会社へ転職した"+company_name+"&nbsp;"+content_postion_interview_full_consultant_post+"氏のインタビュー記事「"+title_hunter+"」"+page_number+"ページ目です。ポストコンサル・EXコンサルをキャリアプランとして描いている方におすすめです。";
								break;
							}
						$("#seo_description").val(description);
						$("#seo_keyword").val("人材紹介,エージェント,転職,中途,求人,ヘッドハンティング,キャリア,コンサルティング,コンサルタント,クライス&カンパニー,インタビュー,interview,現場,"+company_name+""+interviewee_fullname_arr);
					});
					
					$('#post_body_content .company_name').bind('input keyup keydown keypress', function(){
						var title_hunter=$('#post_body_content .title').val();
						$('#seo_og_title').val(title_hunter);
						var page_number=$('input.page_number').val();
						
						var company_name=$(this).val();
						var select_category_s="";
						 $(".kc_category_interview_box input:checkbox:checked").each(function () {
							 select_category_s = $(this).attr('tdr');;
						});
						var leng_postion=$('.group_postion_field').length-1;
						var interviewee_fullname_arr="";
						var content_postion_interview_full_top="";
						var content_postion_interview_full_symposium="";
						var content_postion_interview_full_inexperience="";
						var content_postion_interview_full_consultant_post="";
						$('.group_postion_field').each(function(){
							//alert(index);
							var postion=$(this).find('input.postion').val();
							var interviewee_fullname=$(this).find('input.interviewee_fullname').val();
							
							content_postion_interview_full_top +=postion+"&nbsp;"+interviewee_fullname;
							content_postion_interview_full_inexperience +=postion+"&nbsp;"+interviewee_fullname;
							content_postion_interview_full_consultant_post +=postion+"&nbsp;"+interviewee_fullname;
							content_postion_interview_full_symposium +=postion+"&nbsp;"+interviewee_fullname+"氏と";
							interviewee_fullname_arr +=","+interviewee_fullname;
						});
						if(leng_postion>0){
							content_postion_interview_full_symposium=content_postion_interview_full_symposium.substr(0, content_postion_interview_full_symposium.length-2); 
						}
							switch(select_category_s)
							{
								case "top":
				var description=company_name+"&nbsp;"+content_postion_interview_full_top+"氏の独占インタビュー記事「"+title_hunter+"」"+page_number+"ページ目です。他には公開されていない赤裸々な情報が満載です。";
								break;
								case "symposium":
				var description=company_name+"の現場コンサルタント"+content_postion_interview_full_symposium+"氏の座談会記事「"+title_hunter+"」"+page_number+"ページ目です。他ファームから転職したからこそ感じるリアルな現場の状況やコンサルタントの声がご覧いただけます。";
								break;
								case "inexperience":
				var description="未経験からコンサルタントへ転身した現役コンサルタント"+company_name+"&nbsp;"+content_postion_interview_full_inexperience+"氏のインタビュー記事「"+title_hunter+"」"+page_number+"ページ目です。コンサルタントを目指す方におすすめです。";
								break;
								case "consultant-post":
				var description="ポストコンサル転職でコンサルファームから事業会社へ転職した"+company_name+"&nbsp;"+content_postion_interview_full_consultant_post+"氏のインタビュー記事「"+title_hunter+"」"+page_number+"ページ目です。ポストコンサル・EXコンサルをキャリアプランとして描いている方におすすめです。";
								break;
							}
						$("#seo_description").val(description);
						$("#seo_keyword").val("人材紹介,エージェント,転職,中途,求人,ヘッドハンティング,キャリア,コンサルティング,コンサルタント,クライス&カンパニー,インタビュー,interview,現場,"+company_name+""+interviewee_fullname_arr);
					});
					
					
					$('#post_body_content .page_number').bind('input keyup keydown keypress', function(){
						if(parseInt($(this).val())!=1)
						{
							
							$("#highlights").attr('disabled',true);
							//$(".hightligths_group").fadeIn();
							$(".hightligths_group").fadeOut();
							
						}
						else
						{
							$("#highlights").removeAttr('disabled');
							//$(".hightligths_group").fadeOut();
							$(".hightligths_group").fadeIn();
						}

						var title_hunter=$('#post_body_content .title').val();
						$('#seo_og_title').val(title_hunter);
						var page_number=$('input.page_number').val();
						
						var company_name=$('#post_body_content .page_number').val();
						var select_category_s="";
						 $(".kc_category_interview_box input:checkbox:checked").each(function () {
							 select_category_s = $(this).attr('tdr');;
						});
						var leng_postion=$('.group_postion_field').length-1;
						var interviewee_fullname_arr="";
						var content_postion_interview_full_top="";
						var content_postion_interview_full_symposium="";
						var content_postion_interview_full_inexperience="";
						var content_postion_interview_full_consultant_post="";
						$('.group_postion_field').each(function(){
							//alert(index);
							var postion=$(this).find('input.postion').val();
							var interviewee_fullname=$(this).find('input.interviewee_fullname').val();
							
							content_postion_interview_full_top +=postion+"&nbsp;"+interviewee_fullname;
							content_postion_interview_full_inexperience +=postion+"&nbsp;"+interviewee_fullname;
							content_postion_interview_full_consultant_post +=postion+"&nbsp;"+interviewee_fullname;
							content_postion_interview_full_symposium +=postion+"&nbsp;"+interviewee_fullname+"氏と";
							interviewee_fullname_arr +=","+interviewee_fullname;
						});
						if(leng_postion>0){
							content_postion_interview_full_symposium=content_postion_interview_full_symposium.substr(0, content_postion_interview_full_symposium.length-2); 
						}
							switch(select_category_s)
							{
								case "top":
				var description=company_name+"&nbsp;"+content_postion_interview_full_top+"氏の独占インタビュー記事「"+title_hunter+"」"+page_number+"ページ目です。他には公開されていない赤裸々な情報が満載です。";
								break;
								case "symposium":
				var description=company_name+"の現場コンサルタント"+content_postion_interview_full_symposium+"氏の座談会記事「"+title_hunter+"」"+page_number+"ページ目です。他ファームから転職したからこそ感じるリアルな現場の状況やコンサルタントの声がご覧いただけます。";
								break;
								case "inexperience":
				var description="未経験からコンサルタントへ転身した現役コンサルタント"+company_name+"&nbsp;"+content_postion_interview_full_inexperience+"氏のインタビュー記事「"+title_hunter+"」"+page_number+"ページ目です。コンサルタントを目指す方におすすめです。";
								break;
								case "consultant-post":
				var description="ポストコンサル転職でコンサルファームから事業会社へ転職した"+company_name+"&nbsp;"+content_postion_interview_full_consultant_post+"氏のインタビュー記事「"+title_hunter+"」"+page_number+"ページ目です。ポストコンサル・EXコンサルをキャリアプランとして描いている方におすすめです。";
								break;
							}
						$("#seo_description").val(description);
						$("#seo_keyword").val("人材紹介,エージェント,転職,中途,求人,ヘッドハンティング,キャリア,コンサルティング,コンサルタント,クライス&カンパニー,インタビュー,interview,現場,"+company_name+""+interviewee_fullname_arr);
					});
					
					
					$('#post_body_content .postion').bind('input keyup keydown keypress', function(){
						var title_hunter=$('#post_body_content .title').val();
						$('#seo_og_title').val(title_hunter);
						var page_number=$('input.page_number').val();
						
						var company_name=$('#post_body_content .company_name').val();
						var select_category_s="";
						 $(".kc_category_interview_box input:checkbox:checked").each(function () {
							 select_category_s = $(this).attr('tdr');;
						});
						var leng_postion=$('.group_postion_field').length-1;
						var interviewee_fullname_arr="";
						var content_postion_interview_full_top="";
						var content_postion_interview_full_symposium="";
						var content_postion_interview_full_inexperience="";
						var content_postion_interview_full_consultant_post="";
						$('.group_postion_field').each(function(){
							//alert(index);
							var postion=$(this).find('input.postion').val();
							var interviewee_fullname=$(this).find('input.interviewee_fullname').val();
							
							content_postion_interview_full_top +=postion+"&nbsp;"+interviewee_fullname;
							content_postion_interview_full_inexperience +=postion+"&nbsp;"+interviewee_fullname;
							content_postion_interview_full_consultant_post +=postion+"&nbsp;"+interviewee_fullname;
							content_postion_interview_full_symposium +=postion+"&nbsp;"+interviewee_fullname+"氏と";
							interviewee_fullname_arr +=","+interviewee_fullname;
						});
						if(leng_postion>0){
							content_postion_interview_full_symposium=content_postion_interview_full_symposium.substr(0, content_postion_interview_full_symposium.length-2); 
						}
							switch(select_category_s)
							{
								case "top":
				var description=company_name+"&nbsp;"+content_postion_interview_full_top+"氏の独占インタビュー記事「"+title_hunter+"」"+page_number+"ページ目です。他には公開されていない赤裸々な情報が満載です。";
								break;
								case "symposium":
				var description=company_name+"の現場コンサルタント"+content_postion_interview_full_symposium+"氏の座談会記事「"+title_hunter+"」"+page_number+"ページ目です。他ファームから転職したからこそ感じるリアルな現場の状況やコンサルタントの声がご覧いただけます。";
								break;
								case "inexperience":
				var description="未経験からコンサルタントへ転身した現役コンサルタント"+company_name+"&nbsp;"+content_postion_interview_full_inexperience+"氏のインタビュー記事「"+title_hunter+"」"+page_number+"ページ目です。コンサルタントを目指す方におすすめです。";
								break;
								case "consultant-post":
				var description="ポストコンサル転職でコンサルファームから事業会社へ転職した"+company_name+"&nbsp;"+content_postion_interview_full_consultant_post+"氏のインタビュー記事「"+title_hunter+"」"+page_number+"ページ目です。ポストコンサル・EXコンサルをキャリアプランとして描いている方におすすめです。";
								break;
							}
						$("#seo_description").val(description);
						$("#seo_keyword").val("人材紹介,エージェント,転職,中途,求人,ヘッドハンティング,キャリア,コンサルティング,コンサルタント,クライス&カンパニー,インタビュー,interview,現場,"+company_name+""+interviewee_fullname_arr);
					});
					
					
					$('#post_body_content .interviewee_fullname').bind('input keyup keydown keypress', function(){
						var title_hunter=$('#post_body_content .title').val();
						$('#seo_og_title').val(title_hunter);
						var page_number=$('input.page_number').val();
						
						var company_name=$('#post_body_content .company_name').val();
						var select_category_s="";
						 $(".kc_category_interview_box input:checkbox:checked").each(function () {
							 select_category_s = $(this).attr('tdr');;
						});
						var leng_postion=$('.group_postion_field').length-1;
						var interviewee_fullname_arr="";
						var content_postion_interview_full_top="";
						var content_postion_interview_full_symposium="";
						var content_postion_interview_full_inexperience="";
						var content_postion_interview_full_consultant_post="";
						$('.group_postion_field').each(function(){
							//alert(index);
							var postion=$(this).find('input.postion').val();
							var interviewee_fullname=$(this).find('input.interviewee_fullname').val();
							
							content_postion_interview_full_top +=postion+"&nbsp;"+interviewee_fullname;
							content_postion_interview_full_inexperience +=postion+"&nbsp;"+interviewee_fullname;
							content_postion_interview_full_consultant_post +=postion+"&nbsp;"+interviewee_fullname;
							content_postion_interview_full_symposium +=postion+"&nbsp;"+interviewee_fullname+"氏と";
							interviewee_fullname_arr +=","+interviewee_fullname;
						});
						if(leng_postion>0){
							content_postion_interview_full_symposium=content_postion_interview_full_symposium.substr(0, content_postion_interview_full_symposium.length-2); 
						}
							switch(select_category_s)
							{
								case "top":
				var description=company_name+"&nbsp;"+content_postion_interview_full_top+"氏の独占インタビュー記事「"+title_hunter+"」"+page_number+"ページ目です。他には公開されていない赤裸々な情報が満載です。";
								break;
								case "symposium":
				var description=company_name+"の現場コンサルタント"+content_postion_interview_full_symposium+"氏の座談会記事「"+title_hunter+"」"+page_number+"ページ目です。他ファームから転職したからこそ感じるリアルな現場の状況やコンサルタントの声がご覧いただけます。";
								break;
								case "inexperience":
				var description="未経験からコンサルタントへ転身した現役コンサルタント"+company_name+"&nbsp;"+content_postion_interview_full_inexperience+"氏のインタビュー記事「"+title_hunter+"」"+page_number+"ページ目です。コンサルタントを目指す方におすすめです。";
								break;
								case "consultant-post":
				var description="ポストコンサル転職でコンサルファームから事業会社へ転職した"+company_name+"&nbsp;"+content_postion_interview_full_consultant_post+"氏のインタビュー記事「"+title_hunter+"」"+page_number+"ページ目です。ポストコンサル・EXコンサルをキャリアプランとして描いている方におすすめです。";
								break;
							}
						$("#seo_description").val(description);
						$("#seo_keyword").val("人材紹介,エージェント,転職,中途,求人,ヘッドハンティング,キャリア,コンサルティング,コンサルタント,クライス&カンパニー,インタビュー,interview,現場,"+company_name+""+interviewee_fullname_arr);
					});
					
					
					
					
					$('#post_body_content #excerpt_kc_interview').bind('input keyup keydown keypress', function(){
						var title_hunter=$(this).val();
						$('#seo_og_description').val(title_hunter);
					});
					
					
					//set conten keyword
					$('.kc_category_interview_box p input:checkbox').change(function(){
						
						var content_category_check="";
						$('.kc_category_interview_box p input:checkbox').each(function () {
		   					if (this.checked){
								content_category_check=$(this).attr('tdr');
								//content_category_item +=","+$.trim($(this).parent().text());
							}
		 				});
						var content_postion_interview_full_top="";
						var content_postion_interview_full_symposium="";
						var content_postion_interview_full_inexperience="";
						var content_postion_interview_full_consultant_post="";
						var company_name=$('input.company_name').val();
						var title_kc_consul_interview=$('input.title').val();
						var page_number=$('input.page_number').val();
						
						var leng_postion=$('.group_postion_field').length-1;
						var interviewee_fullname_arr="";
						$('.group_postion_field').each(function(){
							//alert(index);
							var postion=$(this).find('input.postion').val();
							var interviewee_fullname=$(this).find('input.interviewee_fullname').val();
							
							content_postion_interview_full_top +=postion+"&nbsp;"+interviewee_fullname;
							content_postion_interview_full_inexperience +=postion+"&nbsp;"+interviewee_fullname;
							content_postion_interview_full_consultant_post +=postion+"&nbsp;"+interviewee_fullname;
							content_postion_interview_full_symposium +=postion+"&nbsp;"+interviewee_fullname+"氏と";
							interviewee_fullname_arr +=","+interviewee_fullname;
						});
						
						if(leng_postion>0){
							content_postion_interview_full_symposium=content_postion_interview_full_symposium.substr(0, content_postion_interview_full_symposium.length-2); 
						}
							switch(content_category_check)
							{
								case "top":
				var description=company_name+"&nbsp;"+content_postion_interview_full_top+"氏の独占インタビュー記事「"+title_kc_consul_interview+"」"+page_number+"ページ目です。他には公開されていない赤裸々な情報が満載です。";
								break;
								case "symposium":
				var description=company_name+"の現場コンサルタント"+content_postion_interview_full_symposium+"氏の座談会記事「"+title_kc_consul_interview+"」"+page_number+"ページ目です。他ファームから転職したからこそ感じるリアルな現場の状況やコンサルタントの声がご覧いただけます。";
								break;
								case "inexperience":
				var description="未経験からコンサルタントへ転身した現役コンサルタント"+company_name+"&nbsp;"+content_postion_interview_full_inexperience+"氏のインタビュー記事「"+title_kc_consul_interview+"」"+page_number+"ページ目です。コンサルタントを目指す方におすすめです。";
								break;
								case "consultant-post":
				var description="ポストコンサル転職でコンサルファームから事業会社へ転職した"+company_name+"&nbsp;"+content_postion_interview_full_consultant_post+"氏のインタビュー記事「"+title_kc_consul_interview+"」"+page_number+"ページ目です。ポストコンサル・EXコンサルをキャリアプランとして描いている方におすすめです。";
								break;
							}
							$("#seo_description").val(description);
							$("#seo_keyword").val("人材紹介,エージェント,転職,中途,求人,ヘッドハンティング,キャリア,コンサルティング,コンサルタント,クライス&カンパニー,インタビュー,interview,現場,"+company_name+""+interviewee_fullname_arr);
					 });
					
					
					
					
					
					
				});
  			</script>             
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
               
		</div>
			
			<?php include_once("form_left.php"); ?>

		</div>
	</div>
</form>

</div>

<script src="js/jquery.autocomplete.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" media="all" />

<script type="text/javascript">
$(document).ready(function() {
	<?php 
		$Data_high_class=To_Get_Data("kc_interview","  and `kc_interview_id` in (select `kc_interview_id` from `kc_interview` group by  `kc_interview_vol_number_slug`)");
		if($Data_high_class['cnt']>0):
			$i=0;
			$Data_all=array();
			$count_hight_slug=$Data_high_class['cnt'];
			for($i=0;$i<$count_hight_slug; $i++):
				$List_high_class = $Data_high_class[$i];
				array_push($Data_all,array(
						"kc_interview_id" => $List_high_class['kc_interview_id'],
						"kc_interview_vol_number" => $List_high_class['kc_interview_vol_number'],
						"kc_interview_title" => $List_high_class['kc_interview_title'],
						"kc_interview_vol_number_slug"=>$List_high_class['kc_interview_vol_number_slug'],
						"kc_interview_company_name"=>$List_high_class['kc_interview_company_name'],
						"kc_interview_company_id"=>$List_high_class['kc_interview_company_id'],
						"kc_interview_thumbnail_alt"=>$List_high_class['kc_interview_thumbnail_alt'],
						"kc_interview_thumbnail"=>$List_high_class['kc_interview_thumbnail'],
						"kc_interview_backnumber"  => $List_high_class['kc_interview_backnumber'],
						"kc_interview_backnumber_alt"=>$List_high_class['kc_interview_backnumber_alt'],
						"seo_keyword"=>$List_high_class['seo_keyword'],
						"seo_description"=>$List_high_class['seo_description'],
						"seo_og_title"=>$List_high_class['seo_og_title'],
						"seo_og_description"=>$List_high_class['seo_og_description'],
						"seo_add_thumb_meta"=>$List_high_class['seo_add_thumb_meta'],
						"kc_interview_postion"=>unserialize($List_high_class['kc_interview_postion']),
						"link_roundtable"=>unserialize($List_high_class['link_roundtable']),
						"kc_interview_realeated_link"=>$List_high_class['kc_interview_realeated_link'],
						"kc_interview_realeated_link_check_hide"=>$List_high_class['kc_interview_realeated_link_check_hide']
					)
				);
				$company_interviews_tag_slug=$List_high_class['kc_interview_vol_number_slug'];
				$data_value_for.=$company_interviews_tag_slug.",";
			endfor;
			$data_value=substr($data_value_for, 0, -1);
			//echo $data_value;
			$List_Json= json_encode($Data_all);
	
	?>
	var Json_data=<?php echo $List_Json; ?>;
    var data_value = "<?php echo $data_value; ?>".split(",");
	$(".vol_number_slug").autocomplete(data_value).result(function(){
			var set_txt=$(".vol_number_slug").val();
			var index = findIndexByKeyValue(Json_data, "kc_interview_vol_number_slug",set_txt);
			var kc_interview_id=Json_data[index]["kc_interview_id"];
			$(".vol_number").val(Json_data[index]["kc_interview_vol_number"]);
			$(".title").val(Json_data[index]["kc_interview_title"]);
			$(".company_name").val(Json_data[index]["kc_interview_company_name"]);
			$(".company_id").val(Json_data[index]["kc_interview_company_id"]);
			$(".thumbnail_alt").val(Json_data[index]["kc_interview_thumbnail_alt"]);
			$("#myfile_text1").val(Json_data[index]["kc_interview_thumbnail"]);
			$(".backnumber_alt").val(Json_data[index]["kc_interview_backnumber_alt"]);
			$("#myfile_text2").val(Json_data[index]["kc_interview_backnumber"]);
			
			$("#seo_keyword").val(Json_data[index]["seo_keyword"]);
			$("#seo_description").val(Json_data[index]["seo_description"]);
			$("#seo_og_title").val(Json_data[index]["seo_og_title"]);
			$("#seo_og_description").val(Json_data[index]["seo_og_description"]);
			$("#txt_feat_2").val(Json_data[index]["seo_add_thumb_meta"]);

			$(".link_realeated").val(Json_data[index]["kc_interview_realeated_link"]);
			if(Json_data[index]["kc_interview_realeated_link_check_hide"]==1){
				$("#hiden_post").attr("checked","checked");
			}else{
				$("#hiden_post").removeAttr("checked");
			}

			var link_roundtable_value=Json_data[index]["link_roundtable"];
			var html_apend_roundtable='';
			var data_roundtable='';
		
			$.each(link_roundtable_value,function(j,data_roundtable){
				console.log(data_roundtable);
				var k=j+1;
			    html_apend_roundtable += '<div class="item_roundtable clear"><p class="title_txt">リンクカテゴリ（トップインタビューor コンサルタント座談会）</p><input type="text" value="'+data_roundtable.main+'" name="main_roundtable'+k+'" id="post_title"><p class="title_txt">リンクタイトル（社名 話者氏名）</p><input type="text" value="'+data_roundtable.title+'" name="title_roundtable'+k+'" id="post_title"><p class="title_txt">リンク先（リンクする記事のURL）</p><input id="post_title" type="text" value="'+data_roundtable.link+'" name="link_roundtable'+k+'"></div>';
			});
		
			$('.roundtable_txt').val(link_roundtable_value.length);
			$('.item_roundtable').remove();
			$('.group_roundtable').append(html_apend_roundtable);		


			var postion_value=Json_data[index]["kc_interview_postion"];
			var html_apend_postion='';
			var data_postion='';
				//alert(dataSize);
			$.each(postion_value,function(i,data_postion){
				//console.log(data_postion);
				var u=i+1;
			     html_apend_postion += '<div class="group_postion_field item_list_postion'+u+' clear"><br/><div class="clear"><p class="title_txt">役職</p><input class="postion" id="post_title" type="text" name="postion'+u+'" value="'+data_postion.postion+'" /></div><br/><div class="clear"><p class="title_txt">話者氏名(例:山田太郎)</p><input class="interviewee_fullname" id="post_title" type="text" name="interviewee_fullname'+u+'" value="'+data_postion.interviewee_fullname+'" /></div></div><!--group_postion_field-->';
			});
			$('.postion_txt').val(postion_value.length);
			$('.group_postion_field').remove();
			$('.content_postion_group').append(html_apend_postion);	
			$.getJSON("ajax/load_category_kc_interview.php?kc_cat_interview="+kc_interview_id, function(result_cate){
		        $.each(result_cate,function(i, field){
		            //console.log(field.id);
					$('label.kc_consul_label input[type="checkbox"]').removeAttr('checked');
					$('label.kc_consul_label input#checkbox_cmc_'+field.id).attr('checked', 'checked');
		        });
		    });
			
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
