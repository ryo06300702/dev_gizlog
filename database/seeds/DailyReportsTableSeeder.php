<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DailyReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daily_reports')->truncate();
        DB::table('daily_reports')->insert([
            'user_id' => 1,
            'title' => 'title',
            'content' => 'content',
            'reporting_time' => Carbon::create(2019,1,1),
            'created_at' => Carbon::create(2019,1,1),
            'updated_at' => Carbon::create(2019,1,1),
        ]);
    }
}
