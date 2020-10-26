<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateResumeEducationModel extends Model
{
    use HasFactory;

    protected $table = "candidate_resume_education";

    protected $fillable = [
        'resume_education_level',
        'resume_education_field ',
        'resume_education_institution',
        'resume_education_country',
        'resume_education_city',
        'resume_education_from_month',
        'resume_education_from_year',
        'resume_education_to_month',
        'resume_education_to_year',
        'resume_education_present'
    ];
}
