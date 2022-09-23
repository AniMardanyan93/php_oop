<?php
   class Cow extends Farm
   {
        public $productStart;
        public $productEnd;
        public $producName;
        public static $countOfCow = 0;
   
        public function __construct($producName = 'milk',$productStart = 8,$productEnd = 10)
        {
    
            ++self::$countOfCow ;
            
            parent::__construct($producName,$productStart,$productEnd,self::$countOfCow);
    
        }
    
        public function getAnimalInfo()
        {
            echo parent::getAnimalInfo() . 
                'We have ' . self::$countOfCow . ' cow';
    
        }
   }
   
?>

