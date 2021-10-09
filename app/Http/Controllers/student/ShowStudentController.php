<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class ShowStudentController extends Controller
{
    public function index()
    {
        return view("student.get-student");
    }

    public function get()
    {
        $output="";
        $students=Student::orderBy('id','DESC')->get();
        if(count($students)){
            $output .="<div class='table-responsive'>
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Country</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>";
            foreach($students as $student){
                $output .="<tr>
                <td>{$student->id}</td>
                <td>{$student->username}</td>
                <td>{$student->age}</td>
                <td>{$student->country}</td>
                <td><button  data-toggle='modal' id='edit-student' data-id='{$student->id}' data-target='#editStudent' class='btn btn-success'>Edit</button></td>
                <td><button id='delete-student' data-id='{$student->id}' class='btn btn-danger'>Delete</button></td>
            </tr>";

            }
            $output .="</tbody>
            </table>
        </div>";

        echo $output;
        }
    }

    public function total()
    {
        $output=Student::get();
        $count=count($output);
        echo $count;
    }
}
