<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\Fake\Factory;
use Carbon;
use Faker;

class BookSeeder extends Seeder
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
            $random_int = rand(1200, 3500);
            $name = $faker->company."出版";
            $value = $random_int;
            $write_id = rand(1, 6);
            $insert =[
                'name'=>$name,
                'value'=>$value,
                'writer_id'=>$write_id,
                'updated_at'=>$now,
                'created_at'=>$now,
            ];
            DB::table('books')->insert($insert);
        }
    }
}
