<?php
//$json = '{
//    "status" : 0,
//    "detail" : "0000",
//    "message" : "successfully verified",
//    "count" : 1,
//    "product" : [{
//        "log_time" : "20120321154451",
//        "appid" : "OA12345678",
//        "product_id" : "0900012345",
//        "charge_amount" : 1000,
//        "tid" : "201012226_01047637315_00000239",
//        "detail_pname" : "custom product name",
//        "bp_info" : "X"}]
//}';
//
//
//$a = json_decode($json, true);
//
//var_dump($a);

$a = array(
    'appid' => 'OA00718081',
    'txid' => 'TX_00000000492107',
    'signdata' => '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',
);

echo json_encode($a);