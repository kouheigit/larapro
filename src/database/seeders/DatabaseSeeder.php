<?php

namespace Database\Seeders;

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
        $this->call(AdminSeeder::class);
        $this->call(ShowformSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(DaySeeder::class);

        // \App\Models\User::factory(10)->create();
    }
}
