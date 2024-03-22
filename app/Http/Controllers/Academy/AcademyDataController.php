<?php

namespace App\Http\Controllers\Academy;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FormEngine;
use DB;
use Illuminate\Http\Request;

class AcademyDataController extends Controller
{
    public function MgtCourses()
    {

        $FormEngine = new FormEngine;

        $DatabaseData = DB::table('courses')
            ->orderByDesc('id')
            ->get();

        $rem = ['created_at', 'id', 'Category', 'CourseLanguage', 'CourseOperator', 'updated_at', 'CID', 'CourseID', 'CID', 'uuid', 'ThumbNail'];

        $data = [
            'Title' => 'ECSA-HC e-Learning academy',
            'Desc' => 'Manage Course Catalogue',
            "Page" => "Courses.MgtCourses",
            "rem" => $rem,
            "DatabaseData" => $DatabaseData,
            'Form' => $FormEngine->Form('courses'),

        ];

        return view('main-ui.scrn', $data);
    }

    public function CourseSelect()
    {

        $FormEngine = new FormEngine;

        $DatabaseData = DB::table('courses')->get();

        $rem = ['created_at', 'id', 'updated_at', 'CID',
            'CourseID', 'CID', 'uuid', 'ThumbNail'];

        $data = [
            'Title' => 'ECSA-HC e-Learning academy',
            'Desc' => 'Select course to attach modules to',
            "Page" => "Modules.SelectCourse",
            "rem" => $rem,
            "DatabaseData" => $DatabaseData,
            'Form' => $FormEngine->Form('courses'),

        ];

        return view('main-ui.scrn', $data);
    }

    public function MgtModules(Request $request)
    {

        // dd($request->CID);
        $FormEngine = new FormEngine;

        $Course = DB::table('courses')->where('CID', $request->CID)->first();
        $DatabaseData = DB::table('modules')->where('CID', $request->CID)->get();

        $rem = ['created_at', 'id', 'updated_at',
            'CID', 'MID', 'CourseID', 'CID', 'uuid',
            'ThumbNail'];

        $data = [
            'Title' => 'ECSA-HC e-Learning academy',
            'Desc' => 'Manage all modules attached to the selected course ' . $Course->CourseName,
            "Page" => "Modules.MgtModule",
            "rem" => $rem,
            "CourseName" => $Course->CourseName,
            "CID" => $request->CID,
            "DatabaseData" => $DatabaseData,
            'Form' => $FormEngine->Form('modules'),

        ];

        return view('main-ui.scrn', $data);
    }

    public function SessionCourseSelect()
    {

        $FormEngine = new FormEngine;

        $DatabaseData = DB::table('courses')->get();

        $rem = ['created_at', 'id', 'updated_at', 'CID',
            'CourseID', 'CID', 'uuid', 'ThumbNail'];

        $data = [
            'Title' => 'ECSA-HC e-Learning academy',
            'Desc' => 'Select course to attach modules to',
            "Page" => "Sessions.SelectCourse",
            "rem" => $rem,
            "DatabaseData" => $DatabaseData,
            'Form' => $FormEngine->Form('courses'),

        ];

        return view('main-ui.scrn', $data);
    }

    public function SessionModuleSelect(Request $request)
    {

        $FormEngine = new FormEngine;

        $DatabaseData = DB::table('modules')->where('CID', $request->CID)->get();

        $rem = ['created_at', 'id', 'updated_at', 'CID',
            'CourseID', 'CID', 'uuid', 'ThumbNail'];

        $data = [
            'Title' => 'ECSA-HC e-Learning academy',
            'Desc' => 'Select course to attach modules to',
            "Page" => "Sessions.SelectModule",
            "rem" => $rem,
            "DatabaseData" => $DatabaseData,
            'Form' => $FormEngine->Form('modules'),

        ];

        return view('main-ui.scrn', $data);
    }

    public function MgtSessions(Request $request)
    {

        $FormEngine = new FormEngine;

        $d = DB::table('modules')->where('MID', $request->MID)->first();
        $c = DB::table('courses')->where('CID', $d->CID)->first();

        $DatabaseData = DB::table('sessions')->where('MID', $request->MID)
            ->where('CID', $c->CID)->get();

        $rem = ['created_at', 'id', 'updated_at', 'CID', 'MID',
            'CourseID', 'CID', 'uuid', 'ThumbNail', 'SID'];

        $data = [
            'Title' => 'Course  session management for ' . $c->CourseName,
            'Desc' => 'Manage all the sessions attached to the selected module ' . $d->ModuleName,
            "Page" => "Sessions.MgtSession",
            "rem" => $rem,
            "CID" => $d->CID,
            "MID" => $d->MID,
            "ModuleName" => $d->ModuleName,
            "DatabaseData" => $DatabaseData,
            'Form' => $FormEngine->Form('sessions'),

        ];

        return view('main-ui.scrn', $data);
    }
}
