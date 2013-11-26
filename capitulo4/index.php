<?php

/*require "ShopProductWrite.php";

class ErroredWrite extends ShopProductWrite
{
    public function write()
    {
        
    }
}

$obj = new ErroredWrite();*/
/*require "DomainObject.php";
require "Document.php";
require "SpreadSheep.php";
require "User.php";

print_r(User::create());
print_r(SpreadSheep::create());*/

require "PriceUtilities.php";
require "IdentityTrait.php";
require "TaxTools.php";
require "IdentityObject.php";
require "Service.php";
//require "ShopProduct.php";
require "UtilityService.php";


//$obj = new ShopProduct();
$obj2 = new UtilityService(100); 

/*print $obj->calculateTax(100) . "<br />";
print $obj->generateId() . "<br />";*/

//print $obj2->calculateTax(200) . "<br />";
//print $obj2->basicTax(100);
print $obj2->getFinalPrice();