<?php


require_once(__DIR__ . '/Toaster.php');
require_once(__DIR__ . '/ToasterPro.php');

use App\Inheritance\Toaster;
use App\Inheritance\ToasterPro;

$ToasterObj = new ToasterPro(); // Instantiated object of child class ToasterPro

$ToasterObj->addSlice('bread');
$ToasterObj->addSlice('flour');
$ToasterObj->addSlice('eggs');
$ToasterObj->addSlice('milk');
$ToasterObj->addSlice('sugar');
$ToasterObj->addSlice('butter');
$ToasterObj->addSlice('cocoa');
$ToasterObj->toastBagel();
