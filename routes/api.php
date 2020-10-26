<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getCountries', [API\CountryStateCityController::class, 'getCountries']);
Route::get('getStates', [API\CountryStateCityController::class, 'getStates']);
Route::get('getCities', [API\CountryStateCityController::class, 'getCities']);
Route::get('getCitiesList', [API\CountryStateCityController::class, 'getCitiesList']);
Route::get('getVisaType', [API\DashboardCandidateProfileController::class, 'getVisaType']);
Route::get('getLanguage', [API\DashboardCandidateProfileController::class, 'getLanguage']);
Route::get('getLanguageLevel', [API\DashboardCandidateProfileController::class, 'getLanguageLevel']);
Route::get('getEducationLevel', [API\DashboardCandidateResumeController::class, 'getEducationLevel']);
Route::get('getEducationField', [API\DashboardCandidateResumeController::class, 'getEducationField']);
Route::get('getMonth', [API\DashboardCandidateResumeController::class, 'getMonth']);
Route::get('getCareerLevel', [API\DashboardCandidateResumeController::class, 'getCareerLevel']);
Route::get('getJobType', [API\DashboardCandidateResumeController::class, 'getJobType']);
Route::get('getJobIndustry', [API\DashboardCandidateResumeController::class, 'getJobIndustry']);
Route::get('getSalaryType', [API\DashboardCandidateJobPreferencesController::class, 'getSalaryType']);
Route::get('getCurrencyList', [API\DashboardCandidateJobPreferencesController::class, 'getCurrencyList']);
