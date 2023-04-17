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
            //product_code
            $product_code = null;
            if($product_name[$rand]=='MacbookPro'){
                $product_code = 1;
            }else if($product_name[$rand]=='液晶テレビ'){
                $product_code = 2;
            }else if($product_name[$rand]=='食洗機'){
                $product_code = 3;
            }else if($product_name[$rand]=='DVDレコーダー'){
                $product_code = 4;
            }else if($product_name[$rand]=='マッサージチェア'){
                $product_code = 5;
            }

            $insert =[
                'name'=>$product_name[$rand],
                'product_code'=>$product_code,
                'value'=>$product_value,
                'created_at'=>$now,
                'updated_at'=>$now,
            ];
            DB::table('firsts')->insert($insert);
        }

    }
}
