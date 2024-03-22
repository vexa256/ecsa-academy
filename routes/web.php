<?php

use App\Http\Controllers\Academy\AcademyDataController;
use App\Http\Controllers\Academy\AcademyExamsController;
use App\Http\Controllers\Academy\AcademyFrontController;
use App\Http\Controllers\Academy\AcademyFrontCoursesController;
use App\Http\Controllers\Academy\AcademyNotesController;
use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::controller(AcademyFrontController::class)->group(function () {

    Route::get('PublicHealthCourses', 'PublicHealthCourses')->name('PublicHealthCourses');
    Route::get('HealthCarePractice', 'HealthCarePractice')->name('HealthCarePractice');
    Route::get('HealthMgtCourses', 'HealthMgtCourses')->name('HealthMgtCourses');
    Route::get('PharmaCourses', 'PharmaCourses')->name('PharmaCourses');
    Route::get('EnglishCourses', 'EnglishCourses')->name('EnglishCourses');
    Route::get('SupplyChainCourses', 'SupplyChainCourses')->name('SupplyChainCourses');

    Route::get('FrenchCourses', 'FrenchCourses')->name('FrenchCourses');

    Route::get('EPNOperatedCourses', 'EPNOperatedCourses')->name('EPNOperatedCourses');

    Route::get('EcsaOperatedCourses', 'EcsaOperatedCourses')->name('EcsaOperatedCourses');

    Route::get('ECSAHC_ACADEMY', 'ECSAHC_ACADEMY')->name('ECSAHC_ACADEMY');
    Route::get('/', 'ECSAHC_ACADEMY')->name('home');

    Route::get('/OurCourseCatalogue', 'OurCourseCatalogue')->name('OurCourseCatalogue');

});
Route::controller(AcademyFrontCoursesController::class)->group(function () {

    Route::get('ViewYourExams',
        'ViewYourExams')->name('ViewYourExams');

});

Route::middleware(['auth'])->group(function () {
    Route::controller(AcademyExamsController::class)->group(function () {

        Route::get('ModularTestSelectCourse',
            'ModularTestSelectCourse')->name('ModularTestSelectCourse');

        Route::get('ModularTestSelectModule', 'ModularTestSelectModule')
            ->name('ModularTestSelectModule');

        Route::get('MgtModularTests', 'MgtModularTests')->name('MgtModularTests');

        Route::get('SetModularTestQuestions/{TID}', 'SetModularTestQuestions')
            ->name('SetModularTestQuestions');

        Route::get('PostTestSelectCourse', 'PostTestSelectCourse')->name('PostTestSelectCourse');

        Route::get('AdminCp', 'MgtPostTests')->name('AdminCp');

        Route::get('MgtPostTests', 'MgtPostTests')->name('MgtPostTests');

        Route::get('SetPostTestQuestions/{TID}', 'SetPostTestQuestions')->name('SetPostTestQuestions');

        Route::get('PreTestSelectCourse', 'PreTestSelectCourse')->name('PreTestSelectCourse');

        Route::get('MgtPreTests', 'MgtPreTests')->name('MgtPreTests');

        Route::get('SetPreTestQuestions/{TID}', 'SetPreTestQuestions')->name('SetPreTestQuestions');

    });

    Route::controller(AcademyNotesController::class)->group(function () {

        Route::get('NotesSelectCourse', 'NotesSelectCourse')->name('NotesSelectCourse');

        Route::get('NotesSelectModule', 'NotesSelectModule')->name('NotesSelectModule');

        Route::get('NotesSelectSession', 'NotesSelectSession')->name('NotesSelectSession');

        Route::get('MgtSessionNotes', 'MgtSessionNotes')->name('MgtSessionNotes');

    });

    Route::controller(AcademyDataController::class)->group(function () {

        Route::get('MgtSessions', 'MgtSessions')->name('MgtSessions');

        Route::get('SessionModuleSelect', 'SessionModuleSelect')->name('SessionModuleSelect');

        Route::get('SessionCourseSelect', 'SessionCourseSelect')->name('SessionCourseSelect');

        Route::get('MgtModules', 'MgtModules')->name('MgtModules');

        Route::get('CourseSelect', 'CourseSelect')->name('CourseSelect');

        Route::get('MgtCourses', 'MgtCourses')->name('MgtCourses');

        // Route::get('/', 'MgtCourses')->name('home');

    });

    Route::controller(CrudController::class)->group(function () {

        Route::get('MassDelete/{TableName}/{id}', 'MassDelete')->name('MassDelete');

        Route::post('MassUpdate', 'MassUpdate')->name('MassUpdate');

        Route::post('MassInsert', 'MassInsert')->name('MassInsert');
    });
});

require __DIR__ . '/auth.php';

/**  The Lord Jesus Christ in his name and power, has made this tool to create for me 100000000000000000000 USD and change and touch the lives of his people , It shall be a success and no weapon formed against its success shall prosper, Its function and relevance shall be evident to all starting now , All who see this system se greatness of our our Lord and Savior Jesus christ , It opens for m 100000000000000000000000000 more opportunities to go nations and as long as i leave i shall not die or stop being relevant it shall open doors of nations for me and given trillions of of USD and GOLD in the next 5 Years , I will not fail and it shall not fail. The Holy spirit is upon this work of my hand and no devil shall hinder its expansion and progress. Every year 10000 Students enroll and certify and it shall never have bugs. God use this to bless me beyond measure and touch the lives of all those who use it . By your power i thank you that you honor this agreement. And This agreement stands for the rest of my life and i shall not be sick or die early i shall not struggle and father i thank you because ever where its used you go before me and cover me and show your power in this system mightily . Amen */
