<?php
class Content{

	public static $pages = array(
		1  =>'start.html',
		2  => 'about.html',
		3  => 'topList.html',
	);
	
	public static function getPage($pageNumber) {
	 	$my_file = file_get_contents(self::$pages[$pageNumber]);
	 	return $my_file;
	}
}


echo Content::getPage(3);
