<?php 
	ob_start();
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
include('inc/config.php'); 
@include('../../config.php');

 ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="ヘッドハンティング,人材紹介,転職エージェント,キャリアコンサルティング,クライス&カンパニー,30代,求人" />
<meta name="description" content="クライス&カンパニーは、一人ひとりに合ったキャリアデザインを行った上での転職サポートを得意しています。30代を中心とした方々へのキャリアコンサルティング実績が豊富です。将来的な転職についてもお気軽にご相談ください。【完全無料サービス】" />

<meta property="og:title" content="30代の転職ならクライス＆カンパニー（ヘッドハンティング・人材紹介・転職エージェント・キャリアコンサルティング）" />
<meta property="og:type" content="website" /> 
<meta property="og:url" content="http://kandc.com/landing/" /> 
<meta property="og:description" content="クライス&カンパニーは、一人ひとりに合ったキャリアデザインを行った上での転職サポートを得意しています。30代を中心とした方々へのキャリアコンサルティング実績が豊富です。将来的な転職についてもお気軽にご相談ください。【完全無料サービス】" />
<meta property="og:image" content="http://kandc.com/landing/img/facebook-og-image.png" />
<meta property="og:site_name" content="30代の転職ならクライス＆カンパニー（ヘッドハンティング・人材紹介・転職エージェント・キャリアコンサルティング）" />

<title>30代の転職ならクライス＆カンパニー（ヘッドハンティング・人材紹介・転職エージェント・キャリアコンサルティング）</title>
<link rel="stylesheet" type="text/css" href="<?php echo url_root_domain; ?>css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo url_root; ?>js/jquery.lazyload.min.js" type="text/javascript"></script>
	<script src="<?php echo url_root; ?>js/jquery.lazyscript.min.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>/js/backfix.min.js" type="text/javascript"></script>
 <script type="text/javascript">
	jQuery(document).ready(function ($) {
			$('#frm_confirm').on('submit', function () {
				new_var = false;
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
<div id="page" class="wrapper_container clear">
<div id="top" class="clear">
    	<div class="left_top">
        	<a href="<?php echo url_root_domain;?>"><img src="img/logo-kreis.png" alt="Logo-kreis" title="" /></a>
        </div>
        <div class="right_top">
        	<div class="fb-like" data-width="50" data-layout="button_count"></div>
            <a class="twitter-share-button" href="https://twitter.com/intent/tweet">Tweet</a>
            <g:plusone></g:plusone>

        </div>
</div> <!--#top-->
<div class="wrap clear ">    
    <div class="form-confirm clear">
        <div class="notice">
            <p>内容のご確認</p>
            <p>ご入力頂きました内容をご確認いただきまして、変更がないようでしたら一番下の送信ボタンを再度クリックしてください。</p>
            <p>変更がある場合は、画面をお戻りになりまして変更を行ってください。</p>
        </div>
      	
        
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
                        <div>
						<?php 
							echo $_POST['text10'];
						?>
                        </div>
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
                        <div>
						<?php 
							echo $_POST['text12'];
						?>
                        </div>
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
                        <div>
						<?php 
							echo $_POST['text14'];
						?>
                        </div>
                        <div style="left: 100px; position: relative">
						<?php 
							echo $_POST['text15'];
						?>
                        </div>
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
                        <div>
						<?php 
							echo $_POST['text16'];
						?>
                        </div>
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
                        <p><?php echo str_replace("\n","<br/>",$_POST['text18']); ?></p>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>その他職歴</div>
                </td>
                <td>
                    <div class="td-content">
                        <p>
						<?php echo str_replace("\n","<br/>",$_POST['text19']); ?>
                       </p>
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
                        <div>
						<?php 
							echo $_POST['text20'];
						?>
                        </div>
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
      
        
        <div class="clear frm_confirm">
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
$entry_id = $_POST['entry_id'];
$prev_input .= "<input type='hidden' name='entry_id' value='{$entry_id}' id='entry_id'>";
$prev_input .= "<input type='hidden' name='company_id' value='{$company_id_index}' id='company_id'>";
$prev_input .= "<input type='hidden' name='consultant_id' value='{$consultant_id}' id='consultant_id'>";
$prev_input .= "<input type='hidden' name='radio1' value='{$radio1}' id='radio1'>";
?>

<form name="frm_confirm" id="frm_confirm" method="post" action="send_mail.php" enctype="multipart/form-data" encoding="multipart/form-data">
<?php
echo $prev_input;
echo $prev_input1;
echo $prev_radio;

?>           
                 	
               	<div class="confirm_group_tbl clear">
                    <!--    <div class="form-back"><a href="#"><img src="../img/entry/button-back.png" alt=""> </a></div>-->
                    <input type="submit" value="Submit" id="submit_confirm" name="submit" class="button_send_mail button-confirm_btn_next">
                  
                     
                   
                    <!--    <div class="form-handler"><a href="#"><img src="../img/entry/button-confirm.png" alt=""></a>-->
                    <!--    </div>-->
                </div>	
           
            
</form>            
            
        </div>
   </div> <!--#form-confirm-->
    
</div> <!--#wrap-->
	
<footer id="footer_inc" class="clear">
	<div class="container clear">
   	<p class="copy_right">COPYRIGHT &copy; KREIS & COMPANY ALL RIGHTS RESERVED webdesign <a href="http://www.tokyodesignroom.com/" target="_blank">tokyodesignroom.com</a></p>
   	</div>
</footer>
</div> <!--#page-->
<script type="text/javascript">
	jQuery(document).ready(function ($) {
		$("img.lazy-load").lazyload({
			effect : "fadeIn"
		});
	
		var options = {
			type: "delay",
			time: 1000,
			scripts: [
			"https://connect.facebook.net/en_US/all.js#xfbml=1",
			"https://apis.google.com/js/plusone.js",
			"https://platform.twitter.com/widgets.js"
			],
			success: function () {
				FB.init({ appId: '1447535468844215', status: true, cookie: true, xfbml: true });
			}
		};
		$.lazyscript(options);
	 
	});
</script>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KSRPSR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSRPSR');</script>
<!-- End Google Tag Manager -->
</body>
</html>
