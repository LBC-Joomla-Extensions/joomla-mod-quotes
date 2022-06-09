
<?php 
/*Este archivo puede considerarse el modelo (MVC) del módulo*/

defined("_JEXEC") or die; 

require_once __DIR__ . "/vendor/autoload.php";

use Dickinsonjl\Lorum\Lorum;

class modQuotes{

    public static function getParams(&$params){
        return $params;
    }
    
}
?>