<?php
require 'Way/HighWay.php';
require 'Way/Motorway.php';
require 'Way/PedestrianWay.php';
require 'Way/ResidentialWay.php';
require 'Vehicul/voiture.php';
require 'Vehicul/bike.php';
require 'Vehicul/skate.php';
require 'Vehicul/Moto.php';

$motorway = new Motorway();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();

$bike = new Bike('bleu',1);
$skate = new Skate('bois',1);
$Moto = new Moto('noir', 1);



$residentialWay->addVehicle($Moto);
$residentialWay->addVehicle($bike);

var_dump($residentialWay);