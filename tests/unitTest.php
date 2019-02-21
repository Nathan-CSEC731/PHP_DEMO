<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class UnitTests extends TestCase{
	public $fileSystemInstance;
	
	public function setup(){
		$this->fileSystemInstance = new FileSystem();
	}
	
	public function testCreate(){
		$this->assertEquals(1, 1);
	}
	
	public function testDelete(){
		$this->assertEquals(1, 1);
	}
	
	public function testView(){
		$this->assertEquals(1, 1);
	}
	
	public function testNetcat(){
		$this->assertEquals(1, 1);
	}
	
	public function testTraversal(){
		$this->assertEquals(1, 1);
	}
}


?>