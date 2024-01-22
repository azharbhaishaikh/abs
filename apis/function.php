<?php
function myTrim($content) {
    if(strlen($content)>400){
    
   $content=substr($content, 0, 400); 
}
  $content = preg_replace("/(?:^((\pZ)+|((?!\R)\pC)+)(?1)*)|((?1)$)|(?:((?2)+|(?3)+)(?=(?2)|(?3)))/um", "", $content);
  $content = preg_replace("/(\pZ+)|((?!\R)\pC)/u", " " , $content);
  $content = preg_replace("/(^\R+)|(\R+$)|(\R(?=\R{2}))/u", "", $content);
  $content = preg_replace("/ㅤ/u", "", $content);
  $content = htmlentities(trim($content));
  $content = preg_replace("/\'/u", "&#x27;", $content);
  $content = preg_replace("/\//u", "&#x2F;", $content);
  $content = preg_replace("/\\\/", "&#92;", $content);
  $content = preg_replace("/\(/", "&#40;", $content);
  $content = preg_replace("/\)/", "&#41;", $content);
  
  return $content;
}
function queryMysql($query)
 {
   global $connection;
   
   $result = $connection->query($query);
   
   if (!$result) die($connection->error);
   return $result;
 }

 function random_strings($length_of_string) 
{ 
  
    // String of all alphanumeric character 
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
  
    // Shufle the $str_result and returns substring 
    // of specified length 
    return substr(str_shuffle($str_result),  
                       0, $length_of_string); 
} 

 function loopCount()
 {
   
    $loop_count = "5";
   return $loop_count;
 }

 function maxdist()
 {
   $max_count = "200";
   return $max_count;
 }

function myServerName(){
  return $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'];
}

?>