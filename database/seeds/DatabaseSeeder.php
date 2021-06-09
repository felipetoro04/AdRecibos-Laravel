<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionSeeder::class,
            ProfileSeeder::class,                    
            PermisionProfileSeeder::class,
            ParameterSeeder::class,
            UserSeeder::class,
            EnterpriceSeeder::class,
            ReceiptSeeder::class,
            ]);
    }
}
