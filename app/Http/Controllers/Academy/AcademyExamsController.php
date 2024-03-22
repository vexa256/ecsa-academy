<?php

namespace App\Http\Controllers\Academy;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FormEngine;
use DB;
use Illuminate\Http\Request;

class AcademyExamsController extends Controller
{

    public function PreTestSelectCourse() {

         // $FormEngine = new FormEngine;

         $DatabaseData = DB::table('courses')->get();

         $rem = ['created_at', 'id', 'updated_at', 'CID',
             'CourseID', 'CID', 'uuid', 'ThumbNail'];

         $data = [
             'Title' => 'ECSA-HC e-Learning academy',
             'Desc' => 'Select course to attach Pre-Test to',
             "Page" => "PreTests.SelectCourse",
             "rem" => $rem,
             "DatabaseData" => $DatabaseData,
             // 'Form' => $FormEngine->Form('courses'),

         ];

         return view('main-ui.scrn', $data);

    }


    public function MgtPreTests(Request $request) {


        $FormEngine = new FormEngine;

            $course = DB::table('courses')->where('CID', $request->CID)->first();
        $DatabaseData = DB::table('tests')
            ->where('CID' ,$request->CID)
            ->where('Type' ,'PreTest')
        ->get();

        $rem = ['created_at', 'id', 'TID', 'MID' ,'SID', 'Type', 'updated_at', 'CID', 'CourseID', 'CID', 'uuid', 'ThumbNail'];

        $data = [
            'Title' => 'ECSA-HC e-Learning academy',
            'Desc' => 'Manage Pre-Tests for the selected course '.$course->CourseName,
            "Page" => "PreTests.MgtPretests",
            "rem" => $rem,
            "CID" => $request->CID,
            "CourseName" => $course->CourseName,
            "DatabaseData" => $DatabaseData,
            "PreTestCount" => $DatabaseData->count(),
            'Form' => $FormEngine->Form('tests'),

        ];

        return view('main-ui.scrn', $data);

    }



    public function SetPreTestQuestions($TID) {

        // dd($TID);
        $FormEngine = new FormEngine;

            $test = DB::table('tests')->where('TID', $TID)->first();
            $DatabaseData = DB::table('post_and_pre_test_questions')
            ->where('TID' ,$TID)
            // ->where('Type' ,'PreTest')
        ->get();

        $rem = ['created_at', 'id', 'TID', 'MID' ,'SID', 'Type', 'updated_at', 'CID', 'CourseID', 'CID', 'uuid', 'ThumbNail'];

        $data = [
            'Title' => 'ECSA-HC e-Learning academy',
            'Desc' => 'Set the Pre-Test questions for the selected Test '.$test->TestName,
            "Page" => "PreTests.SetPreTest",
            "rem" => $rem,
            "TID" => $TID,
            "CID" => $test->CID,
            "TestName" => $test->TestName,
            "CourseName" => $test->TestName,
            "DatabaseData" => $DatabaseData,

            'Form' => $FormEngine->Form('post_and_pre_test_questions'),

        ];

        return view('main-ui.scrn', $data);

    }




    public function PostTestSelectCourse() {

        // $FormEngine = new FormEngine;

        $DatabaseData = DB::table('courses')->get();

        $rem = ['created_at', 'id', 'updated_at', 'CID',
            'CourseID', 'CID', 'uuid', 'ThumbNail'];

        $data = [
            'Title' => 'ECSA-HC e-Learning academy',
            'Desc' => 'Select course to attach Post-Test to',
            "Page" => "PostTests.SelectCourse",
            "rem" => $rem,
            "DatabaseData" => $DatabaseData,
            // 'Form' => $FormEngine->Form('courses'),

        ];

        return view('main-ui.scrn', $data);

   }


   public function MgtPostTests(Request $request) {


       $FormEngine = new FormEngine;

           $course = DB::table('courses')->where('CID', $request->CID)->first();
       $DatabaseData = DB::table('tests')
           ->where('CID' ,$request->CID)
           ->where('Type' ,'PostTest')
       ->get();

       $rem = ['created_at', 'id', 'TID', 'MID' ,'SID', 'Type', 'updated_at', 'CID', 'CourseID', 'CID', 'uuid', 'ThumbNail'];

       $data = [
           'Title' => 'ECSA-HC e-Learning academy',
           'Desc' => 'Manage Post-Tests for the selected course '.$course->CourseName,
           "Page" => "PostTests.MgtPostTest",
           "rem" => $rem,
           "CID" => $request->CID,
           "CourseName" => $course->CourseName,
           "DatabaseData" => $DatabaseData,
           "PostTestCount" => $DatabaseData->count(),
           'Form' => $FormEngine->Form('tests'),

       ];

       return view('main-ui.scrn', $data);

   }



   public function SetPostTestQuestions($TID) {

       // dd($TID);
       $FormEngine = new FormEngine;

           $test = DB::table('tests')->where('TID', $TID)->first();
           $DatabaseData = DB::table('post_and_pre_test_questions')
           ->where('TID' ,$TID)
           // ->where('Type' ,'PostTest')
       ->get();

       $rem = ['created_at', 'id', 'TID', 'MID' ,'SID', 'Type', 'updated_at', 'CID', 'CourseID', 'CID', 'uuid', 'ThumbNail'];

       $data = [
           'Title' => 'ECSA-HC e-Learning academy',
           'Desc' => 'Set the Post-Test questions for the selected Test '.$test->TestName,
           "Page" => "PostTests.SetPostTest",
           "rem" => $rem,
           "TID" => $TID,
           "CID" => $test->CID,
           "TestName" => $test->TestName,
           "CourseName" => $test->TestName,
           "DatabaseData" => $DatabaseData,

           'Form' => $FormEngine->Form('post_and_pre_test_questions'),

       ];

       return view('main-ui.scrn', $data);

   }



//    Modular Test



public function ModularTestSelectCourse() {

    // $FormEngine = new FormEngine;

    $DatabaseData = DB::table('courses')->get();

    $rem = ['created_at', 'id', 'updated_at', 'CID',
        'CourseID', 'CID', 'uuid', 'ThumbNail'];

    $data = [
        'Title' => 'ECSA-HC e-Learning academy',
        'Desc' => 'Select course to attach Modular-Test to',
        "Page" => "ModularTests.SelectCourse",
        "rem" => $rem,
        "DatabaseData" => $DatabaseData,
        // 'Form' => $FormEngine->Form('courses'),

    ];

    return view('main-ui.scrn', $data);

}



public function ModularTestSelectModule(Request $request) {

    // $FormEngine = new FormEngine;

    $DatabaseData = DB::table('modules')
    ->where('CID', $request->CID)
    ->get();

    $rem = ['created_at', 'id', 'updated_at', 'CID',
        'CourseID', 'CID', 'uuid', 'ThumbNail'];

    $data = [
        'Title' => 'ECSA-HC e-Learning academy',
        'Desc' => 'Select module to attach Modular-Test to',
        "Page" => "ModularTests.SelectModule",
        "rem" => $rem,
        "DatabaseData" => $DatabaseData,
        // 'Form' => $FormEngine->Form('courses'),

    ];

    return view('main-ui.scrn', $data);

}

public function MgtModularTests(Request $request) {


   $FormEngine = new FormEngine;

       $module = DB::table('modules AS M')->where('M.MID', $request->MID)
       ->join('courses AS C', 'C.CID', 'M.CID')->first();
   $DatabaseData = DB::table('tests')
       ->where('CID' ,$module->CID)
       ->where('MID' ,$module->MID)
       ->where('Type' ,'ModularTest')
   ->get();

   $rem = ['created_at', 'id', 'TID', 'MID' ,'SID', 'Type', 'updated_at', 'CID', 'CourseID', 'CID', 'uuid', 'ThumbNail'];

   $data = [
       'Title' => 'ECSA-HC e-Learning academy',
       'Desc' => 'Manage Modular-Tests for the selected course '.$module->CourseName,
       "Page" => "ModularTests.MgtModularTest",
       "rem" => $rem,
       "CID" => $module->CID,
       "MID" => $module->MID,
       "CourseName" => $module->CourseName,
       "DatabaseData" => $DatabaseData,
       "ModularTestCount" => $DatabaseData->count(),
       'Form' => $FormEngine->Form('tests'),

   ];

   return view('main-ui.scrn', $data);

}



public function SetModularTestQuestions($TID) {

   // dd($TID);
   $FormEngine = new FormEngine;

       $test = DB::table('tests')->where('TID', $TID)->first();
       $DatabaseData = DB::table('post_and_pre_test_questions')
       ->where('TID' ,$TID)
       // ->where('Type' ,'ModularTest')
   ->get();

   $rem = ['created_at', 'id', 'TID', 'MID' ,'SID', 'Type', 'updated_at', 'CID', 'CourseID', 'CID', 'uuid', 'ThumbNail'];

   $data = [
       'Title' => 'ECSA-HC e-Learning academy',
       'Desc' => 'Set the Modular-Test questions for the selected Test '.$test->TestName,
       "Page" => "ModularTests.SetModularTest",
       "rem" => $rem,
       "TID" => $TID,
       "CID" => $test->CID,
       "MID" => $test->MID,
       "TestName" => $test->TestName,
       "CourseName" => $test->TestName,
       "DatabaseData" => $DatabaseData,

       'Form' => $FormEngine->Form('post_and_pre_test_questions'),

   ];

   return view('main-ui.scrn', $data);

}



}
