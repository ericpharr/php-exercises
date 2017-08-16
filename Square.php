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

	public function area()
	{
		echo "[SQUARE METHOD OVERRIDE] ";
		return $this->side ** 2;
	}

	public function perimeter(){
		echo "[SQUARE METHOD OVERRIDE] ";
		return $this->side * 4;
	}
}

 ?>
