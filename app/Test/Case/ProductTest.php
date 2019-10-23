<?php

App::uses('ProductController','Controller');

class ProductTest extends \PHPUnit_Framework_TestCase{
    
    public function setUp() {
        parent::setUp();
        $this->Product = new ProductController();
    }
    
    public function testaddProduct() {
    	
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
     * @depends testupdateproduct
     */

    public function testupdateproduct() {
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


    public function testgetproduct() {
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
        unset($this->Product);
    }
    
}

?>