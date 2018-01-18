<?php
//require_once realpath(__DIR__).'/views/home/index.php';
require_once realpath(__DIR__).'/controllers/router/router.php';// Контроллер-роутинг
//require_once 'controllers/router/router.php';



// switch ($_SERVER['REQUEST_URI']) {
//     case '/':
//         # code...
//         require_once realpath(__DIR__).'/../views/home.php';
//         break;

//     case '/about':
//         # code...
//         require_once realpath(__DIR__).'/../views/about.php';
//         break;

//     case '/blog':
//         # code...
//         require_once realpath(__DIR__).'/../controllers/blog.php';
//         break;
    
//     case '/admin':
//         # code...
//         require_once realpath(__DIR__).'/../controllers/admin/index.php';
//         break;
//     case '/add':
//         # code...
//         require_once realpath(__DIR__).'/../controllers/admin/add.php';
//         break;
//     case '/create':
//         # code...
//         require_once realpath(__DIR__).'/../controllers/admin/create.php';
//         break;
    
//     case '/update':
//         # code...
//         require_once realpath(__DIR__).'/../controllers/admin/update.php';
//         break;
//     default:
//         # code...
//         $url = $_SERVER['REQUEST_URI'];

//         parse_str(parse_url($url, PHP_URL_QUERY), $arr);

//         $id = $arr['id'];

//         $pathid = explode("?", $url);

//         if ($pathid[0] == '/edit'){
        
//             require_once realpath(__DIR__).'/../controllers/admin/edit.php';
//         }

//         else if ($pathid[0] == '/delete'){
        
//             require_once realpath(__DIR__).'/../controllers/admin/delete.php';
//         }
//         else if ($pathid[0] == '/detail'){
            
//             require_once realpath(__DIR__).'/../controllers/detail.php';
//         }
//         else{
//                  echo $arr['id'];
//              }
//         break;
// }

?>
