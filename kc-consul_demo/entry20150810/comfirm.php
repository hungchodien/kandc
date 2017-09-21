<?php 
	ob_start();
	session_start();
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
    <meta name="keywords" content="コンサルタント,コンサルティング,戦略コンサル,ITコンサル,ポストコンサル,EXコンサル,転職,人材紹介,エージェント,エントリー"/>
    <meta name="description" content="現役コンサルタントの転職専門人材紹介会社クライス&amp;カンパニーへのエントリーフォームです。"/>
    <meta name="author" content="株式会社クライス・アンド・カンパニー"/>
    <meta name="copyright" content="Copyright&copy;2007 KREIS&amp;Company Inc.　All Right Reserved."/>
    <meta http-equiv="Content-Script-Type" content="text/javascript"/>
    <meta http-equiv="Content-Style-Type" content="text/css"/>
    <meta http-equiv="Content-Language" content="ja"/>
    <title>エントリー |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー</title>
    <!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>-->
    <script type="text/javascript" src="<?php echo url_root_main; ?>js/jquery.min.js"></script>
    <script src="<?php echo url_root_main; ?>js/show_form.js" type="text/javascript"></script>

    <!-- css -->
   
	 <link type="text/css" href="<?php echo url_root_main; ?>css/style.css" rel="stylesheet"/>
	  <link type="text/css" href="../css/style.css" rel="stylesheet"/>
      <link type="text/css" href="../css/style_add.css" rel="stylesheet"/>
    <!-- javascript -->
    <script type="text/javascript">
        $(document).ready(function () {
            // hide #back-top first
           // $("#back-top").hide();
		   $('a#back-top').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
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
<div class="clear page_main">
<header>

   <div class="header_top clear">
         	<div class="header_top_content clear">
        	<div class="l site_title">
	            	<ul class="clear top_break">
	                    <li><a href="<?php  echo url_root_main; ?>" >30代・40代転職</a></li>
	                    <li><a target="_blank" href="<?php  echo url_root_main; ?>exe/">エグゼクティブ転職</a></li>
						<li><a target="_blank" href="<?php  echo url_root; ?>" class="active">コンサルタント転職</a></li>
					</ul>
	           </div><!--site_title-->
               
	           <div class="social_btns r clear social_btns_header">
               		<div class="l title_product_by_hd">produced by</div>
               		<div class="l kandc_title_product_by_hd"><a href="<?php  echo url_root_main; ?>" target="_blank"><img src="<?php echo url_root; ?>img/link/head-kreis-name.png" alt="30代・40代転職"/></a></div>
               		
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
                <div class="button_entry r">
                <!--<a class="go_entry_consultant" href="http://www.kandc.com/kc-recruit/entry/consultant/" target="_blank"><img src="<?php echo url_root; ?>img/link/button_recruit.png" alt="自社採用 コンサルタント職 募集中"/></a>-->
                <a class="entry_tbl_kc" href="<?php

				/*$url_check_entry = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
							if (false !== strpos($url_check_entry,'entry')) {
								$link_entry.='/entry_easy';
							} else {
								$link_entry.='/entry/';
							}
 				//echo url_root."entry/?entry_id=1014585" 
				if(isset($_GET['entry_id'])){
					$link_entry.='?entry_id='.$_GET['entry_id'];
				}else{
					$link_entry.='?entry_id=1014585';
				}*/
			echo url_root."entry_easy/?entry_id=1014585";

?>" target="_blank"><img src="<?php echo url_root; ?>img/entry/entry-easy-button.png" alt="まずは気軽に相談する" /></a></div>
            </div>
        </div><!--End .header_logo-->
		
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
<div id="page_category_name" class="clear">
    <div class="title-page">
        <p class="title-top"> 今すぐ転職をお考えのあなた</p>

        <p class="sub-title-top">今すぐ、もしくは近いうちに転職をお考えの方はこちらからお申し込みください。<br />私たちが、あなたの良きパートナーとして転職活動をサポートいたします。</p>
    </div>
</div>

<?php

	$check_value_robot=$_POST['text8'];
	if($_POST['text8']==$_POST['text9']):
		$_SESSION['secur']=$check_value_robot;
	endif;

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
$entry_id = (int)$_POST['entry_id'];
if($entry_id>0):
	$entry_id1=$entry_id;
endif;

$prev_input .= "<input type='hidden' name='entry_id' value='{$entry_id1}' id='entry_id'>";
$prev_input .= "<input type='hidden' name='radio1' value='{$radio1}' id='radio1'>";
?>


<div id="entry-form" class="entry-form">
<form name="frm_confirm" method="post" action="send_mail.php">
<?php
echo $prev_input;
echo $prev_input1;
echo $prev_radio;

?>
<div class="label-asked">
    <div class="asked">内容のご確認</div>
    <div class="content-asked">ご入力頂きました内容をご確認いただきまして、変更がないようでしたら一番下の送信ボタンを再度クリックしてください。
        変更がある場合は、画面をお戻りになりまして変更を行ってください。
    </div>
</div>

<!-------------------------------------------------------------->

<div class="form-personal-profile">
    <div class="label-personal">個人プロフィール</div>
    <div class="table-personal-profile">
        <table>
            <tr>
                <td class="label">
                    <div>お名前</div>
                </td>
                <td colspan="2">
                    <div class="td-content">
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
                    <div>都道府県</div>
                </td>
                
                <td>
                    <div class="td-content">
                        <div><?php echo $_POST['select4'] ?> </div>
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
                    <div class="td-content">
                        <div><?php echo $_POST['text8'] ?>   </div>
                        </div>
                </td>
            </tr>
        </table>
    </div>
</div>
<!--------------------------------------->
<div class="form-personal-profile">
    <div class="label-personal">最終学歴・語学・資格</div>
    <div class="table-personal-profile">
        <table>
            <tr>
                <td class="label">
                    <div>学校名</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div><?php echo $_POST['text10'] ?></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>英語力</div>
                </td>
                <td>
                    <div class="td-content">
                        <div><?php echo $_POST['select5'] ?></div>
                        <div style="left: 100px ; position: relative">TOEIC <?php echo $_POST['text11'] ?> 点</div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>その他語学・資格</div>
                </td>
                <td>
                    <div class="td-content">
                        <div><?php echo $_POST['text12']; ?></div>
                    </div>
                </td>
            </tr>

        </table>
    </div>
</div>

<!--------------------------------------->
<div class="form-personal-profile">
    <div class="label-personal">職務経歴について</div>
    <div class="table-personal-profile">
        <table>
            <tr>
                <td class="label">
                    <div>経験社数</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div> <?php echo $_POST['text13']; ?> 社</div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>会社名・従業員数</div>
                </td>
                <td>
                    <div class="td-content">
                        <div><?php echo $_POST['text14']; ?></div>
                        <div style="left: 100px; position: relative"><?php echo $_POST['text15']; ?> 人</div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>業種</div>
                </td>
                <td>
                    <div class="td-content">
                        <div> <?php echo $_POST['select6'] ?></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>勤務期間</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div>西暦</div>
                        <div><?php echo $_POST['select7'] ?> 年</div>
                        <div><?php echo $_POST['select8'] ?> 月 ～</div>
                        <div><?php echo $_POST['select9'] ?> 年</div>
                        <div><?php echo $_POST['select10'] ?>月</div>
                    </div>
                    <div class="td-content clear">
                        <div> <?php echo $_POST['radio1']; ?>
                            <input type="hidden" value="<?php echo $_POST['radio1']; ?>" name="rad1"/>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>職種</div>
                </td>
                <td>
                    <div class="td-content">
                        <div><?php echo $_POST['select11'] ?></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>最終部課／職位・年収</div>
                </td>
                <td>
                    <div class="td-content">
                        <div><?php echo $_POST['text16']; ?></div>
                        <div><?php echo $_POST['text17']; ?></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>職務内容</div>
                </td>
                <td>
                    <div class="td-content">
                        <div><?php echo $_POST['text18']; ?></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>その他職歴</div>
                </td>
                <td>
                    <div class="td-content">
                        <div><?php echo $_POST['text19']; ?></div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<!--------------------------------------->
<div class="form-personal-profile">
    <div class="label-personal">ご希望について</div>
    <div class="table-personal-profile">
        <table>
            <tr>
                <td class="label">
                    <div>希望勤務地</div>
                </td>
                <td>
                    <div class="td-content">
                        <div><?php echo $_POST['text20']; ?></div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<!--------------------------------------->
<div class="form-personal-profile">
    <div class="label-personal">何をご覧になってアクセス頂きましたか？</div>
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
                        <div class="clear"><?php echo $_POST['text21']; ?></div>
                       
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


</div>

<?php include('../inc/footer_entry.php') ?>
