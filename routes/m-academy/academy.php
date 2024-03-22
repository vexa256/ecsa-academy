<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->group(function () {

    Route::controller(FileController::class)->group(function () {

        Route::get('createManagementFiles', 'createManagementFiles')->name('createManagementFiles');

    });
});