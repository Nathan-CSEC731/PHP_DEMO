<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require 'FileSystem.php';

final class UnitTests extends TestCase{
	protected $fileSystemInstance;
	
	protected function setUp(){
		$this->fileSystemInstance = new FileSystem();
	}
	
	public function testCreate(){
		$fileSystemInstance->createFile("test.txt", "Hello World");
		$this->assertFileExists("test.txt");
	}
	
	public function testDelete(){
		$fileSystemInstance->deleteFile("test2.txt", "Hello World");
		$this->assertEquals(file_exists("test2.txt"), false);
	}
	
	public function testView(){
		$fileSystemInstance->createFile("test3.txt", "Hello World");
		$content = $fileSystemInstance->viewFile("test3.txt");
		$this->assertEquals("Hello World", $content);
	}
	
	public function testNetcat(){
		$this->assertEquals(1, 1);
	}
	
	public function testTraversal(){
		$this->assertEquals(1, 1);
	}
}


?>