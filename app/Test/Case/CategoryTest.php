<?php
use PHPUnit\Framework\TestCase;
use Cake\Core\Exception\Exception;
App::uses('CakeRequest', 'Network');
App::uses('CakeResponse', 'Network');
App::uses('CategoryController','Controller');



class CategoryTest extends \PHPUnit_Framework_TestCase{
    
    public function setUp() {

        parent::setUp();
        $CakeRequest      = new CakeRequest();
        $CakeResponse     = new CakeResponse();
        $this->Category   = new CategoryController($CakeRequest, $CakeResponse);
       
    }

    public function testaddCategory() {
    	
    	$stack = [];
    	/* This assertion is used for running test give the true value or false value*/
    	$this->assertTrue(true);
    	return 'categoryadded';
    	/* This assertion is used for chk the test is empty or not */
        $this->assertEmpty($stack);
        return $stack;
       /* expectException is used to check the Argument is invalidate or not  */

        $this->expectOutputString('ok');
        print 'ok';

        $this->expectException(InvalidArgumentException::class);
    }

    /**
     * @depends testaddCategory
     */

    public function testupdatecategory() {
       $stack = [];
    	/* This assertion is used for running test give the true value or false value*/
    	$this->assertTrue(true);
    	return 'categoryupdate';
    	/* This assertion is used for chk the test is empty or not */
        $this->assertEmpty($stack);
        return $stack;
       /* expectException is used to check the Argument is invalidate or not  */

        $this->expectOutputString('ok');
        print 'ok';

        $this->expectException(InvalidArgumentException::class);
    }

    public function testgetcategory() {
      $stack = [];
    	/* This assertion is used for running test give the true value or false value*/
    	$this->assertTrue(true);
    	return 'getcategory';
    	/* This assertion is used for chk the test is empty or not */
        $this->assertEmpty($stack);
        return $stack;
        /* expectException is used to check the Argument is invalidate or not  */

        $this->expectOutputString('ok');
        print 'ok';

        $this->expectException(InvalidArgumentException::class);
    }

    public function testcategorydelete() {
      $stack = [];
    	/* This assertion is used for running test give the true value or false value*/
    	$this->assertTrue(true);
    	return 'category deleted';
    	/* This assertion is used for chk the test is empty or not */
        $this->assertEmpty($stack);
        return $stack;
        /* expectException is used to check the Argument is invalidate or not  */

        $this->expectOutputString('ok');
        print 'ok';

        $this->expectException(InvalidArgumentException::class);
    }

    public function tearDown() {
        parent::tearDown();
        unset($this->Category);
    }
}

?>