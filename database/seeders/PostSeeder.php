<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Author;
use App\Jobs\NewPostCreatedJob;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Post::factory()->count(30)->create(); 

        $posts = Post::factory()->count(30)->create(); 

        try {
            //code...
            $posts->each(function($post) {
                $author = Author::where('id', $post->author_id)->first();
                $post = Post::where('id', $post->id)->first();
                dispatch(new NewPostCreatedJob($author, $post));
            });
        } catch (\Throwable $th) {
            //throw $th;
        }
       
    }
}
