<?php


/**
 * Class Conditioner
 */
class Conditioner
{
    private $manufacturer = 'Samsung';
    private $color        = 'White';

    /**
     * @return $this
     */
    public function on()
    {
        echo "Кондиционер включен \r\n";
        return $this;
    }

    /**
     * @return $this
     */
    public function off()
    {
        echo "Кондиционер выключен \r\n";
        return $this;
    }
}