<?php

class RoomJuniorBetter
{
    private $width;
    private $length;
    private $height;
    private $wallColor;

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    public function getWallColor()
    {
        return $this->wallColor;
    }

    public function setWallColor($wallColor)
    {
        $this->wallColor = $wallColor;
        return $this;
    }

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