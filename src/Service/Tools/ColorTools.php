<?php

namespace App\Tools;

class ColorTools {

	static public function getRandomColor()
    {
    	$chars = str_split('ABCDEF0123456789');
        $color = '#';
        for($i = 0 ; $i < 4 ; $i++){
            $color .= $chars[rand(0, count($chars) - 1)];
        }
        return $color;
    }

    static public function getRandomColors(int $n): array
    {
    	return array_map(function(){
     		return SELF::getRandomColor();
        }, array_fill(0, $n, null));

     	// Ou bien
        $colors = [];
        for($i = 0 ; $i < $n ; $i++){
        	$colors[] = $this->getRandomColor();
        }
        return $colors;
    }

}
