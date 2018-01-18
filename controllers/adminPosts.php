<?php
switch ($actionName) {
    case 'index':
       require_once realpath(__DIR__)."/../../controllers/connect_bd.php";
	   $sql="SELECT * FROM rider";
	   $result= $db->query($sql);

		require_once realpath(__DIR__).'/../views/admin2/index.php';						
	
        break;

    case 'create':
        require_once realpath(__DIR__).'/../connect_bd.php';

		//$db= new PDO ('mysql:host=localhost;dbname=blog;charset=utf8','root', '');
		if ($_POST ['title'] && $_POST ['content'] )
		{ 
			$stm = $db->prepare ("INSERT INTO 	rider (title,content) values (:title,:content )");
			$stm->bindParam (':title',$_POST ['title'],PDO ::PARAM_STR );
			$stm->bindParam (':content',$_POST ['content'],PDO ::PARAM_STR );

			$stm->execute();

			header ('Location: /admin2');
		}

		else {
			echo "неправильно заполены поля";
		}

		require_once realpath(__DIR__).'/../views/admin2/create.php';

        break;

    default:
        # code...
        break;
}
