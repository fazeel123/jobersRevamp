<?php

namespace App\Http\Controllers\DashboardCandidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CandidateResumeJobPreferencesSalaryModel;

class CandidateJobPreferenceController extends Controller
{
    public function getJobPreference() {
        return view('dashboard-candidates.dashboard-candidates-job-preferences');
    }

    public function JobPreferencesSalarySubmit(Request $request) {

        // dd(request()->all());

        CandidateResumeJobPreferencesSalaryModel::create([
            'resume_job_preferences_currency' => $request->salary,
            'resume_job_preferences_salary' => $request->currency,
            'resume_job_preferences_salary_from' => $request->salary_min,
            'resume_job_preferences_salary_to' => $request->salary_max
        ]);

        // $salary->timestamps = false;

        // $salary->save();

        return ['redirect' => route('index.blade.php')];
    }
}
