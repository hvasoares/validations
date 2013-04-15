<?php
namespace switch5\validations;
function mustHaveArity($closure,$arity){
	$r = new \ReflectionObject(ofType('Closure',$closure));
	$m = $r->getMethod('__invoke');
	if(isInteger($arity) == $m->getNumberOfParameters())
		return $closure;
	throwError("The closure doesnt has arity equals $arity");
}


function ofType($type,$val){
	if($val instanceof $type)
		return $val;
	throwError("Not of type '$type'");
}
?>
