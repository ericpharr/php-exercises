<?php
class Log
{
	private $filename;
	private $handle;

	function __construct($prefix = 'log')
	{
		if (!is_string($prefix)){
			$prefix = 'log'
		}
		$this->filename = $prefix . date("Y-m-d") . ".log";
		$this->handle = fopen($this->filename, 'a');
	}

	function logInfo($message){
	    $this->logMessage("INFO", $message);
	}

	function logError($message){
	    $this->logMessage("ERROR", $message);
	}
	public function logMessage($logLevel, $message)
	{
	    // $this->filename = "log-" . date("Y-m-d") . ".log";

	    $log = date('Y-m-d G:i:s') . " [$logLevel] $message". PHP_EOL;

	    // $handle = fopen($this->filename, 'a');

	    fwrite($this->handle, $log);
	    // fclose($handle);
	}

	private function setHandle()
	{

	}
	function __destruct()
	{
		fclose($this->handle);
	}

}
?>
