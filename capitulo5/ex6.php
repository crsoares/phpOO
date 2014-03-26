<?php

namespace Nova;

class MinhaClass
{
	public $valor1;
	private $valor2;

	public function Method1()
	{

	}

	private function Method2()
	{

	}
}

$prod_class = new \ReflectionClass('Nova\MinhaClass');
\Reflection::export($prod_class);