<?php

class Person
{
    private $write;
    
    public function __construct(PersonWrite $write)
    {
        $this->write = $write;
    }
    
    public function __call($methodname, $args)
    {
        if(method_exists($this->write, $methodname)) {
            return $this->write->$methodname($this);
        }
    }
    
    public function getName()
    {
        return "Bob";
    }
    
    public function getAge()
    {
        return 44;
    }
}
