<?php

namespace App\Utils\Testing;

use Illuminate\Contracts\Console\Kernel;

trait DoctrineDatabaseMigrations
{
    /**
     * Define hooks to create database schema and migration files before and after each test.
     *
     * @return void
     */
    public function generateMigrationFiles()
    {
        $this->artisan('doctrine:schema:create');
        $this->artisan('doctrine:migrations:diff');        
    }
    
    /**
     * Define hooks to migrate the database before and after each test.
     *
     * @return void
     */
    public function runDatabaseMigrations()
    {
        $this->artisan('doctrine:migrations:migrate');

        $this->app[Kernel::class]->setArtisan(null);

        $this->beforeApplicationDestroyed(function () {
            $this->artisan('doctrine:migrations:rollback');
        });
    }

    /**
     * Delete all migrations during tests.
     *
     * @return void
     */
    public function deleteMigrationFiles()
    {        
        $files = glob(base_path().'/database/migrations/tests/*');
        foreach ($files as $file) {
            if(is_file($file)) {
                unlink($file);
            }
        }
    }
}
