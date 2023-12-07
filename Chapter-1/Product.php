<?php

declare(strict_types=1);
class Product
{
    public string $name = "Product 1";
    public int $price = 100;
}

// initialize object
$p1 = new Product();

// access properties
print $p1->name . "\n";
print $p1->price . "\n";

// change properties
$p1->price = 200;
// access properties
print $p1->price . "\n";
