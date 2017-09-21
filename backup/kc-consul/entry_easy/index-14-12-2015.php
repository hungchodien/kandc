<?php 
	ob_start();
?>
<?php
@include('../Lib/_init.php');
@include('../config.php');
@include('../../config.php');

		$pageURL_cu="http";
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		 $pageURL_cu .= "://";
		 if ($_SERVER["SERVER_PORT"] != "80") {
		  $pageURL_cu .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		 } else {
		  $pageURL_cu .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		 }
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--[if IE 6]>
<html id="ie6" class="ie" dir="ltr" xml:lang="ja" lang="ja">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="ie" dir="ltr" xml:lang="ja" lang="ja">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="ie" dir="ltr" xml:lang="ja" lang="ja">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html id="noIE" xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>簡単３分エントリー |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー</title>
    <meta name="keywords" content="コンサルタント,コンサルティング,戦略コンサル,ITコンサル,ポストコンサル,EXコンサル,転職,人材紹介,エージェント,簡単,エントリー" />
    <meta name="description" content="現役コンサルタントの転職専門人材紹介会社クライス&amp;カンパニーへの簡単３分エントリーフォームです。" />
    <meta name="author" content="株式会社クライス・アンド・カンパニー"/>
    <meta name="copyright" content="Copyright&copy;2007 KREIS&amp;Company Inc.　All Right Reserved."/>
    <meta http-equiv="Content-Script-Type" content="text/javascript"/>
    <meta http-equiv="Content-Style-Type" content="text/css"/>
    <meta http-equiv="Content-Language" content="ja"/>
    
    <!--[if IE 9]>
	   <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1">
	<![endif]-->
	<!--[if IE 8]>
	   <meta http-equiv="X-UA-Compatible" content="IE=8,chrome=1">
	<![endif]-->
    <!--[if IE 7]>
	   <meta http-equiv="X-UA-Compatible" content="IE=7,chrome=1">
	<![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
   
  <!--<script type="text/javascript" src="validate_form_entry.js"></script>-->
	<script type="text/javascript" src="validate_form_entry.js"></script>
    <script src="<?php echo url_root_main; ?>js/show_form.js" type="text/javascript"></script>
	<script src="<?php echo url_root_main; ?>js/matchMedia.js" type="text/javascript"></script>
    

	<script src="<?php echo url_root_main; ?>js/jquery.maxlength_plugin.js" type="text/javascript"></script>
	<script src="<?php echo url_root_main; ?>js/jquery.maxlength.js" type="text/javascript"></script>

	<script type="text/javascript" src="prototype.js"></script>
   <script type="text/javascript" src="auto_ruby.js"></script>
    <!-- css -->
   <link type="text/css" href="<?php echo url_root_main; ?>css/style.css" rel="stylesheet"/>
	<link type="text/css" href="../css/style.css" rel="stylesheet"/>
	<link type="text/css" href="../css/style_add.css" rel="stylesheet"/>
    <link type="text/css" href="style.css" rel="stylesheet"/>
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
			
			
			/*xuong dong dat trong jquery*/
			$('textarea').keypress(function(event) {
			  if (event.which == 13) {
				event.preventDefault();
			      var s = $(this).val();
			      $(this).val(s+"\n");
			  }
			});
			
			/*het xuong dong*/
			
			
			$("#text1").on("keypress keyup keydown",function (){ 
					setRuby('text1','text3');
					//alert("ok");
			});
			$("#text2").on("keypress keyup keydown",function (event) {   
					setRuby('text2','text4');
					//alert("ok");
			});
            // hide #back-top first
            //$("#back-top").hide();
			$('a#back-top').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
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
            // fade in #back-top
           
			
			$(".next_step").css("display", "none");
			
			
			
			$("#next_step").on("click", function(){


		if($('#text1').val() == '' || $('#text2').val() == '' || $('#text3').val() == '' || $('#text4').val() == '' ||  $('#select1 option:selected').val() == '' || $('#select2 option:selected').val() == '' || $('#select3 option:selected').val() == '' || $('#select4 option:selected').val() == '' || $('#text5').val() == '' || $('#text6').val() == '' || $('#text7').val() == '' || $('#text8').val() == '' || $('#file1').val() == '')
				{
					$("#submit_form").submit();
				}
				else
				{
				
				$(".next_step").css("display", "block");
			    $(".step_hiden").css("display", "none");
				$('body,html').animate({
                        scrollTop: 0
                    }, 600);
                    return false;
				
				}
					


					// $("#submit_form").submit();
				
				});	
			$("#back_step_go").on("click", function(){
					
					$(".step_hiden").css("display", "block");
					$(".next_step").css("display", "none");
					// $("#submit_form").submit();
				
				})	
			
        });
		
		
		
    </script>
	<script type="text/javascript">
	    jQuery(document).on("keydown", function(event) {
	
	        if (event.which.toString() == "8") {
	
	            var findActiveElementsClosestForm = $(document.activeElement).closest("form");
	
	            if (findActiveElementsClosestForm && findActiveElementsClosestForm.length) {
	                jQuery("form#" + findActiveElementsClosestForm[0].id + " .secondary_button").trigger("click");
	            }
	        }
	    });
	 </script>
     
    <script type="text/javascript">
		
		if (screen.width <= 765 || ((navigator.userAgent.indexOf('iPhone') > 0 ) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0 )) {
		document.location = "//kc-consul.com/mobile/landing/entry/";
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
</head>

<body>

<div class="clear page_main">

<header id="header_inc" class="clear">

   <div class="header_top clear">
         	<div class="header_top_content clear">
        	<div class="l site_title">
	            	<ul class="clear top_break">
	                    <li><a href="<?php  echo url_root_main; ?>" target="_blank">30代・40代転職</a></li>
	                    <li><a href="<?php  echo url_root_main; ?>exe/" target="_blank">エグゼクティブ転職</a></li>
						<li><a href="<?php  echo url_root; ?>" class="active">コンサルタント転職</a></li>
					</ul>
	           </div><!--site_title-->
               
	           <div class="social_btns r clear social_btns_header">
               		<div class="l title_product_by_hd">produced by</div>
               		<div class="l kandc_title_product_by_hd"><a href="<?php  echo url_root_main; ?>" target="_blank"><img src="<?php echo url_root; ?>img/link/head-kreis-name.png" alt="クライス＆カンパニー"/></a></div>
               		
               		<!--<div class="gplus_btn r" style="width:57px;"><g:plusone size="medium" href="<?php echo $pageURL_cu; ?>"></g:plusone></div>
					<div class="twitter_btn r">
	            		<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $pageURL_cu; ?>" rel="nofollow">Tweet</a>
	            	</div>  
		            <div class="fb_btn r">
	                	<div class="fb-like" data-href="<?php echo $pageURL_cu; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
	                </div>-->
                </div><!--end .social_btns-->
           </div> <!--End .header_top_content-->
         </div><!--End .header_top-->
         
         
        <div class="header_logo clear">
        	<div class="header_top_content header_logo_content clear">
            	<div class="l">
            	<h2 class="clear">
                <a href="<?php echo url_root; ?>">
                	<img src="<?php echo url_root; ?>img/home/logo-consul.png" alt="Consultant Career"/></a>
                    
                </h2>
                <h1 class="clear">コンサルタントのキャリアを共に考える</h1>
                </div>
               
        </div><!--End .header_logo-->
		
 </header>   
	
    <div id="entry">
        <div id="entry-nav">
            <ul class="clear">
                <li><span class="process-easy-step"></span></li>
                <li><span class="process-easy-step1"></span></li>
                <li><span class="process-easy-step2"></span></li>
                <li><span class="process-easy-step3"></span></li>
            </ul>
        </div>
    </div>

<div id="container">
<div id="content_consul">

<?php
	$entry_id="";
	$company_id="";
	$consultant_id="";

	if (isset($_GET['entry_id'])):
		$entry_check=(int)$_GET['entry_id'];
		$company_id="";
		$consultant_id="";
		if($entry_check>0):
			$entry_id=$entry_check;
		else:
			$entry_id="";
		endif;
	else:
		$entry_id="";
	endif;	

	$entry_xml="../entry.xml";
	$doc_xml = new DOMDocument();
  	$doc_xml->load($entry_xml);
	$entries = $doc_xml->getElementsByTagName("entry");
	foreach($entries as $entry):
		//get category
		$categories = $entry->getElementsByTagName("category");
  		$category = $categories->item(0)->nodeValue;
		//get id
		$ids = $entry->getElementsByTagName("id");
  		$id = $ids->item(0)->nodeValue;
		
		//get title
		$titles = $entry->getElementsByTagName("title");
  		$title = $titles->item(0)->nodeValue;
		//get subtitle
		$subtitles = $entry->getElementsByTagName("subtitle");
  		$subtitle = $subtitles->item(0)->nodeValue;
		//get asked
		$askeds = $entry->getElementsByTagName("asked");
  		$asked = $askeds->item(0)->nodeValue;
		//get content_asked
		$content_askeds = $entry->getElementsByTagName("content_asked");
  		$content_asked = $content_askeds->item(0)->nodeValue;
		
		if($entry_id=="" && $category=="" && $id==""):
			//default content;
			$title_top=$title;
			$subtitle_top=$subtitle;
			$askeds_top=$asked;
			$content_asked_top=$content_asked;
		else:
			if($entry_id>0 && $entry_id==$id):
				//echo $id."===".$entry_id."<br/>";
				if($category=='company'):
					//company id
					$title_top=$title;
					$subtitle_top=$subtitle;
					$askeds_top=$asked;
					$content_asked_top=$content_asked;
				else:
					if($category=='entry'):
						//entry id
						$title_top=$title;
						$subtitle_top=$subtitle;
						$askeds_top=$asked;
						$content_asked_top=$content_asked;
					endif;
				endif;
				
			else:
				//entry default
				if($category=='entry'):
					$title_top=$title;
					$subtitle_top=$subtitle;
					$askeds_top=$asked;
					$content_asked_top=$content_asked;
				endif;
			endif;
	    endif;
		
	endforeach;
	
	
	
	$List_Job=Get_Data("job", " and `order_id`='$entry_id' and order_id>0 order by `listed_timestamp` DESC limit 1","`job_title`");
	$job_title=$List_Job['job_title'];
	if(!empty($job_title)):
		$title_top="エントリー求人: ".$job_title."[".$entry_id."]";
	else:
		$title_top=$title;
	endif;	
?>


<div id="page_category_name" class="clear">
    <div class="title-page">
        <p class="title-top"><?php echo $title_top; ?></p>
		<p class="sub-title-top">
			<?php echo $subtitle_top; ?>
		</p>
    </div>
</div>

<div id="entry-form" class="entry-form new_entry_easy_form">
<form name="frm_entry_easy" action="confirm.php" method="post" id="submit_form"  enctype="multipart/form-data"  encoding="multipart/form-data">
	<input type="hidden" name="entry_id" id="entry_id" value="<?php echo $entry_id; ?>"/>
<?php if($askeds_top!="" || $content_asked_top!=""): ?>
<div class="label-asked">
	 <?php if($askeds_top!=""): ?>
	    <div class="asked">
			<?php echo $askeds_top; ?>
		</div><!--asked-->
    <?php endif; ?>
    <?php if($content_asked_top!=""): ?>
    <div class="content-asked" style="padding-top:5px;">
    	<?php echo $content_asked_top; ?>
     </div><!--content-asked-->
     <?php endif; ?>
</div><!--label-asked-->
<?php endif; ?>

<div class="form-personal-profile step_hiden">
	<div class="label-personal-ec"><span class="red-color">※</span> 必須項目になります。</div>
    <div class="table-personal-profile2">
    	<table class="no_bb">
        <tr>
        <td class="label">
                    <div>お名前<span class="red-color">※</span></div>
         </td>
         <td colspan="2">
                    <div class="td-content clear">
                        <div class="entry_f1_wid">姓</div>
                        <div class="easy_name" style="width:160px; position:relative;"><input type="text" name="text1" id="text1" value="" onblur="validatetext(this.value, this.id)" onfocus="click_text(this.id)" style=" width:150px;" />
                        <p><span id="errortext1"></span></p>
                        </div>
                        <div class="entry_f1_wid">名</div>
                        <div class="easy_name" style="width:160px; position:relative;"><input type="text" name="text2" id="text2" value="" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)" style=" width:150px;"/>
                        <p><span id="errortext2"></span></p>
                        </div>
                        
                    </div>
                     <div class="td-content clear group_error" > 
                    		<p><span id="errortext12"></span></p>
                    		
                    </div>
                    
                </td>
            </tr>
            <tr>    
            <td class="label">
                    <div>フリガナ <span class="red-color">※</span></div>
                </td>
                <td colspan="2">
                    <div class="td-content clear">
                        <div class="entry_f1_wid">セイ</div>
                        <div class="easy_name" style="width:160px; position:relative;"> <input type="text" name="text3" id="text3" value="" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)" style=" width:150px;"/>
                        <p><span id="errortext3"></span></p>
                        </div>
                        <div class="entry_f1_wid">メイ</div>
                        <div class="easy_name" style="width:160px; position:relative;"><input type="text" name="text4" id="text4" value="" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)" style=" width:150px;"/>
                         <p><span id="errortext4"></span></p>
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
                <td colspan="2">
                    <div class="td-content clear" style="position:relative;">
                        <div>西暦</div>
                        <div style="position:relative;">
                            <select class="selection selection-style" name="select1" id="select1" onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)">
                                <option value=""> 選択</option>
                                <?php $year = 1940;
                                     $end = date("Y");
                                for ($end; $end >= $year; $end--) {
                                    ?>
                                    <option value="<?php echo $end; ?>"><?php echo $end; ?></option>
                                <?php } ?>
                            </select>
                            <p><span id="errorselect1"></span></p>
                        </div>
                        <div>年</div>
                        <div style="position:relative;">
                            <select class="selection selection-style" name="select2" id="select2" onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)">
                                <option value=""> 選択</option>
                                <?php $moth = 1;
                                $endMoth = 12;
                                for ($moth; $moth <= $endMoth; $moth++) {
                                    ?>
                                    <option value="<?php echo $moth; ?>"><?php echo $moth; ?></option>
                                <?php } ?>
                            </select>
                            <p><span id="errorselect2"></span></p>
                        </div>
                        <div> 月</div>
                        <div style="position:relative;">
                            <select class="selection selection-style" name="select3" id="select3" onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)">
                                <option value=""> 選択</option>
                                <?php $day = 1;
                                $endDay = 31;
                                for ($day; $day <= $endDay; $day++) {
                                    ?>
                                    <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
                                <?php } ?>
                            </select>
                            <p><span id="errorselect3"></span></p>
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
                
                <td>
                    <div class="td-content state clear" style="margin-left:5px; position:relative;">
                       
                            <select class="selection" name="select4" id="select4" onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)">
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
                        
                        <p><span id="errorselect4"></span></p>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>電話番号 <span class="red-color">※</span></div>
                </td>
                <td colspan="2">
                    <div class="td-content phone clear">
                       <div style="position:relative;">
                            <input type="text" name="text5" id="text5" value="" onblur="validatetext(this.value, this.id)" onfocus="click_text(this.id)"/> -
                            <p id="errortext5" class="error_box5"></p>
                       </div>
                       <div style="position:relative;">
                            <input type="text" name="text6" id="text6" value="" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)"/> -
                            <p id="errortext6" class="error_box6"></p>
                       </div>
                       <div style="position:relative;">
                            <input type="text" name="text7" id="text7" value="" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)"/>
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
                <td colspan="2">
                    <div class="td-content clear" style="position:relative;">
                        <div>
                            <input class="text-personal-400" type="text" name="text8" id="text8" onfocus="click_text(this.id)"
                                    value="" onblur="validatetext(this.value, this.id)" placeholder="（例）example@kandc.com"/>
                                    <p id="errortext8" class="error_box8"></p>
                        </div>
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
<div class="next_step clear">
    <div class="form-personal-profile">
        <div class="label-personal">最終学歴について</div>
        <div class="table-personal-profile">
            <table>
                <tr>
                    <td class="label">
                        <div>学校名</div>
                    </td>
                    <td>
                        <div class="td-content clear">
                            <div><input style="width: 500px;" type="text" name="text10" id="text10" value="" placeholder="（例）○○大学 ○○学部 ○○学科"/></div>
                           
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-------------------------------------------------------------->
<div class="next_step clear">
<div class="form-personal-profile">
<div class="label-personal">経歴について</div>
    <div class="table-personal-profile">
        <table>
            <tr>
                <td class="label">
                    <div> 現職区分</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div><input type="radio"  name="radio1" id="radio1" value="現職中"/>現職中</div>
                        <div><input type="radio" name="radio1" id="radio2" value="退職予定"/>退職予定</div>
                        <div><input type="radio" name="radio1" id="radio3" value="離職中"/>離職中</div>
                    </div>
                   
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>現在の年収</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div><input class="text-personal-100" type="text" name="text11" id="text11" value=""/></div>
                        <div>万円</div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>職種</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div>
                            <select class="selection" style="width: 250px" name="select5" id="select5">
                                <option value="">下記から選択してください</option>
                                <option value="コンサルタント">コンサルタント</option>
                                <option value="コンサルタント（IT）">コンサルタント（IT）</option>
                                <option value="ITハード系エンジニア">ITハード系エンジニア</option>
                                <option value="ソフトウェアエンジニア">ソフトウェアエンジニア</option>
                                <option value="WEB・モバイル関連">WEB・モバイル関連</option>
                                <option value="その他ソフトウェア関連">その他ソフトウェア関連</option>
                                <option value="機械・メカトロニクスエンジニア">機械・メカトロニクスエンジニア</option>
                                <option value="電気・電子・半導体エンジニア">電気・電子・半導体エンジニア</option>
                                <option value="化学系">化学系</option>
                                <option value="バイオ・メディカル系">バイオ・メディカル系</option>
                                <option value="経営企画・事業企画">経営企画・事業企画</option>
                                <option value="営業企画">営業企画</option>
                                <option value="業務企画">業務企画</option>
                                <option value="商品・サービス企画">商品・サービス企画</option>
                                <option value="IR">IR</option>
                                <option value="広報">広報</option>
                                <option value="マーケティング">マーケティング</option>
                                <option value="総務">総務</option>
                                <option value="法務">法務</option>
                                <option value="人事">人事</option>
                                <option value="経理・財務・会計">経理・財務・会計</option>
                                <option value="秘書">秘書</option>
                                <option value="事務・庶務">事務・庶務</option>
                                <option value="営業">営業</option>
                                <option value="販売・サービス">販売・サービス</option>
                                <option value="金融関連職">金融関連職</option>
                                <option value="建設・建築・土木系">建設・建築・土木系</option>
                                <option value="インストラクター">インストラクター</option>
                                <option value="トップマネジメント">トップマネジメント</option>
                                <option value="ロジスティクス・購買関連">ロジスティクス・購買関連</option>
                                <option value="エスタブリッシュメント職">エスタブリッシュメント職</option>
                                <option value="クリエイティブ系">クリエイティブ系</option>
                                <option value="デザイナー">デザイナー</option>
                                <option value="コールセンター">コールセンター</option>
                                <option value="その他">その他</option>
                            </select>
                        </div>
                       
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>経験社数</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div>
                            <input class="text-personal-100" type="text"  name="text12" id="text12" value=""/>
                        </div>
                        <div>社</div>
                       
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>希望勤務地</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div>
                            <input class="text-personal-400"  type="text" name="text13" id="text13" value="" placeholder="（例）東京都、千葉県"/>
                        </div>
                        
                    </div>
                </td>
            </tr>
            </table>
        </div>
	</div>
</div>
<!----------------------************************--------------------------->
            
  <div class="form-personal-profile step_hiden">
    
    <div class="table-personal-profile">  
            <table>
            <tr>
                <td class="label">
                    <div>経歴書を添付<span class="red-color">※</span></div>
                </td>
                <td>
                <div class="clear">
                <div class="fl">
                    <div class="td-content clear" style="position:relative;">
                        <div><input class="text-file-400" type="file" name="upload1" id="file1" value="" onfocus="click_text(this.id)"
                                    onchange="validate_fileupload(this.value, this.id)"/></div>
                        
                    </div>
                    <div class="td-content clear">
                        <div><span id="errorfile1"></span></div>
                    </div>
                    <div class="td-content clear" style="position:relative;">
                        <div><input class="text-file-400" type="file" name="upload2" id="file2" value="" onfocus="click_text(this.id)"
                                    onchange="validate_fileupload(this.value, this.id)"/></div>
                        
                    </div>
                    <div class="td-content clear">
                        <div><span id="errorfile2"></span></div>
                    </div>
                    </div>
                    
                    <div style="margin:5px 0; font-size:11px; line-height:15px; float: right; width: 285px;">
                        <p>※PDF、xls、doc、ppt、txt, xlsx, docx, pptx の8種<br />
                        ※ネットワーク等のタイミングによりレジュメが添付できない場合がございます。<br />
	その際には、お手数ですが右記メールアドレスまで 直接お送りください。<a href="mailto:kreis-info@kandc.com" target="_blank">kreis-info@kandc.com</a></p>
                    </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>



<!-------------------------------------------------------------->

<div class="form-personal-profile step_hiden">
    
    <div class="table-personal-profile">
        <table>
            <tr>
                <td valign="middle" class="label colpan_set" rowspan="1">
                    <div>媒体</div>
                </td>
                <td>
                
                <script type="text/javascript">
				jQuery(document).ready(function ($) {
						$('#text14').maxlength({showFeedback: 'active',max: 50,feedbackText: '残り文字数: {r}'});
						$('.select_show1').hide(); 
						$('.select_show2').hide();
						$('.exchange_select').hide();
						
							$('#select6').change(function(){
								$("#text14").val("");
								$("#select7").val("");
								
								if($('#select6').val() == 'その他') {
									$('.select_show1').show();
									$('.exchange_select').show();
									
									$('.select_show2').hide();
								}else if($('#select6').val() == '紹介（クライスにご登録している方より）' || $('#select6').val() == '紹介（クライスのご登録者以外より）') 
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
                            <select class="selection" style="width: 300px" name="select6" id="select6" onfocus="click_text(this.id)">
                                <option value="">何をご覧になってアクセス頂きましたか？</option>
                               <option value="Google">Google</option>
                                <option value="Yahoo">Yahoo</option>
                                <option value="en転職コンサルタント">en転職コンサルタント</option>
                                <option value="日経キャリアNET">日経キャリアNET</option>
                                <option value="リクナビNEXT">リクナビNEXT</option>
                                <option value="キャリアカーバー">キャリアカーバー</option>
                                <option value="ビズリーチ">ビズリーチ</option>
                                <option value="駅広告">駅広告</option>
                                <option value="弊社からのメルマガ">弊社からのメルマガ</option>
                                <option value="紹介（クライスにご登録している方より）">紹介（クライスにご登録している方より）</option>
                                <option value="紹介（クライスのご登録者以外より）">紹介（クライスのご登録者以外より）</option>
                                <option value="その他">その他</option>
                            </select>
                        </div>
                    </div>
                    
                     <div class="td-content exchange_select clear">
                        <div class="clear select_show1" style="margin:5px 0;">
                        <div class="clear" style="float:none;">※具体的にお教えください（50文字以内）</div>
                        <div class="clear" style="float:none;">
                        <textarea style="width: 400px; margin-bottom: 10px" type="text" name="text14" id="text14" onfocus="click_text(this.id)" value=""></textarea></div></div>
                         <div class="select_show2 clear" style="margin:5px 0;">
                            <div class="clear">※具体的にご紹介された弊社コンサルタントがおりましたらお手数ですが下記よりご選択ください。</div>
                            <div class="clear">
                             <select class="selection" style="width: 300px" name="select7" id="select7">
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
											<option value="船橋 悠">船橋 悠</option>
											<option value="福田 和貴">福田 和貴</option>
											<option value="神田 昭子">神田 昭子</option>
											<option value="小田 麻耶">小田 麻耶</option>
											<option value="神宮司 篤子">神宮司 篤子</option>
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
<div class="form-personal-profile">
    <div class="form-privacy">
        <div class="privacy-title">【個人情報保護方針】</div>
        <div class="privacy-content">
            <p>わたくしたち株式会社クライス＆カンパニーは、当社の人材紹介等のサービスをお客様に安心してご利用頂く為にお預かりする個人情報についての保護方針を策定いたしました。<br />
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
                TEL：03-5733-1602　　Email：privacy@kandc.com</p>
        </div>
    </div>

</div>

<div class="form-personal-profile" id="checkbox_require" style="text-align:center;">
	<input type="checkbox"  name="check_box" id="check_box"/>個人情報の取り扱いに同意します。
	<div id="errortext21"></div>
</div>

<!--------------------------------------->
<div class="form-personal-submit1 step_hiden pdt10 clear">
    <!--    <div class="form-back"><a href="#"><img src="../img/entry/button-back.png" alt=""> </a></div>-->
    <input class="button-confirm_btn" type="submit" name="submit_confirm" id="submit_confirm" value="1"/>
    <input class="button-confirm-next-step" type="button" name="submit_next_step" id="next_step" value="Next Step" />
    <!--    <div class="form-handler"><a href="#"><img src="../img/entry/button-confirm.png" alt=""></a>-->
    <!--    </div>-->
</div>
<div class="form-personal-submit next_step form2_btns clear">
    <!--    <div class="form-back"><a href="#"><img src="../img/entry/button-back.png" alt=""> </a></div>-->
     <input class="button-back_step" type="button" name="submit_back" id="back_step_go" value="Next Step"/>
     <input class="button-confirm_btn_next" type="submit" name="submit" id="submit_confirm" value="2"/>
   
    <!--    <div class="form-handler"><a href="#"><img src="../img/entry/button-confirm.png" alt=""></a>-->
    <!--    </div>-->
</div>

</form>
</div>


</div>

</div>



<footer id="colophon" class="footer_inc clear" role="contentinfo">
	<div class="clear footer_entry_frm footer_content ">
		<div class="l">
	              Copyright &copy; <?php echo date('Y'); ?> KREIS&Company Inc. All Right Reserved. webdesign <a href="http://tokyodesignroom.com" rel="nofollow">tokyodesignroom.com</a>
		</div>
    </div>
</footer>
</div>    
<script>
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41366618-1', 'auto');
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
    
<!--G+ script-->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>



</body>
</html>