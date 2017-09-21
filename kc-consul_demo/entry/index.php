<?php
/*	ob_start();
?>
<?php
@include('../Lib/_init.php');
@include('../config.php');

if ($protocol == 'http:' || $protocol =='HTTP:'){
  $entry_protocol = str_replace('http', 'https', curPageURL() );
  header('Location:'.$entry_protocol);
} */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IE 6]>
<html id="ie6" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html id="noIE" xmlns="http://www.w3.org/1999/xhtml">
<!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="keywords" content="ヘッドハンティング,人材紹介会社,転職エージェント,キャリアコンサルティング,クライス&カンパニー,30代,コンサルタント,エンジニア,キャリアデザイン,転職サポート,エントリー"/>
    <meta name="description" content="クライス&カンパニーのサービスへのエントリーフォームです。エントリーご希望の方は、下記項目にご入力の上、ご送信ください。私たちが、あなたの良きパートナーとして転職活動をサポートいたします。"/>
    <meta name="author" content="株式会社クライス・アンド・カンパニー"/>
    <meta name="copyright" content="Copyright&copy;2007 KREIS&amp;Company Inc.　All Right Reserved."/>
    <meta http-equiv="Content-Script-Type" content="text/javascript"/>
    <meta http-equiv="Content-Style-Type" content="text/css"/>
    <meta http-equiv="Content-Language" content="ja"/>
    <title>エントリー（今すぐ転職をお考えのあなた） | ヘッドハンティング・人材紹介会社・転職のクライス&amp;カンパニー</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
 	<!--<script type="text/javascript" src="../js/jquery.min.js"></script>-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="validate_form_entry.js"></script>
    <script src="../js/show_form.js" type="text/javascript"></script>
     <script src="../js/watermark.js" type="text/javascript"></script>
     <script src="../js/number_check.js" type="text/javascript"></script>
	<script src="../js/matchMedia.js" type="text/javascript"></script>

    <!--    <script type="text/javascript" src="../js/jquery.min.js"></script>-->
     <!--<script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/validate_form_entry.js"></script>
    <script src="../js/show_form.js" type="text/javascript"></script>
    <!-- css -->
   
   <script type="text/javascript" src="prototype.js"></script>
   <script type="text/javascript" src="auto_ruby.js"></script>
   
    <link type="text/css" href="../css/style.css" rel="stylesheet"/>
    <link type="text/css" href="https://kandc.com/css/style.css" rel="stylesheet"/>
    <link type="text/css" href="style.css" rel="stylesheet"/>
	<script type="text/javascript">
		var isMobile = window.matchMedia("only screen and (max-width: 760px)");
		if (isMobile.matches) 
			{
				//	alert("mobile");
				document.location = "https://www.kandc.com/mobile/entry/";
			}
			
			//warning message
			var new_var = true;
			window.onbeforeunload = function () {
				if (new_var) {
					if (navigator.userAgent.match(/msie/i) || navigator.userAgent.match(/trident/i) ){
						return "このページを離れると、入力したデータが削除されます。\nよろしいですか？";
					}else {
						return "このページを離れると、入力したデータが削除されます。";
					}
				}
			}
			function unhook() {
				new_var = false;
			}
	
	</script>
	<style type="text/css">
    	.bg_error_fx{
			background:#fff4f4;
		}
		.bg-text {
    		background-color:#f4ffff;
		}
		.easy_name {
    		width: 163px;
		}
		.easy_name input {
   		 width: 90%;
		}
		.phone input {
    		width: 116px;
		}
		.error_box34 {
   		 left: 0 !important;
		}
		#errortext1::before, #errortext1::after {
   		 left: 20px !important;
		}
		#errortext2::before, #errortext2::after {
   		 left: 20px !important;
		}
		#errortext3::before, #errortext3::after {
   		 left: 20px !important;
		}
		#errortext4::before, #errortext4::after {
    		left: 20px !important;
		}
		.line_auto,.line_auto div{
			line-height:inherit !important;
		}
		.text-personal-400 {
   			 margin-bottom: 0px;
		}
		td.pd10{
			padding:10px !important;
		}
		/*#errortext12,#errortext34,#errorselect123,#errorselect4_s,#errortext567{
			margin-left:10px;
		}*/
    </style>
    <!-- javascript -->
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
			$('#text5').bind('input keyup keydown keypress', function(){
    				var value_input=$(this).val();
					if($.isNumeric(value_input) == false){
						$(".check_number_error").addClass("fone_error_0");
			  			$(".check_number_error").css({"display":"block"});
						 //alert('Please enter numeric value');
						//value_input=value_input.replace(/[0-9]/g,'');
						$("#text6").attr('disabled','disabled');
						$("#text7").attr('disabled','disabled');
						$(this).addClass('textError');
					}
					else
					{
						$("#text6").removeAttr('disabled');
						$(".check_number_error").removeClass("fone_error_0");
			  			$(".check_number_error").css({"display":"none"});
						$(this).removeClass('textError');
					}
					
			});
			
			$('#text6').bind('input keyup keydown keypress', function(){
					var value_input=$(this).val();
					if($.isNumeric(value_input) == false){
						$(".check_number_error").addClass("fone_error_1");
			  			$(".check_number_error").css({"display":"block"});
						 //alert('Please enter numeric value');
						//value_input=value_input.replace(/[0-9]/g,'');
						$("#text7").attr('disabled','disabled');
						$("#text5").attr('disabled','disabled');
						$(this).addClass('textError');
					}
					else
					{
						$("#text7").removeAttr('disabled');
						$("#text5").removeAttr('disabled');
						$(".check_number_error").removeClass("fone_error_1");
			  			$(".check_number_error").css({"display":"none"});
						$(this).removeClass('textError');
					}
    				
			});
			$('#text7').bind('input keyup keydown keypress', function(){
    				var value_input=$(this).val();
					if($.isNumeric(value_input) == false){
						$(".check_number_error").addClass("fone_error_2");
			  			$(".check_number_error").css({"display":"block"});
						 //alert('Please enter numeric value');
						//value_input=value_input.replace(/[0-9]/g,'');
						$("#text6").attr('disabled','disabled');
						$("#text5").attr('disabled','disabled');
						$(this).addClass('textError');
					}
					else
					{
						$("#text6").removeAttr('disabled');
						$("#text5").removeAttr('disabled');
						$(".check_number_error").removeClass("fone_error_2");
			  			$(".check_number_error").css({"display":"none"});
						$(this).removeClass('textError');
					}
			});
			
			$('#text8').bind('input keyup keydown keypress', function(){
    				var value_input=$(this).val();
					
						if(!isValidEmailAddress(value_input))
						{
							$(".check_email_error").addClass("txt_error_mail");
			  				$(".check_email_error").css({"display":"block"});
							//$("#text9").attr('disabled','disabled');
						}
						else
						{
							$(".check_email_error").removeClass("txt_error_mail");
			  				$(".check_email_error").css({"display":"none"});
							//$("#text9").removeAttr('disabled','disabled');
						}
						
					
			});
			
			
			
			$("#text1").on("keypress keyup keydown",function (){ 
					setRuby('text1','text3');
					//alert("ok");
			});
			$("#text2").on("keypress keyup keydown",function (event) {   
					setRuby('text2','text4');
					//alert("ok");
			});
			
			$("#text16").Watermark("（例）マーケティング部　課長");
			$("#text8").Watermark("（例）example@kandc.com");
			$("#text9").Watermark("確認のため、もう一度ご入力ください。");
			$("#text10").Watermark("（例）◯◯大学　◯◯学部　◯◯学科");
			$("#text12").Watermark("（例）ITパスポート、プロジェクトマネージャ、中小企業診断士");
			$("#text14").Watermark("（例）株式会社◯◯");
			$("#text19").Watermark("2社以上ご就業経験をお持ちの方は、\n直近の職務内容以外でキャリアコンサルタントに伝えたい経験・スキルがあれば記入してください。\n\n（例）\n20☓☓年4月～20☓☓年12月までは株式会社△△に所属し、\n銀行系のシステム開発を行っていました。その際、新人教育にも携わっていました。");
			$("#text20").Watermark("（例）東京都、千葉県");

				$("#submit_form").on("submit", function() { 
				$text16=$("#text16").val();
				$text8=$("#text8").val();
				$text9=$("#text9").val();
				$text10=$("#text10").val();
				$text12=$("#text12").val();
				$text14=$("#text14").val();
				$select15=$("#select15").val();
				$select5=$("#select5").val();
				$text18=$("#text18").val();
				$text19=$("#text19").val();
				$text20=$("#text20").val();
				if($text16=='（例）マーケティング部　課長'){
					//alert($text16);
					$("#text16").val("");
				}
				if($text8=='（例）example@kandc.com'){
					//alert($text16);
					$("#text8").val("");
				}
				if($text9=='確認のため、もう一度ご入力ください。'){
					//alert($text16);
					$("#text9").val("");
				}
				if($text10=='（例）◯◯大学　◯◯学部　◯◯学科'){
					//alert($text16);
					$("#text10").val("");
				}
				if($text12=='（例）ITパスポート、プロジェクトマネージャ、中小企業診断士'){
					//alert($text16);
					$("#text12").val("");
				}
				if($text14=='（例）株式会社◯◯'){
					//alert($text16);
					$("#text14").val("");
				}
				if($select5=='下記から選択してください'){
					//alert($text16);
					$("#select5").val("");
				}
				if($select15=='従業員数を下記から選択してください'){
					//alert($text16);
					$("#select15").val("");
				}
				
				if($text19=='2社以上ご就業経験をお持ちの方は、\n直近の職務内容以外でキャリアコンサルタントに伝えたい経験・スキルがあれば記入してください。\n\n（例）\n20☓☓年4月～20☓☓年12月までは株式会社△△に所属し、\n銀行系のシステム開発を行っていました。その際、新人教育にも携わっていました。'){
					//alert($text16);
					$("#text19").val("");
				}
				if($text20=='（例）東京都、千葉県'){
					//alert($text16);
					$("#text20").val("");
				}
				
			});


			 // hide #back-top first
            $("#back-top").hide();
            // fade in #back-top
            $(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 100) {
                        $('#back-top').fadeIn();
                    } else {
                        $('#back-top').fadeOut();
                    }
                });
                // scroll body to 0px on click
                $('#back-top a').click(function () {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
            });
        });
		
		
		function isNumber(e) {
			
			var ew = e.which;
			if(48 <= ew && ew <= 57){
				return true;
			}
			else
			{
				e.preventDefault();
			}

    	}    
    </script>

</head>

<body>
<div id="overlay" style="display:none;"></div>
<header>

    <?php //@include("../config.php"); ?>
    <div id="header" class="header clear">
        <div class="header-form-left clear">
            <div class="logo1">
                <h1>ヘッドハンティング・人材紹介・転職支援ならクライス&amp;カンパニー</h1>
                <a href="<?php echo url_root_http; ?>"><img src="../img/head/kreis-logo.png" alt="ヘッドハンティング・人材紹介・転職支援ならクライス&amp;カンパニー"/></a>
            </div>
           
        </div>
        <div class="detail-entry">
            <a href="javascript:void(0);" onclick="show_layer_gcdf('750');"><span class="bg-popup-entry"></span><span class="color-popup-entry">エントリー方法・エントリー後の流れについてはこちら</span><!--<img class="" src="../img/entry/detail-entry.png" alt="">--></a>
        </div>
        <?php @include('../inc/popup_detail_entry.php'); ?>
    </div>
    <div id="entry">
        <div id="entry-nav">
            <ul class="clear">
                <li><span class="entry-nav-step"></span></li>
                <li><span class="entry-nav-step1"></span></li>
                <li><span class="entry-nav-step2"></span></li>
                <li><span class="entry-nav-step3"></span></li>
            </ul>
        </div>
    </div>
</header>
<div id="container">
<div id="content">
<div id="page" class="clear">
    <div class="title-page">
        <p class="title-top">
        
        <?php
			@include('../Lib/_init.php');
			@include('../Lib/function/function.database.php');
			$entry_id_index=(int)$_GET['entry_id'];
			
			
			
			
			
			if($entry_id_index==1019611):
				echo "企業エントリー";
			else:
			 	
				$List_entry_interview = Get_Data("interview", " and `status_interview`=0 and `entry_id`='$entry_id_index' order by `id_interview` DESC limit 1","`company_name`");
				if($List_entry_interview['cnt']>0 && $entry_id_index>0):
						echo "企業エントリー";
				else:
				
		  				$List_entry_tt = Get_Data("scrol_vender", " and `scrol_venderStatus`=0 and `company_id`='$entry_id_index' order by `scrol_venderID` DESC limit 1","`company_name`");
		  				if($List_entry_tt['cnt']>0 && $entry_id_index>0):
		  						echo "企業エントリー";
		  				else:
		  						
		  						$List_consultant = Get_Data("consultant", " and `consultant_Status`=0 and `consultant_entry_id`='$entry_id_index' order by `consultant_Date` DESC limit 1","`consultant_Name`");
		  						if($List_consultant['cnt']>0 && $entry_id_index>0):
		  								//echo $List_consultant['cnt'];
		  								echo "コンサルタント指名エントリー";
		  							else:
		  								$status_entry=$_GET['status_entry'];
		  								if($status_entry=='index'):
		  									echo "あなたにマッチした求人情報をお探しします";
		  								else:
		  									echo "いますぐ転職をお考えのあなた。";
		  								endif;	
		  						endif;
		  						
		  				endif;
						
				endif;		
				
			endif;
		?>
         
       	 </p>
        <p class="sub-title-top">
        <?php
        	if($status_entry=='index'):
				echo "ご経験、ご希望によっては、求人が見つからない場合もございますのでご了承ください。";
			else:
				echo "今すぐ、もしくは近いうちに転職をお考えの方はこちらからお申し込みください。<br />私たちが、あなたの良きパートナーとして転職活動をサポートいたします。";
			endif;
		?>
        
        </p>
    </div>
    <div class="title-button-easy">
        <a href="<?php echo url_root ; ?>entry_easy<?php if(isset($_GET['entry_id']) && !empty($_GET['entry_id'])): echo "/?entry_id=".$_GET['entry_id']; else: echo "";endif; ?><?php if(isset($_GET['status_entry']) && !empty($_GET['status_entry'])): echo "/?status_entry=".$_GET['status_entry']; else: echo "";endif; ?>" title="お持ちのレジュメを添付するだけの無料簡単3分エントリー"></a>
    </div>
</div>

<div id="entry-form" class="entry-form entry_form_popup" >
<form action="comfirm.php" method="post" id="submit_form">
<?php
if (isset($_GET['entry_id'])) {
	
	if($_GET['entry_id']==1019611):
		//amazon
		$amazon_id=1019611;
		?>
        <input type="hidden" name="company_id" id="company_id" value="<?php echo $amazon_id; ?>"/>
        <?php
	else:
		$entry_id_company=(int)$_GET['entry_id'];
		
		$List_cc_interview = Get_Data("interview", " and `status_interview`=0 and `entry_id`='$entry_id_company' order by `id_interview` DESC limit 1","`company_name`");
		if($List_cc_interview['cnt']>0 && $entry_id_company>0):
		?>
        	<input type="hidden" name="company_id" id="company_id" value="<?php echo $entry_id_company; ?>"/>
        <?php
		else:
				
				$list_job=Get_Data("job", " and `order_id`='$entry_id_company'  limit 1","`company_id`");
				

				if($list_job['cnt']<=0):
					$List_entry = Get_Data("scrol_vender", " and `scrol_venderStatus`=0 and `company_id`='$entry_id_company' order by `scrol_venderID` DESC limit 1","`company_name`");
					if($List_entry['cnt']>0):
						$entry_id_company_end=$entry_id_company;
					else:
						$List_entry_consultant = Get_Data("consultant", " and `consultant_Status`=0 and `consultant_entry_id`='$entry_id_company' order by `consultant_Date` DESC limit 1","`consultant_Name`");
						if($List_entry_consultant['cnt']>0):
							 $entry_id_consultant=$entry_id_company;
						else:
							$entry_id_company_end="";
						endif;
					endif;
				else:
					$order_id_job=$entry_id_company;
				endif;
	
?>
<input type="hidden" name="entry_id" id="entry_id" value="<?php echo $order_id_job; ?>"/>
<input type="hidden" name="company_id" id="company_id" value="<?php echo $entry_id_company_end; ?>"/>
<input type="hidden" name="consultant_id" id="consultant_id" value="<?php echo $entry_id_consultant; ?>"/>
<?php
		endif;
	endif;
}
?>
<input type="hidden" name="status_entry" id="status_entry" value="<?php echo $status_entry; ?>"/>

<div class="label-asked">
    <div class="asked">
		<?php 
			
			if(isset($_GET['entry_id'])):
				
			//	@include('../Lib/_init.php');
			//	@include('../Lib/function/function.database.php');
		 	//	$entry_id_company=$_GET['entry_id'];
			
			  
				if($_GET['entry_id']==1019611):
					echo "エントリー企業: アマゾン ジャパン株式会社";
				else:
					$List_interview = Get_Data("interview", " and `status_interview`=0 and `entry_id`='$entry_id_index' and  `entry_id`>0 order by `id_interview` DESC limit 1","`company_name`");
					$company_name_interview=$List_interview['company_name'];
					if(!empty($company_name_interview)):
						echo "エントリー企業: ".$company_name_interview;
					else:
							$List = Get_Data("scrol_vender", " and `scrol_venderStatus`=0 and `company_id`='$entry_id_company' and `company_id`>0 order by `scrol_venderID` DESC limit 1","`company_name`");
							$company_name=$List['company_name'];
							if(!empty($company_name)):
								echo "エントリー企業: ".$company_name;
							else:
								$List_consultant = Get_Data("consultant", " and `consultant_Status`=0 and `consultant_entry_id`='$entry_id_company' and consultant_entry_id>0 order by `consultant_Date` DESC limit 1","`consultant_Name`");
								$consultant_name=$List_consultant['consultant_Name'];
								if(!empty($consultant_name)):
									echo "指名コンサルタント: ".$consultant_name;
								else:
									echo "お申し込みいただくにあたって";
								endif;
								
							endif;
					
					endif;
					
				endif;	
				
			else:
				echo "お申し込みいただくにあたって";
			endif;
		?>
	</div>
    <div class="content-asked" style="padding-top:5px;">転職に関するご相談、企業のご紹介など費用は全て無料ですので、ご安心下さい。
	<?php if($List_consultant['cnt']>0): ?>
    <p>ご経験、ご希望によってはサポートが難しい場合もございますのでご了承ください。</p>
    <?php endif; ?>
     </div>
</div>
<div id="personal_block1" class="form-personal-profile step_hiden">
	<div class="label-personal">個人プロフィール <span class="r" style="font-size:12px;"><span class="red-color">※</span> 必須項目になります。</span></div>
    <div class="table-personal-profile2">
    	<table class="no_bb">
        <tr>
        <td class="label">
                    <div>お名前 <span class="red-color">※</span></div>
         </td>
         <td class="pd10">
                    <div class="td-content line_auto  clear">
                        <div class="name_label">姓</div>
                        <div class="easy_name"  style="position:relative;" >
                <input type="text" name="text1" id="text1" value="" class="bg_error_fx" onfocus="click_text_error(this.id)" onblur="validatetext(this.value, this.id)" />
                       <p id="errortext1"></p>
                        </div>
                        <div class="name_label">名</div>
                        <div class="easy_name"  style="position:relative;">
               <input type="text" name="text2" id="text2" value="" class="bg_error_fx" onblur="validatetext(this.value, this.id)" onfocus="click_text_error(this.id)" />
                        <p id="errortext2"></p>
                        </div>
                        
                    </div>
                    
                    <div class="td-content clear group_error" > 
                    		<p><span id="errortext12"></span></p>
                    		
                    </div>
                </td>
                
            
        </tr>
        </table>
        
        <table class="no_bb">
        	<tr>
            <td class="label">
                    <div>フリガナ <span class="red-color">※</span></div>
                </td>
                <td class="pd10">
                    <div class="td-content line_auto clear">
                        <div class="name_label">セイ</div>
                        <div class="easy_name" style="position:relative;" > 
               <input type="text" name="text3" id="text3" value="" class="bg_error_fx" onblur="validatetext(this.value, this.id)" onfocus="click_text_error(this.id)"/>
                        <p id="errortext3" class="error_box34"></p>
                        </div>
                        <div class="name_label">メイ</div>
                        <div class="easy_name" style="position:relative;" >
               <input type="text" name="text4" id="text4" value="" class="bg_error_fx" onblur="validatetext(this.value, this.id)" onfocus="click_text_error(this.id)" />
                         <p id="errortext4" class="error_box34"></p>
                        </div>
                    </div>
                  	 <div class="td-content clear group_error" > 
                    		<p><span id="errortext34"></span></p>
                    		
                    </div>
                </td>
            </tr>
        </table>
        <table class="no_bb">
        <tr>
                <td class="label">
                    <div>生年月日 <span class="red-color">※</span></div>
                </td>
                <td  class="pd10">
                    <div class="td-content clear" style="position:relative;">
                        <div>西暦</div>
                        <div>
                            <select class="selection selection-style bg_error_fx" name="select1" id="select1" onblur="validateSelect(this.value, this.id)" onfocus="click_text_error(this.id)">
                                <option value=""> 選択</option>
                                <?php $year = 1940;
                                     $end = date("Y");
                                for ($end; $end >= $year; $end--) {
                                    ?>
                                    <option value="<?php echo $end; ?>"><?php echo $end; ?></option>
                                <?php } ?>
                            </select>
                            <p id="errorselect1" class="error_select1"></p>
                        </div>
                        <div>年</div>
                        <div>
                            <select class="selection selection-style bg_error_fx" name="select2" id="select2" onblur="validateSelect(this.value, this.id)"  onfocus="click_text_error(this.id)">
                                <option value=""> 選択</option>
                                <?php $moth = 1;
                                $endMoth = 12;
                                for ($moth; $moth <= $endMoth; $moth++) {
                                    ?>
                                    <option value="<?php echo $moth; ?>"><?php echo $moth; ?></option>
                                <?php } ?>
                            </select>
                           <p id="errorselect2" class="error_select2"></p>
                        </div>
                        <div> 月</div>
                        <div>
                            <select class="selection selection-style bg_error_fx" name="select3" id="select3" onblur="validateSelect(this.value, this.id)"  onfocus="click_text_error(this.id)">
                                <option value=""> 選択</option>
                                <?php $day = 1;
                                $endDay = 31;
                                for ($day; $day <= $endDay; $day++) {
                                    ?>
                                    <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
                                <?php } ?>
                            </select>
                            <p id="errorselect3" class="error_select3"></p>
                        </div>
                        <div> 日</div>
                    </div>
                    
                     <div class="td-content clear group_error" > 
                    		<p><span id="errorselect123"></span></p>
                    		
                    </div>
                </td>
            </tr>
        </table>
        
        <table class="no_bb">
        <tr>
                <td class="label">
                    <div>都道府県<span class="red-color">※</span></div>
                </td>
                
                <td class="pd10">
                    <div class="td-content state clear" style="position:relative;">
                       
                            <select class="selection bg_error_fx"  name="select4" id="select4"  onblur="validateSelect(this.value, this.id)" onfocus="click_text_error(this.id)">
                                <option value="">都道府県を選択してください。</option>
                                <option value='東京都' >東京都</option>
                                     <option value='千葉県' >千葉県</option>
                                     <option value='埼玉県' >埼玉県</option>
                                     <option value='神奈川県' >神奈川県</option>
                                     <option value='' >---------</option>
                               <option value='北海道' >北海道</option>
                               <option value='青森県' >青森県</option>
                               <option value='岩手県' >岩手県</option>
                               <option value='宮城県' >宮城県</option>
                               <option value='秋田県' >秋田県</option>
                               <option value='山形県' >山形県</option>
                               <option value='福島県' >福島県</option>
                               <option value='茨城県' >茨城県</option>
                               <option value='栃木県' >栃木県</option>
                               <option value='群馬県' >群馬県</option>
                               <option value='埼玉県' >埼玉県</option>
                               <option value='千葉県' >千葉県</option>
                               <option value='東京都' >東京都</option>
                               <option value='神奈川県' >神奈川県</option>
                               <option value='新潟県' >新潟県</option>
                               <option value='富山県' >富山県</option>
                               <option value='石川県' >石川県</option>
                               <option value='福井県' >福井県</option>
                               <option value='山梨県' >山梨県</option>
                               <option value='長野県' >長野県</option>
                               <option value='岐阜県' >岐阜県</option>
                               <option value='静岡県' >静岡県</option>
                               <option value='愛知県' >愛知県</option>
                               <option value='三重県' >三重県</option>
                               <option value='滋賀県' >滋賀県</option>
                               <option value='京都府' >京都府</option>
                               <option value='大阪府' >大阪府</option>
                               <option value='兵庫県' >兵庫県</option>
                               <option value='奈良県' >奈良県</option>
                               <option value='和歌山県' >和歌山県</option>
                               <option value='鳥取県' >鳥取県</option>
                               <option value='島根県' >島根県</option>
                               <option value='岡山県' >岡山県</option>
                               <option value='広島県' >広島県</option>
                               <option value='山口県' >山口県</option>
                               <option value='徳島県' >徳島県</option>
                               <option value='香川県' >香川県</option>
                               <option value='愛媛県' >愛媛県</option>
                               <option value='高知県' >高知県</option>
                               <option value='福岡県' >福岡県</option>
                               <option value='佐賀県' >佐賀県</option>
                               <option value='長崎県' >長崎県</option>
                               <option value='熊本県' >熊本県</option>
                               <option value='大分県' >大分県</option>
                               <option value='宮崎県' >宮崎県</option>
                               <option value='鹿児島県' >鹿児島県</option>
                               <option value='沖縄県' >沖縄県</option>
                               <option value='海外' >海外</option>
                            </select>
                        
                        <p id="errorselect4" class="error_select4"></p>
                    </div>
                    <div class="td-content"><p id="errorselect4_s"></p></div>
                </td>
               
            </tr>
            
        </table>
        <table class="no_bb">
        	<tr>
             <td class="label">
                    <div>電話番号 <span class="red-color">※</span></div>
                </td>
                <td class="pd10">
                    <div class="td-content phone clear" >
                       <div style="position:relative;">
                            <input class="phone_require bg_error_fx" onblur="validatetext(this.value, this.id)" type="text" name="text5" id="text5" value="" style="-webkit-ime-mode:inactive;-moz-ime-mode:inactive;-ms-ime-mode:inactive;ime-mode:inactive; margin-left: 5px;" onfocus="click_text_error(this.id)"/> -
                            <p id="errortext5" class="error_box5"></p>
                       </div>
                       <div style="position:relative;">
                            <input class="phone_require bg_error_fx" onblur="validatetext(this.value, this.id)" type="text" name="text6" id="text6" value="" style="-webkit-ime-mode:inactive;-moz-ime-mode:inactive;-ms-ime-mode:inactive;ime-mode:inactive;" onfocus="click_text_error(this.id)"/> -
                            <p id="errortext6" class="error_box6"></p>
                       </div>
                       <div style="position:relative;">
                            <input class="phone_require bg_error_fx" onblur="validatetext(this.value, this.id)" type="text" name="text7" id="text7" value="" style="-webkit-ime-mode:inactive;-moz-ime-mode:inactive;-ms-ime-mode:inactive;ime-mode:inactive;" onfocus="click_text_error(this.id)"/>
                            <p id="errortext7" class="error_box7"></p>
                        </div>
                        
                       <p class="check_number_error" style="display:none;">「半角英数字」で電話番号を正しく入力ください。</p>
                       
                    </div>
                    
                    <div class="td-content clear group_error" > 
                    		<p><span id="errortext567"></span></p>
                    		
                    </div>
                   
                </td>
            </tr>
        </table>
        <table>
            
            
            <tr>
                <td class="label">
                    <div>メールアドレス<span class="red-color">※</span></div>
                </td>
                <td class="pd10">
                    <div class="td-content clear line_auto" style="position:relative;">
                        <div>
                            <input class="text-personal-400 bg_error_fx" onblur="validatetext(this.value, this.id)" type="text" name="text8" id="text8" onfocus="click_text_error(this.id)"/>
                             <p id="errortext8" class="error_box8"></p>
                        </div>
                       
                        <!--<div>
                            <input class="text-personal-400 bg_error_fx" onblur="validatetext(this.value, this.id)" type="text" name="text9" id="text9" onfocus="click_text_error(this.id)"/>
                              <p id="errortext9" class="error_box9"></p>
                        </div>-->
                        <!--<div style="width: 70px;  margin: 3px 0 0px 0">&nbsp;※確認用</div>-->
						
      <p class="check_email_error" style="display:none;">必須項目です。必ずご入力ください。</p>
                        
                    </div>
                    
                    <div class="td-content clear">
                    	<div><span id="errortext89"></span></div>
                    </div>
                   
                </td>
            </tr>
        </table>
    </div>
</div>

<!-------------------------------------------------------------->
<div id="personal_block2" class="form-personal-profile">
    <div class="label-personal">最終学歴・語学・資格</div>
    <div class="table-personal-profile">
        <table>
            <tr>
                <td class="label">
                    <div>学校名</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div><input type="text" name="text10" id="text10" value="" style="width:580px;" onfocus="click_text(this.id)"/></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>英語力</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div>
                            <select class="selection" style="width: 250px" name="select5" id="select5" onfocus="click_text(this.id)">
                                <option>下記から選択してください</option>
                                <option value="ネイティブレベル">ネイティブレベル</option>
                                <option value="ビジネスレベル">ビジネスレベル</option>
                                <option value="スタンダードレベル">スタンダードレベル</option>
                                <option value="ベーシックレベル">ベーシックレベル</option>
                                <option value="不可">不可</option>
                            </select>
                        </div>
                        <div>TOEIC</div>
                        <div><input type="text" name="text11" id="text11" value="" onfocus="click_text(this.id)"/></div>
                        <div> 点</div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>その他語学・資格</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div>
                            <textarea rows="1" cols="50" style="width: 580px" type="text" name="text12" id="text12" value="" onfocus="click_text(this.id)"></textarea>
                        </div>
                    </div>
                </td>
            </tr>

        </table>
    </div>
</div>

<!-------------------------------------------------------------->
<div id="personal_block3" class="form-personal-profile">
<div class="label-personal">職務経歴について</div>
<div class="table-personal-profile">
    <table>
        <tr>
            <td class="label">
                <div>経験社数 <span class="red-color">※</span></div>
            </td>
            <td>
                <div class="td-content clear" style="position:relative;">
                    <div><input type="text" class="bg_error_fx" name="text13" id="text13" value="" onblur="validatetext(this.value, this.id)" onfocus="click_text_error(this.id)"/>
                      <p id="errortext13" class="error_box13"></p>
                    </div>
                    <div>社</div>
                    <!--<div id="errortext13"><span></span></div>-->
                </div>

</td>
</tr>
<tr>
    <td class="label">
        <div>会社名・従業員数</div>
    </td>
    <td>
        <div class="td-content clear" style="position:relative;">
        	<div class="clear">
            <div class="l" style="margin:0;"><input style="width: 400px; margin-bottom: 10px" type="text" name="text14" id="text14" value="" onfocus="click_text(this.id)"/>
            </div>
            <div class="l">
            <!--<input style="width: 100px; margin-bottom: 10px" type="text" name="text15" id="text15" onfocus="click_text(this.id)"
                        value=""/>-->
            <select id="select15" name="text15" class="selection selection-style" style="width:250px; padding:3px;" onfocus="click_text(this.id)" >
            <option>従業員数を下記から選択してください</option>
            	<option value="～50名">～50名</option>
                <option value="51～100名">51～100名</option>
                <option value="101～500名">101～500名</option>
                <option value="501～1000名">501～1000名</option>
                <option value="1001名～5000名">1001名～5000名</option>
                <option value="5001名～">5001名～</option>
            	
            </select>         
            </div>
           </div>
            <div class="clear">※直近の職歴についてご入力ください。</div>
        </div>
    </td>
</tr>
<tr>
    <td class="label">
        <div>業種<span class="red-color">※</span></div>
    </td>
    <td>
        <div class="td-content clear" >
        	 <div class="job_select_option">
            	<a id="checkbox_business_entry" href="javascript:void(0);" onclick="show_layer_select_business('880');">select option</a><span class="txt_option_select_business"></span>
           		 <input type="hidden" name="select6" id="select6" value="" onfocus="click_text(this.id)"/>
            </div>
            
             <script type="text/javascript">
        		jQuery(document).ready(function ($) {	
					$('a#business_close_entry').click(function() {
					//$(".job_select_option").delegate("a#business_close_entry","click", function() {	
						
							$("#overlay").hide();
							$(".pop_up_selecbox_business_entry").hide();
							$(".layer_select_business_bg").hide();
							$("#select6").focus();
							setTimeout(
							  function() 
							  {
								new_var = true;
							  }, 1000);
						
					});
					$("a#checkbox_business_entry").click(function() {
						new_var = false;
							$("#overlay").css({ display: "block" });
							$(".layer_select_business_bg").show();
							$( ".pop_up_selecbox_business_entry" ).css({"opacity": 1, "display":"block"});
						});
				
					$(".tbl_popup_entry a#tbl_a_tag_business").on('click', function (){
						//$(".tbl_popup_entry").delegate("a#tbl_a_tag_business","click", function() {	
						
							 var fields_checkbox1 = '';
							$(".check_box_business:radio").each(function () {
								if (this.checked) {
									fields_checkbox1 += $(this).val() + ' ';
									//fields_checkbox = $(".checkbox1_entry .check_box_business:checked").val();
									//alert(fields_checkbox);
								}
							});
							
							$('#select6').val(fields_checkbox1);
							if((fields_checkbox1.length)>0){$('#errorselect6').hide();}
							
							$('.txt_option_select_business').text($.trim(fields_checkbox1));
							$("#overlay").hide();
							$(".pop_up_selecbox_business_entry").hide();
							$(".layer_select_business_bg").hide();
							$("#select6").focus();
							setTimeout(
							  function() 
							  {
								new_var = true;
							  }, 1000);
						})
				});
				
			</script>
           
            <div style="display: none;" class="layer_select_business_bg">
 			</div>
            <div class="pop_up_selecbox_business_entry layer_select_business_cc" style="display:none;">
            	<div class="pop_up_boder_entry clear">
                	<div class="clear">
                    	<div class="l">
                        <div class="clear">
                        	<h3 class="label-personal" style="padding-bottom:0px; float:left">業種を選択</h3>
                        	<p class="hitsu_p" style="float:left; color:#FF0004;">&nbsp;&nbsp;※直近の業種を1つ選択してください</p>
                        </div>
                        </div>
                        <div class="r"><a id="business_close_entry"><img src="https://kandc.com/img/close.gif" /></a></div>
                    </div>
                    <div class="clear form_entry_popup">
                    
                    	<div class="clear business_entry_select">
                        	
                            <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	IT・通信系
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                   
                                    	<li><label><input name="checkbox1" type="radio" class="check_box_business" value="コンピュータ（ハード）" />
                                        <span class="content_check">コンピュータ（ハード）</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="コンピュータ（ソフト）" />
                                        <span class="content_check">コンピュータ（ソフト）</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="コンピュータ（システム）" />
                                        <span class="content_check">コンピュータ（システム）</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="インターネット" />
                                        <span class="content_check">インターネット</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="ネットーワーク" />
                                        <span class="content_check">ネットーワーク</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="通信キャリア" />
                                        <span class="content_check">通信キャリア</span></label></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                              <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	専門コンサル系
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li class="w50"><label><input name="checkbox1" type="radio" class="check_box_business" value="戦略コンサルティングファーム" />
                                        <span class="content_check">戦略コンサルティングファーム</span></label></li>
                                     
                                        <li class="w50"><label><input name="checkbox1" type="radio" class="check_box_business" value="人事・組織コンサルティングファーム" />
                                        <span class="content_check">人事・組織コンサルティングファーム</span></label></li>
                                        <li class="w50"><label><input name="checkbox1" type="radio" class="check_box_business" value="会計・システムコンサルティングファーム" />
                                        <span class="content_check">会計・システムコンサルティングファーム</span></label></li>
                                        <li class="w50"><label><input name="checkbox1" type="radio" class="check_box_business" value="その他コンサルティングファーム" />
                                        <span class="content_check">その他コンサルティングファーム</span></label></li>
                                        <li class="w50"><label><input name="checkbox1" type="radio" class="check_box_business" value="シンクタンク" />
                                        <span class="content_check">シンクタンク</span></label></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                              <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	サービス系
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox1" type="radio" class="check_box_business" value="人材紹介・派遣" />
                                         <span class="content_check">人材紹介・派遣</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="情報サービス" />
                                         <span class="content_check">情報サービス</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="ベンチャーキャピタル" />
                                         <span class="content_check">ベンチャーキャピタル</span></label></li>
                                      
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                              <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	金融・保険系
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox1" type="radio" class="check_box_business" value="銀行" />
                                        <span class="content_check">銀行</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="証券" />
                                        <span class="content_check">証券</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="生保" />
                                        <span class="content_check">生保</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="損保" />
                                        <span class="content_check">損保</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="その他金融" />
                                        <span class="content_check">その他金融</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="機械" />
                                        <span class="content_check">機械</span></label></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                              <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title" style="line-height:15px;">
                                	メーカー系<br />(電気・電子・機械系)
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox1" type="radio" class="check_box_business" value="電気・電子・半導体" />
                                        <span class="content_check">電気・電子・半導体</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="輸送機器・自動車（部品）" />
                                        <span class="content_check">輸送機器・自動車（部品）</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="プラント設備関連" />
                                        <span class="content_check">プラント設備関連</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="バイオ・メディカル" />
                                        <span class="content_check">バイオ・メディカル</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="化学" />
                                        <span class="content_check">化学</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="エネルギー" />
                                        <span class="content_check">エネルギー</span></label></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                              <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	不動産・建設系
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li class="w50"><label><input name="checkbox1" type="radio" class="check_box_business" value="不動産" />
                                        <span class="content_check">不動産</span></label></li>
                                        <li class="w50"><label><input name="checkbox1" type="radio" class="check_box_business" value="建設・建築・土木" />
                                        <span class="content_check">建設・建築・土木</span></label></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                              <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	マスコミ系
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox1" type="radio" class="check_box_business" value="マーケティング関連" />
                                        <span class="content_check">マーケティング関連</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="広告代理店" />
                                        <span class="content_check">広告代理店</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="広告制作" />
                                        <span class="content_check">広告制作</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="出版・マスコミ" />
                                        <span class="content_check">出版・マスコミ</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="教育・研修" />
                                        <span class="content_check">教育・研修</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="アミューズメント・エンターテインメント" />
                                        <span class="content_check">アミューズメント・エンターテインメント</span></label></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                              <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	流通・小売系
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox1" type="radio" class="check_box_business" value="旅行・ホテル" />
                                        <span class="content_check">旅行・ホテル</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="食品・飲料" />
                                        <span class="content_check">食品・飲料</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="トイレタリー・日用品" />
                                        <span class="content_check">トイレタリー・日用品</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="化粧品・健康食品" />
                                        <span class="content_check">化粧品・健康食品</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="アパレル・ブランド" />
                                        <span class="content_check">アパレル・ブランド</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="その他消費財" />
                                        <span class="content_check">その他消費財</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="流通・小売・販売" />
                                        <span class="content_check">流通・小売・販売</span></label></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                              <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	商社系
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li class="w50"><label><input name="checkbox1" type="radio" class="check_box_business" value="総合商社" />
                                        <span class="content_check">総合商社</span></label></li>
                                        <li class="w50"><label><input name="checkbox1" type="radio" class="check_box_business" value="専門商社" />
                                        <span class="content_check">専門商社</span></label></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                              <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	その他
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox1" type="radio" class="check_box_business" value="運輸・物流" />
                                        <span class="content_check">運輸・物流</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="その他メーカー" />
                                        <span class="content_check">その他メーカー</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="その他サービス" />
                                        <span class="content_check">その他サービス</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="特殊法人" />
                                        <span class="content_check">特殊法人</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="その他" />
                                        <span class="content_check">その他</span></label></li>
                                     </ul>
                                </div>
                            </div>
                            <!--End-->
                        
                        </div>
                        
                        
                        
                       
                        
                        
                        <div class="tbl_popup_entry clear"><a href="javascript:void(0);" id="tbl_a_tag_business">button</a></div>
                    </div>
            	</div>
            </div>
        
        
        
        
        
        
        
            
               
            <div id="errorselect6" style="line-height:28px;"></div>
        </div>

    </td>
</tr>
<tr>
    <td class="label">
        <div>勤務期間</div>
    </td>
    <td>
        <div class="td-content td-content-bottom clear">
            <div>西暦</div>
            <div>
                <select class="selection selection-style" name="select7" id="select7" onfocus="click_text(this.id)">
                    <option value=""> 選択</option>
                    <?php $year = 1940;
                    $end = date("Y");
                    for ($end; $year <= $end; $end--) {
                        ?>
                        <option value="<?php echo $end ?>"><?php echo $end ?></option>
                    <?php } ?>
                </select>
            </div>

            <div>年</div>
            <div>
                <select class="selection selection-style" name="select8" id="select8" onfocus="click_text(this.id)">
                    <option value=""> 選択</option>
                    <?php $moth = 1;
                    $endMoth = 12;
                    for ($moth; $moth <= $endMoth; $moth++) {
                        ?>
                        <option value="<?php echo $moth ?>"><?php echo $moth ?></option>
                    <?php } ?>
                </select>
            </div>

            <div>月 ～</div>
            <div>
                <select class="selection selection-style" name="select9" id="select9" onfocus="click_text(this.id)">
                    <option value=""> 選択</option>
                    <?php $year = 1940;
                    $end = date("Y");
                    for ($end; $year <= $end; $end--) {
                        ?>
                        <option value="<?php echo $end ?>"><?php echo $end ?></option>
                    <?php } ?>
                </select>
            </div>

            <div>年</div>
            <div>
                <select class="selection selection-style" name="select10" id="select10" onfocus="click_text(this.id)">
                    <option value=""> 選択</option>
                    <?php $moth = 1;
                    $endMoth = 12;
                    for ($moth; $moth <= $endMoth; $moth++) {
                        ?>
                        <option value="<?php echo $moth ?>"><?php echo $moth ?></option>
                    <?php } ?>
                </select>
            </div>

            <div>月</div>
        </div>

        <div class="td-content td-content-2 clear">
            <div><label><input type="radio" name="radio1" value="現職中" id="radio1" checked/> 現職中</label></div>
            <div><label><input type="radio" name="radio1" value="退職予定" id="radio2"/> 退職予定</label></div>
            <div><label><input type="radio" name="radio1" value="離職中" id="radio3"/> 離職中</label></div>
        </div>
    </td>
</tr>
<tr>
    <td class="label">
        <div>職種<span class="red-color">※</span></div>
    </td>
    <td>
        <div class="td-content clear" >
            <div class="job_select_option">
            <a id="checkbox_job_entry"  href="javascript:void(0);" onclick="show_layer_select_job('790');">select option</a><span class="txt_option_select"></span>
           		 <input type="hidden" class="bg_error_fx" name="select11" id="select11" value="" onfocus="click_text_error(this.id)"/>
            </div>
            
             <script type="text/javascript">
        		jQuery(document).ready(function ($) {	
					$('a#job_close_entry').click(function() {
						new_var = true;
							$("#overlay").hide();
							$(".pop_up_selecbox_job_entry").hide();
							$(".layer_select_job_bg").hide();
							$("#select11").focus();
						
					});
					$("a#checkbox_job_entry").click(function() {
						new_var = false;
							$("#overlay").css({ display: "block" });
							$(".pop_up_selecbox_job_entry").show();
							$(".layer_select_job_bg").show();
							$( ".pop_up_selecbox_job_entry" ).css({"opacity": 1, "display":"block"});
						});
				
					$(".tbl_popup_entry a#tbl_a_tag").on('click', function (){
							 var fields_checkbox1 = '';
							$(".check_box_job:radio").each(function () {
								if (this.checked) {
									fields_checkbox1 += $(this).val() + '  ';
									//fields_checkbox1 = $(".form_entry_popup .check_box_job:checked").val();
									//alert(fields_checkbox1);
								}
							});
							//alert(fields_checkbox1);
							$('#select11').val($.trim(fields_checkbox1));
							if((fields_checkbox1.length)>0){$('#errorselect11').hide();}
							$('.txt_option_select').text($.trim(fields_checkbox1));
							$("#overlay").hide();
							$(".pop_up_selecbox_job_entry").hide();
							$(".layer_select_job_bg").hide();
							$("#select11").focus();
							setTimeout(
							  function() 
							  {
								new_var = true;
							  }, 1000);
						})
				});
				
			</script>
            <div style="display: none;" class="layer_select_job_bg">
 			</div>
            <div class="pop_up_selecbox_job_entry layer_select_job_cc" style="display:none;">
            	<div class="pop_up_boder_entry clear">
                	<div class="clear">
                    	<div class="l">
                       		 <div class="clear">
                        		<h3 class="label-personal" style="padding-bottom:0px; float:left;"> 職種を選択</h3>
                        		<p class="hitsu_p" style="float:left; color:#FF0004;">&nbsp;&nbsp;※直近の職種を1つ選択してください</p>
                        	</div>
                        </div>
                        <div class="r"><a  id="job_close_entry"><img src="https://kandc.com/img/close.gif" /></a></div>
                    </div>
                    <div class="clear form_entry_popup">
                        <div class="clear job_entry_select">
                        	  <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	コンサルタント
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li class="w50"><label><input name="checkbox2" type="radio" class="check_box_job" value="コンサルタント" />
                                        <span class="content_check">コンサルタント</span></label></li>
                                        <li class="w50"><label><input name="checkbox2" type="radio" class="check_box_job" value="コンサルタント（IT）" />
                                        <span class="content_check">コンサルタント（IT）</span></label></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                           
                            <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	IT・ソフトウェア
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox2" type="radio" class="check_box_job" value="ITハード系エンジニア" />
                                        <span class="content_check">ITハード系エンジニア</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="ソフトウェアエンジニア" />
                                        <span class="content_check">ソフトウェアエンジニア</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="WEB・モバイル関連" />
                                        <span class="content_check">WEB・モバイル関連</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="その他ソフトウェア関連" />
                                        <span class="content_check">その他ソフトウェア関連</span></label></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                           
                            <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	機械・メカトロ
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li class="w50"><label><input name="checkbox2" type="radio" class="check_box_job" value="機械・メカトロニクスエンジニア" />
                                        <span class="content_check">機械・メカトロニクスエンジニア</span></label></li>
                                        <li class="w50"><label><input name="checkbox2" type="radio" class="check_box_job" value="電気・電子・半導体エンジニア" />
                                        <span class="content_check">電気・電子・半導体エンジニア</span></label></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                            <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	化学・バイオ・メディカル
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li class="w50"><label><input name="checkbox2" type="radio" class="check_box_job" value="化学系" />
                                        <span class="content_check">化学系</span></label></li>
                                        <li class="w50"><label><input name="checkbox2" type="radio" class="check_box_job" value="バイオ・メディカル系" />
                                        <span class="content_check">バイオ・メディカル系</span></label></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                           
                            <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	企画系
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox2" type="radio" class="check_box_job" value="経営企画・事業企画" />
                                        <span class="content_check">経営企画・事業企画</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="営業企画" />
                                        <span class="content_check">営業企画</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="業務企画" />
                                        <span class="content_check">業務企画</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="商品・サービス企画" />
                                        <span class="content_check">商品・サービス企画</span></label></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                           
                            <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	IR・広報・マーケティング
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox2" type="radio" class="check_box_job" value="IR" />
                                        <span class="content_check">IR</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="広報" />
                                        <span class="content_check">広報</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="マーケティング" />
                                        <span class="content_check">マーケティング</span></label></li>
                                      </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                           <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	事務
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox2" type="radio" class="check_box_job" value="総務" />
                                        <span class="content_check">総務</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="法務" />
                                        <span class="content_check">法務</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="人事" />
                                        <span class="content_check">人事</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="経理・財務・会計" />
                                        <span class="content_check">経理・財務・会計</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="秘書" />
                                        <span class="content_check">秘書</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="事務・庶務" />
                                        <span class="content_check">事務・庶務</span></label></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                            <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	営業・サービス・販売
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li class="w50"><label><input name="checkbox2" type="radio" class="check_box_job" value="営業" />
                                        <span class="content_check">営業</span></label></li>
                                        <li class="w50"><label><input name="checkbox2" type="radio" class="check_box_job" value="販売・サービス" />
                                        <span class="content_check">販売・サービス</span></label></li>
                                      </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                             <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	金融・不動産
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li class="w50"><label><input name="checkbox2" type="radio" class="check_box_job" value="金融関連職" />
                                        <span class="content_check">金融関連職</span></label></li>
                                        <li class="w50"><label><input name="checkbox2" type="radio" class="check_box_job" value="建設・建築・土木系" />
                                        <span class="content_check">建設・建築・土木系</span></label></li>
                                      </ul>
                                </div>
                            </div>
                            <!--End-->
                           
                            <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	その他
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox2" type="radio" class="check_box_job" value="インストラクター" />
                                        <span class="content_check">インストラクター</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="トップマネジメント" />
                                        <span class="content_check">トップマネジメント</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="ロジスティクス・購買関連" />
                                        <span class="content_check">ロジスティクス・購買関連</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="エスタブリッシュメント職" />
                                        <span class="content_check">エスタブリッシュメント職</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="クリエイティブ系" />
                                        <span class="content_check">クリエイティブ系</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="デザイナー" />
                                        <span class="content_check">デザイナー</span></label></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                           
                        </div>
                        
                        <div class="tbl_popup_entry clear"><a href="javascript:void(0);" id="tbl_a_tag">button</a></div>
                    </div>
            	</div>
            </div>
            
            
                
                
           
            <div id="errorselect11" style="line-height:28px;"></div>
         </div>
    </td>
</tr>
<tr>
    <td class="label">
        <div>最終部課／職位・年収</div>
    </td>
    <td>
        <div class="td-content clear">
            <div><input style="width: 400px; margin-bottom: 10px" type="text" name="text16" id="text16" value="" onfocus="click_text(this.id)"/></div>
            <div><input style="width: 100px; margin-bottom: 10px" type="text" name="text17" id="text17" value="" onfocus="click_text(this.id)"/></div>
            <div>万円</div>
        </div>
    </td>
</tr>
<tr>
    <td class="label">
        <div>職務内容 <span class="red-color">※</span></div>
    </td>
    <td>
        <div class="td-content clear" style="position:relative;">
        <div  id = "desctext18"class="desc_hidden "><span>職務経歴書をお持ちの方は、職務経歴書の内容を貼り付けてください。お持ちでない方は箇条書きで入力してください</span></div>
            <div>
            <textarea style="width:730px; height:120px; margin-bottom: 10px" class="bg_error_fx" type="text" name="text18" id="text18" value="" onfocus="click_text_error(this.id)" onblur="validatetext(this.value, this.id)" ></textarea>
            <p id="errortext18" class="error_box18"></p>
            </div>
            
        </div>
    </td>
</tr>
<tr>
    <td class="label">
        <div>その他職歴</div>
    </td>
    <td>
        <div class="td-content clear">
        
       
            <div><textarea style="width:730px; height:120px; margin-bottom: 10px" type="text" name="text19" id="text19"  onfocus="click_text(this.id)"></textarea></div>
            
        </div>
    </td>
</tr>
</table>
</div>
</div>

<!--------------------------------------------------------------->
<div id="personal_block4" class="form-personal-profile">
    <div class="label-personal">ご希望について</div>
    <div class="table-personal-profile">
        <table>
            <tr>
                <td class="label">
                    <div>希望勤務地</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div><input style="width: 500px;" type="text" name="text20" id="text20" value=""  onfocus="click_text(this.id)"/></div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<!-------------------------------------------------------------->
<div id="personal_block5" class="form-personal-profile">
    <div class="label-personal">何をご覧になってアクセス頂きましたか？</div>
    <div class="table-personal-profile">
        <table>
            <tr>
                <td valign="middle" class="label colpan_set" rowspan="1">
                    <div>媒体</div>
                </td>
                <td>
                
                <script type="text/javascript">
				jQuery(document).ready(function ($) {
						$('.select_show1').hide(); 
						$('.select_show2').hide();
						$('.exchange_select').hide();
						
							$('#select12').change(function(){
								if($('#select12').val() == 'その他') {
									$('.select_show1').show();
									$('.exchange_select').show();
									
									$('.select_show2').hide();
								}else if($('#select12').val() == '紹介（クライスにご登録している方より）' || $('#select12').val() == '紹介（クライスのご登録者以外より）') 
								 {
									$('.select_show2').show(); 
									$('.exchange_select').show();
									
									$('.select_show1').hide(); 
								 }else
								 {
										$('.select_show1').hide(); 
										$('.select_show2').hide();
										$('.exchange_select').hide();
										 
								 }
							});
					
					
					});
				</script>
                    <div class="td-content clear">
                        <div>
                            <select class="selection" style="width: 300px" name="select12" id="select12" onfocus="click_text(this.id)">
                                <option value="">下記から選択してください</option>
                                <option value="弊社コンサルタント専門サイト">弊社コンサルタント専門サイト</option>
                                <option value="Google">Google</option>
                                <option value="Yahoo">Yahoo</option>
                                <option value="その他検索エンジン">その他検索エンジン</option>
                                <option value="en転職コンサルタント">en転職コンサルタント</option>
                                <option value="日経キャリアNET">日経キャリアNET</option>
                                <option value="リクナビNEXT">リクナビNEXT</option>
                                <option value="ビズリーチ">ビズリーチ</option>
                                <option value="その他WEBサイト">その他WEBサイト</option>
                                <option value="駅広告">駅広告</option>
                                <option value="メルマガ（面接官の本音）">メルマガ（面接官の本音）</option>
                                <option value="メルマガ（ヘッドハンターの目）">メルマガ（ヘッドハンターの目）</option>
                                <option value="メルマガ（キャリアアップコラム）">メルマガ（キャリアアップコラム）</option>
                                <option value="紹介（クライスにご登録している方より）">紹介（クライスにご登録している方より）</option>
                                <option value="紹介（クライスのご登録者以外より）">紹介（クライスのご登録者以外より）</option>
                                <option value="その他">その他</option>
                               
                            </select>
                        </div>
                    </div>
                    
                     <div class="td-content exchange_select clear">
                        <div class="clear select_show1" style="margin:5px 0;">
                        <div class="clear" style="float:none;">※具体的にお教えください。</div>
                        <div class="clear" style="float:none;">
                        <textarea style="width: 400px; margin-bottom: 10px" type="text" name="text21" id="text21" value="" onfocus="click_text(this.id)"></textarea></div></div>
                         <div class="select_show2 clear" style="margin:5px 0;">
                            <div class="clear">※具体的にご紹介された弊社コンサルタントがおりましたらお手数ですが下記よりご選択ください。</div>
                            <div class="clear">
                             <select class="selection" style="width: 300px" name="select13" id="select13" onfocus="click_text(this.id)">
                                            <option value="">下記から選択してください</option>
                                            <option value="岡田 麗">岡田 麗</option>
                                            <option value="奈良 元生">奈良 元生</option>
                                            <option value="半藤 剛">半藤 剛</option>
                                            <option value="松尾 匡起">松尾 匡起</option>
                                            <option value="入江 祥之">入江 祥之</option>
                                          
                                            <option value="武田 直人">武田 直人</option>
                                            <option value="永田 憲章">永田 憲章</option>
                                            <option value="細野 聡">細野 聡</option>
                                            <option value="堂谷 春菜">堂谷 春菜</option>
                                            <option value="工藤 直亮">工藤 直亮</option>
                                            <option value="棚澤 啓介">棚澤 啓介</option>
                                            <option value="丸山 貴宏">丸山 貴宏</option>
                             </select>
                            </div>
                        </div>
                    </div>
                    
                </td>
               </tr>
                
                   
                
           
        </table>
    </div>
</div>

<!--------------------------------------->
<div id="personal_block6" class="form-personal-profile">
    <div class="form-privacy">
        <div class="privacy-title">【個人情報保護方針】</div>
        <div class="privacy-content">
            <p>
                わたくしたち株式会社クライス＆カンパニーは、当社の人材紹介等のサービスをお客様に安心してご利用頂く為にお預かりする個人情報についての保護方針を策定いたしました。<br />
                お客様個人を特定する個人情報を取り扱うに際し、全ての役員及び従業員（非常勤社員、派遣社員、パート、アルバイトを含む）がその重大さを認識し、適切な利用・管理を行って参ります。また、業界におけるトップレベルの個人情報保護体制の構築を目指し、以下５つを強化して参りますので、安心して当社サービスをご利用ください。<br /><br />

                1．個人情報の取得、利用及び提供について<br />
                人材紹介等の事業で取り扱う個人情報及び従業員の個人情報について、適切な取得、利用及び提供を行い、特定した利用目的の達成に必要な範囲を超えて個人情報を取り扱うことはありません。利用目的を超えて個人情報の取り扱いを行う場合には、あらかじめご本人の同意を得ます。<br />

                2．個人情報に関する法令や指針、規範について<br />
                個人情報に関する法令・国が定める指針その他の規範を守ります。<br /><br />

                3．個人情報の安全管理について<br />
                個人情報への不正アクセスや、個人情報の漏えい、紛失、破壊、改ざん等に対して、合理的な防止並びに是正措置を行います。<br /><br />

                4．個人情報に関する苦情及び相談について<br />
                個人情報に関する苦情及び相談には、速やかに対処します。<br /><br />

                5．個人情報保護の取り組み（個人情報保護マネジメントシステム）について<br />
                個人情報の保護を適切に行うため、継続的にその取り組みを見直し、改善します。<br /><br />

                制定日　2005年3月1日<br />
                改訂日　2008年9月1日<br />
                株式会社クライス＆カンパニー<br />
                代表取締役社長丸山貴宏<br /><br />


                【業務運営（転職支援サービス利用）規約および個人情報の取り扱いについて】<br />

                株式会社クライスアンドカンパニー（以下クライスといいます）が提供する転職支援サービスのご利用にあたっては、下記の利用規約（以下「本規約」といいます）についてご承諾の上でご利用いただけますようお願い致します。<br /><br />

                1．（定義）<br />
                本規約において使用される各用語の定義は、以下に定めるとおりとします。<br /><br />

                （1）候補者<br />
                クライスに対し、転職支援サービスの利用を申し込んだ方をいいます。<br /><br />

                （2）ご紹介企業<br />
                クライスと締結した人材紹介契約に基づき、クライスに対して人材の紹介を委託した企業をいいます。<br /><br />

                （3）転職支援サービス<br />
                候補者からお申込いただいたお申し込み内容とご紹介企業からの希望条件との照合、Position Information（求人票）および補足する求人情報の提供、転職相談、転職活動支援、応募手続きの代行などのサービスの総称をいいます。<br /><br />

                （4）クライスの転職支援サイト<br />
                クライスが管理・運営している以下のウェブサイトをいいます。<br />
                http://www.kandc.com<br /><br />

                （5）候補者情報<br />
                候補者がクライスに対して提供した、住所、氏名、職務経歴等、候補者に関する全ての情報をいいます。<br /><br />

                2．（申し込み方法）<br />
                転職支援サービス利用のお申し込み方法は、クライスが広告またはクライスの転職支援サイトその他において指定した方法によるものとし、その他の方法によるお申し込みはお受けできないものとします。<br /><br />

                3．（サービスの提供）<br />
                クライスは候補者すべてに対して、当社からご提供できる求人情報の有無の結果を通知いたします。（既に結果を通知した後の複数回に渡るお問合せに対しては、通知ができない場合もございます。）加えて以下のサービスの中から当該候補者に適切なサービスをクライスの判断で提供するものとします。（クライスの判断によりサービスのご提供ができない場合もございます。）<br /><br />

                （1）電話や面談による転職相談の実施<br />
                （2）担当コンサルタントによる転職活動支援<br />
                （3）Position Information（求人票）を補足する求人情報の提供<br />
                （4）応募手続きの代行<br />
                （5）その他利用者の転職に有益とクライスが判断する一切のサービス<br />

                4．（転職支援サービスの変更・中断・終了）<br />
                クライスは、事業運営上やむを得ない場合は、候補者に何ら通知することなく転職支援サービスの全部もしくは一部を変更し、または一時中断することがあります。また、一定期間の通知の上で、転職支援サービスの全部または一部を終了することがあります。<br /><br />

                5．（転職支援サービス提供の終了事由）<br />
                クライスは、候補者において次に掲げる各項に該当する事由が生じた場合は、当該候補者に対して何らの催告を要することなく、転職支援サービスの提供を終了することができるものとします。<br /><br />

                a.候補者が本規約に定める各事項に違反した場合<br />
                b.その他、候補者とクライスとの信頼関係が維持できないとクライスが判断した場合<br />
                <br />
                6．（個人情報の取り扱い）<br />
                クライスは、別途定める「個人情報の取り扱いについて」に従い、候補者の個人情報を適切に収集・利用・提供・管理します。<br /><br />

                7．（候補者情報の正確性）<br />
                候補者がクライスに対して提供した情報が正確でなかったこと、および、その内容の不備・齟齬などに起因してご紹介企業、その他の第三者から何らかの異議、請求もしくは要求などがなされた場合には、自己の費用負担と責任で対処するものとし、クライスに一切の迷惑をかけないことを保証するものとします。<br /><br />

                8．（求人照合）<br />
                クライスは、候補者からお申込いただいたお申し込み内容とご紹介企業の希望条件とを照合しますが、検討基準や判断理由などをお伝えすることはできません。また、候補者からご紹介企業に対する応募依頼を受け付けて以降も、ご紹介企業からの依頼に基づき、ご紹介企業に代わってクライスが当該求人への適合度合いを判断することがあります。<br /><br />

                9．（労働条件）<br />
                クライスは、候補者がご紹介企業に入社した場合の仕事内容や処遇など労働条件の概略について確認を行いますが、　候補者は、候補者の責任において、ご紹介企業に労働条件を直接確認した後に雇用契約を結ぶものとし、クライスが確認しかつ候補者に通知した労働条件が、当該雇用契約の詳細を最終的に保証するものではないことを承諾します。<br /><br />

                10．（禁止事項）<br />
                候補者は、以下の行為をしてはならないものとします。<br /><br />

                a.虚偽の情報をクライスに提供する行為<br />
                b.クライスまたはご紹介企業の業務・営業を妨害する行為、または社会的信用もしくは評価を毀損する行為<br />
                c.他の候補者、ご紹介企業、クライスまたはご紹介企業の従業員その他クライスの事業に関わる一切の関係者<br />
                （以下「関係者」といいます）を誹謗、中傷もしくは侮辱する行為<br />
                d.クライスまたは関係者が有する著作権、商標権その他の知的財産権を含む一切の財産的権利、営業上の機密、名誉、プライバシーなどを侵害する行為<br />
                e.転職支援サービスを通じて入手した情報を、転職支援サービスの目的の範囲を超えて使用し、または第三者に漏洩もしくは開示する行為<br />
                f.法令もしくは公序良俗に反する行為、またはそのおそれがある行為<br />

                11．（情報の加工）<br />
                クライスは、候補者情報のうち、候補者個人を特定できる情報以外の情報を加工し、クライスが編集・発行する各種媒体その他において利用できるものとします。この場合、各種媒体その他で利用された当該情報に関する著作権その他一切の財産的権利は、クライスに帰属します。<br /><br />

                12．（免責）<br />
                クライスは、故意または重大な過失がない限り、転職支援サービスを利用するにあたって利用者に生じた一切の損害（精神的、財産的損害を含む一切の不利益）について責任を負わないものとします。<br /><br />

                13．（不可抗力）<br />
                天変地異、ネットワーク上の障害、通常講ずるべきウィルス対策では防止できないウィルス被害その他クライスの責によらない事由によって転職支援サービスの提供が遅延し、または困難もしくは不能となった場合、これによって候補者に発生した一切の損害について、クライスは責任を負わないものとします。<br /><br />

                14．（損害賠償責任）<br />
                候補者が本規約の各事項に違反して、クライス、関係者または第三者に損害を与えた場合は、候補者はその損害を賠償するものとします。<br />
                15．（本規約の変更）<br />
                クライスは、必要に応じて本規約の内容を変更することができるものとします。<br />
                クライスは、変更後の内容をクライスの転職支援サイト内にて掲載するものとします。<br />

                16．（定めのない事項）<br />
                本規約に定めのない事項は、日本の法令の定めに従い、利用者とクライスとの間において、互いに誠意をもって協議し解決することとします。<br />
                17．（管轄裁判所）<br />
                万が一、本規約の各事項に関連して紛争が生じた場合は、東京地方裁判所または東京簡易裁判所を第一審の専属的合意管轄裁判所とします。<br /><br />

                制定日　2009年5月12日<br />
                株式会社クライス＆カンパニー<br /><br />


                【個人情報（エントリー情報及び履歴書、職務経歴書）の取り扱いについて】<br /><br />

                1．個人情報（エントリー情報及び履歴書、職務経歴書）の利用目的<br />
                当社では、エントリーされた方からお預かりしたエントリー情報、履歴書、職務経歴書など候補者の方に関する個人情報は、候補者の方に適した企業をご紹介するために利用し、他の目的で利用することはございません。<br /><br />

                2．個人情報（エントリー情報及び履歴書、職務経歴書）の取り扱いについて<br />
                （a）エントリー情報または履歴書、職務経歴書は、エントリー受付担当者及び当社コンサルタント以外が取り扱うことはありません。<br /><br />

                （b）エントリー情報及び履歴書、職務経歴書は施錠保管をし、セキュリティには万全を期しております。<br />

                （c） 企業への推薦時には、原則として氏名はイニシャルにし、連絡先は伏せた状態で企業に提出致します。内定された際には正式（氏名、連絡先が明示されている）な書類を、ご本人から直接提出して頂きます。但し、セキュリティ対策が講じられている専用WEBサイトを通じて応募書類を提出する等の場合は、氏名、連絡先を伏せずに提出することがあります。<br />

                （d）登録抹消を依頼された場合、提出頂きました履歴書及び職務経歴書は速やかに破棄いたします。<br />

                （e）履歴書及び職務経歴書の提出がなされない場合、エントリーに応じることはできかねます。<br /><br />

                3．個人情報（エントリー情報及び履歴書、職務経歴書）の第三者への提供<br />
                当社はエントリー情報及び履歴書、職務経歴書を第三者に提供することはいたしません。<br />

                4．個人情報（エントリー情報及び履歴書、職務経歴書）の外部委託<br />
                当社はサーバメンテナンス等の業務の一部を委託することがございます。その際、当社は業務委託先との間で個人情報の取り扱いに関する契約を結び、適切な監督を行います。<br /><br />

                5．個人情報（エントリー情報及び履歴書、職務経歴書）の開示及び訂正、利用停止について<br />
                エントリーいただいた方が当社に対して、ご自身の情報の開示や削除・利用停止等を求められた場合には、できる限り速やかにご要望に応じるようにいたします。<br /><br />

                6．掲載の求人、企業情報について<br />
                当社は候補者（エントリーいただいた方）が求人企業に入社した場合の仕事内容や処遇など、労働条件の概略について確認を行いますが、候補者は、候補者の責任において、求人企業に労働条件を直接確認した後に雇用契約を結ぶものとし、当社が確認しかつ候補者に通知した労働条件が、当該雇用契約の詳細を最終的に保証するものではありませんのでご注意ください。<br /><br />

                改訂日　2011年3月9日<br />
                株式会社クライス＆カンパニー<br />

                【個人情報の開示・問合せ等の連絡方法・連絡先】<br />

                ◆連絡方法<br />
                ご本人の氏名、郵便番号、住所、電話番号をご記入の上、文書またはE-mailにてご連絡下さい。<br /><br />

                ◆連絡先<br />
                株式会社クライス＆カンパニー<br />
                人材コンサルティング事業部 奈良元生（顧客相談窓口責任者）<br />
                東京都港区東新橋2-4-1 サンマリーノ汐留2F<br />
                TEL：03-5733-1602　　Email：privacy@kandc.com</p><br />
        </div>
    </div>

</div>


<div class="form-personal-profile" id="checkbox_require" style="text-align:center;">
	<label style="position:relative;"><input type="checkbox"  name="check_box" id="check_box"/>個人情報の取り扱いに同意します。</label>
	<p id="errortext19"></p>
</div>


<!--------------------------------------->
<div class="form-entry-submit clear">
   
    <input class="button-confirm" type="submit" name="Submit" id="submit" value="Submit"/>
    <!--    <div class="form-handler"><a href="#" title="Submit next Step 2"><img src="../img/entry/button-confirm.png" alt=""></a>-->
    <!--    </div>-->
</div>
</form>
</div>


</div>
<div style="margin: 0 auto; width: 980px" class="clear">
    <div id="back-top">
        <a href="#top"><img src="../img/features/back-to-up.png" alt="ページの先頭へ戻る"></a>
    </div>
</div>

</div>

<footer>
    <div id="main-footer">
        <div id="footer" class="clear">
            <div class="copy">
                Copyright &copy;<?php echo date('Y'); ?> KREIS &amp; Company Inc. All Right Reserved. webdesign tokyodesignroom.com
            </div>
        </div>
    </div>
</footer>


</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2905089-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- リマーケティング タグの Google コード -->
<!--------------------------------------------------
リマーケティング タグは、個人を特定できる情報と関連付けることも、デリケートなカテゴリに属するページに設置することも許可されません。タグの設定方法については、こちらのページをご覧ください。
http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 967277328;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/967277328/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</html>
