<?php
require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('blue');

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>';


$polo = new Car(4, 'blue', 5, 'essence');

echo $polo->start();
echo $polo->forward();
echo '<br> Vitesse de la voiture : ' . $polo->getCurrentSpeed() . ' km/h' . '<br>';
echo 'Niveau d\'énergie : ' . $polo->getEnergyLevel() . ' %' . '<br>';