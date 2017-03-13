<?php

// Yelp id & secret
$data1 = "grant_type=client_credentials&client_id=XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX&client_secret=XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";

// Post link
$url_send ="https://api.yelp.com/oauth2/token"; 

// Post function to get link
function GetToken($url, $post){
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded"));
  $result = curl_exec($ch);
  curl_close($ch);  // Seems like good practice
  return $result;
}

echo " " . GetToken($url_send, $data1); // get Yelp API token

?>
