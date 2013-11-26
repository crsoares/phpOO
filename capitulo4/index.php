<?php

/*require "ShopProductWrite.php";

class ErroredWrite extends ShopProductWrite
{
    public function write()
    {
        
    }
}

$obj = new ErroredWrite();*/
require "DomainObject.php";
require "Document.php";
require "SpreadSheep.php";
require "User.php";

print_r(User::create());
print_r(SpreadSheep::create());