<?php include('../inc/header.php'); ?>


<?php
    include('../inc/main_search.php')
    //@include('../config.php')
?>

<div id="content" class="clear inside">
    <div id="page" class="clear">
        <div class="title-page">
            <h2 class="title-top"> メールマガジン</h2>

            <h3 class="sub-title-top">「面接官の本音」「キャリアアップコラム」などのコンテンツ最新号をメールマガジンにてお届けしています。</h3>
        </div>
       <?php  include('../inc/button_entry.php'); ?>
    </div>
    <div class="left-side">
		<script src="<?php echo url_root; ?>js/jquery.popupWindow.js" type="text/javascript"></script>
<script type="text/javascript"> 
	$( document ).ready(function() {
		$('.popup-link').popupWindow({ 
		height:600, 
		width:800, 
		centerBrowser:1  
		});
	});  
</script>
        <div class="look-job" id="interview-newest">
            <div class="label-asked">
                	<p>下記それぞれの読みものと一緒に最新の求人情報や企業セミナー、注目の企業情報などを お届けします。</p>
                    <p>配信をご希望される方はご希望のメールマガジンをお選びいただき、その他必須項目への入力をお願いいたします。</p>
                    <p>ご入力後、「内容確認に進む」ボタンを押してください。</p>
                    <br/>
                    
                    <p class="red"></p>
            </div>
			
            <?php
				if(isset($_POST)){ 
					$subscribe_posts = $_POST['subscribe_posts'];
					$chkbox_select = $_POST['chkbox_select'];
					$user_email = $_POST['email'];
					$admin_subject = '【解除】メーリングサービス';
				}
			?>
            
            	<tr>
                	<th></th>
                </tr>
          
            <form id="entry-form" class="confirm" method="post" action="<?php echo url_root; ?>mailmagazine/send_mail.php">
            		<table>
                    		<tr>
                            	<th>
                                		メールアドレス
                                </th>
                                <td>
                                		<?php echo $user_email;?>
                                		<input type="hidden" name="email" value="<?php echo $user_email;?>" />
                                        
                                </td>
                            </tr>
						 <?php for($i=0;$i<count($chkbox_select);$i++):?>
                         	<tr>
                               
                                <th>
                                		
                                        <?php echo $subscribe_posts[$i];?>
                                </th>
                                <td>
                                		<?php if($chkbox_select[$i]=="0"){
											echo '<input type="hidden" name="subscribe_posts[]" value="'.$subscribe_posts[$i].': 配信停止" readonly />';
											echo '配信停止';
                                       
										}else{
											$admin_subject = '【登録】メーリングサービス';
											echo '<input type="hidden" name="subscribe_posts[]" value="'.$subscribe_posts[$i].': 配信希望" readonly />';
											echo '<span class="green-color">配信希望</span>';
										}
										?>
                                </td>
                             </tr>   
                         <?php endfor;?>
                       </table>
                       <input type="hidden" name="admin_subject" value="<?php echo $admin_subject?>"/>
                       
                       <div class="back-confirm-wrap clear">
	
                            <a class="previous-page" href="javascript:history.back(1)">Back</a>
                            <input type="submit" class="submit-btn" value="Submit" />
                        </div>
            </form>
            
        </div><!--look-job-->
    </div><!--left-side-->
    
    
    <div class="sidebar">
        <!-- form search slidebar -->
       <?php @include('../inc/search_slidebar.php'); ?>

        <!-- job new and Featured Jobs  -->
        <?php @include('../inc/program_list_job.php') ;?>
        <!--  the end featured news -->
        <!-- the start new newest -->
        <?php @include('../inc/slibar_inc.php'); ?>
    </div>
</div>

<style>
	.ct-readmore1 a, .readmore a{
		border: 1px solid #AB8D58;
		padding: 5px 15px !important;
		margin-right: 0;
		width: inherit !important;
	}
	.chkbox-wrap{
		padding:7px 0;
		border-top: 1px solid #AB8D58;
		border-bottom: 1px solid #AB8D58;
		margin-top: 25px;
	}
	.slider{
		width: 70px;
		background: #f2f2f2;
		color: #000;
		padding: 5px 5px 5px 20px;
	    border: 1px solid #ccc;
		text-align: center;
		border-radius: 20px;
		display:block;
		float:left;
		position:relative;
		cursor:pointer;
		transition:all 0.5s;
		-o-transition:all 0.5s;
		-webkit-transition:all 0.5s;
		-moz-transition:all 0.5s;
	}
	.slider.on{
		background: #00b711;
		color: #fff;
		padding: 5px 20px 5px 5px;
	}
	.slider .circle{
		position: absolute;
		width: 26px;
		height: 26px;
		background: #fff;
		border-radius: 50%;
		top: 1px;
		left:1px;
		transition:all 0.5s;
		-o-transition:all 0.5s;
		-webkit-transition:all 0.5s;
		-moz-transition:all 0.5s;
	}
	.slider.on .circle{
		left:68px;
	}
	.slider .chkbox{
		display:none;
	}
	.chkbox-wrap .title-con{
		padding: 5px 0 5px 15px;
	    border-left: 1px solid #AB8D58;
    	margin-left: 15px;
	}
	.chkbox-wrap .email-magazine-btn{
		float:right;
		padding-top:5px;
		font-weight:bold;
	}
	.chkbox-wrap .email-magazine-btn:hover .next_btn{
		background-position:0px 0px;
	}
	.chkbox-wrap .email-magazine-btn .next_btn{		
		width: 8px;
		margin: 4px 0 0 5px;
		background: url(../img/career/next_btn.png) no-repeat 0 0;
		height: 10px;
		display: inline-block;
		background-position: 0 -10px;
	}
	.interview-title .title-con{
		font-size:18px;
	}
	.turning-point .title-con{
		font-size:15px;
	}
	.title_content .ct-title2,
	.title_content .ct-title2 a{
		color:#000;
	}
	.look-job .fill-email{
		margin-top:20px;
		padding-top:15px;
		border-top:1px solid #AB8D58;
	}
	.look-job .fill-email input[type="email"]{
		width:100%;
		box-sizing:border-box;
		-webkit-box-sizing:border-box;
		-moz-box-sizing:border-box;
		min-height:30px;
		padding:5px;
		position:relative;
		top:6px;
	}
	.look-job .fill-email .error{
		margin-left:-20px;
		margin-top:10px;
	}
	.look-job table th{
		width:260px;
	}
	.look-job table th,
	.look-job table td{
		border:1px solid #AB8D58;
		padding:15px;
	}
	.look-job table th{
		background:#f2f2f2;
	}
	.look-job .submit-wrap{
		padding-top:15px;
		text-align:center;
	}
	.look-job .submit-btn{
		    background: url("../img/entry_question/button-confirm.png") no-repeat 0 0;
			width: 186px;
			height: 47px;
			color: transparent;
			font-size: 0;
			border: none;
			cursor: pointer;
			border-width: thin;
	}
	.look-job .submit-btn:hover{
		background-position:0 -47px;
	}
	.green-color{color:#00b711 !important}
	/* Confirm */
	#entry-form .back-confirm-wrap {
		padding: 20px 0;
		width: 180px;
		margin: 0 auto;
	}
	#entry-form .back-confirm-wrap .previous-page {
		background: url(../img/entry_question/button-back.png) no-repeat 0 0;
		float: left;
	}
	#entry-form .back-confirm-wrap .submit-btn{
		background: url(../img/entry_question/button-send.png) no-repeat 0 0;
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
</style>
<script>
	jQuery(document).ready(function($) {

        	$(".chkbox-wrap .slider").click(function(){
				$(this).toggleClass("on");
				if($(this).hasClass("on")){
					$(this).find('.chkbox-select').val('1');
				}
				else{
					$(this).find('.chkbox-select').val('0');
				}
				
			});
			
			//Validate input
			var empty_err = '必須です',
				  email_err = 'メールアドレス（確認） 欄は必須です';

			$("#submit-form .submit-btn").click(function(e){
				var result = true;
				$("#submit-form .error").remove();
				
				//Check empty
				if ( $('#submit-form .fill-email input[name="email"]').val() == "" ){
					$('<p class="error red">'+empty_err+'</p>').insertAfter($('#submit-form .fill-email input[name="email"]'));
					result = false;
				}else{
					var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					if( regex.test($('#submit-form .fill-email input[name="email"]').val()) === false ){
						$('<p class="red error invalid_email">'+email_err+'</p>').insertAfter($('#submit-form .fill-email input[name="email"]'));
						result = false;
					}
				}
			
				if(!result){
					e.preventDefault();
					return false;
				}
				
			});//End click
    });
</script>


<?php include('../inc/footer.php'); ?>