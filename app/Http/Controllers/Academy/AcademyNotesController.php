<?php

namespace App\Http\Controllers\Academy;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FormEngine;
use DB;
use Illuminate\Http\Request;

class AcademyNotesController extends Controller
{
    public function NotesSelectCourse()
    {
        // $FormEngine = new FormEngine;

        $DatabaseData = DB::table('courses')->get();

        $rem = ['created_at', 'id', 'updated_at', 'CID',
            'CourseID', 'CID', 'uuid', 'ThumbNail'];

        $data = [
            'Title' => 'ECSA-HC e-Learning academy',
            'Desc' => 'Select course to attach notes to',
            "Page" => "Notes.SelectCourse",
            "rem" => $rem,
            "DatabaseData" => $DatabaseData,
            // 'Form' => $FormEngine->Form('courses'),

        ];

        return view('main-ui.scrn', $data);
    }

    public function NotesSelectModule(Request $request)
    {
        // $FormEngine = new FormEngine;

        $DatabaseData = DB::table('modules')
            ->where('CID', $request->CID)
            ->get();

        $rem = ['created_at', 'id', 'updated_at', 'CID',
            'CourseID', 'CID', 'uuid', 'ThumbNail'];

        $data = [
            'Title' => 'ECSA-HC e-Learning academy',
            'Desc' => 'Select course module to attach notes to',
            "Page" => "Notes.SelectModule",
            "rem" => $rem,
            "DatabaseData" => $DatabaseData,
            // 'Form' => $FormEngine->Form('courses'),

        ];

        return view('main-ui.scrn', $data);
    }

    public function NotesSelectSession(Request $request)
    {

        // $FormEngine = new FormEngine;

        $DatabaseData = DB::table('sessions')
            ->where('MID', $request->MID)
            ->get();

        $rem = ['created_at', 'id', 'updated_at', 'CID',
            'CourseID', 'CID', 'uuid', 'ThumbNail'];

        $data = [
            'Title' => 'ECSA-HC e-Learning academy',
            'Desc' => 'Select  module session to attach notes to',
            "Page" => "Notes.SelectSession",
            "rem" => $rem,
            "DatabaseData" => $DatabaseData,
            // 'Form' => $FormEngine->Form('courses'),

        ];

        return view('main-ui.scrn', $data);

    }

    public function MgtSessionNotes(Request $request)
    {

        $FormEngine = new FormEngine;

        $d = DB::table('sessions')->where('SID', $request->SID)->first();
        $c = DB::table('courses')->where('CID', $d->CID)->first();
        $m = DB::table('modules')->where('MID', $d->MID)->first();

        $DatabaseData = DB::table('session_notes')
            ->where('MID', $d->MID)
            ->where('CID', $c->CID)
            ->get();

        $rem = ['created_at', 'id', 'updated_at', 'CID',
            'CourseID', 'CID', 'uuid', 'ThumbNail', 'SID', 'NID', 'MID', 'DocumentUrl'];

        $data = [
            'Title' => 'ECSA-HC e-Learning academy',
            'Desc' => 'Manage session notes attached to the course: '.$c->CourseName.'and the module: '.$m->ModuleName.', under the session: '.$d->SessionName,
            "Page" => "Notes.MgtNotes",
            "rem" => $rem,
            "SID" => $d->SID,
            "CID" => $d->CID,
            "MID" => $d->MID,
            "ModuleName" => $m->ModuleName,
            "CourseName" => $c->CourseName,
            "SessionName" => $d->SessionName,

            "DatabaseData" => $DatabaseData,
            'Form' => $FormEngine->Form('session_notes'),

        ];

        return view('main-ui.scrn', $data);

    }
}
