<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\Facades\Factory;
use Faker;
use Carbon;

class guestSeeder extends Seeder
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
            $product_value = rand(1, 5);
            $product_value1 = rand(1, 5);
            $product_value2 = rand(1, 5);
            $insert =[
                'name'=>$faker->name,
                'product_code'=>$product_value,
                'product_code1'=>$product_value1,
                'product_code2'=>$product_value2,
                'created_at'=>$now,
                'updated_at'=>$now,
            ];
           DB::table('guests')->insert($insert);
        }
    }
}
