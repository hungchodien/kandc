<?php 
	/*********************************************************************/
			/*email: Shiodome*/
			
			$admin_name="株式会社クライス＆カンパニー";
			//$admin_email="kreis-19931104@kandc.com";
			$admin_email="soomin@tokyodesignroom.com";

			$admin_subject="Shiodome Entry Form";
			$domain="https://kandc.com/academy";
			
			$user_subject="お申し込みありがとうございます。（自動返信メール）";
			
			
$user_content =
"{txt1} {txt2} 様\r\n
			
この度は汐留アカデミーへのお申し込みありがとうございます。\r\n
			
お申し込み多数の場合は抽選とさせていただきますため、<br>
一旦こちらで仮のお申込みをお受けいたしました。\r\n
			
残席を確認の上、改めてこちらからご連絡させていただきます。<br>
今しばらくお待ち下さい。\r\n
			
尚、1週間を経過しても弊社からの連絡がない場合は、<br>
ご連絡先の誤入力の可能性がございますので、 <br>
大変お手数ではございますが下記までご一報頂けますと幸いです。\n
			
			
株式会社クライス＆カンパニー<br>
汐留アカデミー事務局<br>
------------------------------------------------<br>
email：kreis-info@kandc.com<br>
URL：http://www.kandc.com/academy/<br>
TEL：03-5733-1602<br>
------------------------------------------------<br>
〒105-0021　東京都港区東新橋2-4-1 サンマリーノ汐留2F<br>
------------------------------------------------\r\n
"."<br/>"."http://".$_SERVER['SERVER_NAME']."/academy";
	/**********************************************************************/
?>