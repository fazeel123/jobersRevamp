<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\API\EducationLevelModel;
use App\Models\API\FieldModel;
use App\Models\API\MonthModel;
use App\Models\API\CareerLevelModel;
use App\Models\API\JobTypeModel;
use App\Models\API\JobIndustryModel;

class DashboardCandidateResumeController extends Controller
{
    public function getEducationLevel()
    {
        $education_level = EducationLevelModel::all();

        return response()->json($education_level);
    }

    public function getEducationField()
    {
        $education_field = FieldModel::all();

        return response()->json($education_field);
    }

    public function getMonth()
    {
        $month = MonthModel::all();

        return response()->json($month);
    }

    public function getCareerLevel()
    {
        $career_level = CareerLevelModel::all();

        return response()->json($career_level);
    }

    public function getJobType()
    {
        $job_type = JobTypeModel::all();

        return response()->json($job_type);
    }

    public function getJobIndustry()
    {
        $job_industry = JobIndustryModel::all();

        return response()->json($job_industry);
    }
}
