<?php

declare(strict_types=1);
class Product
{
    public string $name = "Product 1";
    public int $price;

    // get price
    public function getPriceAsCurrency(int $divisor = 100, string $currencySymbol = "$")
    {
        $price = $this->price / $divisor; // divide by 100
        return $currencySymbol . $price;
    }
}

// initialize object
$p1 = new Product();
// set property
$p1->price = 500;
// print property
print($p1->getPriceAsCurrency(currencySymbol: '£') . PHP_EOL);
