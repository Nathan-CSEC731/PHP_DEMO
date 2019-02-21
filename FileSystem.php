<?php

class FileSystem{
	
	public function createFile($name, $contents){
		$myfile = fopen($name, "w");
		fwrite($myfile, $contents);
		fclose($myfile);
		return "File Created";
	}
	
	public function deleteFile($name){
		unlink($name);
		return "File Deleted";
	}
	
	public function viewFile($name){
		$myfile = fopen($name, "r");
		$content = fread($myfile, filesize($name));
		fclose($myfile);
		return $content;
	}
	
}

?>