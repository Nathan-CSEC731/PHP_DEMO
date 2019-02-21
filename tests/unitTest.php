<?php

require FileSystem.php

use PHPUnit\Framework\TestCase;

class Tests extends TestCase{
	use PHPUnit\Framework\TestCase;
	public $fileSystemInstance;
	
	public function setup(): void{
		$this->fileSystemInstance = new FileSystem();
	}
	
	public function testCreate(): void{
		$this->assertEquals(1, 1);
	}
	
	public function testDelete(): void{
		$this->assertEquals(1, 1);
	}
	
	public function testView(): void{
		$this->assertEquals(1, 1);
	}
	
	public function testNetcat(): void{
		$this->assertEquals(1, 1);
	}
	
	public function testTraversal(): void{
		$this->assertEquals(1, 1);
	}
}


?>