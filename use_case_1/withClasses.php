<?php

/*A basket contains the following things:

Banana's (6 pieces, costing €1 each)
Apples (3 pieces, costing €1.5 each)
Bottles of wine (2 bottles, costing €10 each)
Without using classes, do the following in your code:

Calculate the total price
Calculate how much of the total price is tax 
(fruit goes at 6%, wine is 21%)
*/

class BasketItem
{
  public $name;
  public $quantity;
  public $price;
  public $tax;

  public function __construct(string $name, float $quantity, float $price, float $tax){
    $this->name = $name;
    $this->quantity= $quantity;
    $this->price = $price;
    $this->tax = $tax;
  }

  public function totalPrice(){
    return $this->quantity * $this->price;
  }
  public function totalTax(){
    return $this->totalPrice() * $this->tax;

  }

}

$banana = new BasketItem("banana", 6, 1, 0.06);
$apple = new BasketItem("apple", 3, 1.5, 0.06);
$wine = new BasketItem("wine", 2, 10, 0.21);

echo "Total without tax: " . $banana->totalPrice() + $apple->totalPrice() + $wine->totalPrice();
echo "<br>Total tax: " . $banana->totalTax() + $apple->totalTax() + $wine->totalTax();

