<?php 
	set_time_limit(0);
	//@include('Lib/_init.php');
	//@include('../Lib/_init.php');
	//@include('../../Lib/_init.php');
	include('../../Lib/config.php');
	include('../../Lib/connect.php');
	include('../../Lib/function/function.query.php');
	
	//@include('../../../../Lib/_init.php');
	$order_id=$_GET['order_id'];
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	$browser_cp=$_SERVER['HTTP_USER_AGENT'];
	if(isset($_POST['url_request'])):
	$user_url=addslashes($_POST['url_request']);
	endif;
	if(isset($_POST['order_id'])):
	$order_convert=(int)$_POST['order_id'];
		if($order_convert>0):
			$order_id="【求人ID】: ".$order_convert;
		else:
			$order_id=addslashes($_POST['order_id']);
		endif;
	endif;
	
	$userAgentNote="";
	
	$country_user_json = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
	$country_user=$country_user_json->country; // -> "VN"\
	$country_user_city=$country_user_json->city; //Ha Noi
	$country_user_network=$country_user_json->org; // AS7552 Viettel Corporation
	$country_user_hotname=$country_user_json->hostname; //adsl.viettel.vn
	$datas = array(
							"userAgentName" => $order_id,
							"userAgentURL" => $user_url,
							"userAgentIP" => $ip,
							"userAgentPC" => $browser_cp,
							"userAgentcountry" => $country_user,
							"userAgentcity" => $country_user_city,
							"userAgentnetwork" => $country_user_network,
							"userAgenthotname " => $country_user_hotname,
							"userAgentNote"=> $userAgentNote,
							"userAgentStatus"=> 0,
							"userAgentDate" => "now()|||int"
						);
	$res = MK_Datas($datas, "insert", "useragent_top","Y");
	exit();
	//$sql="insert into useragent set {$datas}";
	//echo $country_user_hotname;
?>