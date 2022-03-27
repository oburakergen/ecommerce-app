<?php


function queryCredits($username, $password): bool|string
{
//    $username="xxxx"; // https://oim.verimor.com.tr/sms_settings/edit adresinden öğrenebilirsiniz.
//    $password=urlencode("xxxx"); // https://oim.verimor.com.tr/sms_settings/edit adresinden belirlemeniz gerekir.
    $url= "http://sms.verimor.com.tr/v2/balance?username=$username&password=$password";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $http_response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if($http_code != 200){
        echo "$http_code $http_response\n";
        return false;
    }

    $balance = $http_response; // 4532
    echo "Mevcut krediniz: $balance";
    return $balance;
}

//
//function sendSMS($header, $message, $phones, $username, $password){
//    $sms_msg = array(
//    "username" => $username, // https://oim.verimor.com.tr/sms_settings/edit adresinden öğrenebilirsiniz.
//    "password" => $password, // https://oim.verimor.com.tr/sms_settings/edit adresinden belirlemeniz gerekir.
//    "source_addr" => $header, // Gönderici başlığı, https://oim.verimor.com.tr/headers adresinde onaylanmış olmalı, değilse 400 hatası alırsınız.
////    "valid_for" => "48:00",
////    "send_at" => "2015-02-20 16:06:00",
////    "datacoding" => "0",
//    "custom_id" => "1424441160.9331344",
//    "messages" => array(
//        array(
//            "msg" => $message,
//            "dest" => $phones
//        )
//    )
//);
//    $ch = curl_init('http://sms.verimor.com.tr/v2/send.json');
//    curl_setopt_array($ch, array(
//        CURLOPT_POST => TRUE,
//        CURLOPT_RETURNTRANSFER => TRUE,
//        CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
//        CURLOPT_POSTFIELDS => json_encode($sms_msg),
//    ));
//    $http_response = curl_exec($ch);
//    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//    if($http_code != 200){
//        echo "$http_code $http_response\n";
//        return false;
//    }
//
//    return $http_response;
//}
//
//
//// SMS API ‘den PUSH gönderim raporu alımı örneği
//// Bu dosyayı sunucunuza yerleştirip https://oim.verimor.com.tr/sms_settings/edit adresinden PUSH URL olarak ayarlayıp kullanabilirsiniz.
//$request = file_get_contents("php://input");
//$json_request = json_decode($request);
//
//// print_r($json_request);
//
//foreach($json_request as $message_status){
//    $campaign_id = $message_status->campaign_id; // 20210
//    $campaign_custom_id = $message_status->campaign_custom_id; // 1424441160.9331343
//    $message_id = $message_status->message_id; // 13582303
//    $dest = $message_status->dest; // 905319876543
//    $size = $message_status->size; // 1
//    $sent_at = $message_status->sent_at;   // 2015-02-20 16:06:10
//    $done_at = $message_status->done_at;   // 2015-02-20 16:06:10
//    $status = $message_status->status;     // DELIVERED
//    $gsm_error = $message_status->gsm_error; // 0
//
//    return "$message_id idli mesajin durumu: $status\n";
//}
//
//
//
//// SMS API ‘den HTTP GET ile gönderim raporu alımı örneği
//// Aşağıdaki örnek kodu kendinize özelleştirerek kullanabilirsiniz.
//
//function queryBatch($campaign_id="", $campaign_custom_id="", $dest="", $greater_than="")
//{
//    $username="xxxx"; // https://oim.verimor.com.tr/sms_settings/edit adresinden öğrenebilirsiniz.
//    $password=urlencode("xxxx"); // https://oim.verimor.com.tr/sms_settings/edit adresinden belirlemeniz gerekir.
//    $url = "https://sms.verimor.com.tr/v2/status?username=$username&password=$password";
//
//    if($campaign_id<>"")
//        $url .= "&id=$campaign_id";
//    else
//        $url .= "&custom_id=$campaign_custom_id";
//
//    if($dest<>"")
//        $url .= "&dest=$dest";
//    if($greater_than<>"")
//        $url .= "&greater_than=$greater_than";
//
//    $ch = curl_init($url);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//    $http_response = curl_exec($ch);
//    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//    if($http_code != 200){
//        echo "$http_code $http_response\n";
//        return false;
//    }
//    $json_response = json_decode($http_response);
//    return $json_response;
//}
//
//function queryCampaign($campaign_id="", $campaign_custom_id="", $only_dest="")
//{
//    $last_message_id = "";
//    while (true) {
//        $messages = queryBatch($campaign_id, $campaign_custom_id, $only_dest, $last_message_id);
//        if($messages===false){
//            echo "Kampanya sorgulanamadı.\n";
//            return false;
//        }
//
//        foreach ($messages as $msg) {
//            $campaign_id = $msg->campaign_id; // 20210
//            $campaign_custom_id = $msg->campaign_custom_id; // 1424441160.9331343
//            $message_id = $msg->message_id; // 13582303
//            $dest = $msg->dest; // 905319876543
//            $size = $msg->size; // 1
//            $sent_at = $msg->sent_at;   // 2015-02-20 16:06:10
//            $done_at = $msg->done_at;   // 2015-02-20 16:06:10
//            $status = $msg->status;     // DELIVERED
//            $gsm_error = $msg->gsm_error; // 0
//
//            echo "$dest telefonuna giden $message_id idli mesajin durumu: $status\n";
//            $last_message_id = $message_id;
//        }
//
//        if(count($messages)<100)
//            break;
//    }
//}
