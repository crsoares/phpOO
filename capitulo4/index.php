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

/*require "PriceUtilities.php";
require "IdentityTrait.php";
require "TaxTools.php";
require "IdentityObject.php";
require "Service.php";
//require "ShopProduct.php";
require "UtilityService.php";


$obj = new ShopProduct();
$obj2 = new UtilityService(100); 

print $obj->calculateTax(100) . "<br />";
print $obj->generateId() . "<br />";

//print $obj2->calculateTax(200) . "<br />";
//print $obj2->basicTax(100);
print $obj2->getFinalPrice();*/

/*require "FileException.php";
require "XmlException.php";
require "ConfException.php";
require "Conf.php";
require "Runner.php";

Runner::init();*/

/*require_once "IllegalCheckout.php";

$obj = new IllegalCheckout();*/

/*require_once "PersonWrite.php";
require_once "Person.php";

$obj = new Person(new PersonWrite());

echo $obj->writeAge();*/



/*require_once "Address.php";

$obj = new Address("441b Bakers Street");
print "endereço: {$obj->streetaddress}\n";

$obj2 = new Address(15, "Albert Mews");
//print "endereço: {$obj2->streetaddress}\n";

$obj2->streetaddress = "34, West 24th Avenue";
print "endereço: {$obj2->streetaddress}";*/

require_once "ProcessSale.php";
require_once "Product.php";
require_once "Mailer.php";
require_once "Totalizer.php";

//$logger = create_function('$product', 'print " logging({$product->name})\n";');

$logger2 = function($product) {
    print " logging({$product->name})\n";
};


$processe = new ProcessSale();
$processe->registerCallback(Totalizer::warnAmount(8));
$processe->sale(new Product("shoes", 6));
print "\n";
$processe->sale(new Product("coffee", 6));
