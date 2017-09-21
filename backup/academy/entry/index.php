 <div id="main_page" class="container_main_inc form_page">
        	<div class="form_container">
            	<h3 class="event_title main_color">お申し込みフォーム</h3>
                <p>※参加希望者多数の場合は、誠に申し訳ございませんが抽選となります。予め了承ください。</p>
                <p></p>
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
						            <div class="time_place">
						               <dl>
		                	                <?php if(!empty($Data_shiodome_list['shiodome_academy_time']) && $Data_shiodome_list['shiodome_academy_time']!=""): ?>
	                <dt class="label main_color">time</dt><dd><?php echo $Data_shiodome_list['shiodome_academy_time']; ?></dd>
	                						<?php endif; ?>
                                            
                                            <?php if(!empty($Data_shiodome_list['shiodome_academy_place']) && $Data_shiodome_list['shiodome_academy_place']!=""): ?>
	                <dt class="label main_color">place</dt><dd><?php echo $Data_shiodome_list['shiodome_academy_place']; ?></dd>
							                 <?php endif; ?>
		                	               	
		                 	           </dl>
						            </div>
						            
								</div>
					        </div>
							<h3 class="theme"><?php echo $Data_shiodome_list['shiodome_academy_theme']; ?></h3>
							<div class="guest">
							<?php 
                                    $g=0;
                                    for($g=0;$g<count($guest_top);$g++):
                                        echo "<p>".$guest_top[$g]['guest']."</p>";
                                    endfor;
                                ?>
                            </div>
						</div> <!--event_box-->	
			               
			        
                    </div> <!--left-->
                    <div class="right main_form fr">
                    	<form id="event_form" method="post" autocomplete="off" action="send_mail.php">
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
                                               <?php $year = 1940;
                                     $end = date("Y");
                                for ($end; $end >= $year; $end--) {
                                    ?>
                                    <option value="<?php echo $end; ?>"><?php echo $end; ?></option>
                                <?php } ?>
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
                            	<th>何をご覧になって<br/>アクセス頂きましたか？</th>
                                <td class="select_role check">
                                	<select name="select_role" class="select_role_value">
                                    	<option value="">下記から選択してください</option>  
                                        <option value="クライスからのお知らせで">クライスからのお知らせで</option>
                                        <option value="クライスのWEBサイトで">クライスのWEBサイトで</option>
                                        <option value="Facebookのお知らせで">Facebookのお知らせで</option>
                                        <option value="ご友人の紹介で">ご友人の紹介で</option>
                                        <option value="その他">その他</option>
                                    </select>
									<div class="other_content">
										<p>※具体的にお教えください（50文字以内）</p>
										<textarea id="other_opinion" name="other_opinion"></textarea>
									</div>
                                </td>
                            </tr>
                            
                            <tr>
                            	<th>メールアドレス <span class="rq">※</span></th>
                                <td class="email_address check">
                                	<input type="email" id="email" name="email" value="" />
                                </td>
                            </tr>
                            <tr>
								<th>電話番号 <span class="rq">※</span></th>
								<td class="check">
									<input type="text" id="phone_number" name="phone" value="" />
								</td>
                            </tr>
                        </table>
                        
                        
                        
                        <p style="padding-top:15px;">汐留アカデミーにお申込みいただきますと、今後の開催情報のお知らせをメールで送らせていただきます。</p>
                        <p class="submit r_text">
                        	
                            <a href="#" class="submit_btn submit_event_form main_bg_color">内容確認に進む</a>
							<input type="hidden" name="event_date" class="date" value="<?php echo date('Y M d',strtotime($date_shiodome_top));?>" />
							<input type="hidden" name="event_title" class="event_title" value="<?php echo $Data_shiodome_list['shiodome_academy_theme']; ?>" />
							<input type="hidden" name="time" class="" value="<?php echo $Data_shiodome_list['shiodome_academy_time']; ?>" />
							<input type="hidden" name="place" class="" value="<?php echo $Data_shiodome_list['shiodome_academy_place']; ?>" />
                            <input type="button" name="confirmation_btn" class="hide_this confirmation_btn" value="" />
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
                            	<th>何をご覧になって<br/>アクセス頂きましたか？</th>
                                <td class="select_role check">
                                	
                                </td>
                            </tr>
                            
                            <tr>
                            	<th>メールアドレス <span class="rq">※</span></th>
                                <td class="email_address check">
                                	
                                </td>
                            </tr>
							<tr>
								<th>電話番号 <span class="rq">※</span></th>
								<td class="check phone_number">
									
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