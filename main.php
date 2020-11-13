<?php
/**
 * Main script to run for the PHP tutorial on https://pierre.photos/blog
 * Start me using autoStart.php
 * 
 * @author     Pierre Lebedel
 * @copyright  2020-11-01
 * @license    MIT
 */

$pid = getmypid();
echo 'Starting main.php. PID is '.$pid.PHP_EOL;

for($i = 1; $i < 120; $i++) {
	echo $i.PHP_EOL;
	sleep(1);
}

echo 'Exiting main.php. PID was '.$pid.PHP_EOL;
