<?php
switch ($actionName) {
    case 'home':
        require_once realpath(__DIR__) . '/../../controllers/connect_bd.php';// подключаем конектирующую базу данных
        
        $vivod = ("SELECT * FROM `vyvod`");// обращаемся к базе данных и забираем все данные с таблицы ВЫВОД
        $znach = $db->query($vivod); // Создаем переменную которая будет подвязывать ключ и значение в будущем массиве для перебора который будет находиться во фронт-энде.
                
        
        require_once realpath(__DIR__) . '/../../views/home/str1.php'; // Подключаем страницу отображения
        
        break;
}
