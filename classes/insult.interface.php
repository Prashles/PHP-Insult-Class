<?php

Interface iInsults {

	public static function random();

	public static function named($name);

}

define('PATH', dirname(__FILE__) . '/insult/');
