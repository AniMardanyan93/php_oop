<?php 

    // echo 'Hello,world';
// var_dump(error_reporting(-1));
    //փոխել այս հատվածը, դարձնել ավտոմատ
    require_once './classes/Farm.php';
    require_once './classes/Chicken.php';
    require_once './classes/Cow.php';


    $cow = new Cow('cow', 10, 8, 'milk');
  
    var_dump($cow->getInfo());

?>
