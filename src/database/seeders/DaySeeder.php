<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facade\DB;
use Database\Seeders\Facades\Factory;
use Faker;
use Carbon;

class DaySeeder extends Seeder
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

        $condition_name = array('状態良好','状態良','状態悪');
        $condition = array_rand($condition_name);
        $expiry_date = $now->addWeek();

        for($i=0; $i<100; $i++){
            $insert = [
                'day'=>$now,
                'condition'=>$condition,
                'expiry_date'=>$expiry_date,
                ];
        }
        DB::table('days')->insert($insert);
        //
    }
}
