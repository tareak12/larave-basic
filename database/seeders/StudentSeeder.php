<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       Student::create(
           [
               'name'=>'Tarek',
               'mobile'=>'0186423333',
               'email'=>'test@gmail.com',
           ]
       );
    }
}
