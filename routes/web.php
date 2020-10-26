<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardCandidate;
use App\Http\Controllers\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'getIndex']);

Route::get('dashboard-candidates-profile', [DashboardCandidate\CandidateProfileController::class, 'getCandidateProfile']);
Route::post('dashboard-candidates-profile/submit', [DashboardCandidate\CandidateProfileController::class, 'store']);

Route::get('dashboard-candidates-resume', [DashboardCandidate\CandidateResumeController::class, 'getCandidateResume']);
Route::post('dashboard-candidates-resume-education/submit', [DashboardCandidate\CandidateResumeController::class, 'getResumeEducation']);

Route::get('dashboard-candidates-resume-education-list/candidate-id={id}', [DashboardCandidate\CandidateResumeController::class, 'getResumeEducationList']);
Route::post('dashboard-candidates-resume-experience/submit', [DashboardCandidate\CandidateResumeController::class, 'getResumeWorkExperience']);
Route::patch('dashboard-candidates-resume-experience/update', [DashboardCandidate\CandidateResumeController::class, 'getResumeWorkExperienceUpdate']);

Route::get('dashboard-candidates-resume-experience-list/candidate-id={id}', [DashboardCandidate\CandidateResumeController::class, 'getResumeWorkExperienceList']);

Route::get('dashboard-candidates-job-preferences', [DashboardCandidate\CandidateJobPreferenceController::class, 'getJobPreference']);
Route::post('dashboard-candidates-job-preferences-salary/submit', [DashboardCandidate\CandidateJobPreferenceController::class, 'JobPreferencesSubmit']);
