<?php
declare(strict_types=1);

class Cart
{
    protected $content = [];// $_SESSION['cart']

    public $total = 0.0;

    
    public function __construct()
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        $this->content = $_SESSION['cart'];
    }

    
    public function add(int $id, int $quantity = 1): int
    {
        if (!isset($this->content[$id])) {
            $this->content[$id] = $quantity;
        } else {
            $this->content[$id] += $quantity;
        }

       

        $this->saveCart();

        return $this->content[$id];
    }

    
    public function remove(int $id, int $quantity = 1): int
    {
        if (!isset($this->content[$id])) {
            return 0;
        }
        $this->content[$id] -= $quantity;

        
        if ($this->content[$id] <= 0) {
            unset($this->content[$id]);
        }

        $this->saveCart();

        if (isset($this->content[$id])) {
            return $this->content[$id];
        }

        return 0;
    }

    
    public function empty(): void
    {
        $this->content = [];

        $this->saveCart();
    }

   
    public function getContent(): array
    {
        return $this->content;
    }

    
    public function setTotal(float $total): void
    {
        $this->total = $total;

        $_SESSION['totalcart'] = $total;
    }

    protected function saveCart(): void
    {
        $_SESSION['cart'] = $this->content;
    }
}
