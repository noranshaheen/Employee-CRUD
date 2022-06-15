<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            [
                'id'=>1,
                'name'=>'dept 1'
            ],
            [
                'id'=>2,
                'name'=>'dept 2'
            ],
            [
                'id'=>3,
                'name'=>'dept 3'
            ],
            [
                'id'=>4,
                'name'=>'dept 4'
            ]
            ]);
    }
}
