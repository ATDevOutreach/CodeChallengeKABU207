<?php
 $from = $_POST['from'];
 $to = $_POST['to'];
 $text = $_POST['text'];
 $date = $_POST['date'];
 $id = $_POST['id'];
 $linkId = $_POST['linkId'];
 
 $username = 'sandbox';
 $api_key = '021781b349552e8984e8610acf037b11e3930061ad8129f11b1d10f24e59b38d';
 $message = "Enter BERTRAM, the COUNTESS of Rousillon, HELENA, and LAFEU, all in black.";
 
 if (!function_exists('curl_init')) {
     require_once 'Purl.php';
 }
 $curl = curl_init();
 curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://api.sandbox.africastalking.com/restless/send?username='.$username.'&Apikey='.$api_key
                  .'&to='.$from.'&from='.$to.'&message='.urlencode($message)
 ));
 $response = curl_exec($curl);
 curl_close($curl);