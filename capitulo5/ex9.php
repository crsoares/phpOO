<?php

namespace Teste;

class MinhaClasse
{
	public function __construct($teste)
	{
		return $teste + 1;
	}

	public function method1()
	{

	}

	private function method2()
	{

	}

	protected function method3()
	{

	}
}

$prod_class = new \ReflectionClass('Teste\MinhaClasse');
$methods = $prod_class->getMethods();

foreach($methods as $method) {
	print methodData($method);
	print "\n----\n";
}

function methodData(\ReflectionMethod $method)
{
	$details = "";
	$name = $method->getName();
	if($method->isUserDefined()) {
		$details .= "$name é definido pelo usuário <br>";
	}
	if($method->isInternal()) {
		$details .= "$name é built-in <br>";
	}
	if($method->isAbstract()) {
		$details .= "$name é abstrato <br>";
	}
	if($method->isPublic()) {
		$details .= "$name é público <br>";
	}
	if($method->isProtected()) {
		$details .= "$name é protegida <br>";
	}
	if($method->isPrivate()) {
		$details .= "$name é privado <br>";
	}
	if($method->isStatic()) {
		$details .= "$name é estática <br>";
	}
	if($method->isFinal()) {
		$details .= "$name é final <br>";
	}
	if($method->isConstructor()) {
		$details .= "$name é o construtor <br>";
	}
	if($method->returnsReference()) {
		$details .= "$name devolve uma referência (em oposição a um valor) <br>";
	}

	return $details;
}

class ReflectionUtil
{
	static function getMethodSource(\ReflectionMethod $method)
	{
		$path = $method->getFileName();
		$lines = @file($path);
		$from = $method->getStartLine();
		$to = $method->getEndLine();
		$len = $to-$from+1;
		return implode(array_slice($lines, $from-1, $len));
	}
}

$class = new \ReflectionClass('Teste\MinhaClasse');
$method = $class->getMethod('__construct');
print ReflectionUtil::getMethodSource($method);
