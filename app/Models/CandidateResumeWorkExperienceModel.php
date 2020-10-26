<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateResumeWorkExperienceModel extends Model
{
    use HasFactory;

    protected $table = "candidate_resume_experience";

    protected $fillable = [
        'resume_experience_job_title',
        'resume_experience_company',
        'resume_experience_country',
        'resume_experience_city',
        'resume_experience_career_level',
        'resume_experience_job_type',
        'resume_experience_industry',
        'resume_experience_department',
        'resume_experience_from_month',
        'resume_experience_from_year',
        'resume_experience_to_month',
        'resume_experience_to_year',
        'resume_experience_description'
    ];
}
