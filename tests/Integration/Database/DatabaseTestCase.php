<?php

namespace Illuminate\Tests\Integration\Database;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Orchestra\Testbench\TestCase;

abstract class DatabaseTestCase extends TestCase
{
    use DatabaseMigrations;

    /**
     * The current database driver.
     *
     * @return string
     */
    protected $driver;

    protected function getEnvironmentSetUp($app)
    {
        $connection = $app['config']->get('database.default');

        $this->driver = $app['config']->get("database.connections.$connection.driver");
    }
}
