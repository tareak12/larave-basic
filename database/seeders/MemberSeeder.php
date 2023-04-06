<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Count =1;
        While($Count<=10)
        {
            $member = new Member();
            $member -> name ='admin'.$Count;
            $member -> email ='tareq'.$Count.'@gmail.com';
            $member -> password = bcrypt('2345');
            $member -> save();
            $Count = $Count + 1;
        }
    }
}
