<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateResumeJobPreferencesModel extends Model
{
    use HasFactory;

    protected $table = "candidate_resume_job_preferences";

    protected $fillable = [
        'resume_job_preferences_candidate',
        'resume_job_preferences_salary',
        'resume_job_preferences_currency',
        'resume_job_preferences_salary_from',
        'resume_job_preferences_salary_to',
        'resume_job_preferences_work_location',
        'resume_job_preferences_skills',
        'resume_job_preferences_skills_industry',
        'resume_job_preferences_position_level',
        'resume_job_preferences_job_type',
        'resume_job_preferences_work_type'
    ];
}
