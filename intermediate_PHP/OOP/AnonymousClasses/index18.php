<?php

require_once(__DIR__ . '/LayerClass.php');


echo (new Outer)->func2()->getExplanation();
echo PHP_EOL;
echo (new Outer)->func2()->func3();
