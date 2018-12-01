 <?php
  

function send_LINE($msg){
 $access_token = '5NrEfSd+/UuQ8893em1owmgksRosRZrL/c85phujo8+e6HUFbuJcUKyMsIdSLNFDj0ie2X8w9INktGVx6gACCXqWhzGKkFFralsnHVdO+ko0iXkcOCedgPNa8MzFMjNnDhPX0/UmvztO16oywis1KwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ubb5381aa171f4e977f61e2dee1bbf422',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
