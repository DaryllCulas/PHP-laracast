<?php

use App\Contravariance\AnimalFood;
use App\Contravariance\Food;
use App\Covariance\Shelters\CatShelter;
use App\Covariance\Shelters\DogShelter;

require_once __DIR__ . '/../../vendor/autoload.php';

$kitty = (new CatShelter())->adopt("Ricky");
$catFood = new AnimalFood();
$kitty->eat($catFood);


$doggy = (new DogShelter)->adopt("Mavrick");
$banana = new Food();
$doggy->eat($banana);
