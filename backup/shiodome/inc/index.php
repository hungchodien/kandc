<?php 
	$where_top="and A.shiodome_academy_status=0 order by A.shiodome_academy_date DESC limit 1";
	 $Data_shiodome_top = Get_Data("shiodome_academy as A join shiodome_academy_join_category as B on
A.shiodome_academy_id=B.shiodome_academy_id join shiodome_academy_category as C on B.shiodome_academy_category_id=C.shiodome_academy_category_id", $where_top);
if($Data_shiodome_top['cnt']>0):
	$date_shiodome_top=$Data_shiodome_top['shiodome_academy_date'];
	$thumbnail_top=url_root_domain.$url_images_thumnail.$Data_shiodome_top['shiodome_academy_thumbnail'];
	$thumbnail_top_alt=$Data_shiodome_top['shiodome_academy_thumbnail_alt'];
	$name_category=$Data_shiodome_top['shiodome_academy_category_name_en'];
	$shiodome_academy_id=(int)$Data_shiodome_top['shiodome_academy_id'];
	
	$category_shiodome_academy_slug=$Data_shiodome_top['shiodome_academy_category_slug'];
?>

<div class="wrapper clear">
    <div class="event_top_box event_box  <?php if(!empty($Data_shiodome_top['shiodome_academy_category_name_en']) && $Data_shiodome_top['shiodome_academy_category_name_en']!=""): echo $name_category;  else: echo "start_event"; endif; ?> clear">
    	<div class="date fl">
            <p class="month"><?php echo substr(date('Y F',strtotime($date_shiodome_top)),0,8); ?><!--2016 May--></p>
            <p class="ngay"><?php echo date('d',strtotime($date_shiodome_top)); ?></p>
            <p class="day"><?php echo date('D',strtotime($date_shiodome_top)); ?></p>
        </div><!--date-->
        <div class="tmb_info">
            <div class="clear">
                <div class="top_tmb fl">
                	<?php if(!empty($Data_shiodome_top['shiodome_academy_thumbnail']) && $Data_shiodome_top['shiodome_academy_thumbnail']!=""): ?>
               	 		<img alt="<?php echo $thumbnail_top_alt; ?>" src="<?php echo $thumbnail_top; ?>" />
                    <?php endif; ?>
                </div> 
                <div class="top_box_info">
                <h3 class="event_title"><?php echo $Data_shiodome_top['shiodome_academy_category_name_ja']; ?></h3>
                <dl class="time_place">
					<dt class="label">date &nbsp;</dt>
					<dd>
						<?php echo date('Y',strtotime($date_shiodome_top)); ?>年<?php echo date('m',strtotime($date_shiodome_top)); ?>月<?php echo date('d',strtotime($date_shiodome_top)); ?>日	
					</dd>
	                <?php if(!empty($Data_shiodome_top['shiodome_academy_time']) && $Data_shiodome_top['shiodome_academy_time']!=""): ?>
	                <dt class="label">time &nbsp;</dt><dd><?php echo $Data_shiodome_top['shiodome_academy_time']; ?></dd>
	                <?php endif ?>
	                <?php if(!empty($Data_shiodome_top['shiodome_academy_place']) && $Data_shiodome_top['shiodome_academy_place']!=""): ?>
	                <dt class="label">place</dt><dd><?php echo $Data_shiodome_top['shiodome_academy_place']; ?></dd>
	                 <?php endif ?>
                </dl>
                <h3 class="theme"><?php echo $Data_shiodome_top['shiodome_academy_theme']; ?></h3>
                <div class="guest">
                	<?php 
						$guest_top=unserialize($Data_shiodome_top['shiodome_academy_guest']);
						//print_r($guest_top);
						$g=0;
						for($g=0;$g<count($guest_top);$g++):
							echo "<p>".$guest_top[$g]['guest']."</p>";
						endfor;
					?>
                </div>
                <div class="clear excerpt_top">
                	<?php echo htmlspecialchars_decode($Data_shiodome_top['shiodome_academy_description']); ?>
                </div><!--excerpt_top-->
                
                <p class="detail_btn"><a class="click_readmore" href="#" data-category="<?php echo $category_shiodome_academy_slug;?>" data-href="<?php echo url_root_shiodome; ?>details/<?php echo $shiodome_academy_id; ?>.html">詳しくはこちら</a></p>
                </div>
            </div>
        </div><!--tmb_info-->
    </div><!--event_top_box event_box start_event clear-->
</div><!--end wrapper-->
<?php 
	//reset($Data_shiodome_top);
	endif;
?>

<div id="about">
    <div class="about_wrapper">
        <h2 class="about_title"><img alt="汐留アカデミーについて" src="<?php echo url_root_shiodome; ?>img/about_title.png" /></h2>
        <div class="about_content clear">
        <div class="about_imgs">
        <div class="about_imgs_table">
        <img title="" alt="" src="<?php echo url_root_shiodome; ?>img/input_networking.png" />
        </div>
        </div>
        <p class="about_txt">「汐留アカデミー」とは、各分野でご活躍されているプロフェッショナルな方々を講師としてお招きし <span class="text-point">Input</span> と <span class="text-point">Networking</span> によって挑戦への熱量を高めていただく、クライス＆カンパニー主催のキャリアイベントです。 
<br /><br />
イベント前半部は、講師の方の転機にまつわるエピソードや、生き方のポリシー、成果を出す秘訣などをお聞きし、皆さまに <span class="text-point">Input</span> いただくお時間です。そして後半部は、講師の方々や参加者の皆さま同士がご交流される <span class="text-point">Networking</span> の場とさせていただいています。このようなセミナー＆交流会という形式で毎回開催いたします。</p>

        </div>
        <div class="about_txt2 about_content">
<h4>参加するには？</h4>
<p>ご希望される方は、当webサイトの　参加申込フォーム　よりお申込みください。<br />
汐留アカデミーに参加されるには特に条件はございません。どなたでもご参加いただけます。ただし、少人数制で開催しておりますため、お申込み数が募集人数を超えた場合は、抽選とさせていただいております。御了承ください。</p>
</div>
    </div>
</div><!--About-->

<div class="schedule">
    <div class="wrapper">
        <h2 class="about_title schedule_title"><img title="" alt="" src="<?php echo url_root_shiodome; ?>img/schedule_title.png" /></h2>
        <div class="clear event_row">
       <?php  
        $where="and `A`.`shiodome_academy_status`=0  order by `A`.`shiodome_academy_date` DESC limit 6";
		 $Data_shiodome_list =To_Get_Data("shiodome_academy as A join shiodome_academy_join_category as B on
	A.shiodome_academy_id=B.shiodome_academy_id join shiodome_academy_category as C on B.shiodome_academy_category_id=C.shiodome_academy_category_id", $where,"C.seo_keyword,C.seo_description,C.seo_og_description,C.seo_og_title,C.seo_add_thumb_meta,A.shiodome_academy_theme,A.shiodome_academy_time,A.shiodome_academy_place,A.shiodome_academy_guest,A.shiodome_academy_description,C.shiodome_academy_category_name_ja,A.shiodome_academy_date,A.shiodome_academy_thumbnail,A.shiodome_academy_thumbnail_alt,C.shiodome_academy_category_name_en,C.shiodome_academy_category_name_ja,A.shiodome_academy_id,C.shiodome_academy_category_slug");
		$count_item= $Data_shiodome_list['cnt'];
		if($count_item>0):
			$i=0;
			for($i=0;$i<$count_item;$i++):
				$List_shiodome_list=$Data_shiodome_list[$i];  
				
				$date_shiodome_top=$List_shiodome_list['shiodome_academy_date'];
				$thumbnail_top=url_root_domain.$url_images_thumnail.$List_shiodome_list['shiodome_academy_thumbnail'];
				$thumbnail_top_alt=$List_shiodome_list['shiodome_academy_thumbnail_alt'];
				$name_category=$List_shiodome_list['shiodome_academy_category_name_en'];
				$shiodome_academy_id=$List_shiodome_list['shiodome_academy_id'];

				$category_shiodome_academy_slug_list=$List_shiodome_list['shiodome_academy_category_slug'];

        ?>
        	<div class="event_box <?php if(!empty($List_shiodome_list['shiodome_academy_category_name_en']) && $List_shiodome_list['shiodome_academy_category_name_en']!=""): echo $name_category;  else: echo "start_event"; endif; ?> schedule_box">
                <div class="schedule_box_content">
                <div class="clear schedule_box_top">
                <div class="date fl">
                	<p class="month"><?php echo substr(date('Y F',strtotime($date_shiodome_top)),0,8); ?><!--2016 May--></p>
            		<p class="ngay"><?php echo date('d',strtotime($date_shiodome_top)); ?></p>
            		<p class="day"><?php echo date('D',strtotime($date_shiodome_top)); ?></p>
                </div>
                <dl class="time_place">
                <?php if(!empty($List_shiodome_list['shiodome_academy_time']) && $List_shiodome_list['shiodome_academy_time']!=""): ?>
                <dt class="label">time</dt><dd><?php echo $List_shiodome_list['shiodome_academy_time']; ?></dd>
                <?php endif ?>
                <?php if(!empty($List_shiodome_list['shiodome_academy_place']) && $List_shiodome_list['shiodome_academy_place']!=""): ?>
                <dt class="label">place</dt><dd><?php echo $List_shiodome_list['shiodome_academy_place']; ?></dd>
                 <?php endif ?>
                </dl>
                </div>
                <p class="schedule_box_tmb">
                	<?php if(!empty($List_shiodome_list['shiodome_academy_thumbnail']) && $List_shiodome_list['shiodome_academy_thumbnail']!=""): ?>
               	 		<img alt="<?php echo $thumbnail_top_alt; ?>" src="<?php echo $thumbnail_top; ?>" />
                    <?php endif; ?>
                </p>
                <h3 class="theme"><?php echo $List_shiodome_list['shiodome_academy_theme']; ?></h3>
                <div class="guest">
                <?php 
						$guest_top=unserialize($List_shiodome_list['shiodome_academy_guest']);
						$g=0;
						for($g=0;$g<count($guest_top);$g++):
							echo "<p>".$guest_top[$g]['guest']."</p>";
						endfor;
					?>
                </div>
                <div class="clear event_box_bottom">
                <h3 class="event_title fl"><?php echo $List_shiodome_list['shiodome_academy_category_name_ja']; ?></h3>
                <p class="detail_btn fr"><a class="click_readmore" href="#" data-category="<?php echo $category_shiodome_academy_slug_list;?>" data-href="<?php echo url_root_shiodome; ?>details/<?php echo $shiodome_academy_id; ?>.html">詳しくはこちら</a></p>
                </div>
                </div>
            </div><!--event_box start_event schedule_box-->
            
          <?php 
		  	endfor;
		  	reset($Data_shiodome_list);
		  	endif;
		  ?>  
           
           
        </div><!--event_row-->
        
    </div><!--wrapper-->
</div><!--.schedule-->
