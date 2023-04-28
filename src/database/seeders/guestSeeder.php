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
            $first_product = rand(1, 5);
            $second_product = rand(1, 5);
            $insert =[
                'name'=>$faker->name,
                'product_code'=>$product_value,
                'first_product'=>$first_product,
                'second_product'=>$second_product,
                'created_at'=>$now,
                'updated_at'=>$now,
            ];
           DB::table('guests')->insert($insert);
        }
    }
}
