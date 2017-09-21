<script language="javascript" type="text/javascript">
		jQuery( document ).ready(function($) {
			
			$( "body" ).addClass( "entry_page" );

		});
</script>
<div class="breadcrumb" id="breadcrumb_top">
		<ul class="clear">
        	<li><a href="<?php echo url_root; ?>">クライス＆カンパニー</a></li>
            <li> &gt; </li>
            <li><a href="<?php echo url_root; ?>entry.html">エントリー</a></li>
            <li> &gt; </li>
            <li>内容確認</li>
         </ul>
</div><!--breadcrumb_top-->
<div class="bg_entry_fix clear">
	
	<div class="clear title_form_header">
            <div class="icon_title_entry_en clear"><img src="<?php echo url_root; ?>img/entry/en_confirm_title.png" alt="confirm"/></div>
            <div class="icon_title_entry_ja clear"><img src="<?php echo url_root; ?>img/entry/jp_confirm_title.png" alt="内容確認"/></div>
            <div class="description_title clear">
            	<p class="togg_p">
                <a class="tlb_togg_mobile" href="javascript:toggleDiv('entry_desc_togg');"><span class="open_txt">詳しく見る<img src="<?php echo url_root; ?>img/entry/entry_down.png" alt=""/></span><span class="close_txt">たたむ <img src="<?php echo url_root; ?>img/entry/entry_up.png" alt=""/></span></a>
                </p>
                <p id="entry_desc_togg">ご入力頂きました内容をご確認いただきまして、変更がないようでしたら一番下の送信ボタンを再度クリックしてください。 変更がある場合は、画面をお戻りになりまして変更を行ってください。</p>
             </div><!--content_form_fist-->
         </div><!--title_form_header-->
         

    <div class="clear content_inc entry_form confirm_entry">
         
       <?php 
        $prev_input="";
        $prev_input1="";
        for($i=1; $i<13;$i++):
			if($i==10)
			{
				 if(!empty($_POST['text10'])) 
								 	{
										 //echo $_POST['text10'];
						$prev_input .= "<input type='hidden' name='text10' value='/ {$_POST['text10']}' id='text10'>";
									 }
									 else
									 {
										  //echo " free comment";
						$prev_input .= "<input type='hidden' name='text10' value='' id='text10'>";
									}
			}
			else
			{
                $col = "text{$i}";
                $val = $_POST["text".$i];
				//if($val!='※「その他」を選択した方は具体的にご記入ください。'):
				
					$prev_input .= "<input type='hidden' name='{$col}' value='{$val}' id='{$col}'>";
			}
				
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
            //$entry_id = $_POST['entry_id'];
            //$prev_input .= "<input type='hidden' name='entry_id' value='{$entry_id}' id='entry_id'>";			
            $radio1="";
			
			if(!empty($_POST['checkbox_val'])) {
						 foreach($_POST['checkbox_val'] as $check_box_set) {
           						 $radio1.= $check_box_set."  "; 
    					}
						   //echo $_POST['radio1']; 
				}else{
					 $radio1.= ""; 
			}
						  
            $prev_input .= "<input type='hidden' name='radio1' value='{$radio1}' id='radio1'>";
            $prev_input .= "<input type='hidden' name='name1' value='{$strFilesName1}' id='name1'>";
            $prev_input .= "<input type='hidden' name='content1' value='{$strContent1}'id='content1'>";
            $prev_input .= "<input type='hidden' name='filetype1' value='{$str_filetype1}' id='filetype1'>";
        
            $prev_input .= "<input type='hidden' name='name2' value='{$strFilesName2}' id='name2'>";
            $prev_input .= "<input type='hidden' name='content2' value='{$strContent2}'id='content2'>";
            $prev_input .= "<input type='hidden' name='filetype2' value='{$str_filetype2}'>";
    ?>	  
         
         
         
        <div class="group_form_entry clear">
         <form id="submit_form" encoding="multipart/form-data" enctype="multipart/form-data" method="post" action="<?php echo url_root; ?>entry/sendmail.html">
         <?php 
            echo $prev_input;
            echo $prev_input1;
            ?>
            <div class="topform_txt clear red-color"></div>
            <div class="form_one clear">
                    
                   <div class="table-personal-profile2">
            <table class="no_bb">
            <tr>
            <td class="label">
                        <div>お名前</div>
             </td>
             <td colspan="2"> 
                        <div class="td-content clear">
                            
                            <div class=" l"><?php echo $_POST['text1']; ?>
                            <p><span id="errortext1"></span></p>
                            </div>
                            
                            <div class=" l"><?php echo $_POST['text2']; ?>
                            <p><span id="errortext2"></span></p>
                            </div>
                            
                        </div>
                        
                    </td>
                 </tr>
                 
                 <tr class="">   
                <td class="label ">
                        <div>フリガナ</div>
                    </td>
                    <td colspan="2">
                        <div class="td-content clear">
                            
                            <div class=""> <?php echo $_POST['text3']; ?>
                            </div>
                            
                            <div class=""><?php echo $_POST['text4']; ?>
                            </div>
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
                        <div class="td-content clear confirm_dob">
                            <div class="first_text">西暦</div>
                            <div class="col1_s col1_s_first">
                                <?php echo $_POST['select1']; ?>
                            </div>
                            <div class="col2_s ">年</div>
                            <div class="col1_s">
                               <?php echo $_POST['select2']; ?>
                            </div>
                            <div class="col2_s"> 月</div>
                            <div class="col1_s">
                                <?php echo $_POST['select3']; ?>
                            </div>
                            <div class="col2_s"> 日</div>
                        </div>
                        
                    </td>
                </tr>
            </table>
            
            <table class="no_bb">
            	<tr class="">
                    <td class="label">
                        <div>都道府県</div>
                    </td>
                    
                    <td>
                        <div class="td-content state clear">
                           <?php echo $_POST['select4']; ?>
                        </div>
                    </td>
                    </tr>
                    
                    <tr>
                    <td class="label label_phone">
                        <div>電話番号</div>
                    </td>
                    <td colspan="2">
                        <div class="td-content phone clear">
                           <div>
                                <?php echo $_POST['text5']; ?> - <?php echo $_POST['text6']; ?> - <?php echo $_POST['text7']; ?>
                               
                           </div>
                        </div>
                        
                    </td>
                </tr>
                
            </table>
            
            <table class="no_bb">
                <tr>
                    <td class="label">
                        <div>メールアドレス</div>
                    </td>
                    <td colspan="2">
                       <div class=" td-content  clear">
                        <div> <?php echo $_POST['text8']; ?></div>
                    </div>
                        
                       
                    </td>
                </tr>
            </table>
            
             <table class="no_bb">
                <tr>
                    <td class="label">
                        <div>ご希望のポジション</div>
                    </td>
                    <td colspan="2">
                       <div class="td-content clear">
                           <div><?php 
						   if(!empty($_POST['checkbox_val'])) {
						    foreach($_POST['checkbox_val'] as $check_box) {
           						 echo $check_box."&nbsp;&nbsp;&nbsp;&nbsp;"; 
    						}
						   //echo $_POST['radio1']; 
						   		 if(!empty($_POST['text10']) ) {
									 echo "/ ".$_POST['text10'];
									 }else{
										 echo "";
									}
						   }
						   else
						   {
							   echo "";
								 if(!empty($_POST['text10'])) 
								 	{
										 echo "/ ".$_POST['text10'];
									 }
									 else
									 {
										  echo "";
									}

							}
						   ?>
                           </div>
                        </div>
                       
                    </td>
                </tr>
            </table>
            
             <table class="no_bb">
                <tr>
                    <td class="label">
                        <div class="pc-s">ご相談、<br>もしくはお問合せ内容</div>
                        <div class="mb-s">ご相談、<br>もしくはお問合せ内容</div>
                    </td>
                    <td colspan="2">
                       <div class="td-content clear">
                            <div>
                            <?php echo $_POST['text11']; ?>
                           
                           </div> 
                       </div>
                       
                    </td>
                </tr>
            </table>
        </div> 
                    
                    
            </div><!--form_one-->
            
            <div class="form_one clear pc_hiden">
            
                <div class="table-personal-profile">  
                        <table>
                        <tr>
                            <td class="label">
                                <div>経歴書を添付</div>
                            </td>
                            <td>
                            <div class="clear">
                            <div class="l">
                                <div class="td-content clear">
                                    <div>
                                    <?php 
                            if(isset($_FILES['upload1'])):
                            echo $_FILES['upload1']['name']; 
                            endif;
                            ?>
                                    </div>
                                    
                                </div>
                                <div class="td-content clear">
                                    <div><span id="errorfile1"></span></div>
                                </div>
                                <div class="td-content clear">
                                    <div>
                                    <?php 
                                if(isset($_FILES['upload2'])):
                                echo $_FILES['upload2']['name']; 
                                endif;
                                ?>
                                    </div>
                                    
                                </div>
                                <div class="td-content clear">
                                    <div><span id="errorfile2"></span></div>
                                </div>
                                </div>
                                
                                
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                    
            </div><!--form_one-->
            
            <div class="form_one clear">
                <div class="table-personal-profile2">
                <table class="no_bb">
                    <tbody><tr>
                        <td class="label">
                            <div>媒体</div>
                        </td>
                        <td>
                            <div class="td-content clear">
                                <div>
                                <?php echo $_POST['select5']; ?>
                                    
                                </div>
                               
                            </div>
                        </td>
                    </tr>
                    </tbody></table>
                     <table class="no_bb">
                    <tbody>
                    	<tr>
                            <td class="label">
                                <div>その他</div>
                            </td>
                            <td>
                                <div class="td-content clear">
                                    <div class="clear"><?php echo $_POST['text12']; ?></div>
                                   
                                 </div>
                                 <div class="td-content clear">
                                    <div class="clear"><?php echo $_POST['select6']; ?></div>
                                </div>
                            </td>
           			 </tr>
                </tbody></table>
            </div>
            </div><!--form_one-->
            
           
           
            <div class="r form_one_tbl clear tbl_mobile_div_r">

				<div class="l ck_tlb checkbox_mb back_class_tb tbl_mobile_l">
                	<input class="tbl_back" type="button" onclick="history.go(-1);" value="戻る" />
                </div>

                <div class="r tbl_button_div tbl_mobile_r">
                    <input id="tbl_submit_form" type="submit" class="tbl_submit_entry tbl_submit_mobile" name="submit_confirm" value="送信する"/>
                </div>
            </div>
            
             </form><!--submit_form-->
                
           
        </div><!--group_form_entry-->
        
         
     
     
        
        
    </div>
</div>

<div class="breadcrumb clear">
   		
         <div id="back_top">
    		<a href="#top"><img alt="Page Top" src="<?php echo url_root; ?>img/home/page_top.png"></a>
		</div>
</div>