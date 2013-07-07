<?php
namespace hvasoares\validations;
function notFalse($val){
	if($val)
		return $val;
	throwError("It should be false");
}

function mustBeEqual($v1,$v2){
	if(notNull($v1)!=notNull($v2))
		throwError("$v1 != $v2");
}

function returnSecondIfNull($first,$second){
	if($first)
		return $first;
	return $second;
}

?>
