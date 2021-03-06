<?php
namespace Athena\Event;

use Athena\Browser\BrowserInterface;
use Symfony\Component\EventDispatcher\Event;

class SendKeysCompleted extends Event
{
    const AFTER = 'browser.send_keys.after';
    /**
     * @var \Athena\Browser\BrowserInterface
     */
    private $browser;
    /**
     * @var string
     */
    private $value;

    /**
     * SendKeysCompleted constructor.
     *
     * @param string                           $value
     * @param \Athena\Browser\BrowserInterface $browser
     */
    public function __construct($value, BrowserInterface $browser)
    {
        $this->browser = $browser;
        $this->value = $value;
    }

    /**
     * @return BrowserInterface
     */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}

