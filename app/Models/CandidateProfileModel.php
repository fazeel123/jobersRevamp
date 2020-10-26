<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateProfileModel extends Model
{
    use HasFactory;

    protected $table = 'candidate_profile';

    protected $fillable = [
        'candidate_full_name',
        'candidate_email',
        'candidate_date_of_birth',
        'candidate_phone_number',
        'candidate_gender',
        'candidate_nationality',
        'candidate_visa_type',
        'candidate_current_location',
        'candidate_city',
        'candidate_state',
        'candidate_country',
        'candidate_postal',
        'candidate_address',
        'candidate_lang',
        'candidate_lang_speak',
        'candidate_lang_write',
        'candidate_lang_read',
        'candidate_social_facebook',
        'candidate_social_twitter',
        'candidate_social_instagram',
        'candidate_social_telegram',
        'candidate_social_linkedin',
        'candidate_about',
        'candidate_photo'
    ];
}
