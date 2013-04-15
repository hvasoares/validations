<?php
namespace switch5\validations;
function notNull($val){
	if($val)
		return $val;
	throwError("Value is null");

}

function isInteger($val){
	if(is_int($val))
		return $val;
	throwError("Not a integer");
}

function isString($val){
	if(is_string(notNull($val)))
		return $val;
	var_dump($val);
	throwError("Not a string");
}

?>
