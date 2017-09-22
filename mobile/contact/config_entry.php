<?php
/*********************************************************************/
/*email: contact*/

$admin_name="株式会社クライス＆カンパニー";
//$admin_email="nhuminh_ckx2005@yahoo.com";
//$admin_email="khanhngn@gmail.com";
//$admin_email="soomin@tokyodesignroom.com";
//$admin_email="kreis-19931104@kreisandcompany.sakura.ne.jp";
$admin_email="kreis-19931104@kandc.com";
$user_subject="お問合せありがとうございます。（自動返信メール）";
$admin_subject="MS問い合せ";
$domain="http://kandc.com/entry/contact";
$user_content =
    "{USER_NAME} 様\r\n

この度は当社にお問合せ頂きまして誠にありがとうございます。\r\n

ご質問頂きました件に関しましては、折り返しご返答させて<br>
頂きますので今しばらくお待ちください。\r\n

よろしくお願いいたします。\n


株式会社クライス＆カンパニー<br>
------------------------------------------------<br>
Email：kreis-info@kandc.com<br>
URL：http://www.kandc.com/<br>
TEL：03-5733-1602　  FAX：03-5733-0055<br>
------------------------------------------------<br>
〒105-0021　東京都港区東新橋2-4-1 サンマリーノ汐留2F<br>
------------------------------------------------\r\n
"."<br/>"."http://".$_SERVER['SERVER_NAME']."/entry/contact";
/**********************************************************************/

?>