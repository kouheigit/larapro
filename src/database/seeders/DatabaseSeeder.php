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
        $this->call(BookSeeder::class);
        $this->call(guestSeeder::class);
        //$this->call(SecondSeeder::class);
        $this->call(FirstSeeder::class);
        $this->call(FirstSeeder::class);
        $this->call(AttendSeeder::class);
        $this->call(JstestSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(ShowformSeeder::class);
        $this->call(ProductSeeder::class);
      //   \App\Models\User::factory(10)->create();
    }
}
