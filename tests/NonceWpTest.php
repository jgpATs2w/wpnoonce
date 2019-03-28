<?php

class NonceTest extends PHPUnit_Framework_TestCase
{
    private $wpNonce = null;

    public function setUp()
    {
        $this->wpNonce= new \Jgpats2w\WpNoonce\Nonce('testAction', 'testName');
    }

    public function test_ays()
    {
        if (defined('WP_TESTS_TABLE_PREFIX')) {
            $this->expectOutputRegex('/The link you followed has expired/');
            $this->wpNonce->ays();
            $this->assertTrue(true);
        }
    }
    public function test_field()
    {
        if (defined('WP_TESTS_TABLE_PREFIX')) {
            $this->expectOutputRegex('/input type="hidden" id="'.$this->wpNonce->name().'"/');
            $this->wpNonce->field();
            $this->assertTrue(true);
        }
    }
    public function test_url()
    {
        if (defined('WP_TESTS_TABLE_PREFIX')) {
            $url = $this->wpNonce->url(\admin_url('options.php?page=my_plugin_settings'));
            $nonceName = $this->wpNonce->name();
            $pattern= "/$nonceName=(.+)$/";
            $this->assertRegexp($pattern, $url);
        }
    }
}
