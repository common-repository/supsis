<?php

namespace Supsis\Modules;

use Supsis\Config;

/**
 * Supsis chat bubble.
 */
class Widget extends Config
{
    /**
     * Registers supsis chat bubble.
     * @return void
     */
    public function register()
    {
        add_action("wp_enqueue_scripts", [$this, "addBubble"]);
    }

    /**
     * Adds supsis chat bubble.
     * @return void
     */
    function addBubble()
    {
        wp_enqueue_script("supsis-bubble-sync", SUPSIS_URL . "js/supsis-sync.js");
        wp_enqueue_script("supsis-bubble", $this->widgetUrl);
    }
}
