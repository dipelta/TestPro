<?php
include 'auth/Auth.php';

$oauth_secret_key = array(
    'oauth_consumer_key' => '8fee977f5ba1244dc4f1',
    'oauth_consumer_secret' => '02f1221f49bb90bc68f3',
);

$oauth_consumer_secret = array(
    'oauth_token' => '123a44f50037ca047fd11263a0df5f5d05a212815',
    'oauth_secret' => 'e42191e8c0abbc974d78911f7a7dc49a'
);


//测试地址
//$api = "http://secure.overseas.ids111.com";

//沙盒
$api = "http://usa-sb-secure.ldoverseas.com";
//$api = "http://cm.asia.secure.me";

//线上地址


$url = "/oauth/authenticate";

echo $api . $url . '<br>';


$Fetch_request = new Fetch_request_token();
$time = time();
$head_test_arr = array(
    'oauth_consumer_key' => $oauth_secret_key['oauth_consumer_key'],
    'oauth_token' => $oauth_consumer_secret['oauth_token'],
    'oauth_timestamp' => $time,
    'oauth_nonce' => '58111111-FA79-4A52-BB44-4E376CC0C624',
    'oauth_signature_method' => 'HMAC-SHA1',
    'oauth_version' => '1.0',
);


$head_test_str = '';
foreach ($head_test_arr as $key => $val) {
    $head_test_str .= $key . '=' . '"' . $val . '",';
}

//var_dump($head_test_str);
$head_test_str = 'OAuth ' . $head_test_str;
$head_test_str = substr($head_test_str, 0, -1);

//var_dump($head_test_str);

$headers_test = array(
    'Authorization' => $head_test_str
);

//var_dump($headers_test);

$param_header = $Fetch_request->get_parameter_header($headers_test);

//var_dump($param_header);

$http_method = 'POST';
$http_url = $api . $url;
$params = array();


$base_string = $Fetch_request->base_string($http_method, $http_url, $param_header, $params);

var_dump($base_string);

$OAuthSignature = new OAuthSignatures($oauth_secret_key['oauth_consumer_secret'], $oauth_consumer_secret['oauth_secret']);


$rre = $OAuthSignature->hashsign($base_string);

var_dump(urlencode($rre));

print 'Authorization: ' . $headers_test['Authorization'] . ',oauth_signature="' . urlencode($rre) . '"';




