<?php

declare(strict_types=1);

namespace PoP\MetaQueryWP;

use PoP\Root\Component\AbstractComponent;

/**
 * Initialize component
 */
class Component extends AbstractComponent
{
    // const VERSION = '0.1.0';

    public static function getDependedComponentClasses(): array
    {
        return [
            \PoP\MetaQuery\Component::class,
            \PoP\EngineWP\Component::class,
        ];
    }

    public static function getDependedMigrationPlugins(): array
    {
        return [
            'migrate-metaquery-wp',
        ];
    }
}
