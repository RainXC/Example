<?php

require_once 'RoomJunior.php';
require_once 'RoomJuniorBetter.php';
require_once 'RoomMiddle.php';

echo "КОМНАТА НАЧИНАЮЩЕГО \r\n";
$room         = new RoomJunior();
$room->width  = 5;
$room->length = 5;
$room->height = 2.5;

$room->open()
    ->lightOn()
    ->heatOn();

echo "\r\nКОМНАТА ОПЫТНОГО НАЧИНАЮЩЕГО \r\n";
$roomBetter = new RoomJuniorBetter();
$roomBetter->setHeight(5)
    ->setLength(5)
    ->setHeight(2.5);

$roomBetter->open()
    ->lightOn()
    ->heatOn();


echo "\r\nКОМНАТА ОПЫТНОГО \r\n";
$roomMiddle = new RoomMiddle();

$roomMiddle->setHeight(5)
    ->setLength(5)
    ->setHeight(2.5);

$roomMiddle->open()
    ->lightOn()
    ->conditioner()
    ->on();