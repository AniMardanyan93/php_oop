<?php 

class Farm{

    public $animal;
    public $count;
    public $product;

    public function __construct($animal, $count, $product)
    {
        $this->animal = $animal;
        $this->count = $count;
        $this->product = $product;
        
    }
    // public function getInfo(){
    //     echo 'OK';
    // }
}


?>

