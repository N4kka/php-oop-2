<?php
require_once __DIR__ . "/Prodotti.php";

class Games extends Products
{
    public $composition = 'Plastica';

    function __construct($_title, $_description, $_price)
    {
        parent::__construct($_title, $_description, $_price, $_composition);
        $this->composition = $_composition;
    }

    public function printInfo()
    {
        return "$this->title $this->description $this->price $this->composition";
    }
}
