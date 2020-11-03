<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')-> insert([
            'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum iaculis diam in malesuada molestie. Mauris non arcu in est ultrices fermentum non eu lorem. Maecenas congue pulvinar libero, lobortis dignissim ligula imperdiet et. Aliquam orci tellus, commodo a ex id, placerat congue dolor. Praesent non nulla iaculis, imperdiet eros vitae, pellentesque libero. ',
            'user_id' => 1,
            'thread_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('posts')-> insert([
            'post_content' => 'Vivamus in sodales neque, at dignissim ligula. Aliquam porta tempor sapien nec auctor. Aliquam non diam at sem ultricies vulputate. Sed imperdiet sem ac urna lacinia, at accumsan dolor faucibus. Mauris tempor, arcu sit amet semper hendrerit, dolor purus rhoncus lacus, id facilisis elit magna eget metus. Mauris in dapibus felis, ut euismod felis. ',
            'user_id' => 1,
            'thread_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('posts')-> insert([
            'post_content' => ' Praesent non nulla iaculis, imperdiet eros vitae, pellentesque libero. ',
            'user_id' => 1,
            'thread_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
