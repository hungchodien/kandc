<?php include('../inc/header.php');?>

<div id="container-wrap" class="inside">
<div id="content" class="complete">

<div id="entry-form" class="entry-form container" >

		<form action="" method="">
		
		<!-------------------------------------------------------------->
		<div class="form-personal-profile2">
		    <div class="title-top2"> メールマガジンの配信停止のリクエストをお受けいたしました。
		
		    
		    </div>
		    <div class="contact-personal">
		        <div class="contact-personal-title">お問合せ</div>
		        <div>TEL  03-5733-1602</div>
		        <div>Email  kikaku@kandc.com</div>
		    </div>
		</div>
		<!--------------------------------------->
		<div class="form-personal-submit clear">
		    <a class="button-complete-page" href="<?php echo url_root; ?>"><img src="../../img/entry_question/button-backtoindex.png" alt="ヘッドハンティングのクライス＆カンパニー"></a>
		</div>
		</form>
</div>

</div>

</div>



<style>
*{
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
}
.center{
	margin:0 auto;
	text-align:center;
}
#content{ padding-top:10px; }
.error{color:red;border:none;padding-top:10px;}
#entry-form .notes{
	padding:20px 0;
}

.form-personal-submit{
	padding:20px 0;
}
.button-complete-page {
    width: 328px;
    height: 47px;
    color: transparent;
    border: none;
    cursor: pointer;
    border-width: thin;
    display: block;
    overflow: hidden;
    margin: 0 auto;
}
.button-complete-page:hover img {
    margin-top: -47;
}

@media screen and (max-width:360px){
	.button-complete-page{
			width:100%;
	}
}

</style>


<script>
	jQuery(document).ready(function($){
		$(window).load(function(){
			btn_h = $(".button-complete-page").width();
			btn_h = btn_h * 0.14329;
			$(".button-complete-page").css({"height":btn_h+"px"});
		});
		
	});
</script>

<?php include('../inc/footer.php');?>