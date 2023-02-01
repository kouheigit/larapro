<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Carbon;
use Database\Seeders\Fake\Factory;
use Illuminate\Database\Seeder;

class AttendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon\Carbon::now();
        for($i=0; $i<100; $i++) {
            $worktime = rand(4, 12);
            $missing_number = rand(0, 1);
            $insert = [
                'worktime'=>$worktime,
                'missing_number'=>$missing_number,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            DB::table('attendances')->insert($insert);
        }
    }
}
