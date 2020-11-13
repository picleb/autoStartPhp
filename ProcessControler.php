<?php
/**
 * Collection of Unix processes related functions
 * 
 * @author     Pierre Lebedel
 * @copyright  2020-07-23
 * @license    MIT
 */

class ProcessControler {
	/**
	 * @param string $process name of the process to check for
	 * @return bool true if the process was found, false otherwise
	 */
	public static function findProcess($process) {
		$ps = exec('ps -x | grep -i "'.escapeshellcmd($process).'" | grep -v grep');
		return !empty($ps);
	}

	/**
	 * @param string $process name of the process to start
	 * @param string $dir directory where the exec() function should be executed from
	 */
	public static function startProcess($process, $dir) {
		chdir($dir);
		exec("/usr/bin/env ".escapeshellcmd($process)." > /dev/null &");
	}
}
