<?php
class Menu{
	
	public static $items = array(
		1  => array('text'=>'Start',  'url'=>'/start.html'),
		2  => array('text'=>'About',  'url'=>'/about.html'),
		3 => array('text'=>'topList', 'url'=>'/topList.html'),
	);
	public static function returnHTMLmenu($activeElement) {
		$html = "<nav class='menu'><ul>\n";
		foreach(self::$items as $key => $value) {
			if($key == $activeElement)
			{
				$html .= "<li class='active'><a href='{$value['url']}'>{$value['text']}</a></li>\n";
			}
			else
			{
				$html .= "<li><a href='{$value['url']}'>{$value['text']}</a></li>\n";
			}
		}
		$html .= "</nav>\n";
		return $html;
	}
}


echo Menu::returnHTMLmenu(1);
