<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_name = array('MacbookPro','液晶テレビ', '食洗機', 'DVDレコーダー', 'マッサージチェア');
        for($i=0; $i<100; $i++)
        {
            $now = Carbon\Carbon::now();
            $rand = array_rand($product_name);
            $product_value = rand(100000, 250000);
            $insert =[
                'name'=>$product_name[$rand],
                'value'=>$product_value,
                'created_at'=>$now,
                'updated_at'=>$now,
            ];
            DB::table('firsts')->insert($insert);
        }

    }
}
