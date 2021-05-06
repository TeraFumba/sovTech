<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(
            [
                'id' => 1
            ],
            [
                'name' => 'Thembinkosi Fumba',
                'email' => 'terafumba@sovtech.co.za',
                'password' => Hash::make('developer'),
                'email_verified_at' => Carbon\Carbon::now()
            ]
        );

        User::updateOrCreate(
            [
                'id' => 2
            ],
            [
                'name' => 'john Doe',
                'email' => 'john@sovtech.co.za',
                'password' => Hash::make('sovtech'),
                'email_verified_at' => Carbon\Carbon::now()
            ]
        );
    }
}
