<?php

namespace App\Http\Controllers\DashboardCandidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateJobPreferenceController extends Controller
{
    public function getJobPreference() {
        return view('dashboard-candidates.dashboard-candidates-job-preferences');
    }

    public function JobPreferencesSubmit() {
        dd(request()->all());
    }
}
