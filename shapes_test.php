<?php

require_once 'Square.php';

$newRectangle = new Rectangle(2, 5);

echo "A rectangle with length " . $newRectangle->length . ' and width ' .
		$newRectangle->width . ' has an area of ' . $newRectangle->area() . PHP_EOL;

$newSquare = new Square(3);

echo "A square with side length " . $newSquare->side . " has area " .
$newSquare->area() . PHP_EOL;

echo "A square with side length " . $newSquare->side . " has perimeter " .
	$newSquare->perimeter() . PHP_EOL;



?>
