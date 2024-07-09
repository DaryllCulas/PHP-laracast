<?php

use App\Bird;
use App\FlyingBird;
use App\NonFlyingBird;

require_once __DIR__ . '/../../vendor/autoload.php';


$pigeon = new Bird(new FlyingBird());
echo $pigeon->fly();

$penguin = new Bird(new NonFlyingBird());
echo $penguin->fly();
