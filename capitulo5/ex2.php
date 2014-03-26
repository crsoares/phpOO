<?php

namespace Estudo;

class MinhaClasse 
{
	public $class = self::class;

	public function __construct()
	{

	}
}

$obj = new MinhaClasse();

print_r(get_class_vars(MinhaClasse::class));