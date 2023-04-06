<?php

namespace Database\Seeders;

use App\Models\User;
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
        $count =1;
        while($count<=10)
        {
            $user = new User();
            $user->name = 'Admin'.$count;
            $user->email = 'admin'.$count.'@gmail.com';
            $user->password = bcrypt('123456');
            $user->save();
            $count = $count + 1;
        }

    }
}
