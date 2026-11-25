<?php

namespace App;

class Electronics extends Product
{
    public function __construct(
        string $title,
        float $price,
        private float $warrantyPercent
    ) {
        parent::__construct($title, $price);
    }

    public function getFinalPrice(): float
    {
        $withTax = $this->price * (1 + self::TAX);
        return $withTax + $this->price * $this->warrantyPercent / 100;
    }
}
