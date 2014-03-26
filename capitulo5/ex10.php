<?php

namespace Outros;

class Teste {

}

class MinhaClass
{
	public $valor1;
	private $valor2;
	protected $valor3;

	public function __construct(&$param1, Teste $param2)
	{

	}
}

$prod_class = new \ReflectionClass('Outros\MinhaClass');
$method = $prod_class->getMethod('__construct');
$params = $method->getParameters();

foreach($params as $param) {
	print argData($param) . "\n";
}

function argData(\ReflectionParameter $arg) {
	$details = "";
	$declaringclass = $arg->getDeclaringClass();
	$name = $arg->getName();
	$class = $arg->getClass();
	$position = $arg->getPosition();
	$details .= "\$$name tem posição $position <br>";
	if(!empty($class)) {
		$classname = $class->getName();
		$details .= "\$$name deve ser um objeto $classname <br>";
	}
	if($arg->isPassedByReference()) {
		$details .= "\$$name é passado por referência <br>";
	}
	if($arg->isDefaultValueAvailable()) {
		$def = $arg->getDefaultValue();
		$details .= "\$$name tem padrão: $def <br>";
	}

	return $details;
}