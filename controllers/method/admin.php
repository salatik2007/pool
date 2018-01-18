<?php
switch ($actionName) {
    /*Главная*/
    case 'index':
        require_once realpath(__DIR__) . '/../connect_bd.php';// подключаем конектирующую базу данных

        $vivod = ("SELECT * FROM `vyvod`");// обращаемся к базе данных и забираем все данные с таблицы ВЫВОД
        $znach = $db->query($vivod); // Создаем переменную которая будет подвязывать ключ и значение в будущем массиве для перебора который будет находиться во фронт-энде.


        require_once realpath(__DIR__) . '/../../views/admin/index.php'; // Подключаем страницу отображения

        break;
		
		case 'edit':
			require_once realpath(__DIR__) . '/../connect_bd.php';
/*
                if ($_POST ['title'] && $_POST ['countent'] && $_POST ['calendar'] && $_POST ['reit']) {
                    $stm = $db->prepare("UPDATE vyvod SET title=:title ,countent=:countent,calendar=:calendar,reit=:reit"); 
					$stm->bindParam(':title', $_POST ['title'], PDO ::PARAM_STR);
                    $stm->bindParam(':countent', $_POST ['countent'], PDO ::PARAM_STR);
                    $stm->bindParam(":calendar", date("Y-m-d H:i:s", strtotime($_POST ['calendar'])), PDO ::PARAM_STR);
                    $stm->bindParam(':reit', $_POST ['reit'], PDO ::PARAM_INT);

                    $stm->execute();


                    header('Location: /admin');
                } else {
                    echo "неправильно заполены поля";
                }
				
				*/
                $STM = $db->prepare("select * from vyvod where id=:id"); 
				
				$STM->bindParam(':id', $parameters, PDO ::PARAM_INT);
				$STM->execute();
				$res = $STM->fetch(PDO::FETCH_ASSOC);
				
			require_once realpath(__DIR__) . '/../../views/admin/edit.php';
        break;


        /*Добавление*/
//        $par = parse_url($_SERVER ["REQUEST_URI"], PHP_URL_QUERY);
//        parse_str($par, $arr);
//
//        $id = $arr['id'];
//        $expath = explode("?", $_SERVER ["REQUEST_URI"]);
//        switch ($expath[0]) {

            case 'create':
                require_once realpath(__DIR__) . '/../connect_bd.php';

                if ($_POST ['title'] && $_POST ['countent'] && $_POST ['calendar'] && $_POST ['reit']) {
                    $stm = $db->prepare("INSERT INTO vyvod (title,countent,calendar,reit) values (:title,:countent,:calendar,:reit)");
                    $stm->bindParam(':title', $_POST ['title'], PDO ::PARAM_STR);
                    $stm->bindParam(':countent', $_POST ['countent'], PDO ::PARAM_STR);
                    $stm->bindParam(":calendar", date("Y-m-d H:i:s", strtotime($_POST ['calendar'])), PDO ::PARAM_STR);
                    $stm->bindParam(':reit', $_POST ['reit'], PDO ::PARAM_INT);

                    $stm->execute();


                 header('Location: /admin');
                } else {
                    echo "неправильно заполены поля";
                }
                require_once realpath(__DIR__) . '/../../views/admin/create.php';
                break;

}