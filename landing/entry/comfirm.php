<?php 
	ob_start();
	session_start();
?>	
<?php
@include('../Lib/_init.php');
@include('../config.php');

if ($protocol == 'http:' || $protocol =='HTTP:'){
    $entry_protocol = str_replace('http', 'https', curPageURL() );
   header('Location:'.$entry_protocol);
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
    <meta name="keywords" content="ヘッドハンティング,人材紹介会社,転職エージェント,キャリアコンサルティング,クライス&amp;カンパニー,30代,コンサルタント,エンジニア,キャリアデザイン,転職サポート,エントリー"/>
    <meta name="description" content="クライス&amp;カンパニーのサービスへのエントリーフォームです。エントリーご希望の方は、下記項目にご入力の上、ご送信ください。私たちが、あなたの良きパートナーとして転職活動をサポートいたします。"/>
    <meta name="author" content="株式会社クライス・アンド・カンパニー"/>
    <meta name="copyright" content="Copyright&copy;2007 KREIS&amp;Company Inc.　All Right Reserved."/>
    <meta http-equiv="Content-Script-Type" content="text/javascript"/>
    <meta http-equiv="Content-Style-Type" content="text/css"/>
    <meta http-equiv="Content-Language" content="ja"/>
    <title>エントリー（今すぐ転職をお考えのあなた） | ヘッドハンティング・人材紹介会社・転職のクライス&amp;カンパニー</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport"/>
    <!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>-->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="../js/show_form.js" type="text/javascript"></script>
	<script src="../js/matchMedia.js" type="text/javascript"></script>

	<script src="backfix.min.js" type="text/javascript"></script>
    <!-- css -->
    <link type="text/css" href="../css/style.css" rel="stylesheet"/>
	<?php 
		@include('Lib/Mobile_Detect.php');
		@include('../Lib/Mobile_Detect.php');
		@include('../../Lib/Mobile_Detect.php');
		@include('../../../Lib/Mobile_Detect.php');
		$detect = new Mobile_Detect;
		$url_pre_mobile="https://www.kandc.com/mobile/entry/";
		if($detect->isMobile() || $detect->isTablet()):
			header("Location:".$url_pre_mobile);
		endif;
		
?>
	<script type="text/javascript">
		/* <![CDATA[ */
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
		
		//var isMobile = window.matchMedia("only screen and (max-width: 760px)");
			//if (isMobile.matches) 
			//	{
							//	alert("mobile");
			//				document.location = "https://www.kandc.com/mobile/entry/";
			//	}
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
		/* ]]> */
	</script>

    <!-- javascript -->
    <script type="text/javascript">
		/* <![CDATA[ */
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
		/* ]]> */
    </script>
    
 
</head>

<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KSRPSR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script type="text/javascript">/* <![CDATA[ */(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSRPSR');/* ]]> */</script>
<!-- End Google Tag Manager -->
<header>
    <?php
    @include('../config.php')
    ?>
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
</header>
<div id="container">
<div id="content">
<div id="page" class="clear">
    <div class="title-page">
        <p class="title-top">
         <?php
		 
			@include('../Lib/_init.php');
			@include('../Lib/function/function.database.php');
			$company_id_index=$_POST['company_id'];
			$entry_id=$_POST['entry_id'];
			$consultant_id=$_POST['consultant_id'];
			 if($company_id_index==1019611):
			 	echo "企業エントリー";
			 else:
				if($company_id_index==210685):
			 		echo "企業エントリー";
			 	else:
				 	$List_entry_interview = Get_Data("interview", " and `status_interview`=0 and `entry_id`='$company_id_index' order by `id_interview` DESC limit 1","`company_name`");
					if($List_entry_interview['cnt']>0 && $company_id_index>0):
							echo "企業エントリー";
					else:
							$List_entry_tt = Get_Data("scrol_vender", " and `scrol_venderStatus`=0 and `company_id`='$company_id_index' order by `scrol_venderID` DESC limit 1","`company_name`");
							if($List_entry_tt['cnt']>0 && $company_id_index>0):
									echo "企業エントリー";
							else:
								$List_consultant = Get_Data("consultant", " and `consultant_Status`=0 and `consultant_entry_id`='$consultant_id' order by `consultant_Date` DESC limit 1","`consultant_Name`");
									if($List_consultant['cnt']>0 && $consultant_id>0):
											echo "コンサルタント指名エントリー";
										else:
											$status_entry=$_POST['status_entry'];
											if($status_entry=='index'):
												echo "あなたにマッチした求人情報をお探しします";
											else:
												echo "いますぐ転職をお考えのあなた。";
											endif;	
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
				
				 if($company_id_index==1019611):
					echo "ご指名企業の求人の中から、マッチしたものをお探ししてご紹介します。";//company id
				 else:
					if($company_id_index==210685):
						echo "ご指名企業の求人の中から、マッチしたものをお探ししてご紹介します。";//company id
				 	else:
					  	if($List_entry_interview['cnt']>0 && $company_id_index>0):
							echo "ご指名企業の求人の中から、マッチしたものをお探ししてご紹介します。";//company id
						else:
							if($List_entry_tt['cnt']>0 && $company_id_index>0):
								echo "ご指名企業の求人の中から、マッチしたものをお探ししてご紹介します。";//company id
							else:
								echo "今すぐ、もしくは近いうちに転職をお考えの方はこちらからお申し込みください。<br />私たちが、あなたの良きパートナーとして転職活動をサポートいたします。";
							endif;
						endif;
					endif;
				endif;
				
				
			endif;
		?>
       </p>
    </div>
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
    $prev_input .= "<input type='hidden' name='{$col}' value='{$val}' id='{$col}'/>";
endfor;
$user_email = $_POST['text8'];
for ($j = 1; $j < 14; $j++):
    $col1 = "select{$j}";
    $val2 = $_POST["select" . $j];
    $prev_input1 .= "<input type='hidden' name='{$col1}' value='{$val2}' id='{$col1}'/>";

endfor;
$radio1=$_POST['radio1'];
$entry_id = $_POST['entry_id'];
$prev_input .= "<input type='hidden' name='entry_id' value='{$entry_id}' id='entry_id'/>";
$prev_input .= "<input type='hidden' name='company_id' value='{$company_id_index}' id='company_id'/>";
$prev_input .= "<input type='hidden' name='consultant_id' value='{$consultant_id}' id='consultant_id'/>";
$prev_input .= "<input type='hidden' name='radio1' value='{$radio1}' id='radio1'/>";
?>


<div id="entry-form" class="entry-form">
<form action="send_mail.php" method="post" id="frm_confirm">
<?php
echo $prev_input;
echo $prev_input1;
echo $prev_radio;

?>
<div class="label-asked">
    <div class="asked">
		<?php 
			
			if($company_id_index==1019611):
			 	echo "アマゾン ジャパン株式会社に転職をお考えのあなた";
			else:
				if($company_id_index==210685):
			 		echo "アマゾン ジャパン株式会社に転職をお考えのあなた";
				else:	

					$List_interview = Get_Data("interview", " and `status_interview`=0 and `entry_id`='$company_id_index' and  `entry_id`>0 order by `id_interview` DESC limit 1","`company_name`");
					$company_name_interview=$List_interview['company_name'];
					if(!empty($company_name_interview)):
							echo "エントリー企業: ".$company_name_interview;
					else:
					
				 		$List = Get_Data("scrol_vender", " and `scrol_venderStatus`=0 and `company_id`='$company_id_index' and `company_id`>0 order by `scrol_venderID` DESC limit 1","`company_name`");
						$company_name=$List['company_name'];
						if($company_id_index>0):
							echo $company_name."に転職をお考えのあなた";
						else:
						
							$List_consultant = Get_Data("consultant", " and `consultant_Status`=0 and `consultant_entry_id`='$consultant_id' and `consultant_entry_id`>0 order by `consultant_Date` DESC limit 1","`consultant_Name`");
							$consultant_name=$List_consultant['consultant_Name'];
							if($consultant_id>0):
								echo "指名コンサルタント: ".$consultant_name;
							else:
							
								$List_Job=Get_Data("job", " and `order_id`='$entry_id' and order_id>0 order by `listed_timestamp` DESC limit 1","`job_title`");
								$job_title=$List_Job['job_title'];
								if(!empty($job_title)):
									echo "エントリー求人: ".$job_title."[".$entry_id."]";
								else:
									echo "今すぐ転職をお考えのあなた";
								endif;
								
								
							endif;
						endif;
						
					endif;
				endif;
			endif;
			
		?>
	</div>
    
     <?php /*?><?php 
   		//content asked company
		$conten_asked='<div class="content-asked" style="padding-top:5px;">※こちらは企業への正式応募ではありません。ご本人様の許可なく情報を企業へお伝えすることは決してありませんのでご安心ください。</div>';
   		if($company_id_index==1019611):
			echo $conten_asked;//text for company id
		else:
			if($company_id_index==210685):
				echo $conten_asked;//text for company id
			else:
				if(!empty($company_name_interview)):
					echo $conten_asked;//text for company id
				else:
					if($List_entry_tt['cnt']>0 && $company_id_index>0):
						echo $conten_asked;//text for company id
					else:
						?>
	                   <div class="content-asked" style="padding-top:5px;">転職に関するご相談、企業のご紹介など費用は全て無料ですので、ご安心下さい。
						<?php if($List_consultant['cnt']>0): ?>
					    	<p>ご経験、ご希望によってはサポートが難しい場合もございますのでご了承ください。</p>
					    <?php endif; ?>
					     </div> 
	                    <?php
					endif;
				endif;
			endif;
		endif;
   ?> <?php */?>
    
    
   <div class="content-asked">ご入力頂きました内容をご確認いただきまして、変更がないようでしたら一番下の送信ボタンを再度クリックしてください。
        変更がある場合は、画面をお戻りになりまして変更を行ってください。
    </div>
    
</div>

<!--*********************************************************-->

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
                    <div>電話番号</div>
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
<!--***************************************************-->
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

<!--**********************************************-->
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

<!--****************************************************-->
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

<!--*************************************************-->
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
<!--*******************************************************-->
<div class="clear">
    <a class="form-back" title="Back" href="javascript:history.back(1)"></a>
    <input class="button-confirm-page" style="margin: 0 auto;" type="submit" name="Submit" id="submit" value="Submit"/>
</div>
</form>
</div>

</div>
<div style="margin: 0 auto; width: 980px" class="clear">
    <div id="back-top">
        <a href="#top"><img src="https://www.kandc.com/img/index/pagetop-navy.png" alt="ページの先頭に戻る"/></a>
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
</html>
