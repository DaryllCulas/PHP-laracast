<?php

use App\Covariance\Shelters\CatShelter;
use App\Covariance\Shelters\DogShelter;

require_once __DIR__ . '/../../vendor/autoload.php';


$kitty = (new CatShelter)->adopt("Ricky: ");
$kitty->speak();

echo PHP_EOL;

$doggy = (new DogShelter)->adopt("Fido: ");
$doggy->speak();
