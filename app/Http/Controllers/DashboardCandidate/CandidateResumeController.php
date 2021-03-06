<?php

namespace App\Http\Controllers\DashboardCandidate;

use App\Http\Controllers\Controller;
use App\Models\CandidateResumeEducationModel;
use App\Models\CandidateResumeWorkExperienceModel;
use Illuminate\Http\Request;

class CandidateResumeController extends Controller
{
    public function getCandidateResume()
    {
        return view('dashboard-candidates.dashboard-candidates-resume');
    }

    public function getResumeEducation(Request $request)
    {
        dd(request()->all());
    }

    public function getResumeEducationList($id)
    {
        $education = CandidateResumeEducationModel::where('resume_education_candidate', $id)->get();

        return response()->json($education);
    }

    public function getResumeWorkExperience(Request $request)
    {
        dd(request()->all());
    }

    public function getResumeWorkExperienceUpdate(Request $request)
    {
        dd(request()->all());
    }

    public function getResumeWorkExperienceList($id)
    {
        $experience = CandidateResumeWorkExperienceModel::where('resume_experience_candidate', $id)->get();

        return response()->json($experience);
    }
}
