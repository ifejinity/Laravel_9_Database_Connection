<?php

namespace App\Http\Controllers;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student(){

        $data = Students::all();
        // $data = Students::where('first_name', 'like', 'a%')->get();
        return view('students.index')
            ->with(['students' =>$data]);
    }
}

