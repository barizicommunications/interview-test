<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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
            ],
            [
                'name' => 'Category Two',
            ],   
            [
                'name' => 'Category Three',
            ],   
            [
                'name' => 'Category Four',
            ],   
            [
                'name' => 'Category Five',
            ]            
        ];
        DB::table('categories')->insert($category);
    }
}
