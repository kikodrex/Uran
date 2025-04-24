<?php
require 'function.php';
error_reporting(0);

function GetStr($string, $start, $end){
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}
extract($_GET);
$p = explode(":", $_GET['proxy']);
$portcheck = @fsockopen($p[0], $p[1], $errno, $errstr, 5);
if(isset($_GET['proxy'])){
}else{
exit();
}

$user_agent = random_ua();
############################################################################################################################################
############################################################################################################################################
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_USERPWD, 'sk_test_0MToxCsK7Hlg5BAo455ttDRy00A7CbWaz6' . ':' . '');
curl_setopt($ch, CURLOPT_PROXY, trim($_GET['proxy']));
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/coo.txt');
//curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/coo.txt');
curl_setopt($ch, CURLOPT_ENCODING, "gzip");

//$headers = array();
//$headers[] = 'accept: application/json';
//$headers[] = 'Content-Type: application/json';
//$headers[] = 'Host: api.braintreegateway.com';
//$headers[] = 'Origin: https://www.thetiebar.com';
//$headers[] = 'Referer: https://assets.braintreegateway.com/web/3.32.0/html/hosted-fields-frame.min.html';
//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[number]=4486678887472544&card[exp_month]=10&card[exp_year]=2024&card[cvc]=516');
$first = curl_exec($ch);
$message = trim(strip_tags(getStr($first, '"nonce":"','"')));
#================================================================CONDITION RESPONSE========================================================#
if (strpos($first, 'id')){
echo '<p><span class="badge badge-success">'.$_GET['proxy'].'</span> : <span class="badge badge-warning">SOCKS5</span></p>';
fwrite(fopen("ppsocks5.txt", 'a'), $_GET['proxy']."\n");
}
elseif(is_resource($portcheck)){
fclose($portcheck);
echo '<p><span class="badge badge-danger">'.$_GET['proxy'].'</span> : <span class="badge badge-warning">TIMEOUT</span></p>';
}else{
echo '<p><span class="badge badge-danger">'.$_GET['proxy'].'</span> : <span class="badge badge-warning">ERROR!</span></p>';
}
curl_close($ch);
ob_flush();
sleep(1);
?>