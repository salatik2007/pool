<?php
 /******* НАСТРОЙКИ ***********/
 $host = 'localhost';
 $dbname = 'mysite';
 $charset = 'utf8';
 $user = 'user';
 $pass = 'user';



 /******** ПОДКЛЮЧЕНИЕ ***********/

 $dsn = "mysql: host=$host;dbname=$dbname;charset=$charset";
 $options=array(
   PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, //Проверка на ошыбок
   PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC //Режим вывода данных
 );

 $db= new PDO ($dsn,$user, $pass, $options); //подключение к бд
if ($db){ 
echo "OK";
}
else {
    echo "Error";
}
