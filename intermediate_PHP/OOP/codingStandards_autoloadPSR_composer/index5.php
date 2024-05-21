<?php









// Using composer packages
use Ramsey\Uuid\UuidFactory;

require __DIR__ . '/../vendor/autoload.php';

// $id = new \Ramsey\Uuid\UuidFactory(); // Prepended
$id = new UuidFactory();


echo $id->uuid4();
