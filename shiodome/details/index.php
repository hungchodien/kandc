<div class="wrapper clear">
	<div id="single_events_details" class="clear single_events <?php echo $category_shiodome_academy_slug; ?>">
		<div class="tbl_icon_single"><img title="" alt="icon close" src="<?php echo url_root_shiodome; ?>img/close.png" /></div>
    	<div class="top_single clear">
			<div class="top_single_fied clear">
	        	<div class="date fl">
	               	<p class="month"><?php echo substr(date('Y F',strtotime($date_shiodome_top)),0,8); ?><!--2016 May--></p>
	            	<p class="ngay"><?php echo date('d',strtotime($date_shiodome_top)); ?></p>
	            	<p class="day"><?php echo date('D',strtotime($date_shiodome_top)); ?></p>
	            </div>
	            <div class="time_place fl">
	               <dl class="time_place">
	                <?php if(!empty($Data_shiodome_list['shiodome_academy_time']) && $Data_shiodome_list['shiodome_academy_time']!=""): ?>
	                <dt class="label">time</dt><dd><?php echo $Data_shiodome_list['shiodome_academy_time']; ?></dd>
	                <?php endif ?>
	                <?php if(!empty($Data_shiodome_list['shiodome_academy_place']) && $Data_shiodome_list['shiodome_academy_place']!=""): ?>
	                <dt class="label">place</dt><dd><?php echo $Data_shiodome_list['shiodome_academy_place']; ?></dd>
	                 <?php endif ?>
	                </dl>
	            </div>
	            <h3 class="event_title fl"><?php echo $Data_shiodome_list['shiodome_academy_category_name_ja']; ?></h3>
			</div>
        </div><!--top_single-->
        <h2 class="title_theme"><?php echo $Data_shiodome_list['shiodome_academy_theme']; ?></h2>
        <div class="clear entry_content">
        		<?php echo htmlspecialchars_decode($Data_shiodome_list['shiodome_academy_contents']); ?>
				<input type="hidden" value="" name="url_href" id="url_single_page" autocomplete="off" />
				<input type="hidden" value="" name="position_sroll" id="position_sroll_id" autocomplete="off" />
				<input type="hidden" value="<?php echo $category_shiodome_academy_slug; ?>" name="category_sroll" id="category_sroll_id" autocomplete="off" />
                
               
        </div><!--entry_content-->
    </div><!--single_events-->
</div><!--wrapper-->

