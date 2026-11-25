<?php

class Order
{
    private User $user;
    @var Product[] 
    private array $products;

    public function __construct(User $user, array $products)
    {
        $this->user = $user;
        $this->products = $products;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getTotal(): float
    {
        $sum = 0.0;
        foreach ($this->products as $product) {
            $sum += $product->price;
        }
        return $sum;
    }
}
