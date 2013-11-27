<?php

class ShopProduct implements IdentityObject
{
    use PriceUtilities, IdentityTrait;
    
    private $id = 0;
    
    public function setID($id)
    {
        $this->id = $id;
    }
    
    public static function getInstance($id, PDO $pdo)
    {
        $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
        $result = $stmt->execute(array($id));
        $row = $stmt->fetch();
        if(empty($row))
        {
            return null;
        }
        if($row['type'] === 'book')
        {
            $product = new BookProduct(
                        $row['title'],
                        $row['firstname'],
                        $row['mainname'],
                        $row['price'],
                        $row['naumpages']
                    );
        }elseif($row['type'] === 'cd')
        {
            $product = new CdProduct(
                        $row['title'],
                        $row['firstname'],
                        $row['mainname'],
                        $row['price'],
                        $row['playlangth']
                    );
        }else
        {
            $product = new ShopProduct(
                        $row['title'],
                        $row['firstname'],
                        $row['mainname'],
                        $row['price']
                    );
        }
        $product->setID($row['id']);
        $product->setDiscount($row['discount']);
        return $product;
    }
}