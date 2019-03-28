<?php

class NonceTest extends PHPUnit_Framework_TestCase
{
    private $wpNonce = null;

    public function setUp()
    {
        $this->wpNonce= new \Jgpats2w\WpNoonce\Nonce('testAction', 'testName');
    }

    public function testLoad()
    {
        $this->assertEquals('testAction', $this->wpNonce->action());
        $this->assertEquals('testName', $this->wpNonce->name());
    }
}
