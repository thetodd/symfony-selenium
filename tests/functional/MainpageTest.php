<?php

namespace App\Tests\Functional;

use Facebook\WebDriver\WebDriverBy;

class MainpageTest extends FunctionalTestcase
{
    /**
     * @test Hello World Message on the Homepage
     */
    public function assertHelloWorldOnHomepage()
    {
        $this->webDriver->get($this->appUrl);
        $this->assertContains('Hello', $this->webDriver->getTitle());
        $this->assertEquals('Hello World', $this->webDriver->findElement(WebDriverBy::id('message'))->getText());
    }

}