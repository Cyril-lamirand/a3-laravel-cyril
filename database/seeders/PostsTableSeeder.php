<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Schema::disableForeignKeyConstraints(); // !!!!

        DB::table('posts')->truncate();
        Post::factory()->times(20)->create();

        Schema::enableForeignKeyConstraints(); // !!!!
    }
}
