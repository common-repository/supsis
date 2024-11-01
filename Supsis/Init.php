<?php

namespace Supsis;

/**
 * Supsis system initializer.
 */
final class Init
{
    /**
     * Registers all services.
     * @return void
     */
    public static function register()
    {
        foreach (self::getServices() as $service) {
            $instance = new $service;
            if (method_exists($instance, "register")) {
                $instance->register();
            }
        }
    }

    /**
     * Stores all services.
     * @return array
     */
    private static function getServices()
    {
        return [
            Modules\Admin::class,
            Modules\Widget::class,
        ];
    }
}
