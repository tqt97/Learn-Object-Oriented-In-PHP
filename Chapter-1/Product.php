<?php

declare(strict_types=1);
class Product
{
    public string $name;
    public int $price;

    public function __construct(int $price = 50, string $name = "Iphone",)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // get price
    public function getPriceAsCurrency(int $divisor = 100, string $currencySymbol = "$")
    {
        $price = $this->price / $divisor; // divide by 100
        return $currencySymbol . $price;
    }
}

// initialize object
$p1 = new Product(price: 1000);

// print property
print($p1->name . PHP_EOL);
print($p1->price . PHP_EOL);
print($p1->getPriceAsCurrency(currencySymbol: '£') . PHP_EOL);
