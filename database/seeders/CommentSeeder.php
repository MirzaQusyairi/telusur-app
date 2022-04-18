<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'user_id' => 4,
            'post_id' => 3,
            'comment' => 'Menarik sekali, terimakasih atas postingannya saya jadi dapet informasi sebelum mengunjungi tempatnya',
        ]);

        Comment::create([
            'user_id' => 4,
            'post_id' => 3,
            'comment' => 'Sangat kerenn brother, thankk youuu',
        ]);
    }
}
