<?php
include 'auth/Auth.php';

$oauth_secret_key = array(
    'oauth_consumer_key' => '67a671523a3b098cf561',
    'oauth_consumer_secret' => '6422592d6968c87d1132',
);

$oauth_consumer_secret = array(
    'oauth_token' => 'a52e453f9cb5d51c1e6fc2d8de0d6cf205987c52b',
    'oauth_secret' => '4e26672c673e7b24f87e931903e9a4eb'
);


$http_url = "http://test.zzz.feed.ids111.com:97/account/openid_sessionid";

$http_url = "http://kor-olfeed.ldoverseas.com/account/openid_sessionid";


$Fetch_request = new Fetch_request_token();


$time = time();
$headers = array('Authorization' => 'OAuth oauth_consumer_key="' . $oauth_secret_key['oauth_consumer_key'] . '", oauth_token="' . $oauth_consumer_secret['oauth_token'] . '", oauth_signature_method="HMAC-SHA1",oauth_timestamp="' . $time . '", oauth_nonce="-4076884019643538433", oauth_version="1.0"');


$param_header = $Fetch_request->get_parameter_header($headers);

$http_method = 'POST';

$params = array();


$base_string = $Fetch_request->base_string($http_method, $http_url, $param_header, $params);


$OAuthSignature = new OAuthSignatures($oauth_secret_key['oauth_consumer_secret'], $oauth_consumer_secret['oauth_secret']);


$rre = $OAuthSignature->hashsign($base_string);

var_dump(urlencode($rre));


print 'Authorization: ' . $headers['Authorization'] . ',oauth_signature="' . urlencode($rre) . '",oauth_signature_v2="' . urlencode($rre) . '"';



