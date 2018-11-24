<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Juan Dela Cruz',
            'username' => 'admin',
            'email' => 'admin@me.com',
            'password' => bcrypt('passw0rd'),
            'slug' => 'admin'
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Blue Panda',
            'username' => 'author',
            'email' => 'author@me.com',
            'password' => bcrypt('passw0rd'),
            'slug' => 'author'
        ]);

        
    }
}
