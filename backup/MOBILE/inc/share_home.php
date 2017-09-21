<script src="<?php echo url_root; ?>js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>css/jquery.mCustomScrollbar.css" media="all" />
<script type="text/javascript">

		/*(function($){
			$(window).load(function(){
				$("#scrollbar1").mCustomScrollbar({
					scrollButtons:{
						enable:true
					}
				});
			});
		})(jQuery);*/
	
</script>

<script type="text/javascript">
	$( document ).ready(function() {
		
		
		$("a.share_tbn_click").click(function(){
				$(".dark_overlay").show();
				$(".form_send_mail_share").hide();
				$(".main_button_share").show("slow");
		})
 		$("a.send_mail_share").click(function(){
				$(".dark_overlay").show();
				$(".main_button_share").hide();	
				$(".form_send_mail_share").show("slow");
				$(".form_send_mail_share").css('height',$("#scrollbar1").height());
				$(window).scrollTop(20);
				//$('#scrollbar1').mCustomScrollbar("update");
			
			})
			
		$("#tbl_submit_send").click(function(){
			
				$("#send_mail_job").submit(function(e) {
					var email = $("#to_send").val();    
					var postData = $(this).serializeArray();
					var formURL = $(this).attr("action");
					$.ajax(
					{
						url : formURL,
						type: "POST",
						data : postData,
						beforeSend : function (){
							 return checkEmail(email);
							$(".form_send_mail_share").html("");
						},
						success:function(data, textStatus, jqXHR) 
						{
							$(".form_send_mail_share").html(data);
							$(".dark_overlay").show();
							$(".form_send_mail_share").hide();
							$(".main_button_share").show("slow");
							alert("Send mail complete. Thank you!");
						},
						error: function(jqXHR, textStatus, errorThrown) 
						{
						}
					});
					e.preventDefault();	//STOP default action
				
				});	
			
				$("#send_mail_job").submit();
			
			})	
			
			
			
			
			
	});
	function Close_button(){
			$(".dark_overlay").hide();
			$(".main_button_share").hide();
			$(".form_send_mail_share").hide();
			$('body,html').animate({
				scrollTop: $("#share_button_public_scroll").offset().top
				}, 800);
			return false; 
		}
	function Close_button_form(){
			$(".dark_overlay").show();
			$(".main_button_share").show();
			$(".form_send_mail_share").hide();
		}
	function checkEmail($email){
		var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

		if (filter.test($email)) {
			return true;
			//$(".form_send_mail_share").html("Please Waiting..");
		}else {
			alert("Not a valid e-mail address");
			$("#to_send").focus();
			$("#to_send").addClass("error");
			return false;
	
		}

	}

</script>

<div class="related-employ-duty share_tbn clear" id="share_button_public_scroll" > 
		   <div class="fr share_button_public">
		   		<a href="mailto: ?subject=testing out mailto&body=Just testing&cc=test1@example.com&bcc=test1@example.com">シェアする</a> 
		   </div>
</div>
<!--<div class="related-employ-duty share_tbn clear" id="share_button_public_scroll" > 
		   <div class="fr share_button_public"> 
						<a href="javascript:void(0);" class="share_tbn_click">
							シェアする
						</a> 
			</div>
	</div>-->



<div class="group_button_share clear">
	<div class="main_button_share clear">
		<div class="body_button_share clear">
			<div class="top_button_share clear">
				<div class="fl"><h3>Share Object</h3></div>
				<div class="fr">
				<a href="javascript:void(0);" onclick="Close_button();">
					<img src="<?php echo url_root; ?>img/test_close.png" border="0" alt="閉じる" />
				</a></div>
			</div>
			<div class="item_list_share clear">
				<ul class="clear">
				<?php 
					$http=str_replace("https","http",curPageURL());
					$http=str_replace(":443","",$http);
					//$http=str_replace("mobile/","",$http);
					$title=$row_job['job_name'];
					$sumany=$row_job['job_description'];
					//echo $http;
				?>
					<li><a href="javascript:void(0);" class="send_mail_share">-E-mail</a></li>
					<li>
	<a target="_blank" href="http://www.facebook.com/sharer.php?m2w&s=100&p[title]=<?php echo $title; ?>&p[url]=<?php echo $http ?>&p[summary]=<?php echo $sumany; ?>&p[images][0]=<?php echo url_root; ?>">-Facebook</a>
				</li>
					<li>
				<a target="_blank" href="<?php echo $protocol; ?>//twitter.com/share?text=<?php echo $title; ?>&url=<?php echo $http; ?>&hashtags=<?php echo $sumany; ?>">-Twitter</a></li>
					<li>
				<a  target="_blank" href="<?php echo $protocol; ?>//plus.google.com/share?url=<?php echo $http; ?>">-Google+</a></li>
					<li>
				<a target="_blank" href="<?php echo $protocol; ?>//www.evernote.com/clip.action?url=<?php echo $http; ?>&title=<?php  echo $row_job['job_name']; ?>">-Evernote</a>
					</li>
				</ul>
			</div>
			
		</div>
	</div>
	
	<div class="form_send_mail_share clear">
		<div class="form_share clear"  id="scrollbar1">
		<!--Send mail-->
		<div class="button_close_email">
		<a href="javascript:void(0);" onclick="Close_button_form();">
					<img src="<?php echo url_root; ?>img/test_close.png" border="0" alt="閉じる" />
				</a>
		</div>
		<form name="send_mail" method="post" id="send_mail_job" enctype="multipart/form-data" action="<?php echo url_root; ?>sendmail/index.php">
			<p><b>To:</b><input type="text" name="to_send" id="to_send"/></p>
			<p id="email_error"></p>
			<p><b>Subject: </b> <span class="subject_title">Kreis job info</span><input type="hidden" name="subject_send" value="Kreis job info" id="subject_send" readonly></p><br />
			<p><b>Content:</b><br/>
			<p style="overflow-x:hiden;">
----------------------------------------------------------------------<br/>			
<b>【URL Job】</b>     <?php echo curPageURL(); ?><br/>
<b>【勤務地】</b>       <?php echo  $row_job['address_1_prefecture']; ?><?php echo  $row_job['address_1_city']; ?><br/>
<b>【想定年収】</b>      <?php
					$salary_max=$row_job['salary_max'];
					$salary_min=$row_job['salary_min'];
					
					if((int)$row_job['salary_max'] >0): 
						$salary_max="～".$row_job['salary_max']."万円程度";
						else:
						$salary_max="-";
					endif;
					if((int)$row_job['salary_min'] >0): 
						$salary_min=$row_job['salary_min']."万円";
						else:
						$salary_min="-";
					endif;
					
					if((int)$row_job['age_min'] >0): 
						$age_min=$row_job['age_min'];
						else:
						$age_min="-";
					endif;
					
					if((int)$row_job['age_max'] >0): 
						$age_max=$row_job['age_max'];
						else:
						$age_max="-";
					endif;
					
					//if($salary_max!=""): $salary_max =" ～ ".$row_job['salary_max']."万円程度"; endif;
					//if($salary_min!=""): $salary_min=$row_job['salary_min']."万円"; endif;
					 echo $age_min."～".$age_max."才&nbsp;".$salary_min.$salary_max;
					 ?> <br/>
.
----------------------------------------------------------------------  <br/> 
<b>- 募集要項</b> <br/>    
----------------------------------------------------------------------<br/>
<b>【職務内容】</b>        <?php echo $row_job['job_description']; ?> <br/>

<b>【求めるスキル(必要条件)】 </b>  <?php echo $row_job['needed_skill']; ?><br/>
<b>【英語レベル】  </b>   <?php 
					if(!empty($row_job['english_level'])):
						echo $row_job['english_level']."&nbsp;."; 
						if(!empty($row_job['toeic'])):
							echo "Toeic:&nbsp;".$row_job['toeic'];
						endif;
					else:
						echo "---";
					endif;
					?><br/>
<b>【求める人物像】</b>     <?php echo $row_job['desired_person']; ?><br/>
<b>【活かせる経験】</b>     <?php echo $row_job['experience']; ?> <br/>
<b>【学歴】</b>           <?php echo $row_job['education']; ?><br/>
<b>【募集背景】</b>        <?php echo $row_job['reason']; ?> <br/>
.
----------------------------------------------------------------------<br/>
<b>- 企業情報</b><br/>
----------------------------------------------------------------------<br/>
<b>【事業内容】</b>        <?php echo $row_job['company_info']; ?><br/>
<b>【設立年月】</b>        <?php 
						if((int)$row_job['founded_year']>0):
							echo $row_job['founded_year']."年";
							else:
							echo "-"; 
						endif;
					?><?php 
						if((int)$row_job['founded_month']>0):
							echo $row_job['founded_month']."月"; 
							else:
							echo "-";
						endif;
					?><br/>
<b>【資本金】</b>         <?php
					$row_capital=(int)$row_job['capital'];
					if($row_capital>0):
						 echo number_format($row_job['capital'])."万円 "; 
					else:
					echo "---";
					endif;
					 //echo number_format($row_job['capital']); 
					 
					 ?><br/>
<b>【従業員数】</b>	    <?php $count_employee_conver= (int)$row_job['employee_count'];
						if($count_employee_conver>0):
						echo $count_employee_conver."&nbsp;人";
						else:
						echo "---";
						endif;
					 ?><br/>
.
<b>【本社所在地】</b>		<?php echo $row_job['company_address_prefecture']; ?><br/>

----------------------------------------------------------------------<br/>
.
website: <i>http://kandc.com</i><br/>
----------------------------------------------------------------------<br/>
			</p>
			<input type="hidden" name="job_name" value="<?php  echo $row_job['job_name']; ?>" />
			<input type="hidden" name="url_job" value="<?php echo curPageURL(); ?>" />
		<input type="hidden" name="address_city" value="<?php echo  $row_job['address_1_prefecture']; ?><?php echo  $row_job['address_1_city']; ?>" />
			<input type="hidden" name="salary_job" value="<?php echo $age_min."～".$age_max."才&nbsp;".$salary_min.$salary_max; ?>" />
			<input type="hidden" name="job_description" value="<?php echo $row_job['job_description']; ?> " />
			<input type="hidden" name="needed_skill" value="<?php echo $row_job['needed_skill']; ?>" />
			<input type="hidden" name="english_level" value="<?php 
					if(!empty($row_job['english_level'])):
						echo $row_job['english_level']."&nbsp;."; 
						if(!empty($row_job['toeic'])):
							echo "Toeic:&nbsp;".$row_job['toeic'];
						endif;
					else:
						echo "---";
					endif;
					?>" />
			<input type="hidden" name="founded_year" value="<?php 
						if((int)$row_job['founded_year']>0):
							echo $row_job['founded_year']."年";
							else:
							echo "-"; 
						endif;
					?><?php 
						if((int)$row_job['founded_month']>0):
							echo $row_job['founded_month']."月"; 
							else:
							echo "-";
						endif;
					?>" />
			<input type="hidden" name="capital" value="<?php
					$row_capital=(int)$row_job['capital'];
					if($row_capital>0):
						 echo number_format($row_job['capital'])."万円 "; 
					else:
					echo "---";
					endif;
					 //echo number_format($row_job['capital']); 
					 
					 ?>" />
			<input type="hidden" name="employee_count" value="<?php $count_employee_conver= (int)$row_job['employee_count'];
						if($count_employee_conver>0):
						echo $count_employee_conver."&nbsp;人";
						else:
						echo "---";
						endif;
					 ?>" />
					 

			<input type="hidden" name="desired_person" value="<?php echo $row_job['desired_person']; ?> " />
			<input type="hidden" name="experience" value="<?php echo $row_job['experience']; ?> " />
			<input type="hidden" name="education" value="<?php echo $row_job['education']; ?> " />
			<input type="hidden" name="reason" value="<?php echo $row_job['reason']; ?> " />
			<input type="hidden" name="company_info" value="<?php echo $row_job['company_info']; ?>" />
			
			<input type="hidden" name="company_address_prefecture" value="<?php echo $row_job['company_address_prefecture']; ?>" />
			
			<input type="hidden" name="website_main" value="<?php echo url_root; ?>" />
			
			
			
			
			<!--
			<input type="hidden" name="job_description" value="<?php //echo $row_job['job_description']; ?>" />
			<input type="hidden" name="company_info" value="<?php //echo $row_job['company_info']; ?>" />
			<input type="hidden" name="company_info" value="<?php //echo $row_job['company_info']; ?>" />
			<input type="hidden" name="company_info" value="<?php //echo $row_job['company_info']; ?>" />
			<input type="hidden" name="company_info" value="<?php //echo $row_job['company_info']; ?>" />-->
			
			
		</p>
			<div class="input_submit_form"><input type="button" value="Send" name="frm_submit" id="tbl_submit_send"/></div>	
		</form>
		</div>
	</div>
	
	<div class="dark_overlay clear"></div>
</div>

