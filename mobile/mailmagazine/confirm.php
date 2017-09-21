<?php include('../inc/header.php');?>

<div id="content" class="inside">

	<div class="title-page">

	    <h2 class="title-top">メールマガジン配信登録</h2>
    	<h3 class="sub-title-top">「面接官の本音」「キャリアアップコラム」などの記事の最新号をメールマガジンにてお届けします。</h3>
	</div>

	<div id="mailmagazine_mobile" class="mailmagazine_mobile bg_white content_inside block_content clear">
    	
        <div class="notes">
                	<p>ご入力頂きました内容をご確認いただきまして、変更がないようでしたら一番下の送信ボタンをクリックしてください。
        変更がある場合は、画面をお戻りになりまして変更を行ってください。</p>
						
            </div>
            
            <?php 
				if(isset($_POST['email'])){
					$email = $_POST['email'];
					$subscriber_title = $_POST['subscriber_title'];
					$chkboxes = $_POST['chkbox-select'];
				}
			?>
            
    <div class="fill-email">
            <form id="entry-form" class="confirm" method="post" action="<?php echo url_root; ?>mailmagazine/send_mail.php">
					          		
                    <table>
                    		<tbody>
                            <tr>
                            	<th>
                                		メールアドレス
                                </th>
                                <td>
                                		<?php echo $email;?>
                                        <input type="hidden" class="confirm-email" name="email" value="<?php echo $email;?>">
                                        
                                </td>
                            </tr>
								
							
                            <?php 
								for($i=0;$i<count($subscriber_title);$i++):
							?>
                                 <tr>
                                            <th><?php echo $subscriber_title[$i];?></th>
                                            <td>
                                                <input type="hidden" name="subscribe_posts[]" value="<?php echo $chkboxes[$i] == 1 ? $subscriber_title[$i] : '';?>" readonly>
                                                <input type="hidden" name="chkbox_select[]" value="<?php echo $chkboxes[$i];?>" readonly />
                                                <?php echo $chkboxes[$i] == 1 ? '<span class="green-color">配信希望</span>' : '配信希望しない'; ?>										
                                            </td>	
                                </tr>
                            
                            
                            <?php endfor;?>
                       	</tbody>
                       </table>
                       <input type="hidden" name="admin_subject" value="Mメルマガ登録">
                       
                       <!--<div class="back-confirm-wrap clear">
	
                            <a class="previous-page" href="javascript:history.back(1)">Back</a>
                            <input type="submit" class="submit-btn" value="Submit">
                        </div> -->

						<div class="block_content clear">
						             	<div class="form_back_button2 button-back back_from_confirm">
						                	<a title="Back" href="javascript:history.back(1)">
						                    &lt;&nbsp;&nbsp;&nbsp;戻る
						                    </a>
						                </div>
						                <div class="submit_form_button2">
						               		 <input type="submit" value="申し込む   >" id="submit" name="Submit" class="submit-btn button-confirm">
						                </div>              
						</div><!--block-content-->

            </form>
    </div><!--fill-email-->        
            
            
            <style>
					/* Confirm */
					.green-color{color:#00b711 !important;}
					#entry-form .back-confirm-wrap {
						padding: 20px 0;
						width: 180px;
						margin: 0 auto;
					}
					#entry-form .back-confirm-wrap .previous-page {
						background: url(<?php echo url_root; ?>img/button-back.png) no-repeat 0 0;
						float: left;
					}
					#entry-form .back-confirm-wrap .submit-btn{
						background: url(<?php echo url_root; ?>img/button-send.png) no-repeat 0 0;
						float: right;
					}
					#entry-form .back-confirm-wrap .previous-page,
					#entry-form .back-confirm-wrap .submit-btn{
							font-size: 0;
							color: transparent;
							border: none;
							width: 81px;
							height: 47px;
							display: inline-block;
							cursor: pointer;
					}
					#entry-form .back-confirm-wrap .previous-page:hover,
					#entry-form .back-confirm-wrap .submit-btn:hover{
						background-position:0 -47px;
					}
					.subscription_posts p{padding-bottom:15px;}
			</style>
            
            
            
            
        
    </div><!--mailmagazine_mobile-->
<?php include('inc/menu_interview.php'); ?>
<?php include ('inc/page_footer.php');?>
</div><!--#content-->

<?php include('../inc/footer.php');?>