<?php

namespace App\Http\Controllers\Academy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AcademyFrontCoursesController extends Controller
{
    public function ViewYourExams() {

        // // $FormEngine = new FormEngine;

        $DatabaseData = DB::table('courses')->get();

        // $rem = ['created_at', 'id', 'updated_at', 'CID',
        //     'CourseID', 'CID', 'uuid', 'ThumbNail'];

        $data = [
            'Title' => 'ECSA-HC e-Learning academy',
            'Desc' => 'Select course and view all the tests attached to it',
            "Page" => "UserExams.ViewCourses",
            // "rem" => $rem,
            "DatabaseData" => $DatabaseData,
            // // 'Form' => $FormEngine->Form('courses'),

        ];

        return view('main-ui.scrn', $data);

   }

}