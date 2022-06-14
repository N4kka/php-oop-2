<?php
class User {
    public $name;
    public $email;
    private $password;
    public $cart = [];

    protected $creditCard = true;

    function __construct($_name, $_email, $_password)
    {
        $this-> name = $_name;
        $this-> email = $_email;
        $this-> password = $_password;
    }

    function addToCart($_products) {
        if($_products->available) {
            $this->cart[] = $_products;
            return true;    
        } else {
            return false;
        }
    }

    function getTotalPrice() {
        $total = 0;
        foreach($this->cart as $item) {
            $total += $item->price;
        }
        return $total;
    }
}
?>