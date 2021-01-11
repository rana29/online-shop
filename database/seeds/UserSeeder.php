<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::table('users')->insert([

        	'role_id'=>'1',
        	'name'=>'Md.Admin',
        	'username'=>'admin',
        	'email'=>'admin@gmail.com',
        	'password'=>bcrypt('admin'),

        ]);

         Db::table('users')->insert([

        	'role_id'=>'2',
        	'name'=>'Md.Author',
        	'username'=>'author',
        	'email'=>'author@gmail.com',
        	'password'=>bcrypt('author')

        ]);
    }
}
