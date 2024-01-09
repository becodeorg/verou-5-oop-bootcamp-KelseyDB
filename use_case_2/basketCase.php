<?php 

/* Use Case #2
Consider the same basket as in use case 1. 
The shop owner wants to have a way to have 50% off every fruit. 
Can you find a way to implement the discount once, 
and re-use it efficiently for every fruit?
*/

class BasketItem
{
  public $name;
  public $quantity;
  public $price;
  public $tax;
  public $type;
  public $discount;
  

  public function __construct(string $name, float $quantity, float $price, float $tax, string $type){
    $this->name = $name;
    $this->quantity= $quantity;
    $this->price = $price;
    $this->tax = $tax;
    $this->type = $type;
  }

  public function totalPrice(){
    return $this->quantity * $this->price ;
  }
  public function totalTax(){
    return $this->totalPrice() * $this->tax;
  }
  public function totalAndTax(){
    return $this->totalPrice() + $this->totalTax();
  }
  public function discount(){
    if ($this->type === "fruit"){
    return $this->totalAndTax() * 0.5;
    } else{
      return totalAndTax();
    }
  } 
}

$banana = new BasketItem("banana", 6, 1, 0.06, "fruit");
$apple = new BasketItem("apple", 3, 1.5,  0.06, "fruit");
$wine = new BasketItem("wine", 2, 10, 0.21, " ");

echo "<br>Total without tax: " . $banana->totalPrice() + $apple->totalPrice() + $wine->totalPrice();
echo "<br>Total tax: " . $banana->totalTax() + $apple->totalTax() + $wine->totalTax();

echo "<br> Total price of basket with discount and tax: " . $banana->discount() + $apple->discount() + $wine->totalAndTax();


