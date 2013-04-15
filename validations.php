<?
namespace switch5\validations;

class ValidationException{
	
}

function throwError($msg){
	throw new \Exception($msg);
}
require_once 'arrays.php'
require_once 'boolean.php'
require_once 'reflection.php'
require_once 'scalar.php'
require_once 'validations.php'
?>

