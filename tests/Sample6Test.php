<?php
class Sample6Test extends PHPUnit_Framework_TestCase
{
    public function testLongRunning()
    {
        for ($i = 0; $i < 2*1024*1024; $i++) {
            $this->assertTrue(true);
        }
    }
}
