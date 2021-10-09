<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete(Request $request)
    {
        $id=$request->id;
        $student=Student::findOrFail($id);
        $result=$student->delete();
        if($result){
            echo 1;
        }else{
        echo 0;
        }
    }
}
