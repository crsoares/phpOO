<?php

trait PriceUtilities
{
    //private static $taxrate = 17;
    
    function calculateTax($price) {
        return (($this->getTaxRate()/100) * $price);
    }
    
    abstract function getTaxRate();
}
