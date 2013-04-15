<?
namespace switch5\validations;
require_once 'arrays.php';
require_once 'boolean.php';
require_once 'reflection.php';
require_once 'scalar.php';
require_once 'validations.php';

class ValidationException extends \Exception{
	public function __construct($message,ValidationException $other=null){
		parent::Exception($message,0,null);	
	}
}

function throwError($msg){
	throw new ValidationException($msg);
}
?>

