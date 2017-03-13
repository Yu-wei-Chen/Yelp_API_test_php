
<?php
// Yelp Search API

// Search query 
$Search = "text=del&latitude=37.786882&longitude=-122.399972";

$url2 = "https://api.yelp.com/v3/autocomplete?".$Search;

$url3 ="https://api.yelp.com/v3/businesses/north-india-restaurant-san-francisco/reviews";

function GetValue($url){
  $ch = curl_init($url);
  //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer AL9kXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX')); // Yelp token
  $result = curl_exec($ch);
  curl_close($ch);  // Seems like good practice
  return $result;
}

echo " " . GetValue($url2);




?>
