@extends('layouts/app')

@section('content')

    @include('sections/head-candidate')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sticky-top secondary-menu-sticky-top">
                        <div class="secondary-menu">
                            <ul class="list-unstyled mb-0">
                                <li><a href="dashboard-candidates">Dashboard</a></li>
                                <li><a href="dashboard-candidates-my-profile">My Profile</a></li>
                                <li><a class="active" href="dashboard-candidates-my-resume">My Resume</a></li>
                                <li><a href="dashboard-candidates-job-preferences">Job Preferences</a></li>
                                <li><a href="dashboard-candidates-alerts-management">My Job alerts</a></li>
                                <li><a href="dashboard-candidates-manage-jobs">Manage Jobs</a></li>
                                <li><a href="dashboard-candidates-interviews">Interviews</a></li>
                                <li><a href="dashboard-candidates-pricing">Pricing Plan</a></li>
                                <li><a href="dashboard-candidates-settings">Settings</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="wrapper">
        <section>
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="user-dashboard-info-box">
                            <div class="dashboard-resume-title d-flex align-items-center">
                                <div class="section-title-02 mb-sm-0">
                                    <h4 class="mb-0">Education</h4>
                                </div>
                                <!-- <a class="btn btn-md ml-sm-auto btn-primary" data-toggle="collapse" href="#dateposted" role="button" aria-expanded="false" aria-controls="dateposted"> <i style="font-size:12px;" class="fa fa-plus"></i> Add Education</a> -->
                            </div>
                            <div class="collapse show" id="dateposted">
                                <div class="bg-light p-3 mt-4">
                                    <form @submit.prevent="resumeEducationSubmit" class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Education Level</label>
                                            <select class="form-control" name="candidate_education_level"
                                                id="candidate_education_level" v-model="education_level">
                                                <option value="0">Select any Level</option>
                                                <option v-for="data in arr_education_level"
                                                    :value="data.education_level_id">@{{ data . education_level_name }}
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Field of Study</label>
                                            <select class="form-control" name="candidate_education_field"
                                                id="candidate_education_field" v-model="education_field">
                                                <option value="0">Select any Field</option>
                                                <option v-for="data in arr_education_field" :value="data.field_id">
                                                    @{{ data . field_name }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Institute</label>
                                            <input type="text" name="candidate_institute" id="candidate_institute" class="form-control" value=""
                                            placeholder="Name of Education Institution" v-model="candidate_institute">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Country</label>
                                            <select class="form-control" name="candidate_country" id="candidate_country" v-model="country" @change="getCities()">
                                                <option value="0">Select any Country</option>
                                                <option v-for="data in arr_country" :value="data.id">@{{ data.country_name }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>City</label>
                                            <select class="form-control" name="candidate_city" id="candidate_city" v-model="city">
                                                <option value="0">Select any City</option>
                                                <option v-for="data in arr_city" :value="data.city_id">@{{ data.city_name }}</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="d-block mt-2 mb-3">Currently studying here</label>
                                            <div class="custom-control custom-radio d-inline">
                                                <input type="radio" value="Yes" id="customRadio1" name="customRadio"
                                                    class="custom-control-input stillstudy" id="candidate_study_status" v-model="candidate_study_status">
                                                <label class="custom-control-label" for="customRadio1">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline ml-3">
                                                <input type="radio" value="No" id="customRadio2" name="customRadio" checked="checked"
                                                    class="custom-control-input stillstudy" id="candidate_study_status-no" v-model="candidate_study_status">
                                                <label class="custom-control-label" for="customRadio2">No</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 select-border">
                                            <label>From</label>
                                            <select class="form-control" name="candidate_education_from" id="candidate_education_from" v-model="month_from">
                                                <option value="0">Select any Month</option>
                                                <option v-for="data in arr_month_from" :value="data.month_id">@{{ data.month_name}}</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3 select-border">
                                            <label> &nbsp; </label>
                                            <input type="text" name="candidate_education_from_year" id="candidate_education_from_year" class="form-control" value=""
                                            placeholder="Year" v-model="candidate_education_from_year">
                                        </div>

                                        <div class="form-group col-md-3 select-border">
                                            <label class="study-yes-no">To</label>
                                            <select class="form-control study-yes-no" name="candidate_education_to" id="candidate_education_to" v-model="month_to">
                                                <option value="0">Select any Month</option>
                                                <option v-for="data in arr_month_to" :value="data.month_id">@{{ data.month_name}}</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3 select-border">
                                            <div class="study-yes-no">
                                                <label>&nbsp;</label>
                                                <input type="text" name="candidate_education_to_year" id="candidate_education_to_year" class="form-control" value=""
                                                placeholder="Year" v-model="candidate_education_to_year">
                                            </div>
                                        </div>

                                        <form class="form-row align-items-center">
                                            <div class="form-group col-md-6">
                                                <label>Major Courses</label>
                                                <input type="text" class="form-control" name="candidate_major_one" id="candidate_major_one" v-model="candidate_major_one" placeholder="Major Course(s)" value="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label> &nbsp; </label>
                                                <input type="text" class="form-control" name="candidate_major_two" id="candidate_major_two" v-model="candidate_major_two" placeholder="Major Cours(s)" value="">
                                            </div>
                                        </form>


                                        <a href="javascript:void(0);" class="add-more-course form-group col-12"> <i
                                                style="font-size:12px;" class="fa fa-plus"></i> Add More Courses </a> <span
                                            style="display:none;" id="remaining">4</span>


                                        <div class="form-group col-md-12 mt-4">
                                            <button @click="resumeEducationSubmit()" class="btn btn-md btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="jobber-candidate-timeline mt-4">
                                <div class="jobber-timeline-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div v-for="data in arr_get_education_list" v-if="data.resume_education_present == 0" :key="data.resume_education_id" class="jobber-timeline-item">
                                    <div class="jobber-timeline-cricle">
                                        <i class="far fa-circle"></i>
                                    </div>
                                    <div class="jobber-timeline-info">
                                        <div class="dashboard-timeline-info">
                                            <div class="dashboard-timeline-edit">
                                                <ul class="list-unstyled d-flex">
                                                    <li><a class="text-right" data-toggle="collapse" href="#dateposted-02"
                                                            role="button" aria-expanded="false" aria-controls="dateposted">
                                                            <i class="fas fa-pencil-alt text-info mr-2" v-on:click="data.visible = !data.visible"></i> </a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt text-danger"></i></a></li>
                                                </ul>
                                            </div>
                                        <span class="jobber-timeline-time">@{{ data.resume_education_from_month + ", " + data.resume_education_from_year }} -
                                            @{{ data.resume_education_to_month + ", " + data.resume_education_to_year }}</span>
                                            <h6 class="mb-2">@{{ data.resume_education_level }}</h6>
                                            <span>- @{{ data.resume_education_institution }} @{{ data.resume_education_level }} @{{ data.resume_education_institution }}</span>
                                            {{-- <p class="mt-2"></p> --}}
                                        </div>
                                        <div class="collapse show" id="" v-if="!data.visible">
                                            <div class="bg-light p-3">
                                                <form  @submit.prevent="resumeEducationUpdate" class="form-row collapse show" id="dateposted-01">

                                                    <div class="form-group col-md-6">
                                                        <label>Education Level</label>
                                                        <select class="form-control" name="education_level_list" id="education_level_list" v-model="data.education_level_list">
                                                            <option v-for="data in arr_education_level_list" :value="data.education_level_id">@{{ data.education_level_name }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Field of Study</label>
                                                        <select class="form-control" name="education_field_list" id="education_field_list" v-model="data.education_field_list">
                                                            <option v-for="data in arr_education_field_list" :value="data.field_id">@{{ data.field_name }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Institute</label>
                                                        <input type="text" class="form-control" name="education_institution_list" id="education_institution_list" v-model="data.education_institution_list" value="{{ old('education_institution_list') }}">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Country</label>
                                                        <select class="form-control" name="education_country_list" id="education_country_list" v-model="data.education_country_list">
                                                        <option v-for="data in arr_education_country_list" :value="data.id">@{{ data.country_name }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>City</label>
                                                        <select class="form-control" name="education_city_list" id="education_city_list" v-model="data.education_city_list">
                                                        <option v-for="data in arr_education_city_list" :value="data.city_id">@{{ data.city_name }}</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label class="d-block mt-2 mb-3">Currently studying here</label>
                                                        <div class="custom-control custom-radio d-inline">
                                                            <input type="radio" value="Yes" id="customRadio1"
                                                                name="customRadio1"
                                                                class="custom-control-input stillstudy1">
                                                            <label class="custom-control-label"
                                                                for="customRadio1">Yes</label>
                                                        </div>
                                                        <div class="custom-control custom-radio d-inline ml-3">
                                                            <input type="radio" value="No" id="customRadio2"
                                                                name="customRadio1" class="custom-control-input stillstudy1"
                                                                checked="checked">
                                                            <label class="custom-control-label"
                                                                for="customRadio2">No</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-3 select-border">
                                                        <label>From</label>
                                                        <select class="form-control" name="education_work_from_month_list" id="education_work_from_month_list" v-model="data.education_work_from_month_list">
                                                            <option v-for="data in arr_education_work_from_month_list" :value="data.month_id">@{{ data.month_name }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3 select-border">
                                                        <label> &nbsp; </label>
                                                        <input type="text" name="education_work_from_year_list" id="education_work_from_year_list" class="form-control" value=""
                                                        placeholder="Year" v-model="data.education_work_from_year_list">
                                                    </div>

                                                    <div class="form-group col-md-3 select-border">
                                                        <label class="study-yes-no">To</label>
                                                        <select class="form-control study-yes-no" name="education_work_to_month_list" id="education_work_to_month_list" v-model="data.education_work_to_month_list">
                                                            <option v-for="data in arr_education_work_to_month_list" :value="data.month_id">@{{ data.month_name }}</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-3 select-border">
                                                        <div class="study-yes-no">
                                                            <label>&nbsp;</label>
                                                            <input type="text" name="education_work_to_year_list" id="education_work_to_year_list" class="form-control" value=""
                                                            placeholder="Year" v-model="data.education_work_to_year_list">
                                                        </div>
                                                    </div>


                                                    <div class="form-group col-md-6">
                                                        <label>Major Courses</label>
                                                        <input type="text" class="form-control" name="" id="">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label> &nbsp; </label>
                                                        <input type="text" class="form-control" name="" id="">
                                                    </div>

                                                    <a href="javascript:void(0);"
                                                        class="add-more-course1 form-group col-12"> <i
                                                            style="font-size:12px;" class="fa fa-plus"></i> Add More Courses
                                                    </a> <span style="display:none;" id="remaining1">4</span>

                                                    <button @click="resumeEducationUpdate()" class="btn btn-md btn-primary">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--=================================
                    Work & Experience -->
                        <div class="user-dashboard-info-box">
                            <div class="dashboard-resume-title d-flex align-items-center">
                                <div class="section-title-02 mb-sm-0">
                                    <h4 class="mb-0">Work Experience</h4>
                                </div>
                                <!-- <a class="btn btn-md ml-sm-auto btn-primary" data-toggle="collapse" href="#dateposted-05" role="button" aria-expanded="false" aria-controls="dateposted">Add Experience</a> -->
                            </div>
                            <div class="collapse show" id="dateposted-05">
                                <div class="bg-light p-3 mt-4">
                                    <form @submit.prevent="resumeWorkExperienceSubmit" class="form-row">
                                        <div class="form-group col-md-12">
                                            <div class="form-group col-md-6">Do your have work experience?</div>
                                            <div class="form-group col-md-6">
                                                <div class="custom-control custom-radio d-inline">
                                                    <input type="radio" value="Yes" id="labelworkexpy" name="customRadio1" id="candidate_work_experience"
                                                        class="custom-control-input labelwork" checked="checked">
                                                    <label class="custom-control-label" for="labelworkexpy">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio d-inline ml-3">
                                                    <input type="radio" value="No" id="labelworkexpn" name="customRadio1" id="candidate_work_experience"
                                                        class="custom-control-input labelwork">
                                                    <label class="custom-control-label" for="labelworkexpn">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 exp-div">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="candidate_work_title" id="candidate_work_title" v-model="candidate_work_title" placeholder="Job Title" value="">
                                        </div>
                                        <div class="form-group col-md-6 exp-div">
                                            <label>Company Name</label>
                                            <input type="text" class="form-control" name="candidate_work_company" id="candidate_work_company" v-model="candidate_work_company" placeholder="Company Name" value="">
                                        </div>
                                        <div class="form-group col-md-6 exp-div">
                                            <label>Country</label>
                                            <select class="form-control national-country" name="candidate_work_country" id="candidate_work_country" v-model="work_country">
                                                <option value="0">Select any Country</option>
                                                <option v-for="data in arr_work_country" :value="data.id">@{{ data.country_name }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6 exp-div">
                                            <label>City</label>
                                            <select class="form-control national-country" name="candidate_work_city" id="candidate_work_city" v-model="work_city">
                                                <option value="0">Select any City</option>
                                                <option v-for="data in arr_work_city" :value="data.city_id">@{{ data.city_name }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6 exp-div">
                                            <label>Career Level</label>
                                            <select class="form-control national-country" name="candidate_work_career" id="candidate_work_career" v-model="work_career">
                                                <option value="0">Select any Career Level</option>
                                                <option v-for="data in arr_work_career" :value="data.career_level_id">@{{ data.career_level_name }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6 exp-div">
                                            <label>Job Type</label>
                                            <select class="form-control national-country" name="candidate_work_type" id="candidate_work_type" v-model="work_type">
                                                <option value="0">Select any Job Type</option>
                                                <option v-for="data in arr_work_type" :value="data.job_type_id">@{{ data.job_type_name }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6 exp-div">
                                            <label>Job Industry</label>
                                            <select class="form-control national-country" name="candidate_work_industry" id="candidate_work_industry" v-model="work_industry">
                                                <option value="0">Select any Job Industry</option>
                                                <option v-for="data in arr_work_industry" :value="data.industry_id">@{{ data.industry_name }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6 exp-div">
                                            <label>Department</label>
                                            <select class="form-control national-country" name="candidate_work_department" id="candidate_work_department" v-model="work_department">
                                                <option value="0">Select any Job Department</option>
                                                <option v-for="data in arr_work_department" :value="data.industry_id">@{{ data.specialization_one }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3 select-border exp-div">
                                            <label>From</label>
                                            <select class="form-control" name="candidate_work_from_month" id="candidate_work_from_month" v-model="work_from_month">
                                                <option value="0">Select any Month</option>
                                                <option v-for="data in arr_work_from_month" :value="data.month_id">@{{ data.month_name}}</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3 select-border exp-div">
                                            <label> &nbsp; </label>
                                            <input type="text" class="form-control" name="candidate_work_from_year" id="candidate_work_from_year" v-model="work_from_year" value="" placeholder="Year">
                                        </div>

                                        <div class="form-group col-md-3 select-border exp-div">
                                            <label class="workpresent-to">To</label>
                                            <select class="form-control workpresent-to" name="candidate_work_to_month" id="candidate_work_to_month" v-model="work_to_month">
                                                <option value="0">Select any Month</option>
                                                <option v-for="data in arr_work_to_month" :value="data.month_id">@{{ data.month_name}}</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3 select-border exp-div ">
                                            <div class="workpresent-to">
                                                <label>&nbsp;</label>
                                                <input type="text" class="form-control" name="candidate_work_to_year" id="candidate_work_to_year" v-model="work_to_year" value="" placeholder="Year">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 exp-div">
                                            <div class="custom-control custom-checkbox d-inline">
                                                <input type="checkbox" id="workpresent" name="workpresent"
                                                    class="workpresent custom-control-input">
                                                <label class="custom-control-label" for="workpresent">Currently Working
                                                    Here</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 exp-div">
                                            <label>Description</label>
                                            <textarea class="form-control desc" rows="4" name="candidate_work_description" id="candidate_work_description" v-model="candidate_work_description"></textarea>
                                        </div>
                                        <div class="form-group col-md-12 mb-0 exp-div">
                                            <button @click="resumeWorkExperienceSubmit()" class="btn btn-md btn-primary">Save</button>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <div class="jobber-candidate-timeline mt-4 exp-div">
                                <div class="jobber-timeline-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div v-for="data in arr_get_work_experience_list" v-if="data.resume_experience_present == 0" :key="data.resume_experience_id" class="jobber-timeline-item">
                                    <div class="jobber-timeline-cricle">
                                        <i class="far fa-circle"></i>
                                    </div>
                                    <div class="jobber-timeline-info">
                                        <div class="dashboard-timeline-info">
                                            <div class="dashboard-timeline-edit">
                                                <ul class="list-unstyled d-flex">
                                                    <li><a class="text-right" data-toggle="collapse" href="#dateposted-06"
                                                            role="button" aria-expanded="false" aria-controls="dateposted">
                                                            <i class="fas fa-pencil-alt text-info mr-2" v-on:click="data.visible_list = !data.visible_list"></i> </a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt text-danger"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="jobber-timeline-time">@{{ data.resume_experience_from_month + ", " + data.resume_experience_from_year }} -
                                                @{{ data.resume_experience_to_month + ", " + data.resume_experience_to_year }}</span>
                                            <h6 class="mb-2">@{{ data.resume_experience_job_title }}</h6>
                                            <span>- @{{ data.resume_experience_company }}</span>
                                            <p class="mt-2">@{{ data.resume_experience_description }}</p>
                                        </div>
                                        <div class="collapse show" id="" v-if="!data.visible_list">
                                            <div class="bg-light p-3">
                                                <form  class="form-row">
                                                    <div class="form-group col-md-6 exp-div">
                                                        <label>Title</label>
                                                        <input type="text" class="form-control" name="candidate_work_title_list" id="candidate_work_title_list" v-model="data.candidate_work_title_list" placeholder="Job Title" value="">
                                                    </div>
                                                    <div class="form-group col-md-6 exp-div">
                                                        <label>Company Name</label>
                                                        <input type="text" class="form-control" name="candidate_work_company_list" id="candidate_work_company_list" v-model="data.candidate_work_company_list" placeholder="Company Name" value="">
                                                    </div>
                                                    <div class="form-group col-md-6 exp-div">
                                                        <label>Country</label>
                                                        <select class="form-control national-country" name="candidate_work_country_list" id="candidate_work_country_list" v-model="data.work_country_list">
                                                            <option value="0">Select any Country</option>
                                                            <option v-for="data in arr_work_country_list" :value="data.id">@{{ data.country_name }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 exp-div">
                                                        <label>City</label>
                                                        <select class="form-control national-country_list" name="candidate_work_city_list" id="candidate_work_city_list" v-model="data.work_city_list">
                                                            <option value="0">Select any City</option>
                                                            <option v-for="data in arr_work_city_list" :value="data.city_id">@{{ data.city_name }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 exp-div">
                                                        <label>Career Level</label>
                                                        <select class="form-control national-country" name="candidate_work_career_list" id="candidate_work_career_list" v-model="data.work_career_list">
                                                            <option value="0">Select any Career Level</option>
                                                            <option v-for="data in arr_work_career_list" :value="data.career_level_id">@{{ data.career_level_name }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 exp-div">
                                                        <label>Job Type</label>
                                                        <select class="form-control national-country" name="candidate_work_type_list" id="candidate_work_type_list" v-model="data.work_type_list">
                                                            <option value="0">Select any Job Type</option>
                                                            <option v-for="data in arr_work_type_list" :value="data.job_type_id">@{{ data.job_type_name }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 exp-div">
                                                        <label>Job Industry</label>
                                                        <select class="form-control national-country" name="candidate_work_industry_list" id="candidate_work_industry_list" v-model="data.work_industry_list">
                                                            <option value="0">Select any Job Industry</option>
                                                            <option v-for="data in arr_work_industry_list" :value="data.industry_id">@{{ data.industry_name }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 exp-div">
                                                        <label>Department</label>
                                                        <select class="form-control national-country" name="candidate_work_department_list" id="candidate_work_department_list" v-model="data.work_department_list">
                                                            <option value="0">Select any Job Department</option>
                                                            <option v-for="data in arr_work_department_list" :value="data.industry_id">@{{ data.specialization_one }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3 select-border exp-div">
                                                        <label>From</label>
                                                        <select class="form-control" name="candidate_work_from_month_list" id="candidate_work_from_month_list" v-model="data.work_from_month_list">
                                                            <option value="0">Select any Month</option>
                                                            <option v-for="data in arr_work_from_month_list" :value="data.month_id">@{{ data.month_name}}</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3 select-border exp-div">
                                                        <label> &nbsp; </label>
                                                        <input type="text" class="form-control" name="candidate_work_from_year_list" id="candidate_work_from_year_list" v-model="data.work_from_year_list" value="" placeholder="Year">
                                                    </div>

                                                    <div class="form-group col-md-3 select-border exp-div">
                                                        <label class="workpresent-to">To</label>
                                                        <select class="form-control workpresent-to" name="candidate_work_to_month_list" id="candidate_work_to_month_list" v-model="data.work_to_month_list">
                                                            <option value="0">Select any Month</option>
                                                            <option v-for="data in arr_work_to_month_list" :value="data.month_id">@{{ data.month_name}}</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-3 select-border exp-div ">
                                                        <div class="workpresent-to">
                                                            <label>&nbsp;</label>
                                                            <input type="text" class="form-control" name="candidate_work_to_year_list" id="candidate_work_to_year_list" v-model="data.work_to_year_list" value="" placeholder="Year">
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6 exp-div">
                                                        <div class="custom-control custom-checkbox d-inline">
                                                            <input type="checkbox" id="workpresent" name="workpresent"
                                                                class="workpresent custom-control-input">
                                                            <label class="custom-control-label" for="workpresent">Currently Working
                                                                Here</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12 exp-div">
                                                        <label>Description</label>
                                                        <textarea class="form-control desc" rows="4" name="candidate_work_description_list" id="candidate_work_description_list" v-model="data.candidate_work_description_list"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12 mb-0 exp-div">
                                                        <button  class="btn btn-md btn-primary">Update</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--=================================
                    Work & Experience -->
                        <!--=================================
                    Professional Skill -->
                        <div class="user-dashboard-info-box">
                            <div class="dashboard-resume-title d-flex align-items-center">
                                <div class="section-title-02 mb-sm-0">
                                    <h4 class="mb-0">Professional Skills</h4>
                                </div>
                            </div>
                            <div class="collapse show" id="dateposted-11">
                                <div class="bg-light p-3 mt-4">
                                    <form class="form-row align-items-center">
                                        <div class="form-group col-md-6">
                                            <label>Skill</label>
                                            <input type="text" class="form-control" value="Photoshop">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Level</label>
                                            <select class="form-control">
                                                <option>Expert</option>
                                                <option>Good</option>
                                                <option>Average</option>
                                                <option>Poor</option>
                                            </select>
                                        </div>
                                    </form>

                                    <a href="javascript:void(0);" class="add-more-skills form-group col-12"> <i
                                            style="font-size:12px;" class="fa fa-plus"></i> Add More Skills </a> <span
                                        style="display:none;" id="remaining-skills">24</span>

                                </div>
                            </div>
                        </div>
                        <!--=================================
                    Professional Skill -->


                        <div class="user-dashboard-info-box">
                            <div class="dashboard-resume-title d-flex align-items-center">
                                <div class="section-title-02 mb-sm-0">
                                    <h4 class="mb-0">Resume</h4>
                                </div>
                            </div>
                            <div class="cover-photo-contact">
                                <div class="upload-file">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <label class="custom-file-label">Upload Resume</label>
                                    </div>
                                </div>
                            </div>

                            <div class="dashboard-resume-title d-flex align-items-center">
                                <div class="section-title-02 mb-sm-0">
                                    <h4 class="mb-0">Cover Letter</h4>
                                </div>
                            </div>
                            <div class="cover-photo-contact">
                                <div class="upload-file">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <label class="custom-file-label">Upload Cover Letter</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--=================================
                    Awards -->
                        <div class="user-dashboard-info-box">
                            <div class="dashboard-resume-title d-flex align-items-center">
                                <div class="section-title-02 mb-sm-0">
                                    <h4 class="mb-0">Resume Visibility</h4>
                                </div>
                            </div>
                            <div class="collapse show" id="dateposted-15">
                                <div class="bg-light p-3 mt-4">
                                    <form class="form-row">
                                        <div class="form-group col-md-8">
                                            <div class="custom-control custom-radio d-inline">
                                                <input type="radio" id="rstanderd" checked name="resumev"
                                                    class="custom-control-input">
                                                <label class="custom-control-label"
                                                    for="rstanderd"><strong>Standerd</strong>
                                                    <div>I allow Jobers to share my Resume and contact details with
                                                        employers
                                                        and recruiters.</div>
                                                </label>

                                            </div>
                                        </div>
                                        <div class="form-group col-md-10 mt-3 ">
                                            <div class="custom-control custom-radio d-inline">
                                                <input type="radio" id="rhidden" name="resumev"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="rhidden"><strong>Hidden</strong>
                                                    <div>I do not allow Jobers to share my Resume and contact details with
                                                        employers and recruiters.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 mt-3">
                                            <a class="btn btn-md btn-primary" href="#">Save</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--=================================
                    Awards -->
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
                My Resume -->
    </div>

    @push('inline-script')

        <script>
            tinymce.init({

                selector: '.desc',
                menubar: false,
                branding: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor textcolor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table contextmenu paste code help wordcount'
                ],
                toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
            });

        </script>
        <script>
            $('.add-more-course').click(function() {
                var remind = parseInt($('#remaining').text());
                if (remind != 0) {
                    $(this).before(
                        '<div class="form-row align-items-center"><div class="form-group col-md-6 "><input type="text" class="form-control" name=""></div><div class="form-group col-md-5"><input type="text" class="form-control" name=""></div><a href="javascript:void(0);" class="form-group col-md-1 d-block remove"><i class="fa fa-trash-alt text-danger"></i></a></div>'
                    );
                    remind = remind - 1
                    $('#remaining').text(remind);

                } else {
                    //console.log('All added');
                    $('.add-more-course').hide();
                }
            });

            $(document).on('click', '.remove', function() {
                $(this).parent('div').remove();
                var remind = parseInt($('#remaining').text());
                remind = remind + 1
                $('#remaining').text(remind);
                $('.add-more-course').show();
            });

            $(document).ready(function() {
                $('.stillstudy').change(function() {
                    if ($(this).val() == 'Yes') {
                        $('.study-yes-no').hide();
                    } else {
                        $('.study-yes-no').show();
                    }
                });

                $('.labelwork').change(function() {
                    if ($(this).val() == 'Yes') {
                        $('.exp-div').show();
                    } else {
                        $('.exp-div').hide();
                    }
                });

                $('.workpresent').change(function() {
                    if ($(this).is(':checked')) {
                        $('.workpresent-to').hide();
                    } else {
                        $('.workpresent-to').show();
                    }
                });
            });



            $('.add-more-skills').click(function() {
                var skills = parseInt($('#remaining-skills').text());
                if (skills != 0) {
                    $(this).before(
                        '<div class="form-row align-items-center"><div class="form-group col-md-6"><input type="text" class="form-control"></div><div class="form-group col-md-5"><select class="form-control"><option>Expert</option><option>Good</option><option>Average</option><option>Poor</option></select></div><a href="javascript:void(0);" class="form-group col-md-1 d-block sremove"><i class="fa fa-trash-alt text-danger"></i></a></div>'
                    );
                    skills = skills - 1
                    $('#remaining-skills').text(skills);

                } else {
                    //console.log('All added');
                    $('.add-more-skills').hide();
                }
            });

            $(document).on('click', '.sremove', function() {
                $(this).parent('div').remove();
                var skills = parseInt($('#remaining-skills').text());
                skills = skills + 1
                $('#remaining-skills').text(skills);
                $('.add-more-skills').show();
            });

            const app = new Vue({
                el: "#wrapper",
                data() {
                    return {
                        // Education Submit
                        education_level: 0,
                        arr_education_level: [],
                        education_field: 0,
                        arr_education_field: [],
                        country: 0,
                        arr_country: [],
                        city: 0,
                        arr_city: [],
                        month_from: 0,
                        arr_month_from: [],
                        month_to: 0,
                        arr_month_to: [],
                        candidate_institute: '',
                        candidate_study_status: '',
                        candidate_education_from_year: '',
                        candidate_education_to_year: '',
                        candidate_major_one: '',
                        candidate_major_two: '',
                        educationOutput: '',

                        // Work Exprience Submit
                        candidate_work_title: '',
                        candidate_work_company: '',
                        work_city: 0,
                        arr_work_city: [],
                        work_country: 0,
                        arr_work_country: [],
                        work_career: 0,
                        arr_work_career: [],
                        work_type: 0,
                        arr_work_type: [],
                        work_industry: 0,
                        arr_work_industry: [],
                        work_department: 0,
                        arr_work_department: [],
                        work_from_month: 0,
                        arr_work_from_month: [],
                        work_from_year: '',
                        work_to_month: 0,
                        arr_work_to_month: [],
                        work_to_year: '',
                        candidate_work_description: '',
                        experienceOutput: '',
                        arr_get_education_list: [],


                        // Education Update
                        education_level_list: '',
                        arr_education_level_list: [],
                        education_field_list: '',
                        arr_education_field_list: [],
                        education_institution_list: '',
                        education_country_list: '',
                        arr_education_country_list: [],
                        education_city_list: '',
                        arr_education_city_list: [],
                        education_work_from_month_list: '',
                        arr_education_work_from_month_list: [],
                        education_work_from_year_list: '',
                        education_work_to_month_list: '',
                        arr_education_work_to_month_list: [],
                        education_work_to_year_list: '',
                        education_major_list: '',
                        arr_education_major_list: [],
                        arr_get_education_list: [],
                        educationUpdate: '',
                        visible: true,

                        // Work Experience Update
                        candidate_work_title_list: '',
                        candidate_work_company_list: '',
                        work_city_list: 0,
                        arr_work_city_list: [],
                        work_country_list: 0,
                        arr_work_country_list: [],
                        work_career_list: 0,
                        arr_work_career_list: [],
                        work_type_list: 0,
                        arr_work_type_list: [],
                        work_industry_list: 0,
                        arr_work_industry_list: [],
                        work_department_list: 0,
                        arr_work_department_list: [],
                        work_from_month_list: 0,
                        arr_work_from_month_list: [],
                        work_from_year_list: '',
                        work_to_month_list: 0,
                        arr_work_to_month_list: [],
                        work_to_year_list: '',
                        candidate_work_description_list: '',
                        arr_get_work_experience_list: [],
                        experienceUpdate: '',
                        visible_list: true
                    }
                },
                methods: {
                    getEducationLevel: function() {
                        axios.get('api/getEducationLevel').then(function(response) {
                            this.arr_education_level = response.data;
                        }.bind(this));
                    },
                    getEducationField: function() {
                        axios.get('api/getEducationField').then(function(response) {
                            this.arr_education_field = response.data;
                        }.bind(this));
                    },
                    getCountries: function() {
                        axios.get('api/getCountries').then(function(response) {
                            this.arr_country = response.data;
                        }.bind(this));
                    },
                    getCities: function() {
                        axios.get('api/getCitiesList').then(function(response) {
                            this.arr_city = response.data;
                        }.bind(this));
                    },
                    getMonthFrom: function() {
                        axios.get('api/getMonth').then(function(response) {
                            this.arr_month_from = response.data;
                        }.bind(this));
                    },
                    getMonthTo: function() {
                        axios.get('api/getMonth').then(function(response) {
                            this.arr_month_to = response.data;
                        }.bind(this));
                    },
                    resumeEducationSubmit: function() {

                        let currentObj = false;
                        axios.post('dashboard-candidates-resume-education/submit', {
                            resume_education_level: this.education_level,
                            resume_education_field: this.education_field,
                            resume_education_institution: this.candidate_institute,
                            resume_education_country: this.country,
                            resume_education_city: this.city,
                            resume_education_from_month: this.month_from,
                            resume_education_from_year: this.candidate_education_from_year,
                            resume_education_to_month: this.month_to,
                            resume_education_to_year: this.candidate_education_to_year

                        }).then(function (response) {
                            currentObj.educationOutput = response.data;
                        }).then(response => {
                            window.location = response.data.redirect;
                        }).catch(function (error) {
                            currentObj.educationOutput = error;
                        });
                    },
                    getWorkCountries: function() {
                        axios.get('api/getCountries').then(function(response) {
                            this.arr_work_country = response.data;
                        }.bind(this));
                    },
                    getWorkCities: function() {
                        axios.get('api/getCitiesList').then(function(response) {
                            this.arr_work_city = response.data;
                        }.bind(this));
                    },
                    getCareerLevel: function() {
                        axios.get('api/getCareerLevel').then(function(response) {
                            this.arr_work_career = response.data;
                        }.bind(this));
                    },
                    getJobType: function() {
                        axios.get('api/getJobType').then(function(response) {
                            this.arr_work_type = response.data;
                        }.bind(this));
                    },
                    getJobIndustry: function() {
                        axios.get('api/getJobIndustry').then(function(response) {
                            this.arr_work_industry = response.data;
                        }.bind(this));
                    },
                    getJobDepartment: function() {
                        axios.get('api/getJobIndustry').then(function(response) {
                            this.arr_work_department = response.data;
                        }.bind(this));
                    },
                    getWorkMonthFrom: function() {
                        axios.get('api/getMonth').then(function(response) {
                            this.arr_work_from_month = response.data;
                        }.bind(this));
                    },
                    getWorkMonthTo: function() {
                        axios.get('api/getMonth').then(function(response) {
                            this.arr_work_to_month = response.data;
                        }.bind(this));
                    },
                    resumeWorkExperienceSubmit: function() {

                        let currentObj = false;
                        axios.post('dashboard-candidates-resume-experience/submit', {
                            resume_experience_job_title: this.candidate_work_title,
                            resume_experience_company: this.candidate_work_company,
                            resume_experience_country: this.work_country,
                            resume_experience_city: this.work_city,
                            resume_experience_career_level: this.work_career,
                            resume_experience_job_type: this.work_type,
                            resume_experience_industry: this.work_industry,
                            resume_experience_department: this.work_department,
                            resume_experience_from_month: this.work_from_month,
                            resume_experience_from_year: this.work_from_year,
                            resume_experience_to_month: this.work_to_month,
                            resume_experience_to_year: this.work_to_year,
                            resume_experience_description: this.candidate_work_description

                        }).then(function (response) {
                            currentObj.experienceOutput = response.data;
                        }).then(response => {
                            window.location = response.data.redirect;
                        }).catch(function (error) {
                            currentObj.experienceOutput = error;
                        });
                    },
                    getEducationList: function() {
                        axios.get('/dashboard-candidates-resume-education-list/candidate-id=1').then(function(response) {
                            this.arr_get_education_list = response.data.map(arr_get_education_list => {
                                arr_get_education_list.visible = true;
                                arr_get_education_list.education_level_list = arr_get_education_list.resume_education_level;
                                arr_get_education_list.education_field_list = arr_get_education_list.resume_education_field;
                                arr_get_education_list.education_institution_list = arr_get_education_list.resume_education_institution;
                                arr_get_education_list.education_country_list = arr_get_education_list.resume_education_country;
                                arr_get_education_list.education_city_list = arr_get_education_list.resume_education_city;
                                arr_get_education_list.education_work_from_month_list = arr_get_education_list.resume_education_from_month;
                                arr_get_education_list.education_work_from_year_list = arr_get_education_list.resume_education_from_year;
                                arr_get_education_list.education_work_to_month_list = arr_get_education_list.resume_education_to_month;
                                arr_get_education_list.education_work_to_year_list = arr_get_education_list.resume_education_to_year;
                                return arr_get_education_list;
                            })
                        }.bind(this));
                    },
                    getEducationLevelList: function() {
                        axios.get('api/getEducationLevel').then(function(response) {
                            this.arr_education_level_list = response.data;
                        }.bind(this));
                    },
                    getEducationFieldList: function() {
                        axios.get('api/getEducationField').then(function(response) {
                            this.arr_education_field_list = response.data;
                        }.bind(this));
                    },
                    getEducationCountryList: function() {
                        axios.get('api/getCountries').then(function(response) {
                            this.arr_education_country_list = response.data;
                        }.bind(this));
                    },
                    getEducationCityList: function() {
                        axios.get('api/getCitiesList').then(function(response) {
                            this.arr_education_city_list = response.data;
                        }.bind(this));
                    },
                    getEducationWorkMonthFrom: function() {
                        axios.get('api/getMonth').then(function(response) {
                            this.arr_education_work_from_month_list = response.data;
                        }.bind(this));
                    },
                    getEducationWorkMonthTo: function() {
                        axios.get('api/getMonth').then(function(response) {
                            this.arr_education_work_to_month_list = response.data;
                        }.bind(this));
                    },
                    resumeEducationUpdate: function() {

                        let currentObj = false;
                        axios.patch('dashboard-candidates-resume-experience/update', {
                            resume_education_level: this.education_level_list,
                            resume_education_field: this.education_field_list,
                            resume_education_institution: this.education_institution_list,
                            resume_education_country: this.education_country_list,
                            resume_education_city: this.education_city_list,
                            resume_education_from_month: this.education_work_from_month_list,
                            resume_education_from_year: this.education_work_from_year_list,
                            resume_education_to_month: this.education_work_to_month_list,
                            resume_education_to_year: this.education_work_to_year_list

                        }).then(function (response) {
                            currentObj.educationUpdate = response.data;
                        }).then(response => {
                            window.location = response.data.redirect;
                        }).catch(function (error) {
                            currentObj.educationUpdate = error;
                        });
                    },
                    getWorkExperienceList: function() {
                        axios.get('/dashboard-candidates-resume-experience-list/candidate-id=1').then(function(response) {
                            this.arr_get_work_experience_list = response.data.map(arr_get_work_experience_list => {
                                arr_get_work_experience_list.visible_list = true;
                                arr_get_work_experience_list.candidate_work_title_list = arr_get_work_experience_list.resume_experience_job_title;
                                arr_get_work_experience_list.candidate_work_company_list = arr_get_work_experience_list.resume_experience_company;
                                arr_get_work_experience_list.work_country_list = arr_get_work_experience_list.resume_experience_country;
                                arr_get_work_experience_list.work_city_list = arr_get_work_experience_list.resume_experience_city;
                                arr_get_work_experience_list.work_career_list = arr_get_work_experience_list.resume_experience_career_level;
                                arr_get_work_experience_list.work_type_list = arr_get_work_experience_list.resume_experience_job_type;
                                arr_get_work_experience_list.work_industry_list = arr_get_work_experience_list.resume_experience_industry;
                                arr_get_work_experience_list.work_department_list = arr_get_work_experience_list.resume_experience_department;
                                arr_get_work_experience_list.work_from_month_list = arr_get_work_experience_list.resume_experience_from_month;
                                arr_get_work_experience_list.work_from_year_list = arr_get_work_experience_list.resume_experience_from_year;
                                arr_get_work_experience_list.work_to_month_list = arr_get_work_experience_list.resume_experience_to_month;
                                arr_get_work_experience_list.work_to_year_list = arr_get_work_experience_list.resume_experience_to_year;
                                arr_get_work_experience_list.candidate_work_description_list = arr_get_work_experience_list.resume_experience_description;
                                return arr_get_work_experience_list;
                            })
                        }.bind(this));
                    },
                    getExperienceWorkCountries: function() {
                        axios.get('api/getCountries').then(function(response) {
                            this.arr_work_country_list = response.data;
                        }.bind(this));
                    },
                    getExperienceWorkCities: function() {
                        axios.get('api/getCitiesList').then(function(response) {
                            this.arr_work_city_list = response.data;
                        }.bind(this));
                    },
                    getExperienceCareerLevel: function() {
                        axios.get('api/getCareerLevel').then(function(response) {
                            this.arr_work_career_list = response.data;
                        }.bind(this));
                    },
                    getExperienceJobType: function() {
                        axios.get('api/getJobType').then(function(response) {
                            this.arr_work_type_list = response.data;
                        }.bind(this));
                    },
                    getExperienceJobIndustry: function() {
                        axios.get('api/getJobIndustry').then(function(response) {
                            this.arr_work_industry_list = response.data;
                        }.bind(this));
                    },
                    getExperienceJobDepartment: function() {
                        axios.get('api/getJobIndustry').then(function(response) {
                            this.arr_work_department_list = response.data;
                        }.bind(this));
                    },
                    getExperienceWorkMonthFrom: function() {
                        axios.get('api/getMonth').then(function(response) {
                            this.arr_work_from_month_list = response.data;
                        }.bind(this));
                    },
                    getExperienceWorkMonthTo: function() {
                        axios.get('api/getMonth').then(function(response) {
                            this.arr_work_to_month_list = response.data;
                        }.bind(this));
                    }
                },
                created: function() {
                    this.getEducationLevel();
                    this.getEducationField();
                    this.getCountries();
                    this.getCities();
                    this.getMonthFrom();
                    this.getMonthTo();
                    this.getWorkCountries();
                    this.getWorkCities();
                    this.getCareerLevel();
                    this.getJobType();
                    this.getJobIndustry();
                    this.getJobDepartment();
                    this.getWorkMonthFrom();
                    this.getWorkMonthTo();
                    this.getEducationList();
                    this.getEducationLevelList();
                    this.getEducationFieldList();
                    this.getEducationCountryList();
                    this.getEducationCityList();
                    this.getEducationWorkMonthFrom();
                    this.getEducationWorkMonthTo();
                    this.getWorkExperienceList();
                    this.getExperienceWorkCountries();
                    this.getExperienceWorkCities();
                    this.getExperienceCareerLevel();
                    this.getExperienceJobType();
                    this.getExperienceJobIndustry();
                    this.getExperienceJobDepartment();
                    this.getExperienceWorkMonthFrom();
                    this.getExperienceWorkMonthTo();
                }
            });

        </script>

    @endpush

@endsection
