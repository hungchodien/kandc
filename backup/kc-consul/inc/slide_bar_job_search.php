<div class="slide_bar clear">

	<div id="news_newest" class="clear">
    	
        <?php 
			if($page=='category' || $page=='fund' || $page=='search' || $page=='pickjob'):
			
		?>
        <div class="clear group_slide_bar_public">
        	<div id="category_sidebar_top" class="clear">
        		<?php include('inc/category_public.php'); ?>
            </div>
        </div>
        <?php 
			endif;
		?>
        
    	<div class="group_slide_bar_public clear">
        	<div class="clear"><img src="<?php echo url_root; ?>img/sidebar/title-pickup.png" alt="pickup job"/></div>

           
<ul class="clear job_picup_slide_bar_search">
						
                   <li><span class="title"><a href="http://www.kc-consul.com/pickjob.html#related_list_job_1026233">大手IT企業　ディレクター / 事業部長<br>～1900万円程度</span></li>	
                   <li><span class="title"><a href="http://www.kc-consul.com/pickjob.html#related_list_job_1024988">ダイレクトマーケティング企業　経営企画・M&amp;A　～1200万円程度</a></span></li>	
                   <li><span class="title"><a href="http://www.kc-consul.com/pickjob.html#related_list_job_1028078">コーポレートPMO（経営戦略支援）/ シニアダイレクター　～1300万円程度</a></span></li>	
                   <li><span class="title"><a href="http://www.kc-consul.com/pickjob.html#related_list_job_1007702">ディレクター　～3500万円程度</a></span></li>	
                   <li><span class="title"><a href="http://www.kc-consul.com/pickjob.html#related_list_job_1028028">コンビニエンス会社　ビジネスアナリスト<br>～1100円程度</a></span></li>	
                 
							</ul>
            


        </div><!--group_slide_bar_public-->
        
        <?php 
		if($page=='category' || $page=='fund' || $page=='search' || $page=='pickjob'):
			include('slide_bar_interview_backnumber.php');
				
		else:
			include('slide_bar_interview_pickup.php');
		endif;
		?>
        
    </div><!--#news_newest-->
    
</div><!--slide_bar-->