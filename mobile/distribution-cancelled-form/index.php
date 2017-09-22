<?php include('../inc/header.php');?>

<script type="text/javascript" src="validate_form_entry.js"></script>
<div id="container">
    <div id="wrap">
    	<div id="entry-form" class="entry-form inside">
       		<div class="container">
                <div class="notes">
                    <p>配信停止されるメールマガジンにチェックを入れメールアドレスを入力してください。</p>
                    
                </div>
                
            	<form id="submit-form" method="post" action="confirm.php">
                    <table class="form-table">
                        <tr>
                            <th>
                                配信停止コンテンツ<span class="rq">(必須)</span>
                            </th>
                            <td>
                                <div class="checkboxes-list validate">
                                    
                                    <p>
                                        <input id="chkbox1" class="checkbox" type="checkbox" name="delivery-content1" value="面接官の本音" />
                                        <label for="chkbox1">面接官の本音</label>
                                    </p>
                                    <p>
                                        <input id="chkbox2" class="checkbox" type="checkbox" name="delivery-content2" value="キャリアアップコラム" />
                                        <label for="chkbox2">キャリアアップコラム</label>
                                    </p>
                                    <p>
                                        <input id="chkbox3" class="checkbox" type="checkbox" name="delivery-content3" value="ターニングポイント" />
                                        <label for="chkbox3">ターニングポイント</label>
                                    </p>
                                </div>
                            </td>
                         </tr>
                         <tr>
                            <th>
                                <p>メールアドレス<span class="rq">(必須)</span></p>
                                <p class="rq">携帯のアドレスは登録できません</p>
                            </th>
                            <td>
                                <div class="email">
                                    <div class="main validate">
                                        <input type="email" id="text8" name="email" placeholder="半角文字でお間違いのないようご入力ください" value=""/>
                                    </div>
                                    <div class="input_other" style="margin-top: 5px">
                                        <input type="email" id="text9" name="text9" inputmode="verbatim" style="ime-mode:inactive;"
                                               placeholder="確認のためもう一度ご入力ください。" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off/>
                                    </div>
                                    <div class="clear">
                                        <span id="errortext89"></span>
                                    </div>
                                    <script type="text/javascript">
                                        jQuery(document).ready(function($) {
                                            $('#text9').bind("cut copy paste", function(e) {
                                                e.preventDefault();
                                                alert("コピー・貼り付け不可。手入力をお願いします。");
                                                $('#text9').focus();
                                                $('#text9').bind("contextmenu", function(e) {
                                                    $('#text9').focus();
                                                    e.preventDefault();
                                                });
                                            });
                                        });
                                    </script>
                                    <p style="margin-top:5px;">※携帯キャリアメール以外のアドレスをご入力ください。</p>
                                </div>
                            </td>
                         </tr>
                           
                        
                    </table>
                    <p class="center confirm-wrap">
                        <input type="submit" class="confirm-btn" value="送 信" />
                    </p>	
                </form>
				
            </div><!--.container-->
                
           
        </div> <!--entry-form-->
    	
    </div>
  
</div><!--#container-->


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
</style>


<?php include('../inc/footer.php');?>
