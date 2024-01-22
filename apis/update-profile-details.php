<?php
require_once('config.inc.php');
require_once('function.php');

$dataJSON = file_get_contents('php://input');
$data = json_decode($dataJSON, TRUE); 

$hash_pass = sha1($data['upass']);
$sql = "UPDATE user SET uname='".$data['uname']."', uemail='".$data['uemail']."', uphone='".$data['uphone']."', upass='".$hash_pass."', utype='".$data['utype']."' WHERE uid='".$data['uid']."'";

$statement = queryMysql($sql);
$sql = "SELECT * FROM user WHERE uid='".$data['uid']."'";

$statement1 = queryMysql($sql);
$row_all = $statement1->fetchall(PDO::FETCH_ASSOC);
    
header('Content-type:application/json;charset=utf-8');
echo json_encode(array("status"=>"true","data"=>$row_all));
      
  
    

?>