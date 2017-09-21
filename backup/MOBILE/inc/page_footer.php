<div class="index_btns consultation_pd clear">
    <!--<div class="fl"><a href="<?php echo url_root; ?>jobinfo.html"><img src="<?php echo url_root; ?>img/button-jobinfo.png" alt="毎日更新！ 求人情報" title="求人情報" /></a></div>
    <div class="fr"><a href="<?php echo url_root; ?>documents.html"><img src="<?php echo url_root; ?>img/button-read.png" alt="読みもの" title="次のキャリアを考えるヒントが満載 読みもの" /></a></div>-->
	<?php
		if($page=='category' || $page=='jobinfo' || $page=='job-search'):
	 ?> 
	<a href="<?php echo url_root; ?>entry/?status=fixed" target="_blank">
    	<img src="<?php echo url_root; ?>img/button-entry-secret-v2.png" alt="非公開求人の紹介依頼はこちらから"/>
    </a>
	<?php 
		else:
	?>
	<a href="<?php echo url_root; ?>entry-30/" target="_blank">
    	<img src="<?php echo url_root; ?>img/button-30s-entry.png" alt="30秒で簡単　簡単ヘッドハンティング登録"/>
    </a>
	<?php
		endif;
	 ?>

</div>
	
<?php /*?><div id="back_home_btn"><a href="<?php echo url_root; ?>"><img src="<?php echo url_root; ?>img/button-home.png" alt="ホームボタン" title="ホームボタン" /></a></div> <?php */?>   