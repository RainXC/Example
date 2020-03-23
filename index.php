<?php

require_once 'RoomStarter.php';

$room = new RoomStarter();

$room->width  = 5;
$room->length = 5;
$room->height = 2.5;

$room->open()
    ->lightOn()
    ->heatOn();