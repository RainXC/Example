<?php

class RoomJunior
{
    public $width;
    public $length;
    public $height;
    public $wallColor;

    public function open()
    {
        echo "Комната открыта \r\n";
        return $this;
    }

    public function close()
    {
        echo "Комната закрыта \r\n";
        return $this;
    }

    public function lightOn()
    {
        echo "Свет включен \r\n";
        return $this;
    }

    public function lightOff()
    {
        echo "Свет выключен \r\n";
        return $this;
    }

    public function heatOn()
    {
        echo "Тепло включено \r\n";
        return $this;
    }

    public function heatOff()
    {
        echo "Тепло выключено \r\n";
        return $this;
    }

    public function conditionerOn()
    {
        echo "Кондиционер включен \r\n";
        return $this;
    }

    public function conditionerOff()
    {
        echo "Кондиционер выключен \r\n";
        return $this;
    }
}