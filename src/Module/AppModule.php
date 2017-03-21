<?php

namespace BEAR\VuejsSpa\Module;

use BEAR\Package\PackageModule;
use BEAR\VuejsSpa\Annotation\Api;
use josegonzalez\Dotenv\Loader as Dotenv;
use Ray\Di\AbstractModule;

class AppModule extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        Dotenv::load([
            'filepath' => dirname(dirname(__DIR__)) . '/.env',
            'toEnv' => true
        ]);

        $this->bindInterceptor(
            $this->matcher->annotatedWith(Api::class),
            $this->matcher->startsWith('on'),
            [JsonRendererInterceptor::class]
        );

        $this->install(new PackageModule);
    }
}
