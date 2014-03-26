<?php

namespace Teste;

class MinhaClasse
{
	public function method1($string)
	{
		return $string . __FUNCTION__;
	}
}

$obj = new MinhaClasse();

$return = call_user_func(array($obj, 'method1'), 'Estou no metodo: ');

echo $return;