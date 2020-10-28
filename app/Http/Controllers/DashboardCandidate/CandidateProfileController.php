<?php

namespace App\Http\Controllers\DashboardCandidate;

use App\Http\Controllers\Controller;
use App\Models\CandidateProfileModel;
use App\Models\CountryModel;
use App\Models\LanguageModel;
use App\Models\VisaTypeModel;
use App\Models\LanguageLevelModel;
use Illuminate\Http\Request;

class CandidateProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCandidateProfile()
    {
        return view('dashboard-candidates.dashboard-candidates-profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate([
            'candidate_full_name' => 'required',
            'candidate_email' => 'required',
            'candidate_date_of_birth' => 'required',
            'candidate_phone_number' => 'required',
            'candidate_gender' => 'required',
            'candidate_nationality' => 'required',
            'candidate_visa_type' => 'required',
            'candidate_current_location' => 'required',
            'candidate_city' => 'required',
            'candidate_state' => 'required',
            'candidate_country' => 'required',
            'candidate_address' => 'required',
            'candidate_postal' => 'required',
            'candidate_lang' => '',
            'candidate_lang_speak' => '',
            'candidate_lang_write' => '',
            'candidate_lang_read' => '',
            'candidate_social_facebook' => '',
            'candidate_social_twitter' => '',
            'candidate_social_instagram' => '',
            'candidate_social_telegram' => '',
            'candidate_social_linkedin' => '',
            'candidate_about' => '',
            'candidate_photo' => ''
        ]);

        dd(request()->all());

        $candidate = CandidateProfileModel::create($request->all());

        $candidate->save();

        return ['redirect' => route('index.blade.php')];

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CandidateProfileModel  $candidateProfileModel
     * @return \Illuminate\Http\Response
     */
    public function getCandidateProfileUpdate($id)
    {
        $candidate = CandidateProfileModel::findOrFail($id);

        return view('dashboard-candidates.dashboard-candidates-my-profile-edit');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CandidateProfileModel  $candidateProfileModel
     * @return \Illuminate\Http\Response
     */
    public function CandidateProfileUpdate(Request $request, $candidate_id)
    {

        request()->validate([
            'candidate_full_name' => 'required',
            'candidate_email' => 'required',
            'candidate_date_of_birth' => 'required',
            'candidate_phone_number' => 'required',
            'candidate_gender' => 'required',
            'candidate_nationality' => 'required',
            'candidate_visa_type' => 'required',
            'candidate_current_location' => 'required',
            'candidate_city' => 'required',
            'candidate_state' => 'required',
            'candidate_country' => 'required',
            'candidate_address' => 'required',
            'candidate_postal' => 'required',
            'candidate_lang' => '',
            'candidate_lang_speak' => '',
            'candidate_lang_write' => '',
            'candidate_lang_read' => '',
            'candidate_social_facebook' => '',
            'candidate_social_twitter' => '',
            'candidate_social_instagram' => '',
            'candidate_social_telegram' => '',
            'candidate_social_linkedin' => '',
            'candidate_about' => '',
            'candidate_photo' => ''
        ]);

        $candidate = CandidateProfileModel::find($candidate_id)->update($request->all());

        return ['redirect' => route('index.blade.php')];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CandidateProfileModel  $candidateProfileModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CandidateProfileModel $candidateProfileModel)
    {
        //
    }

}
