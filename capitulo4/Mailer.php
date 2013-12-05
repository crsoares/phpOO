<?php

class Mailer
{
    public function doMail($product)
    {
        print "mailing({$product->name})";
    }
}
