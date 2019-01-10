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
            'jobtypecategory_id' => 0,
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@me.com',
            'password' => bcrypt('passw0rd'),
            'slug' => 'admin'
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'jobtypecategory_id' => 0,
            'name' => 'Mr.Client',
            'username' => 'client',
            'email' => 'client@me.com',
            'password' => bcrypt('passw0rd'),
            'slug' => 'client'
        ]);

        DB::table('users')->insert([
            'role_id' => '3',
            'jobtypecategory_id' => 0,
            'name' => 'Mr.Applicant',
            'username' => 'applicant',
            'email' => 'applicant@me.com',
            'password' => bcrypt('passw0rd'),
            'slug' => 'applicant'
        ]);

        
    }
}
