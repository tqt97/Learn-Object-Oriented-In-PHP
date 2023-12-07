<?php

declare(strict_types=1);
class Product
{
    public string $name = "Product 1";
    public int $price;

    // get price
    public function getPriceAsCurrency(){
        return $this->price / 100; // divide by 100
    }
}

// initialize object
$p1 = new Product();
// set property
$p1->price = 500;
// print property
print($p1->getPriceAsCurrency(). PHP_EOL);
