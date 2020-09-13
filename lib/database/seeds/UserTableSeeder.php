<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data=[
            [
                'email'=>'conglam@gmail.com',
                'password'=>bcrypt('123'),
                'level'=>1
            ],
            [
                'email'=>'jimlam@gmail.com',
                'password'=>bcrypt('123'),
                'level'=>1
            ],
        ];
        DB::table('tbl_users')->insert($data);
    }
}
