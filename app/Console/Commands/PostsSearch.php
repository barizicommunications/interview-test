<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;

class PostsSearch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'search:posts {search}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Search post by title or body content';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $posts = Post::where('title',  'like', '%'.$this->argument('search').'%')
                ->orWhere('body',  'like', '%'.$this->argument('search').'%')
                ->get();
        $this->info($posts);
    }
}
