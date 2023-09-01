<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\student_info;

class StudentController extends Controller
{
    public function Index(){
        $data=student_info::latest()->get();
        return response()->json($data);
    }

    public function Insert(Request $request){


        student_info::insert([
            'name' => $request->name,
            'email' => $request->email,
            'class' => $request->class,
        ]);
        return response('Submit Successfully');


    }

}
