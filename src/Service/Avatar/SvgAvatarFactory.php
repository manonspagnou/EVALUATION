<?php

namespace App\Avatar;
use App\Tools\ColorTools;

class SvgAvatarFactory {
	static public function getAvatar(int $nbColors, int $size) {
		$colors = ColorTools::getRandomColors($nbColors);

		$avatar = new AvatarMatrix();
		$avatar->setColors($colors);
		$avatar->setSize($size);

		$svgAvatarRenderer = new SvgAvatarRenderer('templates/avatar.svg.tpl');
		$svg = $svgAvatarRenderer->render($avatar);

		return $svg;
	}
	
}
