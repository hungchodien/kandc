<?php 
	ob_start();
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include('inc/config.php'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="ヘッドハンティング,人材紹介,転職エージェント,キャリアコンサルティング,クライス&カンパニー,30代,求人" />
<meta name="description" content="クライス&カンパニーは、一人ひとりに合ったキャリアデザインを行った上での転職サポートを得意しています。30代を中心とした方々へのキャリアコンサルティング実績が豊富です。将来的な転職についてもお気軽にご相談ください。【完全無料サービス】" />

<meta PROPERTY="og:title" content="30代の転職ならクライス＆カンパニー（ヘッドハンティング・人材紹介・転職エージェント・キャリアコンサルティング）" />
<meta PROPERTY="og:type" content="website" /> 
<meta PROPERTY="og:url" content="http://kandc.com/landing/" /> 
<meta PROPERTY="og:description" content="クライス&カンパニーは、一人ひとりに合ったキャリアデザインを行った上での転職サポートを得意しています。30代を中心とした方々へのキャリアコンサルティング実績が豊富です。将来的な転職についてもお気軽にご相談ください。【完全無料サービス】" />
<meta PROPERTY="og:image" content="http://kandc.com/landing/img/facebook-og-image.png" />
<meta PROPERTY="og:site_name" content="30代の転職ならクライス＆カンパニー（ヘッドハンティング・人材紹介・転職エージェント・キャリアコンサルティング）" />

<title>30代の転職ならクライス＆カンパニー（ヘッドハンティング・人材紹介・転職エージェント・キャリアコンサルティング）</title>
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
<div class="wrap ">    
    <div class="form-confirm ">
        <div class="notice">
            <p>内容のご確認</p>
            <p>ご入力頂きました内容をご確認いただきまして、変更がないようでしたら一番下の送信ボタンを再度クリックしてください。</p>
            <p>変更がある場合は、画面をお戻りになりまして変更を行ってください。</p>
        </div>
      	<p class="title-confirm">個人プロフィール</p>
        <div class="clear confirm_entry_easy_group">
          <table width="100%" border="1" cellspacing="1" cellpadding="1">
              <tr>
                <td width="10%" rowspan="2"><div align="center">お名前</div></td>
                <td width="10%" class="top-name">漢字</td>
                <td width="80%">
                	<div class="td-content"> 
                		<div><?php echo $_POST['text1']; ?></div>
                        <div><?php echo $_POST['text2']; ?></div>
                 	</div>
                </td>
              </tr>
              <tr>
                <td>カナ</td>
                <td>
                <div class="td-content"> 
                    <div><?php echo $_POST['text3'] ?></div>
                    <div><?php echo $_POST['text4'] ?></div>
                </div>
                </td>
              </tr>
              <tr>
                <td colspan="2">生年月日</td>
                <td>
                <div class="td-content clear">
                    <div>西暦</div>
                    <div><?php echo $_POST['select1']; ?> 年</div>
                    <div><?php echo $_POST['select2']; ?> 月 </div>
                    <div><?php echo $_POST['select3']; ?> 日 </div>
                 </div>
                </td>
              </tr>
              <tr>
                <td colspan="2">都道府県</td>
                <td class="td-content clear"><div ><?php echo $_POST['select4']; ?></div></td>
              </tr>
              <tr>
                <td colspan="2">電話番号</td>
                <td>
                <div class="td-content clear">
                    <div><?php echo $_POST['text5']; ?> -</div>
                    <div><?php echo $_POST['text6']; ?> -</div>
                    <div><?php echo $_POST['text7']; ?></div>
                </div>
                </td>
              </tr>
              <tr>
                <td colspan="2">メールアドレス</td>
                <td class="td-content clear"><div><?php echo $_POST['text8']; ?></td>
              </tr>
        </table>
        
           <p class="title-confirm">経歴・履歴書添付</p>
            <table width="100%" border="1" cellspacing="1" cellpadding="1">
             <?php 
	if($_POST['radio1']!="" || $_POST['select5']!="" || $_POST['text11']!="" || $_POST['text12']!="" || $_POST['text13']!="" || $_POST['text10']!=""):
?>  
      	<tr>
        	<td>学校名</td>
            <td class="td-content clear"><div><?php echo $_POST['text10']; ?></div></td>
        </tr>
          <tr>
            <td width="20%">現職区分</td>
            <td width="80%" class="td-content clear"> <div> <?php echo $_POST['radio1']; ?></div></td>
          </tr>
          <tr>
            <td>現在の年収</td>
            <td class="td-content clear"><div><?php echo $_POST['text11']; ?></div></td>
          </tr>
          <tr>
            <td>勤務期間</td>
            <td class="td-content clear"><div><?php echo $_POST['select5']; ?></div></td>
          </tr>
          <tr>
            <td>経験社数</td>
            <td class="td-content clear"><div><?php echo $_POST['text12']; ?></div></td>
          </tr>
          <tr>
            <td>希望勤務地</td>
            <td class="td-content clear"><div><?php echo $_POST['text13']; ?></div></td>
          </tr>
           <?php 
   		endif;
	
   ?>  
          <tr>
                <td rowspan="2" class="label bd_bt" width="20%">
                    <div>経歴書を添付</div>
                </td>
                <td class="bd_bt">
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
            <?php if(!empty($_FILES['upload2']['name'])): ?>
            <tr>
                <td class="result_upload2 bd_bt">
                    <div class="td-content">
                      
                            <div ><?php 
							
							echo $_FILES['upload2']['name']; 
							
							?></div>
                        
                    </div>
                </td>
            </tr>
          <?php endif; ?>
          
        </table>
      
   
   		<table width="100%">
            <tr>
                <td width="20%" class="label">
                    <div>何をご覧になって
<br>
アクセス頂きましたか？</div>
                </td>
                <td style="background:#fff;">
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
        
        <div class="clear frm_confirm">
        	<?php 

	$check_value_robot=$_POST['text8'];
	//if($_POST['text8']==$_POST['text9']):
		$_SESSION['secur']=$check_value_robot;
	//endif;

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
		//$prev_input .= "<input type='hidden' name='entry_id' value='{$entry_id}' id='entry_id'>";	
		//$prev_input .= "<input type='hidden' name='company_id' value='{$company_id_index}' id='company_id'>";
		//$prev_input .= "<input type='hidden' name='consultant_id' value='{$consultant_id}' id='consultant_id'>";			
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
</body>
</html>
