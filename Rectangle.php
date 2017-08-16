<?php

class Rectangle
{
	private $length;

	private $width;

	public function __construct($length, $width)
	{
		// $this->length = $length;
		$this->setLength($length);

		// $this->width = $width;
		$this->setWidth($width);

	}

	public function area()
	{
		return $this->getLength() * $this->getWidth();
	}

	public function perimeter()
	{
		return $this->getLength() * 2 + $this->getWidth() * 2;
	}

	protected function setLength($length)
	{
		$this->length = $length;
	}

	protected function setWidth($width)
	{
		$this->width = $width;
	}

	public function getLength()
	{
		return $this->length;
	}

	public function getWidth()
	{
		return $this->width;
	}
}


 ?>
