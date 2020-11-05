<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('threads')-> insert([
            'thread_name' => 'Thread test1',
            'user_id' => 1,
            'subsection_id' => 1,
            'section_id' => 1
        ]);

        DB::table('threads')-> insert([
            'thread_name' => 'Thread test2',
            'user_id' => 1,
            'subsection_id' => 18,
            'section_id' => 5
        ]);
    }
}
