<?php

require_once 'Rectangle.php';
require_once 'Square.php';



for ($i=0; $i < 10; $i ++) {


$newRectangle = new Rectangle(rand(1,20), rand(1,20));

echo "A rectangle with length " . $newRectangle->length . ' and width ' .
		$newRectangle->width . ' has an area of ' . $newRectangle->area() . PHP_EOL;

echo "A rectangle with length " . $newRectangle->length . ' and width ' .
		$newRectangle->width . ' has an perimeter of ' . $newRectangle->perimeter() . PHP_EOL;

$newSquare = new Square(rand(1,20));

echo "A square with side length " . $newSquare->side . " has area " .
$newSquare->area() . PHP_EOL;

echo "A square with side length " . $newSquare->side . " has perimeter " .
	$newSquare->perimeter() . PHP_EOL;

}

?>
