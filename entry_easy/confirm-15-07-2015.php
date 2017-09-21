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
    <title>簡単３分エントリー（今すぐ転職をお考えのあなた） | ヘッドハンティング・人材紹介会社・転職のクライス&amp;カンパニー</title>
    <meta name="keywords" content="エントリー,簡単,ヘッド,ハンティング,転職,支援,人材,紹介,30代,キャリア,コンサルティング"/>
    <meta name="description" content="クライス&カンパニーのサービスへの簡単3分エントリーフォームです。お手持ちのレジュメを添付していただき、必要項目にご入力の上、ご送信ください。私たちが、あなたの良きパートナーとして転職活動をサポートいたします。" />
    <meta name="author" content="株式会社クライス・アンド・カンパニー"/>
    <meta name="copyright" content="Copyright&copy;2007 KREIS&amp;Company Inc.　All Right Reserved."/>
    <meta http-equiv="Content-Script-Type" content="text/javascript"/>
    <meta http-equiv="Content-Style-Type" content="text/css"/>
    <meta http-equiv="Content-Language" content="ja"/>
     
    <!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>-->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="../js/show_form.js" type="text/javascript"></script>

	<script src="backfix.min.js" type="text/javascript"></script>
    <!-- css -->
    <link type="text/css" href="../css/style.css" rel="stylesheet"/>

    <!-- javascript -->
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
<header>
    <?php @include('../config.php'); ?>
    <div id="header" class="header clear">
        <div class="header-form-left clear">
            <div class="logo1 ">
                <h1>ヘッドハンティング・人材紹介・転職支援ならクライス&amp;カンパニー</h1>
                <a href="<?php echo url_root_http ?>"><img src="../img/head/kreis-logo.png" alt="ヘッドハンティング・人材紹介・転職支援ならクライス&amp;カンパニー"/></a>
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
                <li><span class="process-easy-step"></span></li>
                <li><span class="process-easy-step1-none"></span></li>
                <li><span class="process-easy-step2-active"></span></li>
                <li><span class="process-easy-step3"></span></li>
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
			$List_entry_tt = Get_Data("scrol_vender", " and `scrol_venderStatus`=0 and `company_id`='$company_id_index' order by `scrol_venderID` DESC limit 1","`company_name`");
			if($List_entry_tt['cnt']>0 && $entry_id_index>0):
					echo "企業エントリー";
			else:
					$status_entry=$_POST['status_entry'];
					if($status_entry=='index'):
						echo "あなたにマッチした求人情報をお探しします";
					else:
						echo "いますぐ転職をお考えのあなた。";
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
</div>

<div id="entry-form" class="entry-form new_entry_easy_form">
<?php 

	$check_value_robot=$_POST['text8'];
	if($_POST['text8']==$_POST['text9']):
		$_SESSION['secur']=$check_value_robot;
	endif;

	$prev_input="";
	$prev_input1="";
	for($i=1; $i<15;$i++):
			$col = "text{$i}";
			$val = $_POST["text".$i];
			$prev_input .= "<input type='hidden' name='{$col}' value='{$val}' id='{$col}'>";
		endfor;
			
		for($j=1;$j<8;$j++):
			$col1 = "select{$j}";
			$val2 = $_POST["select".$j];
			$prev_input1 .= "<input type='hidden' name='{$col1}' value='{$val2}' id='{$col1}'>";
			
		endfor;
		$filename1=$_FILES['upload1']['name'];
			//$filecontent1=$_FILES['upload1']['tmp_name'];
			//$filecontent1="http://tokyodesignroom.com/emoda/img/main.jpg";
			$filecontent1=$_FILES['upload1']['tmp_name'];
			
			$filename2=$_FILES['upload2']['name'];
			$filecontent2=$_FILES['upload2']['tmp_name'];
			
			$strFilesName1 = $_FILES["upload1"]["name"]; 
			if($strFilesName1){
			$strContent1 = chunk_split(base64_encode(file_get_contents($_FILES["upload1"]["tmp_name"])));
			$str_filetype1="";
			}else{
				$strContent1 ="";
				}
			
			$strFilesName2 = $_FILES["upload2"]["name"];  
			if($strFilesName2){
			$strContent2 = chunk_split(base64_encode(file_get_contents($_FILES["upload2"]["tmp_name"]))); 
			$str_filetype2="";
			}else
			{
				$strContent2 ="";
			}
		$entry_id = $_POST['entry_id'];
		$prev_input .= "<input type='hidden' name='entry_id' value='{$entry_id}' id='entry_id'>";	
		$prev_input .= "<input type='hidden' name='company_id' value='{$company_id_index}' id='company_id'>";			
		$radio1=$_POST['radio1'];
		$prev_input .= "<input type='hidden' name='radio1' value='{$radio1}' id='radio1'>";
		$prev_input .= "<input type='hidden' name='name1' value='{$strFilesName1}' id='name1'>";
		$prev_input .= "<input type='hidden' name='content1' value='{$strContent1}'id='content1'>";
		$prev_input .= "<input type='hidden' name='filetype1' value='{$str_filetype1}' id='filetype1'>";
	
		$prev_input .= "<input type='hidden' name='name2' value='{$strFilesName2}' id='name2'>";
		$prev_input .= "<input type='hidden' name='content2' value='{$strContent2}'id='content2'>";
		$prev_input .= "<input type='hidden' name='filetype2' value='{$str_filetype2}'>";
?>	
<form name="frm_confirm" id="frm_confirm" method="post" action="send_mail.php" enctype="multipart/form-data" encoding="multipart/form-data">
<?php 
		echo $prev_input;
		echo $prev_input1;
 ?>
<div class="label-asked">
    <div class="asked">
		<?php 
			$entry_id_company=0;
			if(isset($_GET['entry_id']) || isset($_POST['entry_id'])):
				if(isset($_GET['entry_id'])):
					$entry_id_company=$_GET['entry_id'];
				else:
					if(isset($_POST['entry_id'])):
						$entry_id_company=$_POST['entry_id'];
					endif;
				endif;
				
		 		$List = Get_Data("scrol_vender", " and `scrol_venderStatus`=0 and `company_id`='$entry_id_company' order by `scrol_venderID` DESC limit 1","`company_name`");
				$company_name=$List['company_name'];
				if(!empty($company_name)):
					echo $company_name."に転職をお考えのあなた";
				else:
					echo "今すぐ転職をお考えのあなた";
				endif;
			else:
				echo "今すぐ転職をお考えのあなた";
			endif;
		?>
	</div>
    <div class="content-asked">ご入力頂きました内容をご確認いただきまして、変更がないようでしたら一番下の送信ボタンを再度クリックしてください。
        変更がある場合は、画面をお戻りになりまして変更を行ってください。
    </div>
</div>




<!--------------------------------------->
<div class="form-personal-profile">
    
    <div class="table-personal-profile">
    <table class="no_bb">
    <tr>
                <td class="label">
                    <div>お名前</div>
                </td>
                <td colspan="2">
                    <div class="td-content">
                        <div><?php echo $_POST['text1']; ?></div>
                        <div><?php echo $_POST['text2']; ?></div>
                    </div>
                </td>
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
    </table>
    
        <table class="no_bb">
            <tr>
                <td class="label">
                    <div>生年月日</div>
                </td>
                <td colspan="2">
                    <div class="td-content clear">
                        <div>西暦</div>
                        <div><?php echo $_POST['select1']; ?> 年</div>
                        <div><?php echo $_POST['select2']; ?> 月 </div>
                        <div><?php echo $_POST['select3']; ?> 日 </div>
                    </div>
                </td>
            </tr>
           
          </table>
          
          <table class="no_bb">
          <tr>
                <td class="label">
                    <div>都道府県</div>
                </td>
               
                <td>
                    <div class="td-content">
                        <div><?php echo $_POST['select4']; ?></div>
                    </div>
                </td>
                
                <td class="label">
                    <div>電話番号</span></div>
                </td>
                <td colspan="2">
                    <div class="td-content clear">
                        <div><?php echo $_POST['text5']; ?> -
                        </div>
                        <div><?php echo $_POST['text6']; ?> -
                        </div>
                        <div><?php echo $_POST['text7']; ?></div>
                    </div>
                </td>
            </tr>
          </table>
          
          <table>  
            
            
            
            <tr>
                <td class="label">
                    <div>メールアドレス</span></div>
                </td>
                <td colspan="2">
                    <div class="td-content">
                        <div><?php echo $_POST['text8']; ?>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
<!--------------------------------------->
<?php 
	if($_POST['radio1']!="" || $_POST['select5']!="" || $_POST['text12']!="" || $_POST['text11']!="" || $_POST['text13']!="" || $_POST['text10']!=""):
?>
<div class="form-personal-profile">
    <div class="label-personal">最終学歴について</div>
    <div class="table-personal-profile">
        <table>
            <tr>
                <td class="label">
                    <div>学校名</div>
                </td>
                <td>
                    <div class="td-content">
                        <div><?php echo $_POST['text10']; ?></div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
<?php 
	endif;
?>
<!--------------------------------------->
<div class="form-personal-profile">
    
    <div class="table-personal-profile">
        <table>
<?php 
	if($_POST['radio1']!="" || $_POST['select5']!="" || $_POST['text11']!="" || $_POST['text12']!="" || $_POST['text13']!="" || $_POST['text10']!=""):
?>

            <tr>
                <td class="label">
                    <div>現職区分</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div> <?php echo $_POST['radio1']; ?></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>現在の年収</div>
                </td>
                <td>
                    <div class="td-content">
                        <div><?php echo $_POST['text11']; ?></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>勤務期間</div>
                </td>
                <td>
                    <div class="td-content">
                        <div><?php echo $_POST['select5']; ?></div>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="label">
                    <div>経験社数</div>
                </td>
                <td>
                    <div class="td-content">
                        <div><?php echo $_POST['text12']; ?></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>希望勤務地</div>
                </td>
                <td>
                    <div class="td-content">
                        <div><?php echo $_POST['text13']; ?></div>
                    </div>
                </td>
            </tr>
   <?php 
   		endif;
	
   ?>         
            
            

            <tr>
                <td rowspan="2" class="label">
                    <div>経歴書を添付</div>
                </td>
                <td>
                    <div class="td-content">
                        <div>
						
						<?php 
						if(isset($_FILES['upload1'])):
						echo $_FILES['upload1']['name']; 
						endif;
						?></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="td-content">
                      
                            <div><?php 
							if(isset($_FILES['upload2'])):
							echo $_FILES['upload2']['name']; 
							endif;
							?></div>
                        
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<!--------------------------------------->
<div class="form-personal-profile">
    
    <div class="table-personal-profile">
        <table>
            <tr>
                <td class="label">
                    <div>何をご覧になって
<br>
アクセス頂きましたか？</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div><?php echo $_POST['select6'] ?></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>その他</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div><?php echo $_POST['text14']; ?></div>
                    </div>
                     <div class="td-content clear">
                        <div><?php echo $_POST['select7'] ?></div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
<!--------------------------------------->
<div class="form-personal-submit confirm_btn clear">
    
    <input class="button-confirm-page" type="submit" name="confirm_form" id="submit" value="Submit"/>
</div>
</form>
</div>

</div>
<div style="margin: 0 auto; width: 980px" class="clear">
    <div id="back-top">
        <a href="#top"><img src="../img/features/back-to-up.png" alt="ページの先頭に戻る"></a>
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
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2905089-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</html>
<?php ob_flush(); ?>