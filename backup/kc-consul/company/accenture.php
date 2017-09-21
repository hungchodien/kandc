	<div class="clear" id="breadcrumb">
        <div class="breadcrumb-link clear">
            <ul class="clear">
                <li><a class="home" href="<?php echo url_root; ?>"><span>Home</span></a></li>
                <li>&nbsp;&gt;&nbsp;</li>
                <li>アクセンチュア株式会社</li>
            </ul>
        </div>
	</div><!--# End breadcrumb-->
    
    
    <div class="company_detail bg_while pd30 mgbt10 clear">
    	<div class="logo_title_detail clear">
        	<div class="l img_logo_cpn">
            	<img alt="アクセンチュア株式会社" src="<?php echo url_root; ?>img/company/logo-accenture.png"/>
            </div>
            <div class="l title_cpn_group">
            	<!--<p class="slg">アクセンチュア株式会社</p>-->
                <p class="title_cpn">アクセンチュア株式会社</p>
            </div>
        </div><!--logo_title-->
        
        <div class="free_space_company clear">
        	<p>グローバル、かつ国内最大規模の外資系コンサルティングファーム。世界56カ国200都市以上で約30万5000名の社員を擁し、グローバルでも最大規模のファームです。ストラテジー、デジタル、テクノロジー、アウトソーシングをコアビジネスとし、革新的な技術・ビジネスモデルをあらゆる産業分野にわたって提供しています（フォーチュン100社のうちの91社、同500社の3/4以上の企業にサービスを提供）。<br><br>

世界最大級のコンサルティングファームだからこそ、グローバル、日本全体にインパクトを与えられる環境です。日本におけるプレゼンスも非常に高く、リーマンショック以降も右肩上がりに成長を続けています。世界で最も信頼される「BtoBブランド」になることを目指しており、コンサルティングだけに留まらずお客様の業務を請負ってオペレーションも手掛け、お客様と共に戦略を実践しながら、そこで得たノウハウをコンサルティングのための知見に昇華するというサイクルを世界レベルで回しています。
<br><br>
また、グローバル企業としてのスケールメリットにとどまらず、各国の拠点が密接に連携し、世界中の英知を結集してプロジェクトを進めることができます。インタラクティブマーケティングやビジネスアナリティクスなど、常に先進的な案件にも携わっています。オープンで起業家精神旺盛な人材が多く、同社出身の経営者が各業界で活躍しています。キャリア入社者も増えているため、中途採用者が活躍できる土壌が整っており、女性にとってより働きやすい環境を整えるなど、ダイバーシティ推進にも積極的です。</p>
           
        </div><!--free_space_company-->
        
    </div><!--# End company_detail-->
    
    
	 <div class="company_detail bg_while pd30 mgbt10 clear">
     	<h3><img alt="インタビュー" src="<?php echo url_root; ?>img/home/title-interview.png"/></h3>
        <!--Begin group interview-->
        <div class="group_interview_company mgt20 clear">
        	<div class="l icon_interview_company"> <a href="<?php echo url_root; ?>interview/top/02"><img src="<?php echo url_root; ?>img/interview/top/02/in-thumb.png" border="0" alt="程 近智氏"/></a></div>
            <div class="l description_interview_company">
            	<div class="group_interview_desc clear">
                	<h6><img alt="トップインタビュー" src="<?php echo url_root; ?>img/company/title-top-interview.png"/></h6>
                    <h3 class="title">自己実現のプラットフォーム」としてアクセンチュアを活用せよ！</h3>
                    <h4 class="sub">アクセンチュア株式会社　代表取締役社長　程 近智氏</h4>
                    <div class="excerpt_interview_company clear">
                    	アクセンチュアの程近智社長は新卒でプログラマーからスタートし、同社の戦略グループや通信・ハイテク本部の統括を務めたあと、2006年に日本の代表取締役社長に就任した。...
                    </div>
                    <div class="readmore_asl">
                        <a href="<?php echo url_root; ?>interview/top/02">
                            <img alt="記事はこちら" src="<?php echo url_root; ?>img/interview/button-read-more.png">
                        </a>
                    </div>
                </div>
            </div>
        </div><!--group_interview_company-->
        
         <div class="group_interview_company mgt20 clear">
        	<div class="l icon_interview_company"> <a href="<?php echo url_root; ?>interview/symposium/02"><img src="<?php echo url_root; ?>img/interview/symposium/02/index-thumb.png" border="0" alt="アクセンチュア株式会社　素材・エネルギー本部 / 経営コンサルティング本部　Y.W. 氏＆D.S. 氏"/></a></div>
            <div class="l description_interview_company">
            	<div class="group_interview_desc clear">
                	<h6><img alt="コンサルタント座談会" src="<?php echo url_root; ?>img/company/title-sym.png"/></h6>
                    <h3 class="title">アクセンチュアが卓越したバリューを出し続ける秘訣とは？</h3>
                    <h4 class="sub">アクセンチュア株式会社　素材・エネルギー本部 / 経営コンサルティング本部　Y.W. 氏＆D.S. 氏</h4>
                    <div class="excerpt_interview_company clear">
                    	多様なバックグラウンドを持つ中途入社者が活躍する自由な社風...
                    </div>
                    <div class="readmore_asl">
                        <a href="<?php echo url_root; ?>interview/symposium/02">
                            <img alt="記事はこちら" src="<?php echo url_root; ?>img/interview/button-read-more.png">
                        </a>
                    </div>
                </div>
            </div>
        </div><!--group_interview_company-->
        
     </div><!--# End company_detail-->
     
     
     <!--Begin Jobinfo-->
     <?php 
	 	$file_job=url_root."company/csv_file/".$csv_file;
		$csv = read_CSV($file_job);
		$row_num=count($csv);
		if($row_num>0):
						
	 ?>
      <!--<div class="company_detail pd30 bg_while bd2 mgbt10 clear">
      		<h4 class="title_pic_job_company">「アクセンチュア株式会社」募集中の求人情報</h4>
          
            <ul class="clear list_csv_job">
            <?php 
				for($j=0;$j<$row_num; $j++){
					$List_job=$csv[$j];
					$category_id=GetCategoryBy_Job_order($List_job[0]);
					if($category_id ==0):
						//msg_move_page("Pick up job info not exit in database");
						
					?>
                    	
                    <?php
					endif;
			?>
				<li>
                	<span class="green b mrr10 f16">&mdash;</span>
                	<span class="title_job_itemt"><a href="<?php echo url_root; ?>jobinfo/<?php  echo $List_job[0]; ?>/<?php echo $category_id; ?>.html"><?php  echo $List_job[22]; ?></a></span>
                </li>
             <?php 
					}
			 ?>
            </ul>
            
      </div><!--# End company_detail-->
      
      <?php 
	  	endif;
	  ?>
	  
      <!--End Jobinfo-->
      
        <div class="button_entry_company company_detail mgbt10 clear">
      		<a href="<?php url_root; ?>entry/?entry_id=1014585" class="tbl_entry_company_page"><img alt="記事はこちら" src="<?php echo url_root; ?>img/interview/button-interview-entry.png"></a>
      </div>
      
      