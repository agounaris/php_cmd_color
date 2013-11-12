<?php 

class CmdColor {

	private static $foregroundColors = array(
		'black' => '30',
		'red'	=> '31',
		'green'	=> '32',
		'blue'	=> '34',
		'purple'	=> '35',
		'cyan'		=> '36',
		'lightgray'	=> '37',
	);

	private static $backgroundColors = array(
		'black' 	=> '40',
		'red'		=> '41',
		'green'		=> '42',
		'yellow'	=> '43',
	);

	public static function paint($string, $foreground = null, $background = null) {

		$fgColor = 0;
		if (isset($foreground)) {
			$fgColor = self::$foregroundColors[$foreground];
		}

		$bgColor = 0;
		if (isset($background)) {
			$bgColor = self::$backgroundColors[$background];
		}

		$paintedString = "\033[" . $bgColor . ";" . $fgColor . "m" 
						. $string 
						. "\033[0m";

		return $paintedString;
	}

}

?>