<?php
namespace switch5\validations;

function returnIfArrayWithSize($size,$array){
	if( sizeof(isArray($array)) >=$size )
		return $array;
	throw new Exception(
		"The array doesn't has $size items"
	);
}

function isArray($val){
	if(is_array($val))
		return $val;
	throwError("Not a array");
}

function isArrayAndReturnValue($val,$index){
	if(isArray($val) && array_key_exists($index,$val) )
		return $val[$index];
	throwError("The array doesn't has $index");
}

?>
