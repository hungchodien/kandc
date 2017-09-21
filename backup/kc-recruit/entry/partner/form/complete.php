<?php include('../../../inc/header.php'); ?>
<?php 
	if ($protocol == 'http:' || $protocol =='HTTP:'){
    $entry_protocol = str_replace('http', 'https', curPageURL() );
    header('Location:'.$entry_protocol);
	}
?>

<script type="text/javascript"> 
$( document ).ready(function() { 
	var height_body_content=$(window).height()-65 -69; 
	$(".body_content").css('height',+ height_body_content); 
}); 
</script>

<div id="wrapper" class="wrapper_entry clear">
<div class="content_top"></div>
     <div class="inside">
    <div class="body_content clear">
	<div class="content_entry_recurit clear">
    
    
    <div id="entry-form" class="entry-form">
    <form action="#" method="post">
    
    <!--************************************************-->
    <div class="form-personal-profile clear" style="width:720px; margin:80px auto 60px;">
        <h3 class="work_block_title fz24 clear">ご応募ありがとうございます。</h3>
        <div class="thank-for-you">
            <p>書類選考の上、1週間以内に採用担当よりご連絡させて頂きます。<br />
合否に関わらず必ずご連絡いたしますので、今しばらくお待ちください。<br /><br /> </p>
            <p>尚、1週間以内に弊社からの連絡がない場合は、ご連絡先の誤入力の可能性がございますので、大変お手数では
ございますが下記までご一報頂けますと幸いです。</p>
        </div>
        <div class="contact-personal clear">
            <div class="contact-personal-title clr">お問合せ</div>
            <div>TEL  03-5733-0050</div>
            <div>Email  <a href="mailto:recruit@kandc.com ">recruit@kandc.com</a></div>
        </div>
    </div>
       <!--************************************************-->
  
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
            <li class="bc_item"><a href="<?php echo url_root; ?>entry/partner/">コンサルタントパートナー</a></li>
             <li class="bc_item"><a href="<?php echo url_root; ?>entry/partner/form">応募フォーム</a></li>
             <li class="bc_item">内容確認</li>
            <li>完了</li>
        </ul>
    </div>
<?php include('../../../inc/footer.php'); ?>