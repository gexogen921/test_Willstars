<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Student;

class StudentController extends ApiController
{
    public function getAll()
    {
        $students = Student::all();

        return Student::all();
    }

    public function add(Request $request)
    {
        $saveproduct = new Student($request);

        $saveproduct->save();

        return $this->respondWithTransformer($saveproduct);
    }
}
