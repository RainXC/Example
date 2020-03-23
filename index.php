<?php

require_once 'RoomStarter.php';

$room = new RoomJunior();

$room->width  = 5;
$room->length = 5;
$room->height = 2.5;

$room->open()
    ->lightOn()
    ->heatOn();