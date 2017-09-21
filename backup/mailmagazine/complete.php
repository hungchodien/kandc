<?php include('../inc/header.php'); ?>


<?php
    include('../inc/main_search.php')
    //@include('../config.php')
?>
<div id="breadcrumb">
    <div class="breadcrumb-link">
        <ul class="clear">
            <li><img src="img/sub/icon-home.png" alt="ホームボタン" /><a href="<?php echo url_root; ?>" class="home"><span>HOME</span></a></li>
            <li><a href="<?php echo curPageURL();  ?>"> > &nbsp; メールマガジン配信登録&nbsp;</a></li>
        </ul>
    </div>
</div>
<div id="content" class="clear">
    <div id="page" class="clear">
        <div class="title-page">
            <!--<h2 class="title-top"> メールマガジン</h2>-->
			<h2 class="title-top">メールマガジン配信登録</h2>
            <h3 class="sub-title-top">「面接官の本音」「キャリアアップコラム」などの記事の最新号をメールマガジンにてお届けします。</h3>
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
           <div class="form-personal-profile2">
    <div class="title-top2"> メールマガジンのご登録ありがとうございました。<br />
次回配信分より配信させていただきます。　

    </div>
  </div>
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



<?php include('../inc/footer.php'); ?>
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
		vertical-align: middle;
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
	.subscription_posts p{padding-bottom:15px;}
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