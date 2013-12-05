<?php

class Address
{
    private $number;
    private $street;
    
    
    public function __construct($maybenumber, $maybestreet = null)
    {
        if(is_null($maybestreet)) {
            $this->streetaddress = $maybenumber;
        } else {
            $this->number = $maybenumber;
            $this->street = $maybestreet;
        }
    }
    
    public function __set($property, $value)
    {
        if($property === "streetaddress") {
            if(preg_match("/^(\d+.*?)[\s,]+(.+)$/", $value, $matches)) {
                $this->number = $matches[1];
                $this->street = $matches[2];
            } else {
                throw new Exception("não é possível analisar endereço: '{$value}'");
            }
        }
    }
    
    public function __get($property)
    {
        if($property === "streetaddress") {
            return $this->number . " " . $this->street; 
        }
    }
}
