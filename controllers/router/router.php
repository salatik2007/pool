<?php
//echo "123";

//@return string; //текущий адрес запроса


function getURI(){
    if (isset($_SERVER['REQUEST_URI']) and !empty($_SERVER['REQUEST_URI']))
        return trim($_SERVER['REQUEST_URI'], '/'); /*считывает то что в командной строке
       trim - Удаляет пробелы, Удаляет пробелы (или другие символы) из начала и конца строки 
        */
   }

//получаем строку запроса
$uri = getURI();//запоминаем то что запрошено
$result = false;// РАЗОБРАТЬСЯ ЧТО ЗА ПЕРЕМЕННАЯ
$routes = include (realpath (__DIR__).'/../../controllers/router/table-routes.php'); //подключаем таблицу маршрутизации в веде ассоциативного массива

// Проверить наличие такого запроса в routes.php
foreach ($routes as $uriPattern => $path) {

    //Сравниваем uriPattern и $uri должно быть совпадение с таблицей маршрутизации
    if (preg_match("~$uriPattern~", $uri)) {

        // Получаем внутренний путь из внешнего согласно правилу
        //$internalRoute = preg_replace("~$uriPattern~", $path, $uri);//функция позволяющая менять выражение в путь
		// print_r($path);
		
		list($intRoute, $actionName) = explode('@', $path); // разбиваем путь на части
		
		// Определить контроллер, action, параметры
    
        $segments = explode('/', $intRoute); // разбиваем путь на части
        
		$controllerName = array_pop($segments);// запоминаем имя контроллера

		//$paramsegment = explode('/', $paramsegment);
        
        //$actionName = $segments;// Сдвигаем

		$p = $uri;
		
		$paramsegment = explode('/', $p);
        
    	$parameters = array_pop($paramsegment); //Последние значение в строке
		

       // $parameters = $paramsegment;// то что осталось вне параметра

        //Подключаем файл контроллера
		$controllerFile = realpath(__DIR__).'/../../';//Под этой переменной вызываем корневой путь
		
        //$controllerFile = realpath(__DIR__).'/../../controllers/'. $controllerName . ".php";// Делаем реальные линки
		
		$s = count($segments);
		//print_r(count($segments));
		
		for ($i=0; $i<$s; $i++)
		{
		
		$mypath = array_shift($segments);// Сохраняем самый левый текущий путь маршрута КОНТРОЛЛЕР

			//print_r(count($segments));
			
			if (count($segments)==0){
				//print_r($i);
				$controllerFile=$controllerFile.$mypath.'/'.$controllerName.'.php';// запускающая папка находиться в корне
				
				break;
				}
			else{
				//print_r($mypath);
				$controllerFile=$controllerFile.'/'.$mypath.'/';// индексовский файл
				//print_r($controllerFile);
				}
			
					
		}
		//while (count($segments>0));

        if (file_exists($controllerFile)) {
            include_once($controllerFile);
            $result = true;
        }// проверка на целосность и доступность

        if ($result !== null)
            break;


        /*

            default :
//---------------------------------------------

 Первый пример

$par = parse_url($_SERVER ["REQUEST_URI"], PHP_URL_QUERY);
parse_str($par, $arr);

$id = $arr['id'];
$expath = explode("?", $_SERVER ["REQUEST_URI"]);

switch ($expath[0]){

case "/show":

require_once ("views/show.php");
break;

//---------------------------------------------

Второй пример записи

$url = $_SERVER['REQUEST_URI'];

parse_str(parse_url($url, PHP_URL_QUERY), $arr); 
//-Разбирает URL и возвращает его компоненты. Эта функция не предназначена для проверки на корректность данного URL, она только разбивает его

$id = $arr['id'];
$pathid = explode("?", $url);
//explode — Разбивает строку с помощью разделителя
            Возвращает массив строк, полученных разбиением строки

if ($pathid[0] == '/edit'){
require_once realpath(__DIR__).'/../controllers/admin/edit.php';
}

        */



}
}

