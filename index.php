<?php 

    require_once './classes/Farm.php';
    require_once './classes/Chicken.php';
    require_once './classes/Cow.php';


    for($i = 1; $i < 21; $i++)
    {
        if($i < 11)
        {
            ${'cow' . $i} =  new Cow();
        }
        
        ${'chicken' . $i} = new Chicken;
    }

    var_dump($chicken20->getAnimalInfo());
    echo '<pre></pre>';
    var_dump($cow10->getAnimalInfo());

    for($i = 21; $i < 26; $i++)
    {
        ${'chicken' . $i} = new Chicken;
    }
    $cow11=  new Cow();

    echo '<pre></pre>';
    var_dump($chicken25->getAnimalInfo());
    echo '<pre></pre>';
    var_dump($cow11->getAnimalInfo());
?>
