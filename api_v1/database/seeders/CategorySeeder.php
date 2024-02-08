<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
            [
                
                'name' => 'Nature',
                'description'=>('Suncreen'),
                
            ],
            [
                
                'name' => 'Revlon',
                'description'=>('torner'),
                
            ],
            [
                
                'name' => 'Yada',
                'description'=>('suncreen'),
                
            ],
        ]);
    }
}
