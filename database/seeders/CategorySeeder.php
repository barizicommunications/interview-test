<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category =[
            [
                'name' => 'Category One',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Category Two',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],   
            [
                'name' => 'Category Three',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],   
            [
                'name' => 'Category Four',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],   
            [
                'name' => 'Category Five',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]            
        ];
        DB::table('categories')->insert($category);
    }
}
