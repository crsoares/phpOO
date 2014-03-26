<?php

function MinhaFuncao()
{
	return "minha funcao";
}

$func = call_user_func('MinhaFuncao');

echo $func;