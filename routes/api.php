<?php

use App\Http\Controllers\InvitingAnswersController;
use App\Http\Controllers\PersonsController;
use App\Http\Controllers\QuestionnaireController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('createPerson', [PersonsController::class, 'createPerson']);
Route::post('setInvitedAnswer', [InvitingAnswersController::class, 'setInvitedAnswer']);
Route::post('setQuestionnaireAnswers', [QuestionnaireController::class, 'setQuestionnaireAnswers']);
Route::get('getPersonData/{person}', [PersonsController::class, 'getPersonData']);
