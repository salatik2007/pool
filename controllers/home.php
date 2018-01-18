<?php 

switch ($actionName) {
 case 'index':

  //$connection = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
      
     // require_once (__DIR__). 
      
  if ($connection){
    $sql = 'SELECT * FROM posts';
    $result = $connection->query($sql);
  }  
  
  require_once realpath(__DIR__).'/../views/home/index.php';
  break;
}
?>