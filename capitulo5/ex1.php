<?php

namespace mypackge;

	use util as u;
	use util\db\Querier as q;

	class Local
	{
		public function __construct()
		{

		}

		public function Method1()
		{
			echo "Estou no metodo: " . __FUNCTION__ . '<br>';
		}

		public function Method2()
		{
			echo "Estou no metodo: " . __FUNCTION__ . '<br>';
		}

		public function Method3()
		{
			echo "Estou no metodo: " . __FUNCTION__ . "<br>";
		}
	}


print u\Writer::class . '<br>';
print q::class . '<br>';
print Local::class . '<br>';

$obj = new Local();
$metodo = "Method1";
$method = "Method2";
$novoMetodo = "Method3";

if(in_array($metodo, get_class_methods(Local::class))) {
	$obj->$metodo();
}

if(is_callable(array($obj, $method))) {
	$obj->$method();
}

if(method_exists(Local::class, $novoMetodo)) {
	$obj->$novoMetodo();die;
}

print_r(get_class_methods(Local::class)); 