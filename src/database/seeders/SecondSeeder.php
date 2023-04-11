<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SecondSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<100; $i++)
        {
            $now = Carbon\Carbon::now();
            $discount = rand(100000, 250000);
            $insert =[
                'discount'=>$product_name[$rand],
                'created_at'=>$now,
                'updated_at'=>$now,
            ];
            DB::table('firsts')->insert($insert);
        }

    }
    }
}
