<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => 'geroge',
            "email" => 'sorho@yahoo.com',
            "password" =>  Hash::make('numlock11'),
         ]);

        //  User::create([
        //     "name" => 'Debbie',
        //     "phone" => '+233202429593',
        //     "email" => 'deborahludwine@gmail.com'
        //  ]);
    }
}
