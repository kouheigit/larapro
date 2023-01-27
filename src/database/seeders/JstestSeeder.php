<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Carbon;
use Database\Seeders\Fake\Factory;
use Illuminate\Database\Seeder;
use Faker;

class JstestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        $now = Carbon\Carbon::now();
        for($i=0; $i<100; $i++){
            $hourly_wage = rand(1000, 1300);
            $insert =[
                'name'=>$faker->name,
                'city'=>$faker->city,
                'streetname'=>$faker->streetAddress,
                'streetaddress'=>$faker->streetAddress,
                'hourly_wage'=>$hourly_wage,
                'created_at'=>$now,
                'updated_at'=>$now,
            ];
            DB::table('jstest3')->insert($insert);
        }
        // DB::table('days')->insert($insert);

    }
}
