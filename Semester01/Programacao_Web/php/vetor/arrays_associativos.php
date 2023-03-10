<?php
// First form

// Using Strings as array indexes
$cars = array (
    'vw'        => "Fusca",
    'chevrolet' => "Monza",
    'fiat'      => "Tempra"
);

// Second form
$cars = [
    'vw'        => "Fusca",
    'chevrolet' => "Monza",
    'fiat'      => "Tempra"
];

print_r($cars);
$newCars = ['ford' => "Versailles"];
array_push($cars, "Versailles");
print_r($cars);