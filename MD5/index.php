<?php
/**
 * Created by PhpStorm.
 * User: jinda.li
 * Date: 2017/8/4
 * Time: 18:44
 */
$data = array(
    'packageName'  => 'com.idreamsky.korea.demo',
    'productId'    => 'test1',
    'token'        => 'pmiopafodmclpfpnjlmhhlga.AO-J1Ox5Vw9KAdWwuK3k04eHyltAuodQ7vUATW0LLdUktk43KUXqBn2pI7G09N7nd3RDq-qd9XL4Z_C38Zvaa8eUwSugS3xv1NC_pXJcaVTtpXBtultW0nc',
    'orderId'      => 'DD6053276034',
    'purchaseTime' => '1501828967644',
    'subscrid'     => 'DD6053276034',
);
//$data = array(
//    'packageName'  => 'com.idreamsky.korea.demo',
//    'productId'    => 'test1',
//    'token'        => 'pmiopafodmclpfpnjlmhhlga.AO-J1Ox5Vw9KAdWwuK3k04eHyltAuodQ7vUATW0LLdUktk43KUXqBn2pI7G09N7nd3RDq-qd9XL4Z_C38Zvaa8eUwSugS3xv1NC_pXJcaVTtpXBtultW0nc',
//    'orderId'      => 'DD6053276032',
//    'purchaseTime' => '1501828967644',
//    'subscrid'     => 'DD6053276032',
//);
//$sign_key = '02f1221f49bb90bc68f3';
$sign_key = '6422592d6968c87d1132';//线上御龙
$signstr = strtoupper(md5($data['packageName'] . $data['productId'] . $data['token'] . $data['orderId']
    . $data['purchaseTime'] . $data['subscrid'] . $sign_key));

echo $signstr;