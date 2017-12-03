<?php

namespace App\Helper;
class WebRequest{
   public static function postData($url, $data){       
       $curl = curl_init();
             
       curl_setopt_array($curl, array(
         CURLOPT_URL => $url,
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST",
         CURLOPT_POSTFIELDS => $data,
         CURLOPT_HTTPHEADER => array(
           "cache-control: no-cache",
           "content-type: application/json",
         ),
       ));
      
       $response = curl_exec($curl);
       $err = curl_error($curl);
      
       curl_close($curl);
      
       return json_decode($response);
  }

    public static function authPostData($url, $data, $metodo, $chave){       
      $curl = curl_init();
            
      curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => $metodo,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array(
          "cache-control: no-cache",
          "content-type: application/json",
    "authorization: Bearer $chave",

        ),
      ));
    
      $response = curl_exec($curl);
  $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
      $err = curl_error($curl);
    
      curl_close($curl);
    
      return json_decode($response);
  }






}


