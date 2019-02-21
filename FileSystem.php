<?php

class FileSystem{
	
	public function createFile($name, $contents){
		$myfile = fopen($name, "w");
		fwrite($myfile, $contents);
		fclose($myfile);
	}
	
	public function deleteFile($name){
		unlink($name);
	}
	
	public function viewFile($name){
		$myfile = fopen($name, "r");
		$content = fread($myfile, filesize($name));
		fclose($myfile);
		return $content;
	}
	
}

?>