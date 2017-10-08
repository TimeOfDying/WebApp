<?php
class Content{

	public static $pages = array(
		1  =>'./assets/start.html',
		2  => './assets/about.html',
		3  => './assets/topList.html',
	);
	
	public static function getPage($pageNumber) {
		if (!array_key_exists($pageNumber, self::$pages)) return file_get_contents("./assets/index.html");
		else
		{
			$my_file = file_get_contents(self::$pages[$pageNumber]);
			return $my_file;
		}
	}
}

