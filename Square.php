<?php

require_once 'Rectangle.php';

class Square extends Rectangle
{
	public $side;

	public function __construct($side)
	{
		parent::__construct($side, $side);
		$this->side = $side;
	}

	public function perimeter(){

		return $this->side * 4;
	}
}

 ?>
