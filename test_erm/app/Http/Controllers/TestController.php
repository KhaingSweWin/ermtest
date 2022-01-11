<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Passport;

class TestController extends Controller
{
    //
    public function test()
    {
        $student=Student::find(1);
        echo($student->id);
        $students=Student::orderBy('name','desc')->get();
        //dd($student->toArray());
        foreach($students as $student)
        {
            echo $student->id."," .$student->name ."<br>";
        }
        $passports=Passport::whereMonth('start_date','05')->whereYear('start_date','2020')->get();
       // dd($passports->toArray());
        foreach($passports as $passport)
        {
            echo $passport->code . ",". $passport->student->name;
        }
    }
}
