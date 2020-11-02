<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')-> insert([
            'section_name' => 'Général'
        ]);

        DB::table('sections')-> insert([
            'section_name' => 'Informatique'
        ]);

        DB::table('sections')-> insert([
            'section_name' => 'Forum'
        ]);

        DB::table('sections')-> insert([
            'section_name' => 'VIP'
        ]);

        DB::table('sections')-> insert([
            'section_name' => 'Modérateurs'
        ]);
    }
}
