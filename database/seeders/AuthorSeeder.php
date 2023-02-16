<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use DB;
use Carbon\Carbon;

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
                'email' => 'mwangipatrick017@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Author Two',
                'email' => 'mwangipatrick017@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],   
            [
                'name' => 'Author Three',
                'email' => 'mwangipatrick017@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],   
            [
                'name' => 'Author Four',
                'email' => 'mwangipatrick017@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],   
            [
                'name' => 'Author Five',
                'email' => 'mwangipatrick017@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]            
        ];
        DB::table('authors')->insert($author);
    }
}
