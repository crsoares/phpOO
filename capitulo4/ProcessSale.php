<?php

class ProcessSale
{
    private $callbacks;
    
    public function registerCallback($callback)
    {
        if(!is_callable($callback)) {
            throw new Exception("callback não pode ser chamado");
        }
        $this->callbacks[] = $callback;
    }
    
    public function sale($product)
    {
        print "{$product->name}: processamento \n";
        foreach($this->callbacks as $callback) {
            call_user_func($callback, $product);
        }
    }
}
