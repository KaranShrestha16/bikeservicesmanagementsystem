<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'asd@gmail.com')->first();

        if(!$user)
        {
            User::create([
                'name' => 'Karan Shrestha',
                'email' => 'asd@gmail.com',
                'password' => Hash::make('asd12345'),
                'phoneno' => 9860477716,
                'address' => 'Balaju',
                'role' => 'admin'
            ]);
        }
    }
}
