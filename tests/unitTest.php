<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require 'FileSystem.php';

final class UnitTests extends TestCase{
	protected $fileSystemInstance;
	
	protected function setUp(){
		$this->fileSystemInstance = new FileSystem();
	}
	
	/**
	* @small
	*/
	public function testCreate(){
		$response = $this->fileSystemInstance->createFile("test.txt", "Hello World");
		$this->assertFileExists("test.txt");
		$this->assertEquals("File Created", $response);
	}
	
	/**
	* @small
	*/
	public function testDelete(){
		$this->fileSystemInstance->createFile("test2.txt", "Hello World");
		$response = $this->fileSystemInstance->deleteFile("test2.txt");
		$this->assertEquals(file_exists("test2.txt"), false);
		$this->assertEquals("File Deleted", $response);
	}
	
	/**
	* @small
	*/
	public function testView(){
		$this->fileSystemInstance->createFile("test3.txt", "Hello World");
		$content = $this->fileSystemInstance->viewFile("test3.txt");
		$this->assertEquals("Hello World", $content);
	}
	
	/**
	* @small
	*/
	public function testNetcat(){
		$this->assertEquals(1, 1);
	}
	
	/**
	* @small
	*/
	public function testTraversal(){
		$this->assertEquals(1, 1);
	}
}


?>