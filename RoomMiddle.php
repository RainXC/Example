<?php

require_once 'Conditioner.php';

/**
 * Class RoomMiddle
 */
class RoomMiddle
{
    /**
     * @var
     */
    private $width;
    /**
     * @var
     */
    private $length;
    /**
     * @var
     */
    private $height;
    /**
     * @var
     */
    private $wallColor;

    /**
     * @var Conditioner
     */
    private $conditioner;

    /**
     * RoomMiddle constructor.
     */
    public function __construct()
    {
        $this->conditioner = new Conditioner();
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param $length
     * @return $this
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWallColor()
    {
        return $this->wallColor;
    }

    /**
     * @param $wallColor
     * @return $this
     */
    public function setWallColor($wallColor)
    {
        $this->wallColor = $wallColor;
        return $this;
    }

    /**
     * @return $this
     */
    public function open()
    {
        echo "Комната открыта \r\n";
        return $this;
    }

    /**
     * @return $this
     */
    public function close()
    {
        echo "Комната закрыта \r\n";
        return $this;
    }

    /**
     * @return $this
     */
    public function lightOn()
    {
        echo "Свет включен \r\n";
        return $this;
    }

    /**
     * @return $this
     */
    public function lightOff()
    {
        echo "Свет выключен \r\n";
        return $this;
    }

    /**
     * @return $this
     */
    public function heatOn()
    {
        echo "Тепло включено \r\n";
        return $this;
    }

    /**
     * @return $this
     */
    public function heatOff()
    {
        echo "Тепло выключено \r\n";
        return $this;
    }

    /**
     * @return Conditioner
     */
    public function conditioner()
    {
        return $this->conditioner;
    }
}