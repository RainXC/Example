<?php

class RoomStarter
{
    public $width;
    public $length;
    public $height;
    public $wallColor;

    public function open()
    {
        echo 'Комната открыта';
        return $this;
    }

    public function close()
    {
        echo 'Комната закрыта';
        return $this;
    }

    public function lightOn()
    {
        echo 'Свет включен';
        return $this;
    }

    public function lightOff()
    {
        echo 'Свет выключен';
        return $this;
    }

    public function heatOn()
    {
        echo 'Тепло включено';
        return $this;
    }

    public function heatOff()
    {
        echo 'Тепло выключено';
        return $this;
    }

    public function conditionerOn()
    {
        echo 'Кондиционер включен';
        return $this;
    }

    public function conditionerOff()
    {
        echo 'Кондиционер выключен';
        return $this;
    }
}