<?php 
    include './maison.php';

    $house1 = new Maison('Maison 1',8,7,3);

    var_dump($house1);

    $house1->surface();

?>