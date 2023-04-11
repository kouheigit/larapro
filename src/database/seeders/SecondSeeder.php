<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon;

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
            $discount = rand(10, 15);
            $insert =[
                'discount'=>$discount,
                'created_at'=>$now,
                'updated_at'=>$now,
            ];
            DB::table('seconds')->insert($insert);
        }

    }
}
