<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id'=>1,
                'name'=>'role 1',
                'description'=>'any description'
            ],
            [
                'id'=>2,
                'name'=>'role 2',
                'description'=>'any description'
            ],
            [
                'id'=>3,
                'name'=>'role 3',
                'description'=>'any description'
            ],
            [
                'id'=>4,
                'name'=>'role 4',
                'description'=>'any description'
            ]
        ]);
    }
}
