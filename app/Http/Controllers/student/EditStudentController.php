<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class EditStudentController extends Controller
{
    public function index()
    {
        return view("student.edit-student");
    }

    public function edit(Request $request)
    {
        $id=$request->id;
        $students=Student::findOrFail($id);
        $output="";
        // foreach($students as $student){
            $output .="<input type='hidden' name='_token' id='token' value='{{ csrf_token() }}'>

            <div class='form-group'>
                <label for=''>Username</label>
                <input type='text' name='username' value='{$students->username}' id='edit_username' class='form-control form-control-lg'>
                <input type='hidden' name='id' value='{$students->id}' id='id' class='form-control form-control-lg'>
            </div>
            <div class='form-group'>
                <label for=''>Age</label>
                <input type='number' value='{$students->age}' name='age' id='edit_age' class='form-control form-control-lg'>
            </div>
            <div class='form-group'>
                <label for=''>Country</label>
                <input type='text' value='{$students->country}' name='country' id='edit_country' class='form-control form-control-lg'>
            </div>";
        // }
        echo $output;
    }

    public function update(Request $request)
    {
        $id=$request->id;
        $student=Student::findOrFail($id);

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
