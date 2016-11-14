<?php

use App\Utils\Testing\DoctrineDatabaseMigrations;

abstract class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    /**
     * @inheritdoc
     */
    protected function setUp()
    {
        parent::setUp();

        $uses = array_flip(class_uses_recursive(static::class));

        if (isset($uses[DoctrineDatabaseMigrations::class])) {
            $this->generateMigrationFiles();
            $this->runDatabaseMigrations();
        }
    }

    /**
     * @inheritdoc
     */
    protected function tearDown()
    {
        parent::tearDown();

        $uses = array_flip(class_uses_recursive(static::class));

        if (isset($uses[DoctrineDatabaseMigrations::class])) {
            $this->deleteMigrationFiles();
        }   
    }
}
