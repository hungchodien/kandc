 <div class="clear group_note_sd">
        	<div class="clear content_group_note_sd">
	        	<h3><img src="<?php echo url_root; ?>img/jobinfo/secret-job-title.png" border="0" alt="非公開求人を紹介してもらう"/></h3>
	            <p>
	            当社だけに特別にオーダーをいただいている公開できないコンフィデンシャル案件もございます。非公開求人も含めてご紹介をご希望の方はこちらから<a href="<?php if(isset($_GET['entry_id'])){
						$link_entry_easy.='?entry_id='.$_GET['entry_id'];
					}else{
						$link_entry_easy.='?entry_id=1014585';
					}
					echo url_root."entry/".$link_entry_easy;?>" target="_blank">お申込み</a>ください
	            </p>
                <div class="secret_entry_btn"><a href="<?php echo url_root."entry/?entry_id=1014585"; ?>" target="_blank"><img src="<?php echo url_root; ?>img/entry/button-secret-job-entry.png" alt="非公開求人を紹介してもらう"/></a></div>
            </div>
        </div><!--group_note_sd-->