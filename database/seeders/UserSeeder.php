<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->fullname = 'Santiago Osorio Giraldo';
        $user->email = 'santiagoo427@hotmail.com';
        $user->phone = '3206602970';
        $user->photo = 'images/no-photo.png';
        $user->password = bcrypt('admin');
        $user->role_id = 1;
        $user->save();

        $user = new User;
        $user->fullname = 'Monica Giraldo';
        $user->email = 'monica@hotmail.com';
        $user->phone = '3122911198';
        $user->photo = 'images/no-photo.png';
        $user->password = bcrypt('guest');
        $user->role_id = 2;
        $user->save();
    }

}
