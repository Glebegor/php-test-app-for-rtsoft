<?php

declare(strict_types=1);

namespace App;

use Nette\Bootstrap\Configurator;
use App\Routers\RouterFactory; // Update the namespace

class Bootstrap
{
    public static function boot(): Configurator
    {
        $configurator = new Configurator;
        $appDir = dirname(__DIR__);

        // Enable Tracy for debugging
        $configurator->enableTracy($appDir . '/log');

        $configurator->setTempDirectory($appDir . '/Presenters/templates');

        $configurator->createRobotLoader()
            ->addDirectory(__DIR__)
            ->register();

        // Get the custom router
        $router = RouterFactory::createRouter();
        // Set the custom router
        $configurator->addDynamicParameters(['router' => $router]);

        $configurator->addConfig($appDir . '/config/common.neon');
        $configurator->addConfig($appDir . '/config/services.neon');

        return $configurator;
    }
}
