<?php
namespace hvasoares\validations;
function mustBeAScalar($val){
	notNull($val);
	if(is_string($val))
		return true;
	if(is_int($val))
		return true;
	if(is_float($val))
		return true;
	throwError("Not a scalar");
}
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

function firstGreaterThanSecond($first,$second){
	if($first<$second)
		throwError("$first not greather than $second");
}

?>
