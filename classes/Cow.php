<?php
    class Cow extends Farm{

        public $prodactName;

        public function __construct($animal, $count, $product, $prodactName)
        {
            parent::__construct($animal, $count, $product);


            $this->$prodactName;
        }

        public function getInfo(){
            echo 'In the farm we have    ' .  $this->count .  $this->animal  . ' <pre></pre>' .
                    'During a day they give    ' . ($this->count * $this->product). ' liter ' . $this->prodactName. ' <pre></pre>' .
                    'During a 7 day they give    ' . ($this->count * $this->product *7). ' liter ' . $this->prodactName. ' <pre></pre>' 
            ;
        }
    }
?>

