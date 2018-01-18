<?php

ob_start();// позволяет создавать КЕШ хранит результат логин

// define variables and set to empty values
$result = false;
$name = '';
$lname = '';
$email = '';
$password = '';

function checkEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {// правильность написание емайла
        return false;
    }
    return true;
}
function checkName($name) {
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        return false;
    }
    return true;
}

function checkPassword($password) {
    if (!(strlen($password)>=6) ){
        return false;
    }
    return true;
}

switch ($actionName) {
    case 'login':
        if (isset($_POST) and (!empty($_POST))) {

            $email = trim(strip_tags($_POST['email']));// против ввода лишних символов, Strim замена тегов на юни код
            $password = $_POST['password'];

            //Флаг ошибок
            $errors = false;

            //Валидация полей
            if (!checkEmail($email)) {
                $errors[] = "Некорректный Email";
            }

            //Проверяем, существует ли пользователь
            if ($password != '1234567') {
                $errors[] = "Пользователя с таким email или паролем не существует";

            } else {
                header("Location: /"); //перенаправляем в личный кабинет
            }
        }

        require_once realpath(__DIR__) . '/../views/users/login.php';
        break;

    case 'signup':

        if (isset($_POST) and (!empty($_POST))) {
            $username = trim(strip_tags($_POST['username']));

            $email = trim(strip_tags($_POST['email']));
            $password = trim(strip_tags($_POST['password']));

            //Флаг ошибок
            $errors = false;

        //Валидация полей
        if (!checkName($name)) {
            $errors[] = "Only letters and white space allowed. Your entry is: $name";
        }

        if (!checkEmail($email)) {
            $errors[] = "Invalid email format. Your entry is: $email";
        }

        if (!checkPassword($password)) {
            $errors[] = "Password must be six or more symbols. Your entry is: $password";
        }

         if ($errors == false) {
             $result = true;
         }
        }

        require_once realpath(__DIR__).'/../views/users/signup.php';


}
