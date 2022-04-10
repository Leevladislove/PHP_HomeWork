<?php

$auto = [ "BMW" => ["model" => 'X5', "speed" => 120, "doors" => 5, "year" => 2015],
    "TOYOTA" => ["model" => "Corolla", "speed" => 100, "doors" => 5, "year" => 2016],
    "OPEL"=> ["model" => 'Astra', "speed" => 90, "doors" => 3, "year" => 2014]];

foreach ($auto as $car => $value)
{
    echo "CAR " . $car . '<br>' . implode(' ', $value) . '<br>' . '<br>';
}

