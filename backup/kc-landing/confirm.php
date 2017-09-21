<?php
@include('inc/header.php');
@include('../Lib/_init.php');
@include('../config.php');

if ($protocol == 'http:' || $protocol =='HTTP:'){
    $entry_protocol = str_replace('http', 'https', curPageURL() );
    header('Location:'.$entry_protocol);
}
?>

<div id="wrapper" class="clear">
<div class="inside">
<div class="form_content">

<div id="confirm-form" class="entry-form">
<?php 
	$prev_input="";
	$prev_input1="";
	for($i=1; $i<15;$i++):
			$col = "text{$i}";
			$val = $_POST["text".$i];
			$prev_input .= "<input type='hidden' name='{$col}' value='{$val}' id='{$col}'>";
		endfor;
			
		for($j=1;$j<7;$j++):
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
		$radio1=$_POST['radio1'];
		$prev_input .= "<input type='hidden' name='radio1' value='{$radio1}' id='radio1'>";
		$prev_input .= "<input type='hidden' name='name1' value='{$strFilesName1}' id='name1'>";
		$prev_input .= "<input type='hidden' name='content1' value='{$strContent1}'id='content1'>";
		$prev_input .= "<input type='hidden' name='filetype1' value='{$str_filetype1}' id='filetype1'>";
	
		$prev_input .= "<input type='hidden' name='name2' value='{$strFilesName2}' id='name2'>";
		$prev_input .= "<input type='hidden' name='content2' value='{$strContent2}'id='content2'>";
		$prev_input .= "<input type='hidden' name='filetype2' value='{$str_filetype2}'>";
?>	
<form name="frm_confirm" method="post" action="send_mail.php">
<?php 
		echo $prev_input;
		echo $prev_input1;
 ?>
<div class="label-asked">
    <h2 class="title">内容のご確認</h2>
    <div class="content-asked">
        <p>ご入力頂きました内容をご確認いただきまして、変更がないようでしたら一番下の送信ボタンを再度クリックしてください。</p>

        <p>変更がある場合は、画面をお戻りになりまして変更を行ってください。</p>
    </div>
</div>


<div class="form-personal-profile">
    <div class="label-personal">個人プロフィール</div>
    <div class="table-personal-profile">
        <table>
        
        <tr>
            
                <td class="label" id="tdname1">
                <table id="table_name">
                <tr>
                <td rowspan="2" id="label_name">お名前</td>
                <td id="label_name2">漢字</td>
                </tr>
                <tr><td id="label_name3">カナ</td></tr>
                </table>
                </td>
                
                <td colspan="2" id="td_value_name">
                
                <table id="table_value_name">
                <tr>
                <td colspan="2" id="table_value_name1">
                <div class="td-content clear">
                        <div class="entry_tab2"><?php echo $_POST['text1']; ?></div>
                        <div class="entry_tab2"><?php echo $_POST['text2']; ?></div>
                        
                    </div>
                    
                </td>
                </tr>
                <tr>
                <td colspan="2">
                <div class="td-content clear">
                       
                        <div class="entry_tab2"> <?php echo $_POST['text3']; ?></div>
                        <div class="entry_tab2"><?php echo $_POST['text4']; ?></div>
                        
                    </div>
                   
                </td>
                </tr>
                </table>
                </td>
                
            </tr>
            
            
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
            <tr>
                <td class="label">
                    <div>都道府県</div>
                </td>
               
                <td>
                    <div class="td-content">
                        <div><?php echo $_POST['select4']; ?></div>
                    </div>
                </td>
            </tr>
            <tr>
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

<!--<div class="form-personal-profile">
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
</div>-->

<div class="form-personal-profile">
    <div class="label-personal">経歴・履歴書添付</div>
    <div class="table-personal-profile">
        <table>
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
            <!--<tr>
                <td class="label">
                    <div>現在の年収</div>
                </td>
                <td>
                    <div class="td-content">
                        <div><?php echo $_POST['text11']; ?></div>
                    </div>
                </td>
            </tr>-->
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





<div class="form-personal-submit clear">
<div class="fr">
    <a class="form-back" href="#" title="Back" onclick="history.go(-1);"><img alt="戻る" title="" src="<?php echo url_root;?>img/button-back.png" /></a>
    <input class="button-confirm-page" type="submit" name="confirm_form" id="submit" value="Submit"/>
   </div>
</div>
</form>
</div>
</div><!--end .form_content-->
</div><!--end .inside-->

<?php
@include('inc/footer.php');
?>