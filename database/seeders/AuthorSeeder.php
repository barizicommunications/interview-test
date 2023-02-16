<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $author =[
            [
                'name' => 'Author One',
            ],
            [
                'name' => 'Author Two',
            ],   
            [
                'name' => 'Author Three',
            ],   
            [
                'name' => 'Author Four',
            ],   
            [
                'name' => 'Author Five',
            ]            
        ];
        DB::table('authors')->insert($author);
    }
}
