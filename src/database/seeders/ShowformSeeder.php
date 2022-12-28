<?php

namespace Database\Seeders;
use Illuminate\Suppor\Facade\DB;
use Database\Seeders\Fake\Factory;
use Illuminate\Database\Seeder;
use Faker;
use Carbon;

class ShowformSeeder extends Seeder
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
            $sex_info = array('男', '女');
            $sex= array_rand($sex_info);

            $insert =[
                'pic'=>$faker->name,
                'email'=>$faker->email,
                'product_id'=>$i,
                'sex'=>$i,
                'address'=>$faker->address,
            ];
            DB::table('showforms')->insert($insert);
        }
    }
}
