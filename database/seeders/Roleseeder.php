<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Author', 'Editor', 'Subscriber', 'Administrator'];
        foreach($roles as $role){
            DB::table('roles')->insert([
                'name' => $role,
            ]);
        }
    }
}
