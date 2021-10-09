<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class AddStudentController extends Controller
{
    public function index()
    {
        return view("student.add-student");
    }

    public function create(Request $request)
    {
        $student =new Student();

        $username=$request->username;
        $age=$request->age;
        $country=$request->country;

        $student->username=$username;
        $student->age=$age;
        $student->country=$country;
        $result=$student->save();
        if($result){
            echo 1;
        }else{
            echo 0;
        }
    }
}
