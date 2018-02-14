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
        DB::table('users')->delete();
        $user=[
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('admin')
        ];
        DB::table('users')->insert($user);
    }
}
