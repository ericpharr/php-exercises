<?php

require_once 'Log.php';

$log = new Log('cli');

$log->logMessage("INIT", "New Logfile!");

$log->logInfo("Here's some info!");

$log->logError("You got an error!");

 ?>
