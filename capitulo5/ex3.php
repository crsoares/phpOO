<?php

namespace Outro;

class MinhaClasse extends \Exception
{

}

$obj = new MinhaClasse();

if(is_subclass_of($obj, 'Exception')) {
	echo 'A classe : ' . get_class($obj) . ' e filha da classe Exception <br>';
}

print_r(get_parent_class(MinhaClasse::class));