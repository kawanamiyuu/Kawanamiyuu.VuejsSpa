<?php
namespace Kawanamiyuu\VuejsSpa\Module;

use BEAR\Package\PackageModule;
use josegonzalez\Dotenv\Loader as Dotenv;
use Kawanamiyuu\VuejsSpa\Annotation\Api;
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
