<?php

require_once 'insult.interface.php';

Class Insult implements iInsults {

	public static function random()
	{
		$insults = file(PATH . 'insults.txt');
		return $insults[array_rand($insults)];
	}

	public static function named($name) {
		
		$insults = file(PATH . 'named_insults.txt');
		return str_replace(':name', $name, $insults[array_rand($insults)]);
	}
}