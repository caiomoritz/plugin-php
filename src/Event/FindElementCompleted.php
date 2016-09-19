<?php
namespace Athena\Event;

use OLX\FluentWebDriverClient\Browser\BrowserInterface;
use Facebook\WebDriver\WebDriverBy;
use Symfony\Component\EventDispatcher\Event;

class FindElementCompleted extends Event
{
    const AFTER = 'browser.find_element.after';
    /**
     * @var \Facebook\WebDriver\WebDriverBy
     */
    private $locator;
    /**
     * @var \OLX\FluentWebDriverClient\Browser\BrowserInterface
     */
    private $browser;

    /**
     * @param \Facebook\WebDriver\WebDriverBy  $locator
     * @param \OLX\FluentWebDriverClient\Browser\BrowserInterface $browser
     */
    public function __construct(WebDriverBy $locator, BrowserInterface $browser)
    {
        $this->locator = $locator;
        $this->browser = $browser;
    }

    /**
     * @return BrowserInterface
     */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * @return WebDriverBy
     */
    public function getLocator()
    {
        return $this->locator;
    }
}

