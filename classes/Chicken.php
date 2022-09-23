<?php

class Chicken extends Farm
{
    public $productStart;
    public $productEnd;
    public $producName;
    public static $countOfChicken = 0;

    public function __construct($producName = 'egg',$productStart = 0,$productEnd = 1)
    {

        ++self::$countOfChicken ;

        
        parent::__construct($producName,$productStart,$productEnd,self::$countOfChicken);

    }

    public function getAnimalInfo()
    {
        echo parent::getAnimalInfo() . 
            'We have ' . self::$countOfChicken . ' chicken';

    }
}


?>