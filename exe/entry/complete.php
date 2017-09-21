<script language="javascript" type="text/javascript">
		jQuery( document ).ready(function($) {
			
			$( "body" ).addClass( "entry_page" );

		});
</script>
<?php
	if ($protocol == 'http:' || $protocol =='HTTP:'){
			$entry_protocol = str_replace('http', 'https', curPageURL_fix() );
			header('Location:'.$entry_protocol);
		}
?>
<div class="breadcrumb" id="breadcrumb_top">
		<ul class="clear">
        	<li><a href="<?php echo url_root; ?>">クライス＆カンパニー</a></li>
            <li> &gt; </li>
            <li><a href="<?php echo url_root; ?>entry.html">エントリー</a></li>
            <li> &gt; </li>
            <li><a href="<?php echo url_root; ?>entry/confirm.html">内容確認</a></li>
            <li> &gt; </li>
            <li>完了</li>
         </ul>
</div><!--breadcrumb_top-->
<div class="bg_entry_fix clear">

	<div class="clear title_form_header ">
            
            <!--<div class="icon_title_entry_en clear"><img src="<?php echo url_root; ?>img/entry/en_complete_title.png"  alt="thanks"/></div>-->
            <div class="icon_title_entry_ja clear"><img src="<?php echo url_root; ?>img/entry/jp_complete_title.png" alt="エントリーありがとうございます。"/></div>
        </div><!--title_form_header-->

    <div class="clear content_inc entry_form complate_form">
            <div class="content_form_fist clear">
            	　
                <p class="tc1"> エントリーありがとうございます。<br>EXECUTIVEチームからご連絡させて頂きますので、いましばらくお待ちください。 <br><br>尚、1週間以内に 弊社からの連絡がない場合は、ご連絡先の誤入力の可能性がございますので、 大変お手数ではございますが下記までご一報頂けますと幸いです。<br><br><br></p>
               
                
                <p class="tc3">お問合せ</p>
                <p class="tc4">TEL 03-5733-2684</p>
                <p class="tc5">Email<a href="mailto:exe@kandc.com"> exe@kandc.com</a></p>
            </div><!--content_form_fist-->
       
         
       
        
         
     
     
        
        
    </div>
</div>

<div class="breadcrumb clear">
   		
         <div id="back_top">
    		<a href="#top"><img alt="Page Top" src="<?php echo url_root; ?>img/home/page_top.png"></a>
		</div>
</div>


<!-- Yahoo Code for your Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var yahoo_conversion_id = 1000240003;
var yahoo_conversion_label = "JKXHCJqWwF8QgvPtvgM";
var yahoo_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="https://s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="https://b91.yahoo.co.jp/pagead/conversion/1000240003/?value=0&amp;label=JKXHCJqWwF8QgvPtvgM&amp;guid=ON&amp;script=0&amp;disvt=true"/>
</div>
</noscript>


