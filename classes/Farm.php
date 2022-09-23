<?php 
class Farm
{
    public $productStart;
    public $productEnd;
    public $productName;
    public $count;
    public static $id = 0;
    public $array = [];

    public function __construct($productName, $productStart, $productEnd,$count)
    {
        
        array_push($this->array, ++self::$id);

        $this->productName = $productName;
        $this->productStart = $productStart;
        $this->productEnd = $productEnd;
        $this->count = $count;
    }

    public function getAnimalInfo()
    {
        $product = mt_rand($this->productStart, $this->productEnd);
        return    'During a day give ' .$product  . ' ' . $this->productName . '<pre></pre>' .
                  'During 7 day give ' . ($product  *7) . ' ' . $this->productName . '<pre></pre>'.
                  'During 7 day they all give ' . ($product  *7 * $this->count) . ' ' . $this->productName . '<pre></pre>';
    }
}
?>