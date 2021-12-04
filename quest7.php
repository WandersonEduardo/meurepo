<?php 
    $maior = array("antonio" => "28",
     "marcos" => "30",
    "andreia" => "18", 
    "marta" => "25",
    "fernanda" => "45" );

    $mostrar = max($maior);
    $mostrar2 = array_search($mostrar, $maior);

    echo "O maior é: $mostrar2, $mostrar";

?>
