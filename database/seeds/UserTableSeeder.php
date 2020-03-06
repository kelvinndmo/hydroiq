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
        DB::table('users')->truncate();

        $data = array(
            array('name'=>'Test User', 'email'=>'test@user.com','password'=>\Hash::make('password')),
            array('name'=>'Admin User', 'email'=>'admin@user.com','password'=>\Hash::make('password'))
        );
        foreach($data as $datum){
            DB::table('users')->insert($datum);
        }
        $this->command->info(UserTableSeeder::class." Seeded");
    }
}
