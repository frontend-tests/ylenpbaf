<?php
// wrapElement
function wrapElement($elementArray) {
		if (is_string($elementArray)) return $element = '</' . $elementArray . '>';
		$elementContent = $elementArray['content'];
		(isset($elementArray['class']) ? $elementClass = 'class="' . $elementArray['class'] . '"' : $elementClass = null);
		if ($elementArray['element'] == 'li') {
				$cloesTage = '</li>';
				if (isset($elementArray['openTag'])) {
						$cloesTage = '';
					}
				if (!empty($elementArray['url'])) $elementContent = '<a href="' . $elementArray['url'] . '">' . $elementContent . '</a>';
				$element = '<li ' . $elementClass . '>' . $elementContent . $cloesTage;
			}
		else {
				$cloesTage = '</ul>';
				$element = '<ul ' . $elementClass . '>' . $elementContent . $cloesTage;
		}
		return $element;
}
// drawMenu
function drawMenu($array, $level = 0) {
		$menu = "";
		foreach($array as $key => $value) {
				(!empty($value['url']) ? $url = $value['url'] : $url = NULL);
				if (!isset($value['subpages'])) {
						$menu.= wrapElement(array(
								'element' => 'li',
								'content' => $value['titulo'],
								'url' 		=> $url
						));
				}
				else {
						$menu.= wrapElement(array(
								'element' => 'li',
								'content' => $value['name'],
								'url' 		=> $value['url'],
								'openTag' => TRUE
						));
						$menuItemContent = drawMenu($value['subpages'], $level + 1);
						$menu.= wrapElement(array(
								'element' => 'ul',
								'content' => $menuItemContent
						));
						$menu.= wrapElement('li');
					}
			}
		return $menu;
}
?>
