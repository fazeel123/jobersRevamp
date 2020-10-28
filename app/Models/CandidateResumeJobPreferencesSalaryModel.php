<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateResumeJobPreferencesSalaryModel extends Model
{
    use HasFactory;

    protected $table = "candidate_resume_job_preferences_salary";

    public $timestamps = false;

    protected $fillable = [
        'resume_job_preferences_candidate',
        'resume_job_preferences_salary',
        'resume_job_preferences_currency',
        'resume_job_preferences_salary_from',
        'resume_job_preferences_salary_to'
    ];
}
