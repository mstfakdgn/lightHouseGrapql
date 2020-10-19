<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Department;
use App\Models\Post;
use App\Models\User;
use App\Models\Writing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->times(5)->create();
        Post::factory()->times(25)->create();
        Comment::factory()->times(50)->create();
        Writing::factory()->times(50)->create();
    }
}
