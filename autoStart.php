<?php
require_once 'ProcessControler.php';

$cwd = getcwd();
$targetProcess = 'php main.php';

if(!ProcessControler::findProcess($targetProcess)) {
	ProcessControler::startProcess($targetProcess, $cwd);
	echo 'Process was started by autoStart.'.PHP_EOL;
}
else
	echo 'Process is already running.'.PHP_EOL;
