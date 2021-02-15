<?php


namespace App\Http\Controllers\Api;

use App\Grades;
use Illuminate\Support\Facades\DB;

class GradesController
{
    public function getGreades($student_id)
    {
        $grades = $users = DB::table('grades')
            ->where('student_id', '=', $student_id)
            ->get();

        return $grades;
    }

    public function addGrages()
    {
        return "some test";
    }
}
