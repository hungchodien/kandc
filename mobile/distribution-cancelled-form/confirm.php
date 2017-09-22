<?php include('../inc/header.php');?>

<div id="container">
<div id="content">
<?php

	if(isset($_POST)){
		//$delivery_content = $_POST['delivery-content'];
		$email = $_POST['email'];
		$confirm = $_POST['confirm-email'];
		$career_change = $_POST['career-change'];
		$indus_cat = $_POST['industry-category'];
		$job_cat = $_POST['job-category'];
		
		$_SESSION["secur-email"] = $email;

		$delivery_content1 = $_POST['delivery-content1'];
		$delivery_content2 = $_POST['delivery-content2'];
		$delivery_content3= $_POST['delivery-content3'];
	}
?>

<div id="entry-form" class="confirmation entry-form">
	<div class="container">
      	<div class="notes">
              <div class="content-asked">
                以下の内容でお間違いないかご確認いただき、「送信」をクリックしてください。<br />
                <span style="font-size:11px; color:#646464">※修正する場合には「戻る」をクリックし、内容を変更してください。</span>
             </div>
        </div>
        
        
        <div class="errors-list rq">
            <p>入力エラー:</p>
            <ul>
                <li>「メールアドレス」を入力してください。</li>
            </ul>	
            
        </div>
       <form id="confirmation-form" method="post" action="send_mail.php" autocomplete="off"> 
       	<table class="form-table">
					
					
                	<tr>
                        <th>
                            配信停止コンテンツ      
                        </th>
                        <td>
                            <div class="checkboxes-list">
                               <?php 
							  		if(!empty($delivery_content1)){
										echo '<input type="text" name="delivery-content[]" value="'.$delivery_content1.'" readonly="readonly" />';
									}
									if(!empty($delivery_content2)){
										echo '<input type="text" name="delivery-content[]" value="'.$delivery_content2.'" readonly="readonly" />';
									}
									if(!empty($delivery_content3)){
										echo '<input type="text" name="delivery-content[]" value="'.$delivery_content3.'" readonly="readonly" />';
									}
									for($i=1;$i<4;$i++):
										$col="delivery-content{$i}";
										if(!empty($_POST[$col]))
										{
											echo "<input type='hidden'  name='chkbox_select".$i."' value='0'>";
										}
										else
										{
											echo "<input type='hidden'  name='chkbox_select".$i."' value='1'>";
										}
									endfor;
								?>
                            </div>
                        </td>
                     </tr>
                     <tr>
                     	<th>メールアドレス</th>
                        <td>
                        	<input type="text" name="email" value="<?php echo $email;?>" readonly="readonly" />
                            <input type="hidden" name="confirm-email" value="<?php echo $confirm;?>" />
                        </td>
                     </tr>
                     
                     
          </table>
		
        <div class="back-confirm-wrap clear">
	
            <a class="previous-page" href="javascript:history.back(1)">Back</a>
            <input class="submit-btn" type="submit" name="Submit" value="送信">
        </div>
        </form>
   </div><!--container-->
</div><!--#entry-form-->

</div>

</div>


<style>
*{
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
}
.center{
	margin:0 auto;
	text-align:center;
}
.error{color:red;border:none;padding-top:10px;}
#entry-form .notes{
	padding:20px 0;
}
#entry-form table {
    width: 100%;
}

#entry-form table th {
    background: #f2f2f2;
}
#entry-form table th,
#entry-form table td{
	width:100%;
	display:block;
	padding:10px;
	vertical-align:middle;
}
#entry-form .confirm-wrap .confirm-btn{
	background:url("../../img/entry_question/button-confirm.png") no-repeat 0 0;
}
.email input {
    max-width: inherit;
	width:100%;
	padding:5px;
}
input[type="checkbox"] {
    display: none;
}
input[type="checkbox"] +label {
    background: url(../img/checked.png) no-repeat 0 -20px;
    width: 100%;
    padding-left:30px;
    height: 20px;
    display: block;
	margin-bottom:10px;
}
input[type="checkbox"]:checked +label {
    background-position:0 0;
}
#entry-form .confirm-wrap {
    padding: 20px 0;
}
#entry-form .confirm-wrap .confirm-btn {
    background: url(../../img/entry_question/button-confirm.png) no-repeat 0 0;
    width: 186px;
    height: 47px;
    color: transparent;
    font-size: 0;
    border: none;
    cursor: pointer;
    border-width: thin;
}
#confirmation-form input{
	display:block;
	border:none;
	margin-bottom:10px;
}

/* CSS Document */
input[type="text"],
input[type="email"],
textarea{
	padding:10px;
	margin-bottom:5px;
}
input[type="email"],
select{
	width:100%;
	padding:5px;
}

select{
	max-width:220px;
}
.rq{color:red;}
.center{
	text-align:center;
	margin:0 auto;
}
input[type="checkbox"]{ display:none; }
input[type="checkbox"] +label{
    background: url("../img/checked.png") no-repeat 0 -20px;
    width: 100%;
    padding: 2px 0 0 30px;
    height: 18px;
	display:block;
}
input[type="checkbox"]:checked +label{
	background: url("../img/checked.png") no-repeat 0 0px;
}
#entry {
	background: url("../img/entry/bg-bar.png") repeat-x scroll 0 0 transparent;
	height: 60px;
	border-bottom: 1px solid #c3a93b;
}
#entry-nav {
	margin: 0 auto;
	padding: 0 15px;
	width: 980px;
}
#entry-nav ul li {
	float: left;
}
.entry-nav-step {
	background: url("../img/entry/process-entry.png");
	width: 300px;
	height: 61px;
	display: block;
}
.entry-nav-step1 {
	background: url("../img/entry/process-entry.png");
	background-position: -300px -62px;
	width: 455px;
	height: 61px;
	display: block;
}
.entry-nav-step2 {
	background: url("../img/entry/process-entry.png");
	background-position: -770px 0px;
	width: 110px;
	height: 61px;
	display: block;
}
.entry-nav-step3 {
	background: url("../img/entry/process-entry.png");
	background-position: -877px 0px;
	width: 115px;
	height: 61px;
	display: block;
}

.entry_consent-nav-step .step_title {
    font-size: 0;
}

.entry_consent-nav-step {
    background: url("../../img/entry/process-delete-mailmagazine.png") no-repeat 0 0;
    display: block;
    height: 61px;
    width: 504px;
}

.entry_consent-nav-step1 {
    background: url("../../img/entry/process-delete-mailmagazine.png") no-repeat -514px -62px;
    display: block;
    height: 61px;
    width: 258px;
}
.entry_consent-nav-step1-none {
    background: url("../../img/entry/process-delete-mailmagazine.png") no-repeat -514px 0px;
    display: block;
    height: 61px;
    width: 258px;
}
.entry_consent-nav-step2 {
    background: url("../../img/entry/process-delete-mailmagazine.png") no-repeat -773px 0;
    display: block;
    height: 61px;
    width: 119px;
}
.entry_consent-nav-step2-active {
    background: url("../../img/entry/process-mailmagazine.png") no-repeat -773px -62px;
    display: block;
    height: 61px;
    width: 119px;
}
.entry_consent-nav-step3 {
    background: url("../../img/entry/process-mailmagazine.png") no-repeat -892px 0;
    display: block;
    height: 61px;
    width: 99px;
}
.entry_consent-nav-step3-active {
    background: url("../../img/entry/process-mailmagazine.png") no-repeat -892px -62px;
    display: block;
    height: 61px;
    width: 99px;
}


.label-asked2 {
	padding: 15px 0;
	/*border: 1px solid #D8D8D8;*/
	margin-bottom: 10px;
}



#content{
	padding:10px 0;
}
#content.complete{
	margin-top:10px;
	background:#fff;
}
#entry-form .title{
	background:#f2f2f2;
}
#entry-form .notes{
	padding:20px 0;
}
#entry-form .errors-list{
	padding-bottom:15px;
	display:none;
}
#entry-form .errors-list ul li{
	list-style:disc;
	margin-left:50px;
}
#entry-form .error{
	position:static;
	left:0 !important;
}
#entry-form .container{
	max-width:800px;
	width:100%;
	margin:0 auto;
}
#entry-form table{
	width:100%;
}
#entry-form table th,
#entry-form table td{
	border: 1px solid #D8D8D8;
    padding:10px;
    vertical-align: middle;
}
#entry-form table .checkboxes-list p{
	padding-bottom:6px;
}
#entry-form table .checkboxes-list p:last-child{
	padding-bottom:0;:
}
#entry-form table .email .confirmation{
	padding-top:10px;
}
#entry-form .confirm-wrap{
	padding:20px 0;
}
#entry-form .confirm-wrap .confirm-btn{
	background: url("../img/entry_question/button-confirm.png") no-repeat 0 0;
    width: 186px;
    height: 47px;
	color:transparent;
	font-size:0;
    border: none;
    cursor: pointer;
    border-width: thin;
}
#entry-form #confirmation-form input[type="text"]{
	width:100%;
	background:none;
	border:none;
	display:block;
}
#entry-form .back-confirm-wrap{
	padding:20px 0;
	width:180px;
	margin:0 auto;
}
#entry-form .back-confirm-wrap .previous-page,
#entry-form .back-confirm-wrap .submit-btn{
	font-size:0;
	color:transparent;
	border:none;
	width: 81px;
    height: 47px;
	display: inline-block;
	cursor:pointer;
}
#entry-form .back-confirm-wrap .previous-page{
	background: url(../../img/entry_question/button-back.png) no-repeat 0 0;
	float:left;
}
#entry-form .back-confirm-wrap .submit-btn{
	background: url(../../img/entry_question/button-send.png) no-repeat 0 0;
	float:right;
}
#entry-form .back-confirm-wrap .previous-page:hover,
#entry-form .back-confirm-wrap .submit-btn:hover,
#entry-form .confirm-wrap .confirm-btn:hover{
	background-position:0 -47px;
}

/* Footer */
#main-footer{
	background-color: rgb(1, 21, 32);
}
#footer {
    width: 980px;
    margin: 0 auto;
    padding: 20px 15px;
}
.copy, .copy a {
    font-size: 10px;
    color: #999;
}
#back-top {
    position: fixed;
    right: 20px;
    bottom: 30px;
}
</style>

<?php include('../inc/footer.php');?>