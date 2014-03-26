<?php

class Totalizer
{
    static function warnAmount($amt)
    {
        $count = 0;
        return function($product) use($amt, &$count) {
          //if($product->price > 5) {
              $count += $product->price;
              print "count: {$count} \n";
              if($count > $amt) {
                  print "alto preço alcançado: {$count} \n";
              }
          //}  
        };
    }
}
