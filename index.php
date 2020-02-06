<?php
require_once 'datafactory.php';

$conexion= DatabaseFactory::getDatabase(); 

$query=$conexion->executeQuery("INSERT INTO db (Host, Db) VALUES ('?', '?') ",array( " or 2","xaxx"));
if($query){
    echo 'query realida';
}
/*
while($result = $conexion->fetchArray($query)){

    echo $result['db'].'<br>';
    
  
}
*/
$conexion=null;


?>


