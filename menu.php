<?php
class Menu{
	
	public static $items = array(
		1  => array('text'=>'Start',  'url'=>'./assets/start.html'),
		2  => array('text'=>'About',  'url'=>'./assets/about.html'),
		3 => array('text'=>'topList', 'url'=>'./assets/topList.html'),
	);
	public static function returnHTMLmenu($activeElement) {
		$html = "<nav class='menu'><ul>\n";
		foreach(self::$items as $key => $value) {
			if($key == $activeElement)
			{
				$html .= "<li class='active'><a href='index.php?page=$key'>{$value['text']}</a></li>\n";
			}
			else
			{
				$html .= "<li><a href='index.php?page=$key'>{$value['text']}</a></li>\n";
			}
		}
		$html .= "</nav>\n";
		return $html;
	}
}

