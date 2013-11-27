<?php

require "ShopProductWrite.php";

class XmlProductWrite extends ShopProductWrite
{
    public function write()
    {
        $write = new XMLWrite();
        $write->openMemory();
        $write->startDocument('1.0', 'UTF-8');
        $write->startElement("products");
        
    }
}

