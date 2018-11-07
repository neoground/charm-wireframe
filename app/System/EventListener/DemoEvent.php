<?php
/**
 * This file contains an event listener.
 */

namespace App\System\EventListener;

use Charm\Events\EventListener;
use Charm\Vivid\Charm;

/**
 * Class DemoEvent
 *
 * Demo event
 *
 * @package App\System\Events
 */
class DemoEvent extends EventListener
{

    /**
     * The configuration
     */
    protected function configure()
    {
        $this->fireOnEvent("App", "demoEvent");
    }

    /**
     * Event execution
     */
    protected function fire()
    {
        Charm::Logging()->info('Demo Event fired');
    }
}