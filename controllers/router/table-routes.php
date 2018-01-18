<?php
//echo "123";
return array(


    'test1' => 'controllers/users@ook',
    //Регистрация
    'user/signup' => 'controllers/users@signup', //action Signup в User Controller

    //Вход
    'login' => 'controllers/users@login',

    //Выход
    'user/logout' => 'controllers/users@logout',// в ДАННОЙ конструкции user/logout прописываеться путь который находится в описании 
	// admin posts
	//'posts/add' => 'adminPosts/create',
	//'posts' => 'adminPosts/index',
    //'test1' => 'test/vyvod',
	'admin/posts' => 'controllers/admin/posts/index@index',//
    // методы редактирования 
    'admin' => 'controllers/method/admin@index',// В данной конструкции admin- путь ссылка фронтэнда на запуск БЕКЭНДА
    'create' => 'controllers/method/admin@create',
	'delete' => 'controllers/method/admin@delete',
	'edit' => 'controllers/method/admin@edit',
    //Страницы меню
    'test' => 'controllers/str_sait/str1@ok',
    '' => 'controllers/str_sait/str1@home' // главная стр


    /****Главаня страница****
    -------------------------------------------------
    (РАЗОБРАТСЯ с возможностю адресировать в отдельную папк в controllers)
    -------------------------------------------------

    'home_page' => 'home/page', //вызываем action Index в home Controller
    '' => 'home/index' //вызываем action Index в home Controller
    */

       //Страницы меню
    //'' => 'str1/home' // главная стр
   
);
