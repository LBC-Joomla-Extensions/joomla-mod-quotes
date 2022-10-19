
<?php 
/*Este archivo puede considerarse el modelo (MVC) del módulo*/

defined("_JEXEC") or die; 

require_once __DIR__ . DIRECTORY_SEPARATOR ."vendor" . DIRECTORY_SEPARATOR  . "autoload.php";


class modQuotes{

    public static function getParams(&$params){
        return $params;
    }
    
}
?>