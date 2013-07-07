<?php
namespace hvasoares\validations;
function mustHaveArity($closure,$arity){
	$r = new \ReflectionObject(ofType('Closure',$closure));
	$m = $r->getMethod('__invoke');
	if(isInteger($arity) == $m->getNumberOfParameters())
		return $closure;
	throwError("The closure doesnt has arity equals $arity");
}

function methodMustHasArity(\ReflectionMethod $m,$arity){
	if($m->getNumberOfParameters()!=$arity)
		throwError("The method doesn't has arity = $arity");
}

function ofType($type,$val){
	if($val instanceof $type)
		return $val;
	throwError("Not of type '$type'");
}

function mustHaveMethod($object,$methodName){
	$rf = new \ReflectionObject(notNull($object));
	notFalse($rf->hasMethod($methodName));
	return $rf->getMethod($methodName);
}

function methodMustHaveNoArgs($object,$methodName){
	try{
		methodMustHasArity(mustHaveMethod(
			$object,
			$methodName
		),0);
	}catch(ValidationException $ex){
		throw new ValidationException("Theres is no method named '$methodName' or its arity is not zero");
	}
	
}
?>
