<?php
namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Size;
use SimplifiedMagento\FirstModule\Api\Color; 

class Book
{
	
    private $size;
    private $color;

	function __construct(Size $size, Color $color)
	{
      $this->size = $size;
      $this->color = $color;
    }
}