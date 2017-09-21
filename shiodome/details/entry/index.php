<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../css/style.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="../js/validate_form.js"></script>
</head>

<body>
 <div id="main_page" class="container_main_inc form_page">
        	<div class="form_container">
            	<h3 class="event_title main_color">お申し込みフォーム</h3>
                <p>※参加希望者多数の場合は、誠に申し訳ございませんが抽選となります。予め了承ください。</p>
                <p class="r_text"><span class="rq">※</span> 必須項目になります。</p>
                <div class="form_content clear">
                	<div class="left fl ">
                    	<div class="event_box">	
						
							 <div class="top_single clear">
								<div class="top_single_fied clear">
						        	<div class="date fl main_color">
						               	<p class="month"><?php echo substr(date('Y F',strtotime($date_shiodome_top)),0,8); ?></p>
						            	<p class="ngay"><?php echo date('d',strtotime($date_shiodome_top)); ?></p>
						            	<p class="day"><?php echo date('D',strtotime($date_shiodome_top)); ?></p>
						            </div>
						            <div class="time_place fl main_color">
						               <dl class="time_place">
		                	                <?php if(!empty($Data_shiodome_list['shiodome_academy_time']) && $Data_shiodome_list['shiodome_academy_time']!=""): ?>
	                <dt class="label">time</dt><dd><?php echo $Data_shiodome_list['shiodome_academy_time']; ?></dd>
	                						<?php endif; ?>
                                            
                                            <?php if(!empty($Data_shiodome_list['shiodome_academy_place']) && $Data_shiodome_list['shiodome_academy_place']!=""): ?>
	                <dt class="label">place</dt><dd><?php echo $Data_shiodome_list['shiodome_academy_place']; ?></dd>
							                 <?php endif; ?>
		                	               	
		                 	           </dl>
						            </div>
						            
								</div>
					        </div>
							<h3 class="theme"><?php echo $Data_shiodome_list['shiodome_academy_category_name_ja']; ?></h3>
							<div class="guest">
							<?php 
                                    $guest_top=unserialize($List_shiodome_list['shiodome_academy_guest']);
                                    $g=0;
                                    for($g=0;$g<count($guest_top);$g++):
                                        echo "<p>".$guest_top[$g]['guest']."</p>";
                                    endfor;
                                ?>
                            </div>
						</div> <!--event_box-->	
			               
			        
                    </div> <!--left-->
                    <div class="right main_form fr">
                    	<form id="event_form" method="post" action="send_mail.php">
                    	<table>
                        	<tr>
                            	<th>お名前 <span class="rq">※</span></th>
                                <td class="clear name name1">
                                	<div class="fl wrap check">
                                    	<p class="label">姓</p>
                                        <p class="value"> <input type="text" id="txt1" name="txt1" value="" /></p>
                                    </div>
                                    <div class="fl wrap check">
                                    	<p class="label">名</p>
                                        <p class="value"> <input type="text" id="txt2" name="txt2" value="" /></p>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                            	<th>フリガナ <span class="rq">※</span></th>
                                <td class="clear name name2">
                                	<div class="fl wrap check">
                                    	<p class="label">セイ </p>
                                        <p class="value"><input type="text" id="txt3" name="txt3" value="" /></p>
                                    </div>
                                    <div class="fl wrap check">
                                    	<p class="label">メイ </p>
                                        <p class="value"><input type="text" id="txt4" name="txt4" value="" /></p>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                            	<th>生年月日 <span class="rq">※</span></th>
                                <td class="d_o_b clear">
                                	<div class="fl year_wrap check">
                                    	<p class="label first">西暦 </p>
                                        <div class="select">
                                            <select name="select_year" class="year">
                                                <option value="">選択</option>
                                                <?php 
                                                    for($i=1900; $i<=date('Y');$i++){
                                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                                    }
                                                ?>
                                            </select>
                                            <span class="label">年</span>
                                        </div>
                                        
                                   	</div>
                                    <div class="fl check">
                                    	<div class="select">
                                            <select name="select_month" class="month">
                                                <option value="">選択</option>
                                                <?php 
                                                    for($i=1; $i<=12;$i++){
                                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                                    }
                                                ?>
                                            </select>
                                            <span class="label">月</span>
                                        </div>
                                        
                                    </div>
                                    <div class="fl check">
                                    	<div class="select">
                                            <select name="select_day" class="day">
                                                <option value="">選択</option>
                                                <?php 
                                                    for($i=1; $i<=31;$i++){
                                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                                    }
                                                ?>
                                            </select>
                                            <span class="label">日</span>
                                         </div>
                                        
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                            	<th>在籍社名 <span class="rq">※</span></th>
                                <td class="check">
                                	<input type="text" id="txt5" name="txt5" value="" />
                                </td>
                            </tr>
                            
                            <tr>
                            	<th>業種 <span class="rq">※</span></th>
                                <td class="check"><input type="text" id="txt6" name="txt6" value="" /></td>
                            </tr>
                            
                            <tr>
                            	<th>職種 <span class="rq">※</span></th>
                                <td class="check"><input type="text" id="txt7" name="txt7" value="" /></td>
                            </tr>
                            
                            <tr>
                            	<th>今後、汐留アカデミーの<br/>お知らせをメールで受け取る。 <span class="rq">※</span></th>
                                <td class="check receive_email">
                                	<label>
                                    	<input type="radio" class="receive_email_value" name="receive_email" value="yes" checked="checked" />
                                        はい
                                    </label>    
                                    <label>
	                                    <input type="radio" class="receive_email_value" name="receive_email" value="no" />
                                        いいえ
                                    </label>
                                </td>
                            </tr>
                            
                            <tr>
                            	<th>何をご覧になって<br/>アクセス頂きましたか？</th>
                                <td class="select_role check">
                                	<select name="select_role" class="select_role_value">
                                    	<option value="">下記から選択してください</option>  
                                         <option value="op1">クライスからのお知らせで</option>
                                         <option value="op2">クライスのWEBサイトで</option>
                                         <option value="op3">Facebookのお知らせで</option>
                                         <option value="op4">ご友人の紹介で</option>
                                         <option value="op5">その他</option>
                                    </select>
                                </td>
                            </tr>
                            
                            <tr>
                            	<th>メールアドレス <span class="rq">※</span></th>
                                <td class="email_address check">
                                	<input type="email" id="email" name="email" value="" />
                                </td>
                            </tr>
                        </table>
                        <p class="submit r_text">
                        	
                            <a href="#" class="submit_btn submit_event_form main_bg_color">内容確認に進む</a>
							<input type="hidden" name="event_date" class="date" value="<?php echo $year_month.' '.$day.' '.$weekday;?>" />
							<input type="hidden" name="event_title" class="event_title" value="<?php echo $title;?>" />
                            <input type="submit" name="confirmation_btn" class="hide_this confirmation_btn" value="" />
                        </p>	
                    </form>
                    
                    <!--Confirmation form-->
                    <div id="confirmation_form">
                    	<table>
                        	<tr>
                            	<th>お名前 <span class="rq">※</span></th>
                                <td class="clear name name1">
                                	
                                </td>
                            </tr>
                            
                            <tr>
                            	<th>フリガナ <span class="rq">※</span></th>
                                <td class="clear name name2">
                                	
                                </td>
                            </tr>
                            
                            <tr>
                            	<th>生年月日 <span class="rq">※</span></th>
                                <td class="d_o_b clear">
                              
                                </td>
                            </tr>
                            
                            <tr>
                            	<th>在籍社名 <span class="rq">※</span></th>
                                <td class="check txt5">
                                	
                                </td>
                            </tr>
                            
                            <tr>
                            	<th>業種 <span class="rq">※</span></th>
                                <td class="check txt6">
                                	
                                </td>
                            </tr>
                            
                            <tr>
                            	<th>職種 <span class="rq">※</span></th>
                                <td class="check txt7">
                                 	
                                </td>
                            </tr>
                            
                            <tr>
                            	<th>今後、汐留アカデミーの<br/>お知らせをメールで受け取る。 <span class="rq">※</span></th>
                                <td class="check receive_email">
                                	
                                </td>
                            </tr>
                            
                            <tr>
                            	<th>何をご覧になって<br/>アクセス頂きましたか？</th>
                                <td class="select_role check">
                                	
                                </td>
                            </tr>
                            
                            <tr>
                            	<th>メールアドレス <span class="rq">※</span></th>
                                <td class="email_address check">
                                	
                                </td>
                            </tr>
                        </table>
                         <p class="submit r_text">
                        	<a class="confirm submit_btn main_bg_color">送信</a>
                        </p>	
                    </div>
                    
                    </div> <!--end right-->
                </div> <!--form content-->	
            </div> <!--form_container-->
        </div> <!--#main_page-->
 </body>
</html>
