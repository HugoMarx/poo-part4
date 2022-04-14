<?php

require_once 'Car.php';

$car = new Car();



echo $car->setParkBrake(true);

try {
    echo $car->start();
} catch (Exception $e){
    echo 'An error occured because the brake was still set <br>';
    $car->setParkBrake(false);
    echo 'Brake auto unset <br>';
    echo $car->start();
} finally {
    echo 'Ma voiture roule comme un donut';
    
}
