<?php

namespace tests;
use PHPUnit\Framework\TestCase;

//ClassTest inherits from PHPUnit\Framework\TestCase.
class SampleTest extends TestCase
{
//The tests are public methods that are named test*.
    public function test_sum() {
        //assert that an actual value matches an expected value.
        $this->assertEquals(5, 5);
    }

    public function test_sample_test() {
        $this->assertFalse(5==4);
    }

    protected function setUp() :void
    {
        print "setUp\n";
    }

    protected function tearDown() :void
    {
        print "tearDown\n";
    }


    public static function setUpBeforeClass() :void
    {
        print "setUpBeforeClass\n";
    }

    public static function tearDownAfterClass() :void
    {
        print "tearDownAfterClass\n";
    }

}
