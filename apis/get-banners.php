
<?php
require_once('config.inc.php');
require_once('function.php');

$sql2 = "SELECT * FROM banners WHERE type=1";
$statement2 = queryMysql($sql2);

if($statement2->rowCount())
{
    
    
    $row_all = $statement2->fetchall(PDO::FETCH_ASSOC);
  
    header('Content-type:application/json;charset=utf-8');
    echo json_encode(array("status"=>"true","data"=>$row_all));
    

}  
else
{
    header('Content-type: application/json');
    echo json_encode(array("status"=>"false","data"=>"No Data Found!"));
 
}

    

?>