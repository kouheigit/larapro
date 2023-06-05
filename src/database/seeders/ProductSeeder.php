<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facade\DB;
//use Illuminate\Support\Facade\DB;
use Database\Seeders\Facades\Factory;
use Faker;
use Carbon;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
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
            //製品名
            $product = array('濃厚牛乳', 'ステーキ', 'ビール', 'にんじん', 'ポテトチップス');
            $product_name = array_rand($product);
            //faker
            $random_int = rand(1000, 9999);
            //製品群
            $detail_name = array('製品A郡', '製品B郡', '製品C郡', '製品D郡');
            $detail = array_rand($detail_name);

            $insert =[
                'product_name'=>$product_name,
                'product_number'=>$random_int,
                'detail'=>$detail,
                'day_id'=>$i,
                'updated_at'=>$now,
                'created_at'=>$now,
            ];
            DB::table('products')->insert($insert);
        }

        //
    }
}
