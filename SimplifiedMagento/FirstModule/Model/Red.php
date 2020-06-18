<?php
namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Brightness;
use SimplifiedMagento\FirstModule\Api\Color;

class Red implements Color
{
    /**
     * @var Brightness
     */
    private $brightness;

    public function __construct(Brightness $brightness)
    {
        $this->brightness = $brightness;
    }

    public function getColor()
    {
        return "Red";
    }
}
