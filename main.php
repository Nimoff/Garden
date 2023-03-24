<?php

spl_autoload_register(function ($className) {
    require_once "src/Classes/{$className}.php";
});

$data = ['Apple' => 10, 'Pear' => 15];

$garden = new Garden($data);

$fruits = $garden->getFruit();

echo "Собрано яблок: {$fruits['appleAmount']} шт. \n";
echo "Общий вес яблок: {$fruits['appleWeight']} гр. \n";
echo "Собрано груш: {$fruits['pearAmount']} шт. \n";
echo "Общий вес груш: {$fruits['pearWeight']} гр. ";


