<?php include('../../../inc/header.php'); ?>
<?php 
	if ($protocol == 'http:' || $protocol =='HTTP:'){
    $entry_protocol = str_replace('http', 'https', curPageURL() );
    header('Location:'.$entry_protocol);
	}
?>

<div id="wrapper" class="wrapper_entry clear">
<div class="content_top"></div>
 <div class="inside">
    <div class="body_content clear">
<div class="content_entry_recurit clear">
    <!--Begin title-->
    <div class="title_content_entry_recurit clear">
    <p class="top_1">コンサルタント職</p>
        <p class="title_form">コンサルタント職応募フォームです。</p>
    
    </div>	
    <!--End title-->
    
    
    <div id="entry-form" class="entry-form clear">
<?php 
	$check_value_robot=$_POST['text8'];
	$_SESSION['secur']=$check_value_robot;


	$prev_input="";
	$prev_input1="";
	for($i=1; $i<10;$i++):
			$col = "text{$i}";
			$val = $_POST["text".$i];
			$prev_input .= "<input type='hidden' name='{$col}' value='{$val}' id='{$col}'/>";
		endfor;
			
		for($j=1;$j<5;$j++):
			$col1 = "select{$j}";
			$val2 = $_POST["select".$j];
			$prev_input1 .= "<input type='hidden' name='{$col1}' value='{$val2}' id='{$col1}'/>";
			
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
					
	
		//$prev_input .= "<input type='hidden' name='radio1' value='{$radio1}' id='radio1'/>";
		$prev_input .= "<input type='hidden' name='name1' value='{$strFilesName1}' id='name1'/>";
		$prev_input .= "<input type='hidden' name='content1' value='{$strContent1}'id='content1'/>";
		$prev_input .= "<input type='hidden' name='filetype1' value='{$str_filetype1}' id='filetype1'/>";
	
		$prev_input .= "<input type='hidden' name='name2' value='{$strFilesName2}' id='name2'/>";
		$prev_input .= "<input type='hidden' name='content2' value='{$strContent2}'id='content2'/>";
		$prev_input .= "<input type='hidden' name='filetype2' value='{$str_filetype2}'/>";
?>	
<form name="frm_confirm" method="post" action="send_mail.php">
<?php 
		echo $prev_input;
		echo $prev_input1;
 ?>
<div class="label-asked">
    <div class="asked">内容のご確認</div>
    <div class="content-asked">
        <p>ご入力頂きました内容をご確認いただきまして、変更がないようでしたら一番下の送信ボタンを再度クリックしてください。</p>

        <p>変更がある場合は、画面をお戻りになりまして変更を行ってください。</p>
    </div>
</div>
<!--******************************************-->
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
                        <div><?php echo $_POST['text1']; ?></div>
                        <div><?php echo $_POST['text2']; ?></div>
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
                        <div><?php echo $_POST['select1']; ?> 年</div>
                        <div><?php echo $_POST['select2']; ?> 月 </div>
                        <div><?php echo $_POST['select3']; ?> 日 </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>現住所</div>
                </td>
                <td style=" width: 150px">
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
                    <div>電話番号</div>
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
                    <div>メールアドレス</div>
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
<!--******************************************-->
<div class="form-personal-profile">
    <div class="label-personal">履歴書・職務経歴書</div>
    <div class="table-personal-profile">
        <table>
            
            <tr>
                <td class="label">
                    <div>履歴書</div>
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
            <td class="label">
                    <div>職務経歴書</div>
                </td>
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

<!--******************************************-->
<div class="form-personal-submit clear">
     <input class="button-confirm-page-back" type="button" name="confirm_form_back" id="back_button" value="back" onclick="history.go(-1)"/>
    <input class="button-confirm-page" type="submit" name="confirm_form" id="submit" value="Submit"/>
</div>
</form>
</div>
    
    
    
    
 	</div><!--End content_entry_recurit-->
   </div><!--End body_content-->  
</div>   <!--End inside-->  
</div>

<div  id="footer_add_bread" class="clear">
    	<ul class="clear">
             <li class="bc_home"><a href="<?php echo url_root; ?>">HOME</a></li>
            <li class="bc_item"><a href="<?php echo url_root; ?>entry">募集要項</a></li>
           <li class="bc_item"><a href="<?php echo url_root; ?>entry/consultant/">コンサルタント職</a></li>
             <li class="bc_item"><a href="<?php echo url_root; ?>entry/staff/form">応募フォーム</a></li>
             <li class="bc_item">内容確認</li>
          
        </ul>
    </div>

<?php include('../../../inc/footer.php'); ?>
