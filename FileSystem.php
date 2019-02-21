<?php

class FileSystem{
	
	public function createFile($name, $contents){
		if($this->checkPath($name)){
			$myfile = fopen($name, "w");
			fwrite($myfile, $contents);
			fclose($myfile);
			return "File Created";
		}
		return "Invalid Name";
	}
	
	public function deleteFile($name){
		if($this->checkPath($name)){
			unlink($name);
			return "File Deleted";
		}
		return "Invalid Name";
	}
	
	public function viewFile($name){
		if($this->checkPath($name)){
			$myfile = fopen($name, "r");
			$content = fread($myfile, filesize($name));
			fclose($myfile);
			return $content;
		}
		return "Invalid Name";
	}
	
	private function checkPath($path){
		return !is_int(strpos($path, ".."));
	}
	
}

?>