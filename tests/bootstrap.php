<?php

define('PROJECT_ROOT', realpath(__DIR__ . '/..'));

error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
date_default_timezone_set('UTC');

if (!class_exists('\PHPUnit_Framework_TestCase') && class_exists('\PHPUnit\Framework\TestCase'))
  class_alias('\PHPUnit\Framework\TestCase', '\PHPUnit_Framework_TestCase');

require PROJECT_ROOT . '/src/Nonce.php';
