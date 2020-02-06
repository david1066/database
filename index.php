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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="js.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body  class="container">
<a class="btn btn-success" onclick="ajax()">Presionar</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Host</th>
      <th scope="col">DB</th>
    </tr>
  </thead>
  <tbody id="table_ajax">
   
  </tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>

