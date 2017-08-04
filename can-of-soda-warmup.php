<?php

class CanOfSoda
{
	public $brandName;
	public $expirationDate;
	public $fullSoda = true;
	public $openSoda = false;
	public function openSoda()
	{
		if(!$this->openSoda) {
			$this->openSoda = true;
			echo "Now Open!" . PHP_EOL;
		}
		echo 'Can is already open!' . PHP_EOL;
	}
	public function pourOut()
	{
		if($this->fullSoda && $this->openSoda) {
			$this->fullSoda = false;
			echo "Pouring out..." . PHP_EOL;
		} elseif (!$this->openSoda){
			echo "open it first!" .PHP_EOL;
		} else {
			echo "Already empty!" . PHP_EOL;
		}
	}
}

$coke = new CanOfSoda();

$coke->expirationDate = "2018/01/02";
$coke->brandName = "Coca-Cola";

 ?>
