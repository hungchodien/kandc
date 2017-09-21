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
	   <meta http-equiv="X-UA-Compatible" content="IE=8">
	<![endif]-->
    
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
			echo url_root."entry/?entry_id=1014585";

?>" target="_blank"><img src="<?php echo url_root; ?>img/entry/head-entry-button.png" alt="まずは気軽に相談する" /></a></div>
            </div>
        </div><!--End .header_logo-->
		
 </header>   
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



<div id="entry-form" class="entry-form new_entry_easy_form">
<?php 

	$check_value_robot=$_POST['text8'];
	$_SESSION['secur']=$check_value_robot;
	

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
	//	$entry_id = $_POST['entry_id'];
		$entry_id = (int)$_POST['entry_id'];
		if($entry_id>0):
				$entry_id1=$entry_id;
			endif;
		
		$prev_input .= "<input type='hidden' name='entry_id' value='{$entry_id_post}' id='entry_id'>";
		$prev_input .= "<input type='hidden' name='company_id' value='{$company_id}' id='company_id'>";
		$prev_input .= "<input type='hidden' name='consultant_id' value='{$consultant_id}' id='consultant_id'>";
		
				
		$radio1=$_POST['radio1'];
		$prev_input .= "<input type='hidden' name='radio1' value='{$radio1}' id='radio1'>";
		$prev_input .= "<input type='hidden' name='name1' value='{$strFilesName1}' id='name1'>";
		$prev_input .= "<input type='hidden' name='content1' value='{$strContent1}'id='content1'>";
		$prev_input .= "<input type='hidden' name='filetype1' value='{$str_filetype1}' id='filetype1'>";
	
		$prev_input .= "<input type='hidden' name='name2' value='{$strFilesName2}' id='name2'>";
		$prev_input .= "<input type='hidden' name='content2' value='{$strContent2}'id='content2'>";
		$prev_input .= "<input type='hidden' name='filetype2' value='{$str_filetype2}'>";
?>	
<form name="frm_confirm" method="post" action="send_mail.php" enctype="multipart/form-data" encoding="multipart/form-data">
<?php 
		echo $prev_input;
		echo $prev_input1;
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
    <a class="form-back" href="javascript:history.back(1)"></a>
    <input class="button-confirm-page" type="submit" name="confirm_form" id="submit" value="Submit"/>
</div>
</form>
</div>

</div>
<!--<div style="margin: 0 auto; width: 980px" class="clear">
    <div id="back-top">
        <a href="#top"><img src="../img/features/back-to-up.png"></a>
    </div>
</div>-->

</div>
<?php include('../inc/footer_entry.php');?>