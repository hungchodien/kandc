<?php 
	ob_start();
	session_start();
?>	
<?php
@include('../Lib/_init.php');
@include('../config.php');

if ($protocol == 'http:' || $protocol =='HTTP:'){
  //  $entry_protocol = str_replace('http', 'https', curPageURL() );
  // header('Location:'.$entry_protocol);
}
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
    <title>まずは気軽に相談する | ヘッドハンティング・人材紹介会社・転職のクライス&amp;カンパニー</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
    <!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
   <!-- <script type="text/javascript" src="../js/jquery.min.js"></script>-->
    <script src="<?php echo url_root_main; ?>js/show_form.js" type="text/javascript"></script>
	<script src="<?php echo url_root_main; ?>js/matchMedia.js" type="text/javascript"></script>
    
    <script src="<?php echo url_root_main; ?>js/watermark.js" type="text/javascript"></script>
    <script src="<?php echo url_root; ?>js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script  src="<?php echo url_root; ?>js/jquery.flexnav.js"></script>
      <script  src="<?php echo url_root; ?>js/kc-consul_main.js"></script>
      <script  src="<?php echo url_root; ?>js/mobile_main.jquery.js"></script>
      <script  src="<?php echo url_root; ?>js/mobile.js"></script>

	<script src="backfix.min.js" type="text/javascript"></script>
    <!-- css -->
   
   <link type="text/css" href="<?php echo url_root; ?>css/style.css" rel="stylesheet"/>
   <link type="text/css" href="<?php echo url_root; ?>css/flexnav.css" rel="stylesheet"/>
   <link type="text/css" href="<?php echo url_root; ?>css/mobile_style.css" rel="stylesheet"/>
   <link type="text/css" href="style.css" rel="stylesheet"/>
	
	<script type="text/javascript">
	
		jQuery(document).ready(function ($) {
			$('#frm_confirm').on('submit', function () {
				new_var = false;
				//$('#BAJBOnBack').remove();
                 return true;
			});
			/*Back Button Browse*/
			function goSomewhere () {
				history.go(-1);
				}
			bajb_backdetect.OnBack = function(){
				
				new_var = false;
				
			}

			/*End*/
			
		});
		
		
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

    <!-- javascript -->
    <script type="text/javascript">
        $(document).ready(function () {
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
    </script>
    
 
</head>

<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NFKWDH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NFKWDH');</script>
<!-- End Google Tag Manager -->
<div class="clear page_main entry_forms_page">
<header id="header_inc" class="clear">

    <?php //@include("../config.php"); ?>
   
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
                <h1 class="clear">コンサルタントの転職・キャリアを共に考える</h1>
                </div>
                
            </div>
        </div><!--End .header_logo-->
  
  
</header> 
 <header id="header_area" class="container hide_on_pc mobile">
	<div id="top_area" class=" clear">
    	<div class="l">
            	<h1 class="big_title clear">
                    <a href="<?php echo url_root; ?>">
                        <img src="<?php echo url_root; ?>img/home/logo-consul.png" alt="Consultant Career">
                    </a>                    
                </h1>
                <h2 class="subtitle clear"><a href="<?php echo url_root; ?>">コンサルタントの転職・キャリアを共に考える</a></h2>
        </div>
        
        <div class="r menu_btn_area">
        	<a href="javascript:void(0);" class="mobile_menu_btn open_icon r">Toggle Menu</a>
   			<ul id="mobile_primary_menu" class="clear">
                    <li>
                      <a class="home" href="<?php echo url_root; ?>">
                      <span>ホーム</span>
                      </a>
                    </li>
                     <li>
                        <a class="policy" href="<?php echo url_root; ?>about-us/">
                        <span>クライスの特徴</span></a>
                    </li>
                    <li>
                        <a class="interview" href="<?php echo url_root; ?>interview/"><span>インタビュー </span></a>
                    </li>
                    
                    <li>
                        <a class="job-search" href="<?php echo url_root; ?>job-search/"><span>求人情報</span></a>
                    </li>
                 
                    <li>
                        <a class="blog" href="<?php echo url_root; ?>blog/"><span>プログ</span></a>
                    </li>
               
            </ul>
       </div> <!--menu_btn_area-->
    </div>
   
</header> 

 	<div id="entry" class="clear">
        <div id="entry-nav">
            <ul class="clear">
                <li><span class="entry-nav-step"></span></li>
                <li><span class="entry-nav-step1-none"></span></li>
                <li><span class="entry-nav-step2-active"></span></li>
                <li><span class="entry-nav-step3"></span></li>
            </ul>
        </div>
    </div>
    
    
<div id="container">
<div id="content_consul">
<?php
	$entry_id="";
	$entry_id_post="";
	$company_id="";
	$consultant_id="";
	if (isset($_POST['entry_id'])):
		$entry_check=(int)$_POST['entry_id'];
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
					$company_id=$entry_id;
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
	
	if($company_id>0):
		$entry_id_post="";
	else:
		$entry_id_post=$entry_id;
	endif;
?>


<div id="page_category_name" class="clear">
    	<p class="title-top">
			<?php //echo $title_top; ?>
            内容のご確認
        </p>
		<p class="sub-title-top">
       		<?php //echo $subtitle_top; ?>
            ご入力頂きました内容をご確認いただきまして、変更がないようでしたら一番下の送信ボタンをクリックしてください。 
        </p>
	</div>

<?php
	$check_value_robot=$_POST['text8'];
	//if($_POST['text8']==$_POST['text9']):
		$_SESSION['secur']=$check_value_robot;
	//endif;
$prev_input = "";
$prev_input1 = "";
$prev_radio = "";
for ($i = 1; $i < 22; $i++):
    $col = "text{$i}";
    $val = $_POST["text" . $i];
    $prev_input .= "<input type='hidden' name='{$col}' value='{$val}' id='{$col}'>";
endfor;
$user_email = $_POST['text8'];
for ($j = 1; $j < 14; $j++):
    $col1 = "select{$j}";
    $val2 = $_POST["select" . $j];
    $prev_input1 .= "<input type='hidden' name='{$col1}' value='{$val2}' id='{$col1}'>";

endfor;
$radio1=$_POST['radio1'];

$prev_input .= "<input type='hidden' name='entry_id' value='{$entry_id_post}' id='entry_id'>";
$prev_input .= "<input type='hidden' name='company_id' value='{$company_id}' id='company_id'>";
$prev_input .= "<input type='hidden' name='consultant_id' value='{$consultant_id}' id='consultant_id'>";

$prev_input .= "<input type='hidden' name='radio1' value='{$radio1}' id='radio1'>";
?>


<div id="entry-form" class="entry-form">
<form action="send_mail.php" method="post" id="frm_confirm">
<?php
echo $prev_input;
echo $prev_input1;
echo $prev_radio;

?>

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



<!-------------------------------------------------------------->

<div class="form-personal-profile">
   
    <div class="table-personal-profile">
        <table>
        	<tr>
                <td class="label">
                    <div>相談内容</div>
                </td>
                <td colspan="2">
                    
                        <p><?php echo str_replace("\n","<br/>",$_POST['text18']); ?></p>
                 </td>
            </tr>
           
            <tr>
                <td class="label">
                    <div>お名前</div>
                </td>
                <td colspan="2">
                    <div class="td-content clear">
                        <div><?php echo $_POST['text1'] ?></div>
                        <div><?php echo $_POST['text2'] ?></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>フリガナ</div>
                </td>
                <td colspan="2">
                    <div class="td-content clear">
                        <div><?php echo $_POST['text3'] ?></div>
                        <div><?php echo $_POST['text4'] ?></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>生年月日</div>
                </td>
                <td colspan="2">
                    <div class="td-content clear">
                        <div>西暦</div>
                        <div><?php echo $_POST['select1'] ?> 年</div>
                        <div><?php echo $_POST['select2'] ?> 月</div>
                        <div><?php echo $_POST['select3'] ?> 日</div>
                    </div>
                </td>
            </tr>
           
            <tr>
                <td class="label">
                    <div>電話番号</span></div>
                </td>
                <td colspan="2">
                    <div class="td-content clear">
                        <div><?php echo $_POST['text5'] ?> -</div>
                        <div><?php echo $_POST['text6'] ?> -</div>
                        <div><?php echo $_POST['text7'] ?></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>メールアドレス</div>
                </td>
                <td colspan="2">
                    <div class="td-content clear">
                        <div><?php echo $_POST['text8'] ?>   </div>
                        </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="form-personal-profile">
 
    <div class="table-personal-profile">
        <table>
            <tr>
                <td class="label">
                    <div>会社名</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div> <?php echo $_POST['text14']; ?> 社</div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>職種</div>
                </td>
                <td>
                   <div>
						<?php 
							echo $_POST['select11'];
						?>
                    </div>
                 </td>
            </tr>
            <tr>
                <td class="label">
                    <div>年収</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div> <?php echo $_POST['text17'] ?></div>
                    </div>
                </td>
            </tr>
            
           
            
        </table>
    </div>
</div>

<!--------------------------------------->


<!--------------------------------------->
<div class="form-personal-profile">
    <div class="table-personal-profile">
        <table>
            <tr>
                <td class="label">
                    <div>媒体</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div><?php echo $_POST['select12'] ?></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>その他</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <p><?php echo str_replace("\n","<br/>",$_POST['text21']); ?></p>
                       
                     </div>
                     <div class="td-content clear">
                        <div class="clear"><?php echo $_POST['select13']; ?></div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
<!--------------------------------------->
<div class="form-personal-submit clear">
    <a class="form-back" href="javascript:history.back(1)"></a>
    <input class="button-confirm-page" type="submit" name="Submit" id="submit" value="Submit"/>
</div>
</form>
</div>

</div>
<!--<div style="margin: 0 auto; width: 980px" class="clear">
    <div id="back-top">
        <a href="#top"><img src="../img/features/back-to-up.png" alt="ページの先頭に戻る"></a>
    </div>
</div>-->

</div>

<footer id="colophon" class="footer_inc clear" role="contentinfo">
    <div class="clear footer_entry_frm footer_content ">
    	<div class="l">
	              Copyright &copy; <?php echo date('Y'); ?> KREIS&amp;Company Inc. All Right Reserved. webdesign <a rel="nofollow" href="http://tokyodesignroom.com">tokyodesignroom.com</a>
		</div>
       <!-- <div id="footer" class="clear">
            <div class="copy">
                Copyright &copy;<?php echo date('Y'); ?> KREIS &amp; Company Inc. All Right Reserved. webdesign tokyodesignroom.com
            </div>
        </div>-->
     </div>
</footer>

</div>

    
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
