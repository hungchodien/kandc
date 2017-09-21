<?php 
	ob_start();
?>
<?php 

function To_Send_Mail($fname, $fmail, $to, $subject, $content, $type=1, $file="", $cc="", $bcc="", $charset="iso-2022-jp"){

	mb_language("ja");
	mb_internal_encoding("UTF-8");

	$cf['charset'] = (!$charset) ? "iso-2022-jp" : "utf-8";

//	$fname   = "=?$cf[charset]?B?" . base64_encode($fname) . "?=";
//    $subject = "=?$cf[charset]?B?" . base64_encode($subject) . "?=";
	$fname   = mb_encode_mimeheader(mb_convert_encoding($fname,"ISO-2022-JP","AUTO"));
    $header  = "Return-Path: <$fmail>\n";
    $rn = "\r\n";
    $header .= "From:".$fname."<".$fmail.">".$rn;
    $header .= "Reply-To:".$fname."<".$fmail.">".$rn;
    if ($cc)  $header .= "Cc: $cc\n";
    if ($bcc) $header .= "Bcc: $bcc\n";
   $header .= "MIME-Version: 1.0\r\n";

    // UTF-8 ê´€ë ¨ ìˆ˜ì •
    $header .= "X-Mailer: SIR Mailer 0.92 (sir.co.kr) : $_SERVER[SERVER_ADDR] : $_SERVER[REMOTE_ADDR] : $g4[url] : $_SERVER[PHP_SELF] : $_SERVER[HTTP_REFERER] \n";

    if ($file != "") {
        $boundary = uniqid("http://sir.co.kr/");

        $header .= "Content-type: MULTIPART/MIXED; BOUNDARY=\"$boundary\"\n\n";
        $header .= "--$boundary\n";
    }

    if ($type) {
        $header .= "Content-Type: TEXT/HTML; charset=$cf[charset]\n";
        if ($type == 2)
            $content = nl2br($content);
    } else {
        $header .= "Content-Type: TEXT/PLAIN; charset=$cf[charset]\n";
        $content = stripslashes($content);
    }
    //$header .= "Content-Transfer-Encoding: BASE64\n\n";
	$header .= "Content-Transfer-Encoding: 7bit\n\n";
    //$header .= chunk_split(base64_encode($content)) . "\n";
	$header .=  preg_replace("/(<br\s*\/?>\s*)+/","\r\n",mb_convert_encoding($content, "ISO-2022-JP","AUTO")) . "\n";

    if ($file != ""){
	
		$count_file=count($file);
		if($count_file==1){
			$file_cut=explode("(nhuminh_ckx)",$file[0]);
			$filename=$file_cut[0];
			$filecontent=$file_cut[1];
			$header .= "--$boundary\r\n";
			$header.= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
			$header .= "Content-Transfer-Encoding: base64\r\n";
			$header .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
			$header .= $filecontent."\r\n\r\n";
			
		}
		else
		{
		
        foreach ($file as $f) {
			//format $file= arrar(namefile(nhuminh_ckx)content,namefile1(nhuminh_ckx)content2)
			$file_cut=explode("(nhuminh_ckx)",$f);
			$filename=$file_cut[0];
			$filecontent=$file_cut[1];
			
			/*$fp = @fopen($f, "r");
			$attach_file = @fread($fp, filesize($f));
			@fclose($fp);*/

			/*$header .= "--$boundary\r\n";
			$header.= "Content-Type: ".mime_type($f)."; name=\"".basename($f)."\"\r\n";
			$header .= "Content-Transfer-Encoding: base64\r\n";
			$header .= "Content-Disposition: attachment; filename=\"".basename($f)."\"\r\n\r\n";
			$header .= base64_encode($attach_file)."\r\n\r\n";*/
			
			$header .= "--$boundary\r\n";
			$header.= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
			$header .= "Content-Transfer-Encoding: base64\r\n";
			$header .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
			$header .= $filecontent."\r\n\r\n";
			
			//$header .= mb_convert_encoding(base64_encode($attach_file), "ISO-2022-JP","AUTO")."\r\n\r\n";
          }


	  }
            $header .= "--$boundary--\n";
   }
    //@mail($to, $subject, "", $header);
	@mb_send_mail($to, $subject, "", $header);
}


function mime_type($f){
	$f = escapeshellarg($f);
	return trim( `file -bi $f` );
}

function Age_from_birth($my_date)
{

$my_date = strtotime($my_date);
$year = date('Y', $my_date);

if (($m = (date('m') - date('m', $my_date))) < 0) {
$year++;
} elseif ($m == 0 && date('d') - date('d', $my_date) < 0) {
$year++;
}
function get_client_ip() 
 {
      $ipaddress = '';
      if (getenv('HTTP_CLIENT_IP'))
          $ipaddress = getenv('HTTP_CLIENT_IP');
      else if(getenv('HTTP_X_FORWARDED_FOR'))
          $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
      else if(getenv('HTTP_X_FORWARDED'))
          $ipaddress = getenv('HTTP_X_FORWARDED');
      else if(getenv('HTTP_FORWARDED_FOR'))
          $ipaddress = getenv('HTTP_FORWARDED_FOR');
      else if(getenv('HTTP_FORWARDED'))
          $ipaddress = getenv('HTTP_FORWARDED');
      else if(getenv('REMOTE_ADDR'))
          $ipaddress = getenv('REMOTE_ADDR');
      else
          $ipaddress = 'UNKNOWN';

      return $ipaddress; 
 }
return date('Y') - $year;
}
function get_readfile($file) {
	if (!file_exists($file)) return "";
	$f = @fopen($file, "r");
	$str = fread($f, filesize($file));
	fclose($f);

	return $str;
}

function ticonv($str, $ochar="utf-8", $tchar="ISO-2022-JP"){
	return iconv($ochar, $tchar, $str);
}
function clearBrowserCache() {
    header("Pragma: no-cache");
    header("Cache: no-cache");
    header("Cache-Control: no-cache, must-revalidate");
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
}

?>