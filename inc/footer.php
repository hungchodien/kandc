<footer id="myfoot">
    <div id="main-footer">
<?php 
	switch($page):
		case "search":
					if(isset($_GET['cmd'])):
						if($_GET['cmd']=="all"):
							//include('main_search_all.php');
							include('main_search_footer.php');
						else:
						   include('main_search_footer.php');
						endif;
					else:
						include('main_search_footer.php');
					endif;
				 break;
		default:
		include('main_search_footer.php');
	endswitch;
	
	//include('main_search.php');

 ?>



		
<div id="group_footer_inc_end" class="group_footer_inc_end clear">
	<div id="footer" class="footer_news_wet clear">
	<div class="l swb_one">
    	<div class="item clear">
        	<a class="footer-link" href="<?php echo url_root; ?>"><img src="<?php echo url_root; ?>img/footer/title-index.png" alt="トップページ"/></a>
        </div>
        <div class="item clear">
        	<ul>
            	<li>
                	<a class="footer-link" href="<?php echo url_root; ?>features/"><img src="<?php echo url_root; ?>img/footer/title-features.png" alt="クライスの特長"/></a>
                     <ul>
                    	<li><a class="footer-link" href="<?php echo url_root; ?>features/features01.php"> 30代のキャリア支援</a></li>
                        <li><a class="footer-link" href="<?php echo url_root; ?>features/features02.php"> コンサルティング力</a></li>
                        <li><a class="footer-link" href="<?php echo url_root; ?>features/features03.php"> C&amp;R方式 </a></li>
                        <li><a class="footer-link" href="<?php echo url_root; ?>features/features04.php"> GCDF資格</a></li>
                        <li><a class="footer-link" href="<?php echo url_root; ?>features/client.php"> 紹介先について</a></li>
                        <li><a class="footer-link" href="<?php echo url_root; ?>features/client_list.php"> 紹介先一覧</a></li>
                        <li><a class="footer-link" href="<?php echo url_root; ?>features/"> 転職力強化プログラム</a></li>
                        <li><a class="footer-link" href="<?php echo url_root; ?>features/program_cmt.php"> コミュニケーショントレーニング</a></li>
                        <li><a class="footer-link" href="<?php echo url_root; ?>features/program_tekisei.php"> 職務適性検査</a></li>
                        <li><a class="footer-link" href="<?php echo url_root; ?>features/program_seminar.php"> 入社前セミナー</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        
         <div class="item clear">
         	<a class="footer-link" href="<?php echo url_root; ?>consultant/"><img src="<?php echo url_root; ?>img/footer/title-consultant.png" alt="コンサルタントを選ぶ"/></a>
         </div>
         
         <div class="item clear">
         	<ul>
            	<li>
         		<a class="footer-link" href="<?php echo url_root; ?>voice/"><img src="<?php echo url_root; ?>img/footer/title-voice.png" alt="転職成功事例"/></a>
                	<ul>
                    	<li><a class="footer-link" href="<?php echo url_root; ?>voice/article/case.html">転職成功者の声</a></li>
                		<li><a class="footer-link" href="<?php echo url_root; ?>voice/article/question.html">転職成功者アンケート</a></li>
                		<li><a class="footer-link" href="<?php echo url_root; ?>voice/article/data.html">転職先カテゴリ別分布</a></li>
                    </ul>
                </li>
              </ul>
         </div>
        
         <div class="item clear">
         	<a class="footer-link" href="<?php echo url_root; ?>process/"><img src="<?php echo url_root; ?>img/footer/title-process.png" alt="申込から内定まで"/></a>
         </div>
        
    </div><!--Left 1 swb_one-->
    
    
	
    <div class="l swb_two">
    	 <div class="item clear">
         	<ul class="clear">
         		<li><a class="footer-link" href="<?php echo url_root; ?>jobinfo/"><img src="<?php echo url_root; ?>img/footer/title-jobinfo.png" alt="求人情報を探す"/></a>
                	<ul class="clear job_cate">
                    	<?php 
		
		
							$query_list=HCMListCategory();
							
							while($row_list=mysql_fetch_assoc($query_list))
							{
								$id_category=$row_list['id'];
								$query_check=Check_HCMCategory($id_category);
								
								if($query_check>0)
								{
									
									?>
 		<li>
		<a href="<?php echo url_root; ?>category/job_group/<?php echo $row_list['id'].".html"; ?>"  class="footer-link" target="_self">
                                	<?php 
									echo $row_list['name'];
									
									 ?>
                                    </a>
                                </li>									
									<?php 
										
									}
									else
									{
										if($id_category!=1)
											{
								?>
                                <li>
                       <a href="<?php echo url_root; ?>category/list/<?php echo $row_list['id'] .".html";?>" class="footer-link" target="_self">
                                	<?php 
									echo $row_list['name'];
								
									 ?>
                                    </a>
                                </li>
                                <?php 
											}
									}
							}
								
							?>
                    </ul>
                </li>
           </ul>
         </div>
         
         <div class="item clear">
         	<ul>
         		<li><img src="<?php echo url_root; ?>img/footer/title-contact.png" alt="お問合わせ"/>
                	<ul class="clear">
                    	<li><a class="footer-link" href="<?php echo url_root; ?>entry/" target="_blank">今すぐエントリー</a></li>
                		<li><a class="footer-link" href="<?php echo url_root; ?>entry_pre/" target="_blank">プレエントリー</a></li>
                     </ul>
                     <ul class="clear">
                		<li><a class="footer-link" href="<?php echo url_root; ?>entry_easy/" target="_blank">簡単３分エントリー</a></li>
                		<li><a class="footer-link" href="<?php echo url_root; ?>contact/">お問合せ</a></li>
                    </ul>
                </li>
           </ul>
         </div>
         
         
    </div><!--Left 2 swb_two-->
    
    
    
    <div class="l swb_three">
    	<div class="item clear">
        	<a class="footer-link" href="<?php echo url_root; ?>reading/"><img src="<?php echo url_root; ?>img/footer/title-reading.png" alt="読みもの"/></a>
        </div>
        
        <div class="item clear">
        	<ul>
            	<li>
        		<a class="footer-link" href="<?php echo url_root; ?>hunter_eye/">ヘッドハンターの目</a>
                    <ul>
                    	 <?php 
					$Data_Category_interview=To_Get_Data("category_hunter"," and category_hunter_Status=0 order by category_hunter_Date DESC","`category_hunter_Name`,`category_hunter_ID`");
					if($Data_Category_interview['cnt']>0){
						for($i=0; $i<$Data_Category_interview['cnt']; $i++){
							$List_Category_interview = $Data_Category_interview[$i];
							$name_category_interview=$List_Category_interview['category_hunter_Name'];
							$id_category_interview=$List_Category_interview['category_hunter_ID'];
					$link_category_interview=url_root."hunter_eye/category/".$id_category_interview.".html";
							?>
                             <li>
                             <a class="<?php if($id_category_interview==$sid):echo "active"; endif; ?>" href="<?php echo $link_category_interview; ?>" title="<?php echo $name_category_interview; ?>"><?php echo $name_category_interview; ?></a>
                             </li>
                          <?php
								}
								unset($Data_Category_interview);
							}
						?>  
                    </ul>
                </li>
            </ul>
        </div>
        
         <div class="item clear">
        	<ul>
            	<li>
        		<a class="footer-link" href="<?php echo url_root; ?>interview/">面接官の本音</a>
                    <ul>
                    	<?php 
					$Data_Category_interview=To_Get_Data("category_interview"," and category_interview_Status=0 order by category_interview_Date DESC","`category_interview_Name`,`category_interview_ID`");
					if($Data_Category_interview['cnt']>0){
						for($i=0; $i<$Data_Category_interview['cnt']; $i++){
							$List_Category_interview = $Data_Category_interview[$i];
							$name_category_interview=$List_Category_interview['category_interview_Name'];
							$id_category_interview=$List_Category_interview['category_interview_ID'];
					$link_category_interview=url_root."interview/category/".$id_category_interview.".html";
							?>
                             <li>
                             <a href="<?php echo $link_category_interview; ?>"><?php echo $name_category_interview; ?></a>
                             </li>
                          <?php
								}
								unset($Data_Category_interview);
							}
						?>  
                    </ul>
                </li>
            </ul>
        </div>
        
        <div class="item clear">
        	<ul>
            	<li>
        		<a class="footer-link" href="<?php echo url_root; ?>career_up/">キャリアアップコラム</a>
                    <ul>
                    	<?php 
					$Data_Category_interview=To_Get_Data("categgory_career_up"," and categgory_career_up_Status=0 order by categgory_career_up_Date DESC","`categgory_career_up_Name`,`categgory_career_up_ID`");
					if($Data_Category_interview['cnt']>0){
						for($i=0; $i<$Data_Category_interview['cnt']; $i++){
							$List_Category_interview = $Data_Category_interview[$i];
							$name_category_interview=$List_Category_interview['categgory_career_up_Name'];
							$id_category_interview=$List_Category_interview['categgory_career_up_ID'];
					$link_category_interview=url_root."career_up/category/".$id_category_interview.".html";
							?>
                             <li>
                             <a href="<?php echo $link_category_interview; ?>" title="<?php echo $name_category_interview; ?>"><?php echo $name_category_interview; ?></a>
                             </li>
                          <?php
								}
								unset($Data_Category_interview);
							}
						?>  
                    </ul>
                </li>
            </ul>
        </div>
        
    </div><!--Left 3 swb_three-->
    
</div>

<div id="footer2" class="footer_bt2 clear">
	<div class="menu_footer clear">
	 		<ul class="clear">
            	 <li><a class="footer-link" href="<?php echo url_root ?>profile/">会社概要</a></li>
                 <li><a class="footer-link" href="<?php echo url_root ?>access/">アクセス</a></li>
                 <li><a class="footer-link" href="<?php echo url_root ?>award/">受賞歴</a></li>
                 <li><a class="footer-link" href="<?php echo url_root ?>publicity/">パブリシティ</a></li>
                <li><a class="footer-link" href="<?php echo url_root ?>privacy_policy/">個人情報保護方針</a></li>
                <li><a class="footer-link" href="<?php echo url_root ?>sitemap/">サイトマップ</a></li>
                <li><a class="footer-link" href="<?php echo url_root ?>kc-recruit/" target="_blank">自社採用情報</a></li>
            
                <li><a class="footer-link" href="http://www.kc-saiyo.com/" target="_blank">採用ご責任者の方へ</a></li>
            </ul>
      </div>
</div>
	<script type="text/javascript">
			$( document ).ready(function(){
			$("#back-top").css({"display":"block"});
				$('#back-top img').attr('src','<?php echo url_root; ?>img/index/pagetop-navy.png');
				 
			$( ".footer_next_site_flow ul li .bd_bor a" ).mouseenter(function(){
						$(this).find(".effect_img").animate({
						easing : 'ease',
						width: "100%",
						opacity: 0.8
						}, 10 );
				  }).mouseleave(function() {
					    $(this).find(".effect_img").animate({
						easing : 'ease',
						width: "0%",
						opacity: 0
						},0 );
				  });

			});
		</script>

<div class="copyright clear">
<div class="copyright_content clear">
        <div class="neo_footer clear">
        	<img src="<?php echo url_root; ?>img/footer/title-group-site.png" alt="グループサイト"/>
        </div>
        <div class="footer_next_site_flow clear">
        	<ul>
            <li>
                    <div class="clear bd_bor">
                        <a rel="nofollow" class="footer-link" href="http://www.kandc.com/exe/" target="_blank" >
                        	<img src="<?php echo url_root; ?>img/footer/thumb-exe.png" alt="クライス＆カンパニー EXECUTIVE"/>
                            <div class="effect_img">クライス＆カンパニー EXECUTIVE</div>
                        </a>
                    </div>
                    <div class="clear bd_bor1">
                            <a rel="nofollow" class="footer-link" href="http://www.kandc.com/exe/" target="_blank" >エグゼクティブの転身・転職サイト</a>
                    </div>
                </li>
            	<li>
                    <div class="clear bd_bor">
                        <a rel="nofollow" class="footer-link" href="http://kc-consul.com/" target="_blank" >
                        	<img src="<?php echo url_root; ?>img/footer/thumb-consul.png" alt="CONSULTANT CAREER"/>
                            <div class="effect_img">CONSULTANT CAREER</div>
                        </a>
                    </div>
                    <div class="clear bd_bor1">
                            <a rel="nofollow" class="footer-link" href="http://kc-consul.com/" target="_blank" >コンサルタントのための転職情報サイト</a>
                    </div>
                </li>
                <li>
                    <div class="clear bd_bor"><a class="footer-link" href="<?php echo url_root; ?>turning-point/" target="_blank">
                    	<img src="<?php echo url_root; ?>img/footer/thumb-turning-point.png" alt="Turning Point"/>
                    	<div class="effect_img">Turning Point</div>
                    </a></div>
                     <div class="clear bd_bor1"><a  class="footer-link" href="<?php echo url_root; ?>turning-point/" target="_blank" >Turning Point 転機をチャンスに変えた瞬間
                     </a></div>
                </li>
                <li>
                    <div class="clear bd_bor"><a  class="footer-link" href="<?php echo url_root; ?>amazontour/" target="_blank">
                         <img src="<?php echo url_root; ?>img/footer/thumb-amazon-tour.png" alt="amazonツーア" />
                         <div class="effect_img">amazonツーア</div>
                         </a></div>
                    <div class="clear bd_bor1"> 
                        <a  class="footer-link" href="<?php echo url_root; ?>amazontour/" target="_blank" >当社からご紹介のamazon現役社員6人にインタビュー</a>
                    </div>
                </li>
                <li>
                    <div class="clear bd_bor">
                         <a class="footer-link" href="<?php echo url_root; ?>chance/vol_1/" target="_blank">
                        <img src="<?php echo url_root; ?>img/footer/thumb-chance.png" alt="転機をチャンスに変えた瞬間"/>
                        <div class="effect_img">転機をチャンスに変えた瞬間</div>
                        </a>
                    </div>
                    <div class="clear bd_bor1">
                        <a class="footer-link" href="<?php echo url_root; ?>chance/vol_1/" target="_blank" >転機をチャンスに変えた瞬間</a>
                     </div>
                </li>
                <li>
                <div class="clear bd_bor">
                    <a rel="nofollow" class="footer-link" href="http://www.regional.co.jp" target="_blank">
                    <img src="<?php echo url_root; ?>img/footer/thumb-reginal.png" alt="リージョナルスタイル"/>
                    <div class="effect_img">リージョナルスタイル</div>
                    </a>
                </div>
                 <div class="clear bd_bor1">
                 	<a rel="nofollow" class="footer-link" href="http://www.regional.co.jp" target="_blank" >Uターン・Ｉターン転職支援リージョナルキャリア</a></div>
                </li>
            </ul>
        </div><!--footer_next_site_flow-->
        
        <div class="clear footer_end">
        	<div class="l footer_end_left">
            	<a href="<?php echo url_root; ?>"><img src="<?php echo url_root; ?>img/footer/logo-kreis-company.png" alt="クライス＆カンパニー"/></a>
                <a href="<?php echo url_root; ?>"><img src="<?php echo url_root; ?>img/footer/logo-kreis-company-22nd.png" alt="22nd"/></a>
            </div><!--footer_end_left-->
            
            <div class="l footer_end_right">
            	<p class="footer_p1">
                	株式会社クライス＆カンパニー
                </p>
                <p class="footer_p2">
                	〒105-0021 東京都港区東新橋2-4-1　サンマリーノ汐留2F
                </p>
                <p class="footer_p3">
                	Copyright &copy; <?php echo date('Y'); ?> KREIS &amp; Company Inc. All Rights Reserved. webdesign <a href="http://tokyodesignroom.com/" title="webdesign tokyodesignroom.com" target="_blank">tokyodesignroom.com</a>
                </p>
            </div><!--footer_end_right-->
            
        </div><!--footer_end-->
        
        
   		 </div><!--copyright_content-->


	


    </div><!--copyright-->




	
	</div><!--#group_footer_inc_end-->
    
</div>
</footer>


<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KSRPSR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSRPSR');</script>
<!-- End Google Tag Manager -->



<!-- User Insight PCDF Code Start : kandc.com -->
<script type="text/javascript">
<!--
var _uic = _uic ||{}; var _uih = _uih ||{};_uih['id'] = 51747;
_uih['lg_id'] = '';
_uih['fb_id'] = '';
_uih['tw_id'] = '';
_uih['uigr_1'] = ''; _uih['uigr_2'] = ''; _uih['uigr_3'] = ''; _uih['uigr_4'] = ''; _uih['uigr_5'] = '';
_uih['uigr_6'] = ''; _uih['uigr_7'] = ''; _uih['uigr_8'] = ''; _uih['uigr_9'] = ''; _uih['uigr_10'] = '';

/* DO NOT ALTER BELOW THIS LINE */
/* WITH FIRST PARTY COOKIE */
(function() {
var bi = document.createElement('scri'+'pt');bi.type = 'text/javascript'; bi.async = true;
bi.src = ('https:' == document.location.protocol ? 'https://bs' : 'http://c') + '.nakanohito.jp/b3/bi.js';
var s = document.getElementsByTagName('scri'+'pt')[0];s.parentNode.insertBefore(bi, s);
})();
//-->
</script>
<!-- User Insight PCDF Code End : kandc.com -->





<!-- Facebook Conversion Code for KREIS -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6024624047186', {'value':'0.00','currency':'JPY'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6024624047186&amp;cd[value]=0.00&amp;cd[currency]=JPY&amp;noscript=1" /></noscript></body>
</html>