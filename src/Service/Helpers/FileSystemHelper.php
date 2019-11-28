<?php

namespace App\Helpers;

class FileSystemHelper {

	// La fonction qui ouvre un fichier, écrit dedans et ferme le fichier.
	public function write(string $path, string $content) {

		/*$file = fopen($path, 'w');
		fwrite($file, $content);
		fclose($file);*/

		$folders = substr($path, 0, strrpos($path, '/'));
		//dump($folders); exit;

		$this->checkAndCreateFolders($folders);
	}

	public function checkAndCreateFolders(string $path) {

		//Création des dossiers si besoin
		if(!is_dir($path)){
			mkdir($path, 755, true);
		}
	}

}
