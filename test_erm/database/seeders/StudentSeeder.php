<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Student::create([
            'name'=>"John",
            'email'=>"john@gmail.com",
            'phone'=>'0987776554',
            'address'=>'ygn'
        ]);
        Student::create([
            'name'=>"david",
            'email'=>"john@gmail.com",
            'phone'=>'0987776554',
            'address'=>'ygn'
        ]);
        Student::create([
            'name'=>"John",
            'email'=>"john@gmail.com",
            'phone'=>'0987776554',
            'address'=>'ygn'
        ]);
        Student::create([
            'name'=>"John",
            'email'=>"john@gmail.com",
            'phone'=>'0987776554',
            'address'=>'ygn'
        ]);

    }
}
