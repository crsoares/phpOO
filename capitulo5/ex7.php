<?php

namespace NovaClass;

final class MinhaClasse 
{
	public $valor1;
	private $valor2;

	public function method1()
	{

	}

	public function method2()
	{

	}
}

class ReflectionUtil
{
	static function getClassSource(\ReflectionClass $class)
	{
		$path = $class->getFileName();
		$lines = @file($path);
		$from = $class->getStartLine();
		$to = $class->getEndLine();
		$len = $to-$from+1;
		return implode(array_slice($lines, $from-1, $len)) . '<br>';
	}
}

print ReflectionUtil::getClassSource(
 		new \ReflectionClass('NovaClass\MinhaClasse')
	  );

function classData(\ReflectionClass $class)
{
	$details = "";
	$name = $class->getName();
	if($class->isUserDefined()) {
		$details .= "$name é definido pelo usuário <br>";
	}
	if($class->isInternal()) {
		$details .= "$name é built-in <br>";
	}
	if($class->isInterface()) {
		$datails .= "$name é a interface <br>";
	}
	if($class->isAbstract()) {
		$datails .= "$name é uma classe abstrata <br>";
	}
	if($class->isFinal()) {
		$details .= "$name é uma classe final <br>";
	}
	if($class->isInstantiable()) {
		$datails .= "$name pode ser instanciado <br>";
	} else {
		$datails .= "$name não pode ser instanciada <br>";
	}
	if($class->isCloneable()) {
		$details .= "$name pode ser clonado <br>";
	} else {
		$details .= "$name não pode ser clonado <br>";
	}

	return $details;

}

$prod_class = new \ReflectionClass('NovaClass\MinhaClasse');
print classData($prod_class);