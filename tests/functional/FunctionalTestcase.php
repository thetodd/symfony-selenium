<?php

namespace App\Tests\Functional;

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\WebDriverCapabilityType;

class FunctionalTestcase extends \PHPUnit\Framework\TestCase
{

    /**
     * @var RemoteWebDriver
     */
    protected $webDriver;
    protected $appUrl = 'http://webapp/';

    public function setUp()
    {
        $capabilities = array(WebDriverCapabilityType::BROWSER_NAME => 'chrome');
        $this->webDriver = RemoteWebDriver::create('http://chrome:4444/wd/hub', $capabilities);
    }

    public function tearDown()
    {
        $this->webDriver->quit();
    }
}